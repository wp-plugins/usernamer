<div class="wrap">
	<h2><?php _e('Rename user', USERNAMER_DOMAIN); ?></h2>
	<form action="users.php" method="get"><input type="hidden" name="page" value="usernamer/process.php" />
	Select user you want to rename:<br />
	<select name="username" style="width: 333px;">
		<?php
      $result = mysql_query('SELECT * FROM `wp_users` WHERE `user_login` <> \'admin\' ORDER BY `user_login`;');
      for ($i=0; $i < mysql_num_rows($result); $i++) {
        $row = mysql_fetch_assoc($result);
        echo("<option value=\"{$row['user_nicename']}\">{$row['user_login']}</option>\n");
      }
    ?>
	</select><br />
	<small><i>admin</i> cannot be renamed because of compatibility reasons.</small><br /><br />Enter new name:<br />
	<input type="text" name="newname" style="width: 333px;" value="New User" />
	<input type="submit" value="Rename" />
</form>
</div>
