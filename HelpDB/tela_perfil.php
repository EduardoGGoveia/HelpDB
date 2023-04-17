<?php 
  session_start();
  require 'inc/funcoes.php';

  if($_SESSION['tipous'] = 1)
    $tipo = 'Aluno';
  else
    $tipo = 'Professor';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" href="img/icons/icone_logo_7.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <title>Perfil</title>
</head>

<body>

  <form method="post" action="tela_principal2.php">
    <!--Inicio Cabeçalho-->
    <header style="background-color: #212529">
      <div class="container-xxl">
        <div class="row justify-content-center">
          <div class="col-6 col-sm-auto py-2">
            <a href="tela_principal2.php" class="d-flex align-items-center justify-content-center mb-lg-0 me-lg-auto text-light text-decoration-none">
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
            <a class="nav-link text-light" aria-current="page" href="tela_principal2.php">Início</a>
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
          <!--Inicio Menu-Perfil-->
          <div class="col-6 col-sm-auto text-end py-2">
            <div class="dropdown ">
              <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src=<?php echo $_SESSION['avatar'] ?> width="36" height="36" class="rounded-circle" />
              </a>
              <ul class="dropdown-menu text-small">
                <li>
                  <a class="dropdown-item" href="tela_perfil.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg>Ver Perfil
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li class="align-middle"><a class="dropdown-item " href="tela_principal.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                  </svg>Desconectar
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!--Fim Menu-Perfil-->
        </div>
      </div>
    </header>
    <!--Fim Cabeçalho-->
  </form>
  <div class=" container-md border border-2 py-2 align-items-center justify-content-center rounded-3 mt-1 " style="max-width: 1000px">
  <div class="main-body">
    <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src=<?php echo $_SESSION['avatar'] ?> alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4><?=  $_SESSION['nome'] ?></h4>
                <button type="button" class="btn" id="button1" data-bs-toggle="modal" data-bs-target="#modal-avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg> Editar Avatar</button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-avatar" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">Alterar Avatar
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body align-items-center">
                          <!--Local para colocar os avatares-->
                          <table>
                            <thead>
                              <tr>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                              <?php 
                              $con = consultImg();
                              if(isset($con))
                              foreach($con as $avatares){
                                echo '<td><img src="'.$avatares['address'].'"width="36" height="36" class="rounded-circle"></td>';
                              }
                              ?>
                              </tr> 
                            </tbody> 
                        </table>
                        </div>
                        <div class="modal-footer">
                          <div class="row">
                            <button type="submit" class="btn" id="button1">Confirmar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Fim do Modal-->
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" /> 
                </svg> Função
              </h6>
              <span class="text-secondary"><?= $tipo ?></span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Nome</h6>
              </div>
              <div class="col-sm-9 text-secondary" id="nome">
                <?=  $_SESSION['nome'] ?>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Curso</h6>
              </div>
              <div class="col-sm-9 text-secondary" id="curso">
                <?=  $_SESSION['curso'] ?>
              </div>
            </div><hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary" id="email">
                Exibição do email
              </div>
            </div><hr>
            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Matricula</h6>
              </div>
              <div class="col-sm-9 text-secondary" id="senha">
                Exibição da Matricula
              </div>
            </div><hr>
            <div class="row">
              <div class="col-sm-12">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal-dados" id="button1">Editar Dados</button>
                <!-- Modal -->
                <div class="modal fade" id="modal-dados" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        Editar Dados
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div> 
                      <div class="modal-body align-items-center">
                        <div class="row mb-3">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Nome</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="<?= $_SESSION['nome']?>" id="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Função/Curso</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <select class="form-control" placeholder="Curso" type="text" id="itfuncao">
                              <option><?= $_SESSION['curso']?></option>
                              <option>EMI-Informática</option>
                              <option>EMI-Secretariado</option>
                              <option>EMI-Quimica</option>
                              <option>EMI-Alimentos</option>
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="Exibição do email" id="itemail">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Senha</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="Exibição da senha" disabled>
                            <a href="../recuperar senha/senha-esquecida-email-dp.html">
                              <input type="button" class="btn btn-primary" value="Redefinir senha" style="margin-top: 5%">
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <div class="row">
                          <button type="submit" class="btn" id="button1">Confirmar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Fim do Modal-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col py-3 text-center  justify-content-center align-items-center ">
    <div class="container-fluid rounded-3 pt-2 text-center">
      <h2>Histórico</h2>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="tela_perfil.php">Perguntas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tela_perfil2.php">Respostas</a>
        </li>
      </ul>
      <!-- Aqui começa a tabela de perguntas do usuário  -->
      <div class='table mt-2'>
        <?php
        $idusuario = $_SESSION['idusuario'];
        if(selecPerUs($idusuario)){
          foreach(selecPerUs($idusuario) as $dados){
            echo'<div class="row d-flex flex-column">';
              echo'<div class="col text-start align-middle">';
                echo'<label>';
                echo'</label>';
              echo'</div>';
              echo'<div class="col text-start">';
                echo'<label>'.$dados['descper'].'</label>';
              echo'</div>';
              echo'<div class="col text-end">';
                echo'<a href="pergunta.php?idpergunta='.$dados['idpergunta'].'" class="btn" id="button2">Ver respostas</a>';
              echo'</div>';
            echo'</div><hr>';
          }
        }
        ?>
      <!-- Aqui termina -->
    </div>
  </div>
  </div>

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