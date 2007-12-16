<?
$name = $_GET['username']; $newname= $_GET['newname'];
if (empty($name) || empty($newname)) die('<div style="font-size: 18px; font-weight: bold;">Some data is missing!!!</div>');

$result = mysql_query('SELECT `user_login` FROM `wp_users` WHERE `user_nicename`=\''.$name.'\' LIMIT 1;');
$result = mysql_fetch_assoc($result);
mysql_query('UPDATE `wp_users` SET `user_login`=\''.$newname.'\' WHERE `user_nicename`=\''.$name.'\';');
$name = $result['user_login'];
?>

    <div style="text-align: center; background-color: white; position: absolute; top: 50px; left: 0px; width: 100%; height: 700px; padding-top: 50px;">User <b><? echo($name); ?></b> has been renamed to <b><? echo($newname); ?></b>.<br /><br /><form action="users.php"><input type="submit" value="User Management" /></form></small></div>
