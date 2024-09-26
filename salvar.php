<?php

$host = "localhost";
$user = "root";
$passw = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $passw, $banco);

if(isset($_POST['nome'])){
    $nome_completo = $_POST['nome'];
    $email = $_POST['email'];
    $dataNascimento = $_POST ['dataNascimento'];
    $estado = $_POST ['estado'];
    $endereco = $_POST ['endereco'];
    $login = $_POST ['login'];
    $generosSelecionados = $_POST['generos'];
    $categoriaSelecionada = $_POST['categorias'];

    $generosValidos = ['Masculino', 'Feminino'];
    $categoriaValidadas = ['Praia','Campo','Nacionais','Internacionais','Serra','Cidade'];

    
    echo "<h1>Suas Informações</h1><br>";
    echo " Login: $login <br>";
    echo " Nome completo: $nome_completo <br>";
    echo " E-mail: $email <br>";
    echo " Data de nascimento: $dataNascimento <br>";
    echo " Endereço: $endereco <br>";
    echo " Estado: $estado <br>";
    echo " Sexo: " .implode(',' , $generosSelecionados);
    echo "<br>Categoria selecionada: " .implode (',' , $categoriaSelecionada), "<br><br>";
   
} 
    $categoriaString = implode(',', $categoriaSelecionada);
    $generoString = implode(',', $generosSelecionados);

    $sql = "INSERT INTO Cadastro (Nome_completo, Email, Data_de_nascimento, Estado, Endereco, Login, Sexo, Categorias) 
    Value ('$nome_completo', '$email', '$dataNascimento', '$estado', '$endereco', '$login', ' $generoString', ' $categoriaString')";
    $rs = mysqli_query($conexao, $sql);

    if($rs){
        echo"<h1>Cadastro realizado com sucesso!</h1>";
    }
?>    