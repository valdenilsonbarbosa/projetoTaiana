<?php

include_once('config.php');

session_start();
//print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  //header('Location: login.php');
}

$logado = $_SESSION['email'];


//mantem informação salva dos livros
$categoria_id = $_POST['categoria_id'];







$sql = "SELECT * FROM aluno";


$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
  while ($row = $resultado->fetch_assoc()) {

    $turma   = $row['fk_turma'];
    $email = $row['email'];
    $nome = $row['nome'];

    /*     print_r($turma);
    print_r($email); */
  }
}



/* if (isset($_GET['submit'])) {

  /*    print_r('<br>');
    print_r('Fichamento: ' . $_POST['fichamento']);
    print_r('<br>');
    print_r('capitulo: ' . $_POST['capitulo']);  */

/*  if (isset($_POST['livro'], $_POST['capitulo'], $_POST['fichamento'])) {
    $livro = $_POST['livro'];
    $capitulo = $_POST['capitulo'];
    $fichamento = $_POST['fichamento'];
    $sd = $_POST['livro'];
    include_once('config.php');
    /*   $fichamento = $_POST['fichamento'];
    $capitulo = $_POST['capitulo']; */

/*  $result = mysqli_query($conexao, "INSERT INTO fichamento(fichamento,capitulo,turma,nome,titulo) values ('$fichamento','$capitulo',$turma,'$nome','$sd')");
  } else {
    echo "Campos obrigatórios não enviados!"; */
/*  } 
} 
 */

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Koulen&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/cadastro-fichamento.css" />
  <title>PROJETO LITERATURA</title>
</head>

<body>
  <!-- Cabeçalho do site -->
  <header>
    <div class="logo">
      <div class="p1">
        <h1>LITERA</h1>
      </div>

      <div class="p2">
        <h1>TURE-SE</h1>
      </div>
    </div>

    <div class="menu-mobile-button">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </header>

  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul>
      <li>
        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-house-fill" viewBox="0 0 16 16">
            <path
              d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
            <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
          </svg>Home</a>
      </li>
      <li>
        <a href="livros.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
            <path fill-rule="evenodd"
              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>Voltar</a>
      </li>
    </ul>
  </div>

  <!-- Overlay (cobertura preta) -->
  <div class="menu-overlay"></div>

  <script src="JS/menu-moba.js"></script>

  <div class="menu-desktop">
    <nav>
      <ul>
        <li>
          <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
              class="bi bi-house-fill" viewBox="0 0 16 16">
              <path
                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
              <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
            </svg></a>
        </li>
        <!--HOME ICON-->

        <li>
          <a href="livros.html"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
              class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
              <path fill-rule="evenodd"
                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
            </svg></a>
        </li>
        <!--ARROW ICON-->
      </ul>
    </nav>
  </div>

  <!--LOGIN-->
  <div class="fichar-container">
    <div class="login-corp">
      <div class="login-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor"
          class="bi bi-book-half" viewBox="-3 -8 20 28">
          <path
            d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
        </svg>
      </div>

      <div class="login-text">
        <h2>Cadastro</h2>
      </div>
    </div>

    <form action="salvar1.php" method="post">




      <?php
      /* 
      
      $sql = "SELECT id, livro FROM livro  ORDER BY id ASC
     ";


      $resultado = $conexao->query($sql);

      if ($resultado === false) {
        die("Erro na consulta SQL: " . $conexao->error);
      }

      echo '<select name="livro" id="livro">';

      echo '<option value="">Selecione uma turma</option>';

      if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {

          $id   = $row['id'];
          $livro = $row['livro'];
          echo "<option value=\"{$livro}\">{$livro}</option>";
        }
      } else {
        echo '<option value="">Cadastre uma turma</option>';
      }
      echo '</select>'; */

      ?>

      <input type="hidden" name="categoria_id" value="<?php echo $categoria_id; ?>">


      <div class="box">
        <div>
          <textarea name="fichamento" id="Fichamento" cols="30" rows="10"></textarea>
        </div>
      </div>

      <div class="box">
        <div>
          <input name="capitulo" type="text" placeholder="  Insira o capítulo (Ex: Cap. 52)" class="inputs required" />
        </div>

      </div>

      <div class="btn">
        <input type="submit" name="submit" value="CADASTRAR">
      </div>


    </form>
  </div>

  <script src="validacao-login.js"></script>
</body>

</html>