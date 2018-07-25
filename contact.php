<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

    
// an email address that will be in the From field of the email.
$from = 'info@theworthhotel.com';

// an email address that will receive the email with the output of the form
$sendTo = $_POST['email'];


// Email Confirmation to the Submitter
$senderSubject = 'Confirmation Email from The Worth Hotel';
$senderMessage = 'Dear ' .$_POST['firstName'].','."\n\n";
$senderMessage .= 'This is to confirm that we have received your input. We will respond to you very soon.'."\n\n";
$senderMessage .= 'If this email was incorrectly sent to you, please send an email to info@theworthhotel.com to let us know.'."\n\n";
$senderMessage .= 'Thank you very much!'."\n\n";
$senderMessage .= '_______________________________________________________________________________________________________'."\n\n";
$senderMessage .= 'Your message: '."\n\n";
$senderMessage .= 'Contacting About: '.$_POST['subject']."\n\n";
$senderMessage.= $_POST['message'];

// Email Notification to Webmaster
$subject = $_POST['firstName'].' '.$_POST['lastName'].' is interested in '.$_POST['subject'];
$message = 'Hey there!'."\n\n";
$message .= $_POST['firstName'].' '.$_POST['lastName'].' is interested in '.$_POST['subject']."\n\n";
$message .= 'The email address is: '.$_POST['email']."\n\n";
$message .= 'Here is the message from '.$_POST['firstName'];


// form field names and their translations.
// array variable name => Text to appear in the email
// $fields = array('firstName' => 'firstName', 'lastName' => 'lastName', 'email' => 'email', 'subject' => 'subject', 'message' => 'message'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted.';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    // $emailText = "You have a new message from your contact form\n=============================\n";

    // foreach ($_POST as $key => $value) {
    //     // If the field exists in the $fields array, include it in the email 
    //     if (isset($fields[$key])) {
    //         $submittedForm .= "$fields[$key]: $value\n\n";
    //     }
    // }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send confirmation email to Sender
    mail($sendTo, $senderSubject, $senderMessage, implode("\n", $headers));

    // Send notification email to Webmaster
    mail($from, $subject, $message, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
    // go to confirmation page
    echo '<script> window.location = "confirmation.html"</script>';
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}

