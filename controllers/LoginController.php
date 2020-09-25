<?php

  class LoginController{

  	public static function signIn(){

  		if (isset($_POST["email"])) {
  			
  			$email = $_POST["email"];

  			$password = $_POST["password"];

  			$answer = Login::signIn($email, $password);

  		}
  	}
  }