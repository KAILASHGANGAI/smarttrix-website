<?php
$to ='support@smarttrixnep.com';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $from = $_POST['email'];
    $message_taken = $_POST['message'];

    $headers  ='<h1>From'.$name ;
    $headers.='</h1>';

$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi smarttrix</h1>';
$message .= '<p style="color:#080;font-size:18px;">'.$message_taken.'</p>';
$message .= '</body></html>';
if(mail($to, $message, $headers)){
    echo "<script type='text/javascript'>alert('Your mail has been sent successfully.');</script>";

} else{
    echo "<script type='text/javascript'>alert('Unable to send email. Please try again.');</script>";
   echo " "
}
}
?>