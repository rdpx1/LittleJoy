
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
    <section class="main-content">
        <div class="container-fluid">
            
            <div class="row no-gutter">
                <div id="bg_login" class="col-md-6 d-none d-md-flex bg-image bg-primary p-0"></div>
                <div class="col-md-6 bg-light">
                    <div class="login d-flex align-items-center p-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <img src="assets/img/logo.svg" style="width:100px;" class="mb-5 mx-auto d-flex" alt="LittleJoy">
                                    <h3 class="display-4 pt-4">Olá!</h3>
                                    <p class="text-muted mb-4">Faça seu login abaixo.</p>

                                    <form class="py-5">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">E-mail</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Senha</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <a href="listagemInicial.html" type="submit" class="btn btn-success">Entrar na minha conta</a>
                                            </div>
                                            <div class="col-12 col-md-6 text-center">
                                                <a href="{{ URL::to('/cadastro') }}" class="btn btn-link">Ainda não tenho conta</a>
                                            </div>
                                        </div>     
                                    </form>

                                    
                                    <div class="text-center d-flex justify-content-between pt-5">
                                        <p>© 2020 - LittleJoy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>


    

</body>

</html>