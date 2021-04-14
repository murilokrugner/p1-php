<?php
session_start();

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
   
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-center">
            <a href="cadastro.php">
                    <button class="btn btn-outline-success me-2" type="button">Cadastra Paciente</button>
                </a>
                
                <a href="ficha.php">
                    <button class="btn btn-outline-success me-2" type="button">Ficha de avaliação</button>
                </a>
                <a href="prontuario.php">
                    <button class="btn btn-outline-success me-2" type="button">Prontuário</button>
                </a>
            </form>
        </nav>
        <div class="hero-body">        
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro de Pacientes</h3>
                    <h3 class="title has-text-grey">Ficha do Paciente</h3>
                   <!-- <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                    </div> -->
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuPaciente" data-bs-toggle="dropdown" aria-expanded="false">
                                    Paciente
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuPaciente">
                                    <li><a class="dropdown-item" href="#">Paciente 1</a></li>
                                    <li><a class="dropdown-item" href="#">Paciente 2</a></li>
                                    <li><a class="dropdown-item" href="#">Paciente 3</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="resultado" type="text" class="input is-large" placeholder="Resultado do paciente">
                                </div>
                            </div>

                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar Prontuario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


</html>