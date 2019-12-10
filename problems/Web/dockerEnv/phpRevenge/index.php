
<?php
error_reporting(E_ALL & ~E_NOTICE);
$user = $_GET["user"];
$file = $_GET["file"];
$pass = $_GET["pass"];
 
if(isset($user)&&(file_get_contents($user,'r')==="admin")){
    echo "hello admin in nuist!<br>";
    if(preg_match("/f1a9/",$file)){
        exit();
    }else{
        include($file); //class.php
        $pass = unserialize($pass);
        echo $pass;
    }
}else{
    echo "my dear nuister , you are not admin ! I cant give you flag ";
}
 
?>
 
<!--
$user = $_GET["user"];
$file = $_GET["file"];
$pass = $_GET["pass"];
 
if(isset($user)&&(file_get_contents($user,'r')==="admin")){
    echo "hello admin in nuist!<br>";
    include($file); //class.php
}else{
    echo "my dear nuister , you are not admin ! I cant give you flag ";
}
 -->
