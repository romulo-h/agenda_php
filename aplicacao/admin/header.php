<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <title>Agenda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Le styles -->
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="../bootstrap/css/stylo.css" rel="stylesheet">

  <link href="../font-awesome-4.5.0/css/font-awesome.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="masthead">
      <ul class="nav nav-pills pull-right">
        <li class="active"><a href="<?php echo '../' ?>">Home</a></li>
        <li><a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/cadastrar-user/'; ?>">Usuários</a></li>
      </ul>
      <p>Olá <b><?php echo $_SESSION['nome_usuario'] ?></b>, <a href="login/logout.php">clique aqui</a> para sair.</p>
    </div>
  </div>
  <div class="container">
    <!-- INCLUSÃO DO CABEÇALHO -->
    <div class="row">
      <div class="alignCenter"><?php include_once "../cabecalho.php"; ?></div>
    </div>
  </div>
</body>

</html>