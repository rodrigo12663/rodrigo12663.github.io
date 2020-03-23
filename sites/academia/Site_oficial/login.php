<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap/js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="css/estiloCss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="adicionar/styleform.css">
<script src="css/bootstrap/js/jquery.min.js"></script>

</style>
<?php
  session_start();
  if (!isset($_SESSION['cliente'])) {
    echo "<script>alert('Para realizar a compra precisa fazer o login');</script>";
  }

?>
</head>

<body  style="background-image: url(imagens/login.jpg); background-repeat: no-repeat; height: 100%;">

        <section id="sectionPrincipal">
            <aside id="conteudoPrincipal">
              <div id="logo">
                <a href="inicio.php" style="list-style: none;text-decoration: none;"><h1>SHOP ACADEMY LIFE</h1></a>
              </div>
              <div id="forms">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Registrar</a>
                  </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active bg-light border" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <form id="formAluno" class="p-4" action="funcao_php/insere.php" method="post">
                        <div class="form-group">S
                          <label for="nome">Nome:</label>
                          <input style="width: 240px;" type="text" name="nome-cadastro" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                          <label for="nome">Email:</label>
                          <input style="width: 240px;" type="text" name="email-cadastro" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                          <label for="matricula">Senha</label>
                          <input style="width: 240px;" type="number" name="senha-cadastro" class="form-control" id="matricula">
                        </div>
                         <div class="form-group">
                          <label for="matricula">Senha</label>
                          <input style="width: 240px;" type="number" name="confirm-senha" class="form-control" id="matricula">
                        </div>


                        <div class="form-group text-right">
                          <input  style="margin-top: -7px; color:white; background-color:#273c75;" class="btn btn-warning" type="reset" value="Limpar">
                          <input class="btn btn-success" type="submit" value="Confirmar">
                        </div>

                        <?php
                        
                              
                         if(isset($_SESSION['msg'])){
                                  echo $_SESSION['msg'];
                                  unset($_SESSION['msg']);
                            }
                         else{
                                  echo "<br>não deu bom";
                           }
                    ?>
                      </form>




                    </div>
                    <div class="tab-pane fade bg-light  " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <form  class="p-4" action="funcao_php/valida.php" method="post">
                        <!-- Formulário Antigo -->
                        <!-- <label for="nome">Nome:</label>
                        <input type="text" name="aluno" class="form-control" id="nome"> -->

                        <!-- Formulário Novo -->
                        <!-- Precisa mudar os ids -->
                        <div class="form-group">
                          <label for="nome">Nome:</label>
                          <input style="width: 240px;" type="text" name="nome-login" class="form-control" id="nome">
                        </div>
                        <div class="form-group">
                          <label for="cpf">Email:</label>
                          <input style="width: 240px;" type="text" name="email-login" class="form-control" id="cpf">
                          <!-- Trocar os names -->
                          
                        </div>
                         <div class="form-group">
                          <label >Senha:</label>
                          <input style="width: 240px;" type="password" name="senha-login" class="form-control">
                          <!-- Trocar os names -->
                          
                        </div>


                        <div class="form-group text-right">
                          <input style="margin-top: -7px; color:white; background-color:#273c75;" class="btn btn-warning" type="reset" value="Limpar">
                          <input class="btn btn-success" type="submit" value="Confirmar">
                        </div>
                      </form>



                    </div>
                </div>
              </div>
            </aside>
          </section>

        <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>

<body>

</body>
</html>
