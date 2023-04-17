<?php
  require 'inc/funcoes.php';
    session_start();
    if(!empty($_POST)){
      $_SESSION['msg'] = ' ';
      $nome = $_POST['cpNome'];
      $email = $_POST['cpEmail'];
      $login = $_POST['cpLogin'];
      $senha = $_POST['cpSenha'];
      $matricula = $_POST['cpMatricula'];
      $curso = $_POST['cpCurso'];
      $t = consultarlog($login);
      $t2 = $t->fetch(PDO::FETCH_ASSOC);
      if($t2['login'] == $login){
        $_SESSION['msg'] = 'Este Login já está sendo usado';
      }else{
      cadastrar($nome, $email, $login, $senha, $matricula, $curso);
      $_SESSION['msg']='Usuario cadastrado com sucesso!';
      header('Location: login.php');
      }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" type="image/png" href="img/icons/icone_logo_7.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>Cadastrar</title>
  </head>


  <body class="fundo">
    <form method="post" action="cadastro.php">
      <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
          <div class="col" style="max-width: 500px">
            <div class="container rounded-3 bg-white">
              <img src="img/img1.png" class="pt-3" id="u1_img"/>
              <div class="text-center pt-2"><h5>Cadastro de Usuário</h5></div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="cpNome"/>
                <label for="nome">Nome</label>
              </div>
              <div class="row">
                <div class="col-md mb-3">
                  <div class="form form-floating">
                    <input type="number" class="form-control" id="matricula" placeholder="Matricula/Siape" name="cpMatricula"/>
                    <label for="matricula" class="form-label">Matricula/Siape</label>
                  </div>
                </div>
                <div class="col-md mb-3">
                  <div class="form">
                    <select class="form-select" id="curso" required name="cpCurso">
                      <option selected disabled>Curso</option>
                      <option value="EMI-Informática">EMI-Informática</option>
                      <option value="EMI-Secretariado">EMI-Secretariado</option>
                      <option value="EMI-Alimentos">EMI-Alimentos</option>
                      <option value="EMI-Quimica">EMI-Quimica</option>
                      <option value="Sem Curso(Professor)">Sem Curso(Professor)</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mb-3 form-floating">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail" name="cpEmail"/>
                <label for="email" class="form-label">E-mail</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="login" placeholder="Login" name="cpLogin"/>
                <label for="login" class="form-label">Login</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="cpSenha"/>
                <label for="senha" class="form-label">Senha</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control" id="conSenha" placeholder="Confirmar Senha" name="cpConsenha"/>
                <label for="conSenha" class="form-label">Confirmar Senha</label>
              </div>
              <div class="text-center text-danger mb-3">
                <span class="form-check-label" for="exampleCheck1"><?php echo $_SESSION['msg']; $_SESSION['msg'] = '';?></span>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn" id="button1">
                  Cadastrar
                </button>
              </div>
              <div class="text-center py-2">
                Já está cadastrado?
                <a href="login.php" id="link">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>


</html>
