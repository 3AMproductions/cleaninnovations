<?php
	if(isset($_POST['submit'])){
	  require_once('mail.php');
		$sent = mail_sent($_POST);
	}
?>
<?php include_once('nav.inc'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Clean Innovations</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="indexcss.css" type="text/css" media="screen" />
</head>

<body>

<div id="container">

<div id="logo">
	<p class="one">Newly renamed Columbus Janitor Supply...</p>
  <p class="two">...our new name says it all!</p>
	<a href="index.php"><img src="images/logo.gif" alt="Clean Innovations" /></a>
</div>

<div id="header">
  <p>An alliance strategy with both global and community partnerships that brings innovation and knowledge for a cleaner invironment</p>
</div>

<?php echo menu($_SERVER['PHP_SELF']); ?>

<div id="content">
	<h2>Contact Us</h2>
  <?php
		  if(isset($sent)){
			  if($sent){
				  echo '<h3>Thank you for your message</h3><p>We appreciate your comments and we will be sure to get back to you as soon as we can.</p>';
				}
				else{
				  echo "<h3>We're sorry</h3><p>There was an error processing your request. Please try to contact us again with this form a little later.</p>";
				}
			}
			else{
    	  echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">'."\n";
	?>
  <p class="contact">Do you have any comments, questions or concerns? Just send us an e-mail and we'll get back to you as soon as we can. Thank you for your interest.</p>
	<fieldset>
		<!--<legend >Contact Information</legend>-->
		<div class="clear"><label for="name" >Your Name:</label><input id="name" name="name" type="text" /></div>
    <div class="clear"><label for="email">Your Email Address:</label><input id="email" name="email" type="text" /></div>
    <div class="clear"><label for="misc">Your Comments:</label><textarea id="misc" name="misc" rows="8" cols="25"></textarea></div>
  </fieldset>
  <fieldset>
    <div class="clear"><input id="submit" name="submit" value="Submit" type="submit" /></div>
  </fieldset>
  </form>
  <?php } ?>
</div><!--content-->

<div id="bottom">
  <a href="#">a J6 collaboration</a>
</div><!--bottom-->

</div><!--container-->

</body>

</html>
