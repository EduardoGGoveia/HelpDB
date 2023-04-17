<?php
 require 'inc/funcoes.php';
 session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" href="img/icons/icone_logo_7.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <title>HelpDB</title>
</head>

<body>

  <form method="post" action="tela_principal.php">
    <!--Inicio Cabeçalho-->
    <header style="background-color: #212529">
      <div class="container-xxl">
        <div class="row justify-content-center">
          <div class="col-6 col-sm-auto py-2">
            <a href="tela_principal.php" class="d-flex align-items-center justify-content-center mb-lg-0 me-lg-auto text-light text-decoration-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="60px" clip-rule="evenodd" fill-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 70.35 38.62" style="fill: #00afef" role="img">
                <g>
                  <path d="M59.33 7.11l2.26 0 -3.99 -7.11 -4.58 7.11 2.03 0c-0.3,2.13 -0.81,4.22 -1.53,6.23 -0.33,0.92 -0.69,1.83 -1.1,2.72 -0.8,1.75 -1.77,3.43 -2.87,5.01 -0.02,0.05 -0.03,0.11 -0.05,0.16 -0.04,0.02 -0.08,0.04 -0.11,0.07 -0.89,1.25 -1.88,2.45 -2.95,3.56 -1.36,1.42 -2.87,2.71 -4.5,3.86 -0.03,0.02 -0.06,0.04 -0.09,0.06 -2.27,1.58 -4.8,2.88 -7.53,3.81l-0.09 0.03c0.24,-0.08 0.48,-0.17 0.72,-0.26 3.95,-2.5 7.19,-4.95 9.72,-7.38 0.32,-0.31 0.64,-0.62 0.94,-0.93 0,-0 0,-0 0,-0 1.68,-1.73 2.99,-3.44 3.93,-5.13 0.22,-0.39 0.41,-0.79 0.63,-1.17 0.14,-0.24 0.27,-0.49 0.4,-0.74 0.14,-0.26 0.27,-0.52 0.4,-0.79 0.74,-1.52 1.36,-3.1 1.85,-4.72 -0.59,-1.26 -1.34,-2.43 -2.23,-3.48 -2.83,-3.34 -7.06,-5.46 -11.77,-5.46 -5.36,0 -10.09,2.74 -12.85,6.89 0.05,-0.07 0.1,-0.15 0.15,-0.22l-7.11 0.54 6.75 0 0.04 -0.06 -0.04 0.06 5.37 0c0.4,-0.92 1.33,-1.57 2.4,-1.57 1.45,0 2.62,1.17 2.62,2.62 0,1.45 -1.17,2.62 -2.62,2.62 -1.07,0 -1.99,-0.64 -2.4,-1.57l-6.47 0c-0.3,0.7 -0.55,1.42 -0.75,2.16 -0.04,-0 -0.07,-0 -0.11,-0 -4.15,0 -7.83,2.07 -10.04,5.23 8.18,-0.2 12.97,-0.31 22.03,-0.53 0.4,-0.92 1.33,-1.57 2.4,-1.57 1.45,0 2.62,1.17 2.62,2.62 0,1.45 -1.17,2.62 -2.62,2.62 -1.07,0 -1.99,-0.65 -2.4,-1.57l-23.23 0.56c-0.66,1.5 -1.02,3.16 -1.02,4.91 0,0.47 0.03,0.94 0.08,1.4l14.18 0c0.4,-0.92 1.33,-1.57 2.4,-1.57 1.45,0 2.62,1.17 2.62,2.62 0,1.45 -1.17,2.62 -2.62,2.62 -1.07,0 -1.99,-0.64 -2.4,-1.57l-13.76 0c1.1,3.71 3.9,6.68 7.5,8.01 7.08,2.62 18.52,-1.54 23.72,-4.88l0.49 -0.32c1.03,-0.69 2.02,-1.42 2.97,-2.21 2.55,-2.11 4.8,-4.59 6.67,-7.35 0.54,-0.8 1.06,-1.63 1.54,-2.48 0.7,-1.24 1.33,-2.53 1.88,-3.86 1.17,-2.81 2,-5.83 2.45,-8.99l0.08 -0.6zm-21.17 11.63c0.57,0 1.04,0.47 1.04,1.04 0,0.57 -0.47,1.04 -1.04,1.04 -0.57,0 -1.04,-0.47 -1.04,-1.04 0,-0.57 0.47,-1.04 1.04,-1.04zm-9.99 8.96c0.57,0 1.04,0.47 1.04,1.04 0,0.57 -0.47,1.04 -1.04,1.04 -0.57,0 -1.04,-0.47 -1.04,-1.04 0,-0.57 0.47,-1.04 1.04,-1.04zm5.33 -17.91c0.57,0 1.04,0.47 1.04,1.04 0,0.57 -0.47,1.04 -1.04,1.04 -0.57,0 -1.04,-0.47 -1.04,-1.04 0,-0.57 0.47,-1.04 1.04,-1.04zm-7.56 -0.33c-0.06,0.09 -0.11,0.17 -0.17,0.26 0.06,-0.09 0.11,-0.17 0.17,-0.26zm-18.87 9.97l6.65 -0.16c0.15,-0.22 0.32,-0.44 0.49,-0.65l-7.13 0.81zm4.45 7.48l-11.52 0.79 11.59 0c-0.03,-0.26 -0.05,-0.53 -0.06,-0.79z" style="fill: 00afef"></path>
                  <path d="M61.55 16.14l3.84 0c0.65,0 1.17,0.52 1.17,1.17l0 3.84c0,0.65 -0.52,1.17 -1.17,1.17l-3.84 0c-0.65,0 -1.17,-0.52 -1.17,-1.17l0 -3.84c0,-0.65 0.52,-1.17 1.17,-1.17z" style="fill: #00afef"></path>
                  <path d="M67.32 12.49l2.32 0c0.39,0 0.71,0.32 0.71,0.71l0 2.32c0,0.39 -0.32,0.71 -0.71,0.71l-2.32 0c-0.39,0 -0.71,-0.32 -0.71,-0.71l0 -2.32c0,-0.39 0.32,-0.71 0.71,-0.71z" style="fill: #00afef"></path>
                  <path d="M64.43 10.44l1.29 0c0.22,0 0.39,0.18 0.39,0.39l0 1.29c0,0.22 -0.18,0.39 -0.39,0.39l-1.29 0c-0.22,0 -0.39,-0.18 -0.39,-0.39l0 -1.29c0,-0.22 0.18,-0.39 0.39,-0.39z" style="fill: #00afef"></path>
                  <path d="M67.94 10.04l0.65 0c0.11,0 0.2,0.09 0.2,0.2l0 0.65c0,0.11 -0.09,0.2 -0.2,0.2l-0.65 0c-0.11,0 -0.2,-0.09 -0.2,-0.2l0 -0.65c0,-0.11 0.09,-0.2 0.2,-0.2z" style="fill: #00afef"></path>
                  <path d="M54.52 23.81c-1.94,2.86 -4.28,5.43 -6.93,7.64 -0.99,0.82 -2.02,1.6 -3.1,2.31l-0.49 0.32 -0.01 0 -0.01 0c-0.05,0.03 -0.1,0.07 -0.15,0.1l-0 0 -0 0 -0.01 0c-0.05,0.03 -0.1,0.06 -0.14,0.09l-0.01 0 -0.01 0 -0 0 -0 0 -0.01 0 0 0c-2.84,1.79 -6.39,3.26 -9.73,4.24l0 0.01 19.06 0c6.22,0 11.26,-5.04 11.26,-11.26 0,-1.43 -0.27,-2.8 -0.75,-4.06l-1.94 0c-1.15,0 -2.08,-0.94 -2.08,-2.08l0 -3.06c-0.44,-0.31 -0.91,-0.6 -1.4,-0.84 -0.96,2.3 -2.15,4.51 -3.55,6.57z" style="fill: #00afef"></path>
                </g>
              </svg>
              <span class="fs-4 text1 align-middle">HelpDB</span>
            </a>
          </div>
          <!--Input-Pesquisa-->
          <div class="col-12 col-md py-2 d-flex align-items-center justify-content-center input-group">
            <div class="input-group" style="max-width: 600px">
            <input type="text" class="form-control border-white" placeholder="Pesquisar" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-light" type="submit" id="button-addon2">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" /> 
              </svg>
            </button>
            </input>
            </div>
          </div>
          <!--Fim Input-Pesquisa-->
          <!--Inicio Nav-bar-->
          <ul class="nav col-6 col-sm-auto py-2">
            <a class="nav-link text-light" aria-current="page" href="tela_principal.php">Início</a>
            <a class="nav-link dropdown text-light dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Sites IFMT</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="https://ava.ifmt.edu.br/">AVA</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://suap.ifmt.edu.br/">SUAP</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://academico.ifmt.edu.br/">Q-Acadêmico</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1KpLg0bUpX1JDN2oU8L4d0T9Ui_nEy7ZvcGAqBvxlPuM/edit#gid=135264424">Docentes</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://de.roo.ifmt.edu.br/inicio/">Departamento de Ensino</a>
              </li>
              <li>
                <a class="dropdown-item" href="https://de.roo.ifmt.edu.br/conteudo/pagina/calendario-academico-ifmt-campus-rondonopolis/">Calendário Acadêmico</a>
              </li>
            </ul>
          </ul>
          <!--Fim Nav-bar-->
          <div class="col-6 col-sm-auto text-end py-2">
            <a href="login.php" type="button" class="btn" id="button1">Entrar</a>
          </div>
      </div>
    </header>
    <!--Fim Cabeçalho-->
  </form>
  
  <form method="post" action="tela_principal.php">
  <!--Container-Principal-->
  <div class="container-md border border-2 rounded-4 text-center mt-1 py-3" style="max-width: 800px">
    <h1 class="">Perguntas recentes</h1>
    <div class="d-grid gap-2 col-8 mx-auto py-2" style="max-width: 350px">
      <a href="login.php"  class="btn" id="button1">Perguntar</a>
    </div>
  </form>
  
  <form method="post" action="tela_principal.php">
  <!--Filtros-->
  <div class="row justify-content-end border-top pt-1"> 
    <div class="col-sm-auto py-1">
      <select class="form-select" aria-label="Default select">
        <option selected disabled value="0">Categorias</option>
        <option value="1">Geral</option>
        <option value="2">Institucional</option>
        <option value="3">Informática</option>
        <option value="4">Química</option>
        <option value="5">Secretariado</option>
        <option value="6">Alimentos</option>
      </select>
    </div>
    <div class="col-sm-auto py-1">
      <select class="form-select" aria-label="Default select example">
        <option selected>Sem Respostas</option>
        <option value="1">Respondidas</option>
      </select>
    </div>
  </div>
  <!--Fim Filtros-->
  <!--Exibição de Perguntas-->
  <div class="table mt-2">
    <?php
    if(selecPer()){
      foreach(selecPer() as $dado){
        echo'<div class="row d-flex flex-column">';
          echo'<div class="col text-start pt-2 align-middle">';
            if(selecAva($dado['id_img']))
              $img = selecAva($dado['id_img']);
            echo'<img src="'.$img.'" width="40" height="40" class="rounded-circle p-0"/>';
            echo'<label><b>';
              echo $dado['nome'];
            echo'</b></label>&bull;<label class="fw-lighter text-muted">'.$dado['catper'].'</label>';
          echo'</div>';
          echo'<div class="col text-start">';
            echo'<label align="justify">';
              echo $dado['descper'];
            echo'</label>';
          echo'</div>';
          echo'<div class="col text-end">';
            echo'<button class="btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/></svg></button>
              <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                  <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856 0 .289-.036.586-.113.856-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a9.877 9.877 0 0 1-.443-.05 9.364 9.364 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964l-.261.065zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a8.912 8.912 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.224 2.224 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.866.866 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1z"/></svg></button>
              <a href="login.php" class="btn" id="button2">Responder</a>';
          echo'</div>';
        echo'</div><hr>';
        }
      }
    ?>
  </div>
  <!-- Fim Exibição de Perguntas-->
  </div>
  <!--Fim Container-Principal-->
  </form>
  
  <!--Inicio Rodapé-->
  <div class="container-fluid">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Features</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">Pricing</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">FAQs</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">About</a>
        </li>
      </ul>
      <p class="text-center text-muted">&copy; 2022 Company, HelpDB</p>
    </footer>
  </div>
  <!--Fim Rodapé-->

</body>

</html>