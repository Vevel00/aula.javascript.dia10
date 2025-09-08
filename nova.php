<?php
include 'conexao.php';

if ($_POST) {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_limite = $_POST['data_limite'];

    $sql = "INSERT INTO tarefas (titulo, descricao, data_limite) VALUES ('$titulo', '$descricao', '$data_limite')";
    if ($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>
<form method="post">
    <h1>Nova Tarefa</h1>
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"></textarea><br><br>

    <label>Data Limite:</label><br>
    <input type="date" name="data_limite"><br><br>

    <button type="submit">Salvar</button>
</form>
