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
<title>Contact Form - CodeIgniter</title>
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>assets/css/foundation.css">
<link rel="stylesheet" href="<?php echo $_SESSION['base_url']; ?>assets/css/app.css">
</head>
<body>
<div class="grid-container">
  <?php echo form_open('form'); ?>
  <div class="grid-x grid-padding-x">
    <div class="large-12 cell text-center">
      <h1>Contact Form</h1>
      <p>Please fill up the form below.</p>
      
      <hr />
    </div>
    
    <div class="large-12 cell text-left">
    	<?php echo validation_errors('<div class="errorbox">', '</div>'); ?>
    </div>
    
    <div class="large-6 cell">
    	<input type="text" name="fname" placeholder="First Name *">
    </div>
    <div class="large-6 cell">
    	<input type="text" name="lname" placeholder="Last Name *">
    </div>
    <div class="large-6 cell">
    	<input type="text" name="email" placeholder="Email Address *">
    </div>
    <div class="large-6 cell">
    	<input type="text" name="phonenum" placeholder="Phone Number *">
    </div>
    <div class="large-6 cell">
    	<input type="text" name="company" placeholder="Company">
    </div>
    <div class="large-6 cell">
    	<input type="text" name="website" placeholder="Website URL">
    </div>
    <div class="large-12 cell">
    	<textarea name="message" placeholder="Message / Comments *"></textarea>
    </div>
    
    <div class="large-12 cell text-center">
    	<input type="submit" value="Send Message">
    </div> 
    
  </div>
  </form>
</div>
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/jquery.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/what-input.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/vendor/foundation.js"></script> 
<script src="<?php echo $_SESSION['base_url']; ?>assets/js/app.js"></script>
</body>
</html>
