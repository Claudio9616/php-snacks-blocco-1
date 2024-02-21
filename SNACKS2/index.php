<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';
$name_valid = mb_strlen(trim($name)) > 3;
$age_valid = is_numeric($age) && $age > 0;
$email_valid = str_contains($email, '@') && str_contains($email, '.');
// uso il flag del form che racchiude questi tre e gli cambio il "valore booleano" per inserirli nel'if 
$form_invalid = !$name_valid || !$age_valid || !$email_valid;
$text = $form_invalid ? 'Acesso negato' : 'Acesso riuscito';
echo $text;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" placeholder='inserisci il nome' name='name'>
        <input type='email' placeholder='inserisci una mail' name='email'>
        <input type="number" placeholder='inserisci la tua età' name='age'>
        <button>INVIA</button>
    </form>
</body>
</html>