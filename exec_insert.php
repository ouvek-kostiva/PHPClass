<?php
$db = Database::connDB();

$name = $_POST['name'];
$date = $_POST['date'];
$number = $_POST['number'];

$stmt = $db ->prepare("INSERT INTO student (number,name,date) VALUES (:number,:name,:date)");
$rs = $stmt ->execute(array(':name' => $name, ':date' => $date, ':number' => $number,));
if($rs > 0){
    echo "Success!";
}else{
    echo "Something went wrong :(";
}

?>

<form action="index.php" method="post">
    <button type="submit" name="state" value="show">顯示</button>
</form>
