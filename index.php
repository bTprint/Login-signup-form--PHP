<?php
define('CSS_PATH', 'css/'); //define CSS path 
define('JS_PATH', 'template/js/'); //define JavaScript path 
include "functions/header.php";
include "functions/body.php";
include "functions/footer.php";

?>
<!DOCTYPE html> 
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>style.css">
<script type="text/javascript" src="<?php echo JS_PATH; ?>main.js"></script>
</head>
<body>
    <a href="/views/login.php">Logout</a>
</body>
</html>
