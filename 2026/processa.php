<?php
session_start();

// Link do formulário do Google Forms enviado
$form_url = "https://docs.google.com/forms/d/e/1FAIpQLScYBIFxK5yzGD7g7Ahtm_ETHR0hiZlMk4MwjgUXFH0Lp2Qwtw/viewform";

// Redireciona o usuário diretamente para o formulário
header("Location: " . $form_url);
exit();
?>