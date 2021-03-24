<?php
    require_once('gerenciadorEmail.php');   
    require_once('gerenciadorBanco.php'); 
    $numeroCandidato=$_POST['numeroCandidato'];
    $data=date('Y');      
    $GerenciadorBanco=new GerenciadorBanco($numeroCandidato,"Norberto","1405251290");    
    $mensagemEmail=("Nome Eleitor: ".$GerenciadorBanco->getNomeEleitor()."<br>".
    "Numero Titulo: ".$GerenciadorBanco->getNumeroTitulo()."<br>".
    "Numero Registro: ".$GerenciadorBanco->numeroRegistro   
    );

    //infelizmente devido a segurança da informaçao eu retirei os meus dados entao os parametros devem ser prenchido com seus dados.
    $GerenciadorEmail=new GerenciadorEmail("email : email do seu gerenciador de email","senha : senha do gerenciador de email","email :do seu gerenciador de email","Nome do emissor","email :email do usuario para quem se quer enviar o email","nome : nome do usuario que se quer mandar o email","nome : emissor","$mensagemEmail");
    header("location:conclusaoVoto.html");
