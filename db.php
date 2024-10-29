<?php
function conectar() {
    $host = "localhost";
    $port = "5432";
    $dbname = "crud_aluno";
    $user = "postgres";
    $password = "gatolindo";

    try {
        $conexao = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        return null;
    }
}
?>
