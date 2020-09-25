<?php
  
  require_once "controllers/TempleteController.php";
  require_once "controllers/LoginController.php";
  require_once "models/Login.php";
  require_once "controllers/EmployeeController.php";
  require_once "models/Employee.php";

  $templete = new TempleteController();

  $templete-> showTemplete();

