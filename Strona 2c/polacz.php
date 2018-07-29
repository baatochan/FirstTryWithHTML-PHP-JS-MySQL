<?php
mysql_connect(DB_HOST, DB_USERNAME , DB_PASSWORD);
mysql_select_db(DB_NAME);
mysql_query("SET CHARSET utf8");
mysql_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`");
?>
