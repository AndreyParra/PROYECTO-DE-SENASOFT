<?php

  require_once "Conection.php";

  class Login extends Conection{
     
     public static function signIn($email, $password, $table) {

     $stmt = Conection::connect()->prepare("SELECT * FROM $table WHERE user = :$user AND password = :$password AND status = 'A' ");
       
     }
  }