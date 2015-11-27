<?php
  require_once __DIR__.'/my-mvc/BootstrapMyMvc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <base href="<?php echo $_ENV['page']['assets_url']; ?>" target="_blank" />
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/bootstrap/js/html5shiv.min.js"></script>
      <script src="assets/bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="">


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/jquery/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
