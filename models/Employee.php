<?php

  	require_once "Conection.php";
  
  class Employee extends Conection{

  	public static function new($table, $Departament, $LastName, $MiddleName, $FirstName){

  		$stmt = Conection::connect()->prepare("INSERT INTO $table( Departament, LastName, MiddleName, FirstName, Status) VALUES (:Departament, :LastName, :MiddleName, :FirstName, 'A')");

  			$stmt -> bindParam(":Departament", $Departament, PDO::PARAM_STR);
  			$stmt -> bindParam(":LastName", $LastName, PDO::PARAM_STR);
  			$stmt -> bindParam(":MiddleName", $MiddleName, PDO::PARAM_STR);
  			$stmt -> bindParam(":FirstName", $FirstName, PDO::PARAM_STR);

  			if($stmt -> execute()){

  				return "ok";
  			}else{
  				return "false";
  			}

  			$stmt -> close();

  			$stmt = null;
  	}

  	public static function search($table) {

  		$stmt = Conection::connect()->prepare("SELECT * FROM $table");

  		$stmt->execute();

        return $stmt -> fetchAll();

        $stmt->close();

        $stmt = null;
  	}
  }