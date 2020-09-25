<?php

  class Conection{

  	public static function connect(){

  		$dbname = "mysql:host=localhost;dbname=room_911";
  		$user = "root";
  		$pass = "root";

  		try{

  			$con = new PDO($dbname, $user, $pass);

  			$con->exec("set names utf8");

  			return $con;
  		
  		}catch(PDOException $e) {

            echo "connection failed". $e->getMessage();
  		}
  	}
  }