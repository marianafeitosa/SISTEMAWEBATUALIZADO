<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .col-11{
            margin: 0 1rem;
        }
    </style>
  </head>
  <body style="background-color: grey;">
      <div class="container" style="background-color: white; padding: 0;">
     <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white;">Cadastrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" style="color: white; opacity: 0.5;" >Consultar</a>
                      </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div style='margin-left:33px; margin-right:33px;'>
        <p>
        <div class="col-11">
          <style>
            div.col-11{
              text-align: center;
            }
          </style>
            
          <h5 class="texto">Consultar - Contatos Agendados</h5>
         
          <div class="table-responsive-xl" style="background-color:#007bff;">
          <table class="table"> 
    
            <thead>
              <tr class="bg-primary"></tr>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Origem</th>
                <th scope="col">Contato</th>
                <th scope="col">Observação</th>
                <th scope="col">Ação</th>
              </tr>
            

            </thead>
             <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setNome($_POST['nome']);
                            echo $pessoa->getNome();
                        ?>
                    </td>
                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setTelefone($_POST['telefone']);
                            echo $pessoa->getTelefone();
                        ?>
                    </td>
                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setOrigem($_POST['origem']);
                            echo $pessoa->getOrigem();
                        ?>
                    </td>

                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setData($_POST['data']);
                            echo $pessoa->getData();
                        ?>
                    </td>

                    <td>
                    <?php
                            require_once("pessoa.class.php");
                            $pessoa = new Pessoa();
                            $pessoa->setObservacao($_POST['observacao']);
                            echo $pessoa->getObservacao();
                        ?>
          </div>
              
                
               
               <div>
