<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dt_nascimento = $_POST["dt_nascimento"];
    $matricula = $_POST["matricula"];

    $conexao = conectar();
    if ($conexao) {
        $sql = "INSERT INTO agenda_alunos (email, matricula, nome, dt_nascimento, cpf) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$email, $matricula, $nome, $dt_nascimento, $cpf]);
        echo "Aluno incluído com sucesso!";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Cpf: <input type="text" name="cpf" required><br>
    matricula: <input type="text" name="matricula" required><br>
    Email: <input type="email" name="email" required><br>
    Telefone: <input type="text" name="telefone" required><br>
    Data de Nascimento: <input type="date" name="dt_nascimento" required><br>
    <input type="submit" value="Incluir Aluno">
</form>

