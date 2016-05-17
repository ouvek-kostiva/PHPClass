<?php
$db = Database::connDB();

$id = $_POST['id'];

$sql = "DELETE FROM student WHERE id = '$id' ";
$resp = $db ->exec("$sql");

if($resp > 0){
            echo "Delete Successful";
        }else{
            echo "Error";
        }
        
?>

<form action="index.php" method="post">
    <button type="submit" name="state" value="show">顯示</button>
</form>