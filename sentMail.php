<?php
 
if(isset($_POST['submit'])){
    $mailto = "hmawebdesign@hotmail.com"; // My email address
     //custmer data
    $name = $_POST['name'];  // Getting Customer Name
    $from = $_POST['email']; // Getting customer Email address
    $phoneNumber = $_POST['tel']; // getting customer phone number
    $subject = $_POST['subject'];  // Getting subject line from customer
    $subject2 = "Confirmation: Message Submitted Successfully! | HMA WebDesign"; //for customer confirmatiom
 
     //Email body, I will receive
    $message = "Client Name: " . $name . "\n"
    . "Phone Number: " . $phoneNumber . "\n\n"
    . "Message: " . "\n" . $_POST['message'];
     //Message for customer
    $message2 = "Dear " . $name . "\n"
    . "Thank you for contacting us, we will get back to you shortly."."\n\n"
    . "You submitted the following message: ". "\n". $_POST['message']."\n\n"
    . "Regards," . "/n"
    . "- HMA WebDesign";
 
    $headers = "From:" .  $from; //Customer email
    $headers2 = "From:" . $mailto;  //This will sent to client
      //PHP mailer function
    $result = mail($mailto, $subject, $message, $headers); //Send email to me
    $result2 = mail($from, $subject2, $message2, $headers2); // sends confirmation email to customers
 
    /* checking if the Mails has sent successfully! */
    if ($result && $result2) {
        $success = "Message was sent successfully, check your email!";
        /* echo '<script type="text/javascript">alert("Message Sent Successfully. We will contact you shortly.")</script>'; */
    } else {
        $failed = "Message was not sent, try again later!";
        /* echo '<script type="text/javascript">alert("Mail was not sent, Try again!.")</script>'; */
    }
     
}
 
?>