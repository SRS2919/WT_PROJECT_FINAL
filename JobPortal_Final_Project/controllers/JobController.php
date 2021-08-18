<?php
	function getalluser(){
		$query = "select * from users";
		$rs = get($query);
		return $rs;
	}