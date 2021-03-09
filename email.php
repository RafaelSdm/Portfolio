<?php

    if(isset($_POST([email]))) && !empty($_POST([email])){
    
    $nome =  addcslashes($_POST([name]));
    $email =  addcslashes($_POST([email]));
    $mensagem = addcslashes($_POST([mesage]));

    

    $to = "rafaeldamasceno2000@gmail.com"
    $subject = "Contato - Programador "
    $body = "Nome:".$nome. "\n"
            "Email ".$email."\n"
            "Mensagem: ".$mensagem;

    
    
    $header = "From:rafaeldamasceno@gmail.com "."\r\n"."Replay-to:".$email."\r\n"."Replay-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)){
        echo("Email eviado com sucesso");
    }else{
        echo("Email nao pode ser enviado");
    }

}

?>