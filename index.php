<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>DVL Code Test</title>
  	<link rel="stylesheet" href="css/bootstrap-css/bootstrap.css">
  	<link rel="stylesheet" href="css/index.css">
  	<link rel="stylesheet" href="css/sections/header.css">
  	<link rel="stylesheet" href="css/sections/desktop-nav.css">
  	<link rel="stylesheet" href="css/sections/services.css">
  	<link rel="stylesheet" href="css/sections/footer.css">
  </head>
  <body>
    <?php include('sections/header.php')?>
    <?php include('sections/desktop-nav.php')?>
    <?php include('sections/services.php')?>
    <?php include('sections/footer.php')?>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    $(".navbar-toggle").click(function(){
      $(this).parent(".navbar-header").toggleClass("mobile-navbar");
    });
  </script>
  <script src="js/bootstrap-js/bootstrap.js"></script>
</html>