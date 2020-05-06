<?php

session_start();

$nun1 = filter_input(INPUT_POST, 'NUM1', FILTER_SANITIZE_STRING);
$nun2 = filter_input(INPUT_POST, 'NUM2', FILTER_SANITIZE_STRING);
$operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_STRING);
$soapClient = new SoapClient("http://localhost:8080/CalculadoraService/calculadoraWS?wsdl");
$params = array('a' => $nun1, 'b' => $nun2);
if ($operacao == '+') {
    $resultando = $soapClient->somar($params);
} else if ($operacao == '-') {
    $resultando = $soapClient->subtrair($params);
} else if ($operacao == '*') {
    $resultando = $soapClient->multiplicar($params);
} else if ($operacao == '/') {
    $resultando = $soapClient->dividir($params);
}

$_SESSION['n1'] = $nun1;
$_SESSION['n2'] = $nun2;

$novo_result = $resultando->return;
$_SESSION['msg'] = "<center><p style='color:green; font-size:40px;'>RESULTADO: $novo_result</p></center>";
echo $novo_result;
header("Location: index.php");
?>