<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="assets/libraries/bootstrap.min.css">
	<link rel="stylesheet" href="assets/icons/style.css">
	<link rel="stylesheet" href="assets/css/styles.css">

	<!-- dataTables -->

	<link rel="stylesheet" href="assets/libraries/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="assets/libraries/scroller.bootstrap4.min.css">
	
	<title>Document</title>
</head>
<body>

     <?php if(isset($_GET["route"]) && $_GET["route"] == "searchUser" || $_GET["route"] == "searchEmployee") {

  	            include "views/structure/layout.php";
  	            include 'views/'.$_GET["route"].'.php';

    }else {

         include 'views/login.php';

  	} ?>    



</body>
</html>

<script src="assets/libraries/jquery.min.js"></script>
<script src="assets/libraries/sweetalert.min.js "></script>
<script src="assets/libraries/headroom.min.js"></script>
<script src="assets/libraries/popper.min.js"></script>
<script src="assets/libraries/bootstrap.min.js"></script>

<!-- dataTables -->

<script src="assets/libraries/jquery.dataTables.min.js"></script>
<script src="assets/libraries/dataTables.bootstrap4.min.js"></script>
<script src="assets/libraries/dataTables.scroller.min.js"></script>

<script src="assets/js/dataTables.js"></script>
<script src="assets/js/layout.js"></script>



