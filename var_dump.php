<?php
if ($_POST) {
    new Exception('teste');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="teste()">teste</button>

<?php

require __DIR__ . '/vendor/autoload.php';

$usuario = new \Alura\Leilao\Model\Usuario('Rômulo Vieira');
$leilao = new \Alura\Leilao\Model\Leilao('Fiat 147 0 km');

// $a = [];
// echo @$a[0];
var_dump($leilao);
?>
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script>
    $.ajax({
    method: "POST",
    url: "var_dump.php",
    data: { nome: "Pedro", email: "pedro@email.com" }
    })
</script>
</html>
