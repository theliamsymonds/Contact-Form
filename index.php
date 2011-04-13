<?php
        
        /*
        *       Contact form made by Liamonicles
        */ 
        
        define( "MY_EMAIL", "" ); // define your email address

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
        <style type="text/css" media="screen">
                
                body {
                        
                        font-family: Verdana;
                        font-size: x-small;
                        color: #000;
                        background: #8AC9EB;
                        
                }
                
                #container {
                        
                        margin: auto;
                        border: 1px solid #589FC4;
                        padding: 5px;
                        -moz-border-radius: 5px;
                        -webkit-border-radius: 5px;
                        border-radius: 5px;
                        width: 298px;
                        background: #F5F5F5;
                        
                }
                
                h1 {
                
                        font-size: 20px;
                
                }
                
                input[type=text] {
                        
                        width: 250px;
                        border: 1px solid #589FC4;
                        
                }
                
                input[type=submit], textarea {
                        
                        border: 1px solid #589FC4;
                        
                }
                
        </style>
</head>

<body>

        <div id="container">
                
                <h1>Contact Me</h1>
                
                <p>Below you can contact me by submitting the form. It is really simple, just fill out all of the fields and then click submit! I am to reply within 24 hours!</p>
                
                
                        <!-- CONTACT FORM MADE BY LIAMONICLES -->
                
                <form method="post" action="">

                        <?php

                                if( isset( $_POST['submit'] ) ) // if they have submitted the form
                                {

                                        $fieldError = "";


                                        $name = htmlentities( $_POST['name'] ); // post their username
                                        $email = htmlentities( $_POST['email'] );  // post their email address
                                        $subject = htmlentities( $_POST['subject'] ); // post the subject
                                        $message = htmlentities( $_POST['message'] ); // post the message

                                        if( !$name ) // if they haven't entered a name
                                        {
                                                $fieldError .= "You must enter your name.<br />"; // add an error
                                        }

                                        if( !$email )
                                        {
                                                $fieldError .= "You must fill in your email address.<br />"; // add an error
                                        }

                                        if( !$subject )
                                        {
                                                $fieldError .= "You must enter a subject.<br />"; // add an error
                                        }

                                        if( !$message )
                                        {
                                                $fieldError .= "You must enter a message.<br />"; // add an error
                                        }

                                        if( !stristr( $email, "@" ) && !stristr( $email, "." ) ) // if it is an invalid email
                                        {
                                                $fieldError .= "You must enter a valid email address.<br />";
                                        }

                                        if( $fieldError )// if there are field errors
                                        {
                                                echo "<span style=\"color: #BD2D3C;\"><strong>Error</strong></span>";
                                                echo "<br />";
                                                echo $fieldError;
                                                echo "<br />";
                                        }

                                        if( !$fieldError )
                                        {
                                                $contact = "##################### You've been contacted! #####################\n";
                                                $contact .= "Name: {$name}\n";
                                                $contact .= "Email: {$email}\n";
                                                $contact .= "Subject: {$subject}\n";
                                                $contact .= "Message: {$message}\n";
                                                $contact .= "IP: {$_SERVER['REMOTE_ADDR']}\n";
                                                $from = "From: {$email}";
                                                mail( MY_EMAIL, $subject, $contact, $from ); // mail them
                                        }




                                }

                        ?>                      

                        Name: <br />
                        <input type="text" name="name" value="" />

                        <br /><br />

                        Email: <br />
                        <input type="text" name="email" value="" />

                        <br /><br />

                        Subject: <br />
                        <input type="text" name="subject" value="" />

                        <br /><br />

                        Message: <br />
                        <textarea name="message" cols="28" rows="5"></textarea>

                        <br /><br />

                        <input type="submit" value="Contact Me" name="submit" />

                </form>
                        
                
        </div>

</body>
</html>