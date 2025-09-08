<?php
include('conexao.php');

// Filtro por status
$filtro = "";
if (isset($_GET['status']) && $_GET['status'] != "todas") {
    $status = $_GET['status'];
    $filtro = "WHERE status='$status'";
}

// Listar tarefas
$sql = "SELECT * FROM tarefas $filtro ORDER BY data_limite ASC";
$result = $conn->query($sql);

// Tarefas atrasadas
$sql_atrasadas = "SELECT * FROM tarefas WHERE status='pendente' AND data_limite < CURDATE()";
$atrasadas = $conn->query($sql_atrasadas);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>
    <h1>📋 Lista de Tarefas</h1>
    <a href="nova.php">➕ Nova Tarefa</a>
    <br><br>

    <form method="get">
        <label>Filtrar por status:</label>
        <select name="status">
            <option value="todas">Todas</option>
            <option value="pendente">Pendentes</option>
            <option value="concluida">Concluídas</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <h2>Tarefas</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Data Limite</th>
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['titulo'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['data_limite'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">✏️ Editar</a> |
                <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir tarefa?')">🗑 Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>⚠️ Tarefas Atrasadas</h2>
    <ul>
        <?php while($row = $atrasadas->fetch_assoc()): ?>
            <li><b><?= $row['titulo'] ?></b> - Vencida em <?= $row['data_limite'] ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
