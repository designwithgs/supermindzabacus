<?php
$to = "sheshmishra4@gmail.com";
$subject = "Contact Us";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$html ='<table>
                  <tr>
                  <td>Your First Name:</td>
                     <td>'.$_REQUEST["fname"].'</td>
                  </tr>
                  <tr>
                  <td>Your Last Name:</td>
                     <td>'.$_REQUEST["lname"].'</td>
                  </tr>
                        <tr>
                  <td>Your Email:</td>
                     <td>'.$_REQUEST["email"].'</td>
                  </tr>

                        <tr>
                  <td>Your Mobile No:</td>
                     <td>'.$_REQUEST["phone"].'</td>
                  </tr>
                  <tr>
                  <td>Your Message:</td>
                     <td>'.$_REQUEST["message"].'</td>
                  </tr>

                </table>';

//print_r($html);

if(mail($to, $subject, $html, $headers)){
    echo "Thank you for Contacting! We'll get back to you shortly.";
}else{
     echo "Form not Submitted properly, please fill up again.";
}
