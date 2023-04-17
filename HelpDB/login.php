<?php
  require 'inc/funcoes.php';
  session_start();
  if(!empty($_POST)){
    $_SESSION['msg']='';
    $log = $_POST['cpLogin'];
    $sen = $_POST['cpSenha'];
    $pst = logar($log, $sen);
    $rs = $pst->fetch(PDO::FETCH_ASSOC);
    if(!empty($rs['idusuario'])){
      session_start();
      $_SESSION['idusuario'] = $rs['idusuario'];
      $_SESSION['tipous'] = $rs['tipous'];
      $_SESSION['nome'] = $rs['nome'];
      $_SESSION['curso'] = $rs['curso'];
      $_SESSION['avatar'] = $rs['address'];
      header('Location: tela_principal2.php');
    }else{
      $_SESSION['msg'] = 'Login ou senha inválido!';
      session_abort();
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" type="image/png" href="img/icons/icone_logo_7.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <title>Login</title>
  </head>


  <body class="fundo">
    <form method="post" action="login.php">
      <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
          <div class="col" style="max-width: 500px">
            <div class="container rounded-3 bg-white">
              <img src="img/img1.png" class="py-3" id="u1_img" />
              <div class="mb-3 form-floating">
                <input type="text" class="form-control" id="login" placeholder="Login" name="cpLogin"/>
                <label for="login" class="form-label">Login</label>
              </div>
              <div class="mb-3 form-floating">
                <input type="password" class="form-control " id="senha" placeholder="Senha" name="cpSenha"/>
                <label for="senha" class="form-label">Senha</label>
              </div>
              <div class="mb-3 text-center">
                <span class="form-check-label text-danger" for="exampleCheck1"><?php echo $_SESSION['msg']; $_SESSION['msg'] = '';?></span>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn" id="button1">Acessar</button>
              </div>
              <div class="text-center pt-2">
                <a href="re_senha.php" id="link">Esqueceu ou deseja alterar sua senha?</a>
              </div>
              <div class="text-center py-2">
                Não tem uma conta?
                <a href="cadastro.php" id="link">Cadastre-se!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>


</html>
