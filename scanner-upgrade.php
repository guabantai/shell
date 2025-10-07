<?php
set_time_limit(0);
error_reporting(0);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
for($i = 0; $i < ob_get_level(); $i++) { ob_end_flush(); }
ob_implicit_flush(1);

$path = getcwd();
if(isset($_GET['dir'])){
    $path = $_GET['dir'];
}

if(isset($_GET['kill'])){
    unlink(__FILE__);
}

echo '<link href="https://rasenmedia.my.id/assets/css/bootstrap-dark.css" id="bootstrap-style" rel="stylesheet" type="text/css" />';
echo '<link href="https://rasenmedia.my.id/assets/css/all.min.css" rel="stylesheet" type="text/css">';
echo '<link href="https://rasenmedia.my.id/assets/css/app-dark.css" id="app-style" rel="stylesheet" type="text/css">';
echo '<div class="page-content">';
echo '<div class="container-fluid">  <div class="row d-flex justify-content-center">';
echo '<div class="col-12">';
echo '<div class="card">';
echo '<h5 class="card-header border-bottom text-uppercase"><center>SHELL SCANNER + ADVANCED OBFUSCATION DETECTOR</center></h5>';
echo '<div class="card-body">';
echo '<div class="alert bg-primary bg-gradient text-dark d-flex align-items-center" role="alert">';
echo '<i class="bx bx-info-circle fs-2 me-2"></i><center>This scanner finds dangerous PHP functions, hardcoded IPs, and obfuscation patterns (goto, hex, base64, dynamic funcs).</center></div>';
echo "<a href='?kill'><font color='green'>[Self Delete]</font></a><br>";
echo '<form action="" method="get"><input class="form-control" type="text" name="dir" value="'.$path.'" style="width: 900px;"><br><input class="btn btn-primary bg-gradient waves-effect waves-light me-1" type="submit" value="Scanner"></form><br>';

echo "CURRENT DIR: <font color='green'>$path</font><br>";

if(isset($_GET['delete'])){
    unlink($_GET['delete']);
    $status = "<font color='red'>FAILED</font>";
    if(!file_exists($_GET['delete'])){
        $status = "<font color='green'>Success</font>";
    }
    echo "TRY TO DELETE: ".$_GET['delete']." $status <br>";exit;
}

scanBackdoor($path);

function save($fname,$value){
    $file = fopen($fname, "a");
    fwrite($file, $value);
    fclose($file);
}

function checkBackdoor($file_location){
    global $path;
    $patern = "#exec\(|gzinflate\(|file_put_contents\(|file_get_contents\(|system\(|passthru\(|shell_exec\(|move_uploaded_file\(|eval\(|base64#";
    $contents = @file_get_contents($file_location);
    if(strlen($contents) > 0){
        $suspect = false;
        $reason = [];

        // Cek fungsi berbahaya
        if(preg_match($patern, strtolower($contents))){
            $suspect = true;
            $reason[] = "Dangerous function found";
        }

        // Cek IP hardcoded publik
        if(preg_match_all('/\b(?:\d{1,3}\.){3}\d{1,3}\b/', $contents, $matches)){
            $ips = array_filter($matches[0], function($ip){
                return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
            });
            if(!empty($ips)){
                $suspect = true;
                $reason[] = "Hardcoded IP: ".implode(", ", $ips);
            }
        }

        // Cek base64 panjang
        if(preg_match('/base64_decode\s*\(\s*[\'"][A-Za-z0-9\/\+=]{100,}[\'"]\s*\)/i', $contents)){
            $suspect = true;
            $reason[] = "Obfuscation: base64_decode with long string";
        }

        // Cek eval dengan gzinflate/gzuncompress
        if(preg_match('/eval\s*\(\s*(gzinflate|gzuncompress|str_rot13|base64_decode)/i', $contents)){
            $suspect = true;
            $reason[] = "Obfuscation: eval with encoded payload";
        }

        // Cek string encoded panjang
        if(preg_match('/[A-Za-z0-9\/\+=]{300,}/', $contents)){
            $suspect = true;
            $reason[] = "Obfuscation: suspicious long encoded string";
        }

        // Cek banyak chr()
        if(substr_count($contents, "chr(") > 10){
            $suspect = true;
            $reason[] = "Obfuscation: multiple chr() usage";
        }

        // Cek penggunaan goto
        if(preg_match('/\bgoto\b/i', $contents)){
            $suspect = true;
            $reason[] = "Obfuscation: suspicious use of goto";
        }

        // Cek banyak hex \x..
        if(preg_match_all('/\\\\x[0-9A-Fa-f]{2}/', $contents, $m) && count($m[0]) > 10){
            $suspect = true;
            $reason[] = "Obfuscation: multiple hex-encoded strings";
        }

        // Cek fungsi yang disusun dari concat
        if(preg_match('/"(\\\\x[0-9A-Fa-f]{2}|[a-z])+"\s*\./i', $contents)){
            $suspect = true;
            $reason[] = "Obfuscation: dynamic function construction";
        }

        // Cek variable function call
        if(preg_match('/\$\w+\s*\(/', $contents)){
            $suspect = true;
            $reason[] = "Suspicious variable function call";
        }

        if($suspect){
            echo "[+] Suspect file -> <font color='black'>$file_location</font> ";
            echo "<a href='?delete=$file_location&dir=$path'><font class='btn btn-primary bg-gradient waves-effect waves-light me-1'>[DELETE]</font></a><br>";
            echo "<b>Reason:</b> ".implode(" | ", $reason)."<br>";
            save("wop.txt","$file_location\n");
            echo '<textarea class="form-control" name="content" cols="70" rows="15" style="height:550px;">'.htmlspecialchars(substr($contents,0,2000)).'</textarea><br><br>';
        }
    }   
}

function scanBackdoor($current_dir){
    if(is_readable($current_dir)){
        $dir_location = scandir($current_dir);
        foreach ($dir_location as $file) {
            if($file === "." || $file === ".."){
                continue;
            }
            $file_location = str_replace("//", "/",$current_dir.'/'.$file);
            $nFile = substr($file, -4, 4);
            if($nFile == ".php"){
                checkBackdoor($file_location);
            } else if(is_dir($file_location)){
                scanBackdoor($file_location);
            }
        }
    }
}
?>
