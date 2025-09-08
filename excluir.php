<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM tarefas WHERE id=$id";
if ($conn->query($sql)) {
    header("Location: index.php");
}
?>
