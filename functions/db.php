<?php

	function dbcon(){
		$con=new mysqli("localhost","root","","php_pos");
		return $con;
	}