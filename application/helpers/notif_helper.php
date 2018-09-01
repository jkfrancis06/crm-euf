<?php

function notify_password($mail,$password,$login)
{
     $CI = get_instance();
     $CI->load->library('email');
    $subject = "Vos parametres de connexion";
    $message =  "<h1> Bienvenue sur :". PLATEFORME_NAME."!"
            . ""
            . "</h1>"
            . "Voici vos parametres de connexion: <br/><br/>"
            . "Identifiant: $login <br/>"
            . "Mot de passe: $password <br/><br/>"
            . "Vous êtes invités à modifier votre mot de passe à votre première connexion! <br/><br/>"
            . "Cordialement,<br/>"
            . "L'équipe ".PLATEFORME_NAME
            ;
    $to =  $mail;

    // Get full html:
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
        <title>' . $subject . '</title>
        <style type="text/css">
            body {
                font-family: Arial, Verdana, Helvetica, sans-serif;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
    ' . $message . '
    </body>
    </html>';
    // Also, for getting full html you may use the following internal method:
    //$body = $this->email->full_html($subject, $message);

    $CI->email
        ->from('relay@euphorbiagroup.com')
        ->reply_to('NO_REPLY')    // Optional, an account where a human being reads.
        ->to($to)
        ->subject($subject)
        ->message($body)
        ->send();

   
    $CI->email->print_debugger();

    
}