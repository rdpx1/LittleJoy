
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login - LittleJoy</title>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" media="all"> 
    <style>
        #bg_index {
            background-image: url('img/bg-index.jpg');
            background-position: center ;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .bg-index{
            height: 100vh;
        }
        .texto{
            margin-top: 33vh;
        }
    </style>    

</head>

<body>

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
                        
                        <li class="nav-item">
                          <a class="nav-link btn btn-primary px-4" href="{{ URL::to('/login') }}">Fazer login</a>
                        </li>

                      </ul>
                    </div>
                  </nav>
            
        </div>
    </header>

    <!-- Conteúdo -->
    <section class="main-content">
        <div class="container-fluid">
            
            <div class="row no-gutter">
                <div id="bg_index" class="col-12 d-none d-md-flex bg-index bg-primary p-0">
                    <div class="texto px-5">
                        <h1 class="font-weight-bold text-white">Seja voluntário</h1>
                        <h2 class="h4 text-white">Ajude instituições em eventos, faça alguém feliz!</h2>

                        <a href="{{ URL::to('/cadastro/usuario') }}" class="btn btn-primary mt-5 px-5">Quero ajudar</a>

                    </div>

                </div>
               
            </div>
        </div>    
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>


    

</body>

</html>