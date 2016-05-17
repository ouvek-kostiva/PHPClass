<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db = Database::connDB();

?>

<html>
    <head>
        <title>Insert</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <form action='index.php' method='post'>
            Name: <input type='text' name='name'>
            Date: <input type='text' name='date'>
            Number: <input type='text' name='number'>
            <button type='submit' value='exec_insert' name='state'>送出</button>

        </form><br/>
    </body>
</html>