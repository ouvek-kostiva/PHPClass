<?php
$username = $_POST['username'];
$password = $_POST['passw'];

if(!empty($username)){
        setcookie('linkStart', 2, time()+60*5);
        echo $_COOKIE['linkStart'];
}else{
    echo 'sorrrrrrrry';
}

?>

<form action="index.php" method="post">
    <button type="submit" name="state" value="show">顯示</button>
</form>