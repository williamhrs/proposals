<?php
 
// Colocar na tag form os seguintes atributos: <form method="post" action="enviar.php">
 
$para = "tduarte@me.com"; // Mudar o e-mail para o destinatário
 
$assunto = "Proposta Aceita!"; // Assunto do E-mail
 
$mensagem = "<strong>Cliente: </strong>".$_POST['cliente']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br>".$_POST['fechado']; // Campos do formulário. Colocar o equivalente no atributo name do campo.
$mensagem .= "<br><strong>Observações: </strong>".$_POST['notas'];
 
$cabecalho =  "Content-Type:text/html; charset=UTF-8\n";
$cabecalho .= "From:  Contato pelo Site <form@thiago.in>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "X-Sender:  <form@thiago.in>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "X-Mailer: PHP  v".phpversion()."\n";
$cabecalho .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$cabecalho .= "Return-Path:  <form@thiago.in>\n"; // Mudar o e-mail para o destinatário
$cabecalho .= "MIME-Version: 1.0\n";
 
if(mail($para, $assunto, $mensagem, $cabecalho)) { 
     echo "";
} else { 
     echo "Ocorreu um problema para enviar seu e-mail. Tente novamente."; // Mensagem de Erro
}