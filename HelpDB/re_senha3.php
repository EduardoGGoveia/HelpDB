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
    <title>Recuperar Senha</title>
  </head>

  
  <body class="fundo">
    <form>
      <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
          <div class="col" style="max-width: 500px">
            <div class="container rounded-3 bg-white">
              <img src="img/img1.png" class="py-3" id="u1_img" />
              <div class="mb-3 form-floating">
                <input
                  type="text"
                  class="form-control"
                  id="re_login"
                  placeholder="Login"
                  name="cpLogin"
                />
                <label for="re_login" class="form-label">Nova senha</label>
              </div>
              <div class="mb-3 form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="re_email"
                  placeholder="Login"
                  name="cpLogin"
                />
                <label for="re_email" class="form-label"
                  >Confirmar nova senha</label
                >
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn" id="button1">
                  Confirmar
                </button>
              </div>
              <div class="py-2">
                <a href="login.html" id="link">Voltar à tela de login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
