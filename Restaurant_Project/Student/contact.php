<?php
    define("TITLE","Contact Us | Urban Degchi Restaurant");
    include('inlcudes/header.php');
?>
	<div id="contact">
	<h1>Get in touch with us</h1>
	
	<?php 
	
	function has_header_injection($str){
	    return preg_match( "/[\r\n]/", $str );
	};
	
	if (isset($_POST('contact_submit'))){
	    $name= trim($_POST('name'));
	    $email= trim($_POST('email'));
	    $msg= $_POST('message');
	    
	    if (has_header_injection(name)||has_header_injection(email)){
	       die();
	    }
	    
	    if( !name || !email || !msg){
	        echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
	        exit;
	    }
	    
	    $to = "isrivastava@wpi.edu";
	    $subject = "$name sent you message via contact form";
	    
	    $message .= "Name: $name\r\n";
	    $message .= "Email: $email\r\n\r\n";
	    $message .= "Message:\r\n$msg";
	    
	    if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
	        $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
	    }
	    
	    $message = wordwrap($message, 72);
	    
	    $headers = "MIME-Version: 1.0\r\n";
	    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	    $headers .= "From: " . $name . " <" . $email . ">\r\n";
	    $headers .= "X-Priority: 1\r\n";
	    $headers .= "X-MSMail-Priority: High\r\n\r\n";
	    
		mail($to, $subject, $message, $headers);
	?>
		
		<h5>Thanks for contacting Franklin's!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>
		
		<?php
			} else {
		?>
	
	<form method="post" action="" id="contact-form">
		<label for="name">Your Name</label>
		<input type="text" id="name" name="name"></input>
		
		<label for="email">Your Email</label>
		<input type="email" id="email" name="email"></input>
		
		<label for="message">and your message</label>
		<textarea id="message" name="email"></textarea>
		
		<input type="checkbox" id="subscribe" value="Subscribe" name="subscribe"> <label for="subscribe">Subscribe to newsletter</label>
		<input type="submit" class="button next" name="contact_submit" value="Send Message">
		
	</form>
	<?php
			}
		?>
	</div>

<?php include('inlcudes/footer.php');?>
