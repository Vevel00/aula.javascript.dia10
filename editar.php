<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tarefas WHERE id=$id";
$result = $conn->query($sql);
$tarefa = $result->fetch_assoc();

if ($_POST) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $data_limite = $_POST['data_limite'];

    $sql = "UPDATE tarefas SET titulo='$titulo', descricao='$descricao', status='$status', data_limite='$data_limite' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>
<form method="post">
    <h1>Editar Tarefa</h1>
    <label>Título:</label><br>
    <input type="text" name="titulo" value="<?= $tarefa['titulo'] ?>"><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"><?= $tarefa['descricao'] ?></textarea><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="pendente" <?= $tarefa['status']=='pendente'?'selected':'' ?>>Pendente</option>
        <option value="concluida" <?= $tarefa['status']=='concluida'?'selected':'' ?>>Concluída</option>
    </select><br><br>

    <label>Data Limite:</label><br>
    <input type="date" name="data_limite" value="<?= $tarefa['data_limite'] ?>"><br><br>

    <button type="submit">Salvar</button>
</form>
