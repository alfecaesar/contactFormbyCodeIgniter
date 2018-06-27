<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$_SESSION['base_url'] = base_url();

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form Success - CodeIgniter</title>
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>assets/css/foundation.css">
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>assets/css/app.css">
</head>
<body>
<div class="grid-container">
  <div class="grid-x grid-padding-x">
    <div class="large-12 cell text-center">
      <h1>Contact Form</h1>
      <h3>Your form was successfully submitted!</h3>
      
      <p><?php echo anchor('form', 'Try it again!'); ?></p>
    </div>
  </div>
</div>
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/jquery.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/what-input.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/foundation.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/app.js"></script>
</body>
</html>
