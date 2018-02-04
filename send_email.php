<?php

  //PHP code for sending an email from the form
  if (isset($_POST['name']) &&isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $form_name = $_POST['name'];
    $form_email = $_POST['email'];
    $form_subject = $_POST['subject'];
    $form_message = $_POST['message'];

    if (!empty($form_email) && !empty($form_subject) && !empty($form_message)) {

      $to = 'anthemcreativestudios@gmail.com';
      $subject = $form_subject;
      $body = $form_message;
      $headers = 'From: '.$form_email;

      if (@mail($to, $subject, $body, $headers)) {
          
        header("Location: http://www.anthemcs.co.za");
          exit;
      }else {
        echo "not sent";
      }

    }else {
      echo "All fields are required.";
    }
  }

 ?>