<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = __('You forgot to enter your name.', 'checkers');
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = __('You forgot to enter your email address.', 'checkers');
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = __('You entered an invalid email address.', 'checkers');
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = __('You forgot to enter your comments.', 'checkers');
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {

			$emailTo = get_option( 'admin_email' );
			$subject = $_POST['contactSubject'];
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: carloswu.xyz <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
			
			wp_mail($emailTo, $subject, $body, $headers);

			$emailSent = true;

		}
	}
} ?>
<div class="clearfix"></div>
    <form action="#contact" id="contactForm" method="post">
	<?php if(isset($emailSent) && $emailSent == true) { ?>
    <div class="columns">
        <div class="warning callout" >
            
            <h3><?php printf (__('Thanks, %s', 'checkers'), $name); ?></h3>
            <p><?php _e('Your email was successfully sent. I will be in touch soon.','checkers')?></p>
            
        </div>
    </div>

	<?php } ?>
    		
            
            	<?php if(isset($hasError) || isset($captchaError)) { ?>
                <div class="columns">
                   <p class="callout alert"><?php _e('There was an error submitting the form.', 'checkers')?></p>
                </div>  
                <?php } ?>
    		
        	<div class="small-12 large-6 columns">

                <?php if($nameError != '') { ?>
                    <span class="help-text"><?php echo $nameError;?></span> 
                <?php } ?>
                
                <input placeholder="<?php _e('Company name or headhunter', 'checkers')?>" type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" required/>
                
            	
                
                <?php if($emailError != '') { ?>
                    <span class="help-text"><?php echo $emailError;?></span>
                <?php } ?>
                <input placeholder="<?php _e('Email', 'checkers')?>" type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField" required/>
                
                
                <input placeholder="<?php _ex('Subject', 'in contact form','checkers')?>" type="text" name="contactSubject" id="contactSubject" value="<?php echo $_POST['contactSubject'];?>"/>
            	
                <button class="button show-for-large" type="submit"><?php _e('Send', 'checkers');?></button>
                
            </div>
            <div class="small-12 large-6 columns">
                <textarea name="comments" id="commentsText" rows="10" cols="30" class="requiredField" required><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                <?php if($commentError != '') { ?>
                    <span class="help-text"><?php echo $commentError ;?></span> 
                <?php } ?>
             <button class="button hide-for-large" type="submit"><?php _e('Send', 'checkers');?></button>   
             </div>   
            <input type="text" name="checking" id="checking" class="invisible" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
            <input type="hidden" name="submitted" id="submitted" value="true" />
                              
    </form>
