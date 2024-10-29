<?php
include 'db.php';

$conexao = conectar();
if ($conexao) {
    $sql = "SELECT * FROM agenda_alunos";
    $stmt = $conexao->query($sql);
    $alunos = $stmt->fetchAll();

    if ($alunos) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Matricula</th><th>CPF</th><th>Email</th><th>dt_nascimento</th></tr>";
        foreach ($alunos as $aluno) {
            echo "<tr>
                    <td>{$aluno['id']}</td>
                    <td>{$aluno['nome']}</td>
                    <td>{$aluno['matricula']}</td>
                    <td>{$aluno['cpf']}</td>
                    <td>{$aluno['email']}</td>
                    <td>{$aluno['dt_nascimento']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum aluno encontrado.";
    }
}
?>
