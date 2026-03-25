<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
set_time_limit(0);
ini_set('memory_limit', '512M');

$ROOT = realpath($_SERVER['DOCUMENT_ROOT']); 
$FOUND = [];

/**
 * LOGIK DETEKSI (Sesuai Payload Lu & Tambahan)
 */
function checkBackdoor($file_location) {
    $contents = @file_get_contents($file_location);
    if (!$contents || strlen($contents) == 0) return false;

    $suspect = false;
    $reasons = [];

    // Pola Spesifik Payload $z lu
    if (preg_match('/(\$z\s*\.\=){5,}/i', $contents)) {
        $suspect = true; $reasons[] = "Pattern: Variable Concatenation (\$z)";
    }
    if (strpos($contents, 'PD9w') !== false) {
        $suspect = true; $reasons[] = "Signature: Base64 PHP Start";
    }

    // Pola Umum Backdoor
    $pattern = "#exec\(|gzinflate\(|system\(|passthru\(|shell_exec\(|eval\(|base64_decode#i";
    if (preg_match($pattern, $contents)) {
        $suspect = true; $reasons[] = "Function: Dangerous Call Found";
    }
    if (preg_match('/\bgoto\b/i', $contents)) {
        $suspect = true; $reasons[] = "Obfuscation: GOTO usage";
    }
    if (preg_match('/[A-Za-z0-9\/\+=]{300,}/', $contents)) {
        $suspect = true; $reasons[] = "Obfuscation: Long Encoded String";
    }

    // Ambil Preview (1000 karakter pertama)
    $preview = htmlspecialchars(substr($contents, 0, 1000)) . "...";

    return $suspect ? ['reasons' => $reasons, 'preview' => $preview] : false;
}

function run_scanner($dir) {
    global $FOUND;
    if (!is_readable($dir)) @chmod($dir, 0755);
    $items = @scandir($dir);
    if (!$items) return;

    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;

        if (is_dir($path)) {
            run_scanner($path);
        } else {
            if (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
                if (!is_readable($path)) @chmod($path, 0644);
                $res = checkBackdoor($path);
                if ($res) {
                    $FOUND[] = array_merge(['file' => $path, 'perm' => substr(sprintf('%o', fileperms($path)), -4)], $res);
                }
            }
        }
    }
}

// ACTION: DELETE
if (isset($_GET['del'])) {
    $f = realpath(base64_decode($_GET['del']));
    if ($f && strpos($f, $ROOT) === 0) {
        @chmod($f, 0666);
        if(unlink($f)) { header("Location: ?status=deleted"); exit; }
    }
}

// TAMPILAN
echo "<style>
    body { background: #0d0d0d; color: #00ff41; font-family: 'Courier New', monospace; padding: 20px; }
    .card { background: #1a1a1a; border: 1px solid #333; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
    .path { color: #fff; font-size: 14px; margin-bottom: 5px; display: block; overflow-wrap: break-word; }
    .reason { background: #441111; color: #ff9999; padding: 2px 8px; border-radius: 3px; font-size: 12px; margin-right: 5px; }
    .preview-box { background: #000; color: #888; padding: 10px; border: 1px inset #222; font-size: 11px; overflow: auto; max-height: 150px; margin-top: 10px; white-space: pre-wrap; }
    .btn-del { background: #f00; color: #fff; text-decoration: none; padding: 5px 10px; font-size: 12px; font-weight: bold; border-radius: 3px; display: inline-block; margin-top: 10px; }
    .btn-del:hover { background: #b00; }
    hr { border: 0; border-top: 1px solid #333; margin: 20px 0; }
</style>";

echo "<h2>ðŸš€ MALWARE SCANNER + PREVIEW</h2>";
echo "Root: $ROOT <br><br>";

run_scanner($ROOT);

echo "Found: " . count($FOUND) . " Suspicious Files<hr>";

foreach ($FOUND as $item) {
    $enc = base64_encode($item['file']);
    echo "<div class='card'>";
    echo "<span class='path'><b>FILE:</b> {$item['file']} <b>({$item['perm']})</b></span>";
    
    foreach ($item['reasons'] as $r) {
        echo "<span class='reason'>$r</span>";
    }

    echo "<div class='preview-box'>{$item['preview']}</div>";
    
    echo "<a href='?del=$enc' class='btn-del' onclick='return confirm(\"HAPUS FILE INI?\")'>HAPUS SEKARANG</a>";
    echo "</div>";
}
