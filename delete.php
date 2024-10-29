<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $conexao = conectar();
    if ($conexao) {
        $sql = "DELETE FROM agenda_alunos WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$id]);
        echo "Aluno excluído com sucesso!";
    }
}
?>

<form method="POST">
    ID do Aluno para excluir: <input type="number" name="id" required><br>
    <input type="submit" value="Excluir Aluno">
</form>


