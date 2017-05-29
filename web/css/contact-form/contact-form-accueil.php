<?php 

if(isset($_POST['email'])) {
 
     
 
    // L'adresse mail dont on veut recevoir le message
 
    $email_to = "chouania.mehdi@hotmail.fr";
 
    $email_subject = "E-Mobilier - Formulaire de contact";
 
     
 
     
 
    function died($error) {
 
        // Le code d'erreur
 
        echo '<div class="alert alert-danger alert-dismissible wow fadeInUp" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Une erreur est intervenue:</strong><br>';
  
        echo $error."<br />";
 
        echo '</div>';
 
        die();
 
    }
 
     
 
    // Validation de données attendus existantes
 
    if(!isset($_POST['name']) ||
  
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('Nous sommes désolé, mais il semblerais qu\'un problème ait survenue lors de l\'envoi de votre message.');       
 
    }
 
     
 
    $name = $_POST['name']; // Obligatoire
  
    $email_from = $_POST['email']; // Obligatoire
 
    $message = $_POST['message']; // Obligatoire
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'L\'adresse mail que vous avez mentionné ne semble pas être valide.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'Le prénom que vous avez mentionné ne semble pas être valide.<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'Le message que vous avez mentionné ne semble pas être valide.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Détails du formulaire ci-dessous.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nom: ".clean_string($name)."\n";
  
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// Création d'header de l'email
 
$headers = 'De: '.$email_from."\r\n".
 
'A: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 ?>

 <div class="alert alert-success alert-dismissible wow fadeInUp" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   Votre message a bien été envoyé.
 </div>

 <?php } ?>