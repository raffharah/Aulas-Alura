<?php
$nome = 'Rafael Hara';
$email = 'rafael.hara@forseti.com.br';
$password = 'lololololololo';

$strPosition = strpos($email, '@');
$strPontoPos = strpos($email, '.');

//verifica tamanho de senha
$senha = mb_strlen($password); // uso de mb_ para confirmar tamanho de byte de caracteres especiais
var_dump($senha);

// VERIFICA E SEPARA USER EMAIL DO '@'
$user = substr($email, 0, $strPosition);
var_dump(mb_strtoupper($user));
var_dump(substr($email, $strPosition+1));

//remover '.' entre rafael.hara
$userPonto = substr($email, 0, $strPontoPos);
//$userPonto = substr($email, $strPontoPos+1);
var_dump($userPonto);

//separação de string
var_dump(list ($nome, $sobrenome) = explode(' ', $nome));
var_dump("o seu nome é $nome $sobrenome");

//Separar inicio de email em nome e sobrenome
$mail = $email;
//separa inicio do '@'
$mail = (list($mailNome, $mailResto) = explode('@', $mail));
var_dump($mailNome, $mailResto);
//pega o inicio e separa do . deixando o nome separado
$mailNome = (list($nomeEmail, $sobrenomeEmail) = explode('.', $mailNome));
var_dump($nomeEmail, $sobrenomeEmail);
//sera o '@' do .com.br para saber o provedor de email
$mailResto = (list($mailProvedor, $mailPontoCom, $mailPais) = explode('.', $mailResto));
var_dump($mailProvedor, $mailPontoCom, $mailPais);

/*$emails = ['rafael.hara@forseti.com.br', 'rafael.hara@gmail.com', 'rafael.hara@hotmail.com'];
//verificação de email
foreach ($emails as $mail) {
    $emailValido = preg_match(
        '/^[a-z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/',
        $mail
    );
    if ($emailValido) {
        var_dump($emailValido);
    } else {
        return false;
    }
}
*/