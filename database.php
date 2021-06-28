<?php
	class database{
		static function connect(){
			$conn = new PDO("mysql:host=localhost;dbname=jobs;charset=utf8mb4", "root", ""); 
			if(!$conn){
				die("Connection couldn't be established."); 
			}else{
				return $conn; 
			}
		}
	}
