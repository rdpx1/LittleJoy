
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Listagem de Eventos - LittleJoy</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" media="all">   
    <style>
        #bg_login {
            background-image: url('img/bg-login.jpg');
            background-position: center ;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-image{
            height: 100vh;
        }
    </style> 

</head>

<body>

    
        

    <!-- Conteúdo -->
    <header>
        <div class="container-fluid">
            
                <nav class="navbar navbar-expand-lg bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo.svg" style="width:100px;" class="mx-auto d-flex" alt="LittleJoy">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ml-auto float-left">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('/cadastro_evento') }}">Eventos</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nome do usuário
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a href="#" class="dropdown-item" href="#">Minha conta</a>
                            <a href="#" class="dropdown-item" href="#">Meus Eventos</a>
                            <a class="dropdown-item" href="#">Sair</a>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </nav>
            
        </div>
    </header>
    <section class="main-content bg-faded">
        <div class="container">
            
            <div class="row">
                <div class="col-12 py-5">
                    <h1 class="h3"> Eventos na sua cidade </h1>
                    <small>Eventos perto de você</small>
                </div>
                
                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <img src="img/evento.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Feira de adoção</h5>
                          <p class="card-text">
                              <small>Protetores SCS</small> <br/><br/>
                              <span><b>Data:</b> 00/00/0000</span> <br/>
                              <span><b>Local:</b> Praça Getulio Vargas - Santa Cruz do Sul</span> <br/><br/>   
                          </p>
                          <a href="#" class="btn btn-warning">Quero participar</a>
                        </div>
                      </div>
                </div>

                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <img src="img/evento.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Feira de adoção</h5>
                          <p class="card-text">
                              <small>Protetores SCS</small> <br/><br/>
                              <span><b>Data:</b> 00/00/0000</span> <br/>
                              <span><b>Local:</b> Praça Getulio Vargas - Santa Cruz do Sul</span> <br/><br/>   
                          </p>
                          <a href="#" class="btn btn-warning">Quero participar</a>
                        </div>
                      </div>
                </div>

                <div class="col-12 col-md-4 my-2">
                    <div class="card">
                        <img src="img/evento.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Feira de adoção</h5>
                          <p class="card-text">
                              <small>Protetores SCS</small> <br/><br/>
                              <span><b>Data:</b> 00/00/0000</span> <br/>
                              <span><b>Local:</b> Praça Getulio Vargas - Santa Cruz do Sul</span> <br/><br/>   
                          </p>
                          <a href="#" class="btn btn-warning">Quero participar</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>    
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>


    

</body>

</html>