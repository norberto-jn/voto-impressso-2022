<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'C:/Users/junio/Desktop/votacao/vendor/autoload.php';


class GerenciadorEmail {

    private $username;
    private $password;
    private $emailRemetente;
    private $nomeRemetente;
    private $emailDestinatario;
    private $nomeDestinario;
    private $assuntoEmail;
    private $corpoEmail;

    public function __construct($username,$password,$emailRemetente,$nomeRemetente,$emailDestinatario,$nomeDestinario,$assuntoEmail,$corpoEmail)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setEmailRemetente($emailRemetente);
        $this->setNomeRemetente($nomeRemetente);
        $this->setEmailDestinatario($emailDestinatario);
        $this->setNomeDestinario($nomeDestinario);
        $this->setAssuntoEmail($assuntoEmail);
        $this->setCorpoEmail($corpoEmail);      
        $mail->Username=$this->getUsername(); 
        $mail->Password=$this->getPassword();
        $mail->setFrom($this->getEmailRemetente(),$this->getNomeRemetente());
        $mail->addAddress($this->getEmailDestinatario(),$this->getNomeDestinario());
        $mail->Subject=$this->getAssuntoEmail();
        $mail->html2text=true;
        $mail->AltBody =$this->getCorpoEmail();
        $mail->Body=$this->getCorpoEmail();
        $this->verificacaoEnvio($mail);
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmailRemetente()
    {
        return $this->emailRemetente;
    }

    public function setEmailRemetente($emailRemetente)
    {
        $this->emailRemetente = $emailRemetente;
    }

    public function getNomeRemetente()
    {
        return $this->nomeRemetente;
    }

    public function setNomeRemetente($nomeRemetente)
    {
        $this->nomeRemetente = $nomeRemetente;
    }

    public function getEmailDestinatario()
    {
        return $this->emailDestinatario;
    }

    public function setEmailDestinatario($emailDestinatario)
    {
        $this->emailDestinatario = $emailDestinatario;
    }

    public function getNomeDestinario()
    {
        return $this->nomeDestinario;
    }

    public function setNomeDestinario($nomeDestinario)
    {
        $this->nomeDestinario = $nomeDestinario;
    }

    public function getAssuntoEmail()
    {
        return $this->assuntoEmail;
    }

    public function setAssuntoEmail($assuntoEmail)
    {
        $this->assuntoEmail = $assuntoEmail;
    }

    public function getCorpoEmail()
    {
        return $this->corpoEmail;
    }

    public function setCorpoEmail($corpoEmail)
    {
        $this->corpoEmail = $corpoEmail;
    }

    public function verificacaoEnvio($mail){
        if (!$mail->send()) {
            //echo 'Email nao enviado!'.$mail->ErrorInfo;
        } else {
            //echo 'Email enviado com sucesso!';
        }
    }

}

#------------------------------------------------

// $mail = new PHPMailer();

// $mail->isSMTP();

// $mail->Host = 'smtp.gmail.com';

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// $mail->Port = 587;

// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// $mail->SMTPAuth = true;


// #---------------------------------------------------

// $mail->Username = 'gerenciadoremail.norberto@gmail.com';

// $mail->Password = '3191351982020N-junio';

// $mail->setFrom('gerenciadoremail.norberto@gmail.com', 'Gerente');

// $mail->addAddress('norbertojunio@gmail.com', 'Empregado');

// $mail->Subject = 'PHPMailer GMail SMTP test';

// $mail->html2text=true;

// $mail->AltBody = 'This is a plain-text message body';

// $mail->Body="<h1>DEUS E FIEL</h1>";

// if (!$mail->send()) {
//     echo 'Email nao enviado!'.$mail->ErrorInfo;
// } else {
//     echo 'Email enviado com sucesso!';
// }

