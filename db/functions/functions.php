<?php

 function showCat($tag = NULL){
	if (!isset($tag))
	{

	}
	else
	{
	$sql = "SELECT *
			FROM
				categories
			WHERE
				tag = " . $tag;
	}
	$result = mysql_query($sql);
 }

function login{
	$errors = array();

	if (!isset($_POST['username'])) {
		$errors[] = 'O Nome'
	}
}

?>