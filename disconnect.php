<?php
function disconnect()
{
	setcookie("user", "", time() - 3600);
	setcookie("pannier", "", time() - 3600);
	setcookie("root", "false", time() - 3600);
}
?>