<?php
$nome = 'Rafael Hara';
$email = 'rafael.hara@forseti.com.br';
$password = 'lololololololo';

$strPosition = strpos($email, '@');
$strPontoPos = strpos($email, '.');

//verifica tamanho de senha
$senha = mb_strlen($password); // uso de mb_ para confirmar tamanho de byte de caracteres especiais
echo $senha .PHP_EOL;

// VERIFICA E SEPARA USER EMAIL DO '@'
$user = substr($email, 0, $strPosition);
echo mb_strtoupper($user) . PHP_EOL;
echo substr($email, $strPosition+1) . PHP_EOL;

//remover '.' entre rafael.hara
$userPonto = substr($email, 0, $strPontoPos);
//$userPonto = substr($email, $strPontoPos+1);
echo $userPonto . PHP_EOL;

//separação de string
var_dump(list ($nome, $sobrenome) = explode(' ', $nome)) . PHP_EOL;
echo "o seu nome é $nome $sobrenome" . PHP_EOL;

//Separar inicio de email em nome e sobrenome
$mail = $email;
//separa inicio do '@'
$mail = (list($mailNome, $mailResto) = explode('@', $mail));
echo $mailNome, $mailResto . PHP_EOL;
//pega o inicio e separa do . deixando o nome separado
$mailNome = (list($nomeEmail, $sobrenomeEmail) = explode('.', $mailNome));
echo "$nomeEmail $sobrenomeEmail" . PHP_EOL;
//sera o '@' do .com.br para saber o provedor de email
$mailResto = (list($mailProvedor, $mailPontoCom, $mailPais) = explode('.', $mailResto));
echo "$mailProvedor.$mailPontoCom.$mailPais" . PHP_EOL;

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