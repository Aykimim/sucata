<?php
$nome= $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$formcontent="Mensagem enviada por: $nome n Texto: $mensagem";
$recipient = "kimmim@kimmim.shop";
$subject = "Formulário de contato";
$mailheader = "De: $email rn";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Obrigado por entrar em contato!";
?>