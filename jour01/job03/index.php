<?php
$typeOfVariables = [
    "String" => "Hello LaPlateforme!",
    "Integer" => 42,
    "Float" => 3.14,
    "Boolean" => true,
];
echo  "<!DOCTYPE html>
<html lang='en'>    
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Variable Types</title>
    </head>
    <body>
    <h1>Variable Types</h1>
    <table border='1'>
    <tr>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeurs</th>
    </tr>
    <tr>
    <td>String</td>
    <td>String</td>
    <td>"; echo $typeOfVariables['String'] . "</td>
    </tr>
     <tr>
    <td>Integer</td>
    <td>Integer</td>
    <td>"; echo $typeOfVariables['Integer'] . "</td>
    </tr>
     <tr>
    <td>Boolean</td>
    <td>Boolean</td>
    <td>"; echo $typeOfVariables['Boolean'] . "</td>
    </tr>
     <tr>
    <td>Float</td>
    <td>Float</td>
    <td>"; echo $typeOfVariables['Float'] . "</td>
    </tr>
    
    </table>
    "
?>