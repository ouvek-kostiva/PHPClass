<?php
    setcookie('linkStart', 1, time()+60*5);
?>
<form action='index.php' method='post'>
Username: <input type='text' name='username'>
Password <input type='password' name='passw'>
<button type='submit' value='exec_login' name='state'>登入</button>
</form>

