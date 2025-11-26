<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Painel - Caio Materiais</title>
<link rel="stylesheet" href="style.css">

<style>
    .btn-link {
        display: inline-block;
        margin: 6px 0;
        text-decoration: none;
    }

    .btn-link button {
        padding: 10px 18px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        background-color: green;
        color: #fff;
        transition: 0.2s;
    }

    .btn-link button:hover {
        background-color: #2980b9;
    }

    .btn-sair button {
        background-color: #e74c3c;
    }

    .btn-sair button:hover {
        background-color: #c0392b;
    }

</style>

</head>
<body>
<div class="container">
  <h2>Bem-vindo, <?php echo $usuario; ?>!</h2>

  <a href="cadastro_produto.php" class="btn-link">
      <button>📦 Cadastro de Produtos </button>
  </a>

  <a href="estoque.php" class="btn-link">
      <button>📊 Gestão de Estoque </button>
  </a>

<br >
  <a href="logout.php" class="btn-link btn-sair">
      <button> Sair </button>
  </a>

</div>
</body>
</html>