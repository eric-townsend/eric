<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Language" content="en-US">
		<title>Contact Eric Townsend</title>
		<meta name="description" content="San Francisco based web designer, New Media">
		<meta name="viewport" content="width=device-width">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="img/favicon.ico" />
		<! -- css --> 
		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/animate.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<! -- load -->
		<script src="js/libs/jquery-1.9.1.min.js"></script>
		<!--[if IE]><![endif]-->
	</head>
    <body>
	    <header>
			<nav class="inner" role="navigation">
				<ul class="fl">
					<li><a href="index.html" id="logo">Eric Townsend New Media</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul> <!-- end ul nav -->  
				<!-- social -->
				<ul id="social-wrap" class="fr">
					<li class="social"><a href="http://dribbble.com/Eric_t" target="_blank"><i class="icon-dribbble-1"></i></a></li>
					<li class="social"><a href="http://www.behance.net/erictownsend" target="_blank"><i class="icon-behance"></i></a></li>
					<li class="social"><a href="http://pinterest.com/erictownsend123/boards/" target="_blank"><i class="icon-pinterest-1"></i></a></li>
					<li class="social"><a href="http://www.linkedin.com/profile/view?id=157764729&trk=hb_tab_pro_tops" target="_blank"><i class="icon-linkedin"></i></a></li>					
				</ul><!-- end ul social wrap--> 
			</nav><!-- end nav -->  
		</header><!-- end header -->			

<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@eric-townsend.com";
    $email_subject = "Why hello there";
     
     
    function died($error) {
        // your error code can go here
        echo "Terribly sorry, It looks like there was an error ";
        echo "These errors appear below.";
        echo $error."<br /><br />";
        echo "If you would be so kind and retry so I can get back to you. Or you can shoot me an email";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('If you would be so kind and retry so I can get back to you. Or you can shoot me an email.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
   if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<p>Thank you for getting in touch!</p>
<p>Ill get back to you as soon as possible.</p>
 
<?php
}
?>

        <script src="js/libs/conditionizr.js"></script>
        <script src="js/libs/modernizr-2.6.2.min.js"></script>
        <script src="js/libs/parsley.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
      </body>
</html>
