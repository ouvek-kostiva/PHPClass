<?php
    $db = Database::connDB();
    
    $result = $db->query("SELECT * FROM student");//查詢
    
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Show</title>
    </head>
    <body>
        <form action="index.php" method="post">
        <button type="submit" name="state" value="insert">新增</button>
        <button type="submit" name="state" value="update">修改</button>
        <button type="submit" name="state" value="delete">刪除</button>
        <?php
        foreach ($result ->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $text = "";
            $text .= "<table>";
            $text .= "<tr>";
            $text .= "<td><input type='radio' name='id' value=".$row['id'].">"  . $row['id'] . "<td/><td>" . $row['number'] . "<td/><td>" . $row['name'] . "<td/><td>" . $row['date'] . "<td/>";
            $text .= "<tr/>";
            
            echo $text;
        }
     
        
        ?>
            </form>
    </body>
</html>
