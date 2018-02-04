<?php

if (isset($_POST['name']) && $_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_subject = $_POST['subject'];
    $form_message = $_POST['message'];

    if (!empty($form_name) && !empty($form_email) && !empty($form_subject) && !empty($form_message)) {

      $name = $form_name;
      $to = 'anthemcreativestudios@gmail.com';
      $subject = $form_subject;
      $body = $form_message;
      $headers = 'From: '.$form_name;

      if (@mail($name, $to, $subject, $body, $headers)) {
        echo "sent";
        header("Location: index-2.php");
      }else {
        echo "Sorry. Your message was not sent.<br/>";
        echo 'Please click <a href="index-2.php">here</a> to try again!'
      }

    }else {
      echo "All fields are required.";
    }
  }




?>
