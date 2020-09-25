<?php

  class EmployeeController{

  	public static function new(){
  		
  		if (isset($_POST["Departament"])) {

  			$Departament = $_POST["Departament"];
  			$LastName = $_POST["LastName"];
            $MiddleName = $_POST["MiddleName"];
            $FirstName = $_POST["FirstName"];

            $table="Employee";

            $answer = Employee::new($table, $Departament, $LastName, $MiddleName, $FirstName);

  			

  		}

  	}


    public static function search($table){

  	 $answer = Empleado::search($table);
      
     return $answer;
   }
  }