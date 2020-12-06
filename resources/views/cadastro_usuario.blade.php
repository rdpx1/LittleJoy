
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                
                <div class="col-md-6 bg-light">
                    <div class="login d-flex align-items-center p-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <img src="img/logo.svg" style="width:100px;" class="mb-5 mx-auto d-flex" alt="LittleJoy">
                                    <h3 class="display-4 pt-3">Olá!</h3>
                                    <p class="text-muted mb-4">Crie sua conta abaixo</p>

                                    <form class="py-4" id="cadastro_usuario" action="{{ URL::to('') }}">
                                        <div class="form-group">
                                            <label for="exampleInputNome">Nome completo</label>
                                            <input type="nome" class="form-control" id="exampleInputNome" name="nome" aria-describedby="nomeHelp">
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleInputData">Data de nascimento</label>
                                            <input type="nome" class="form-control" id="exampleInputData" aria-describedby="dataHelp">
                                          </div>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">E-mail</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTelefone">Telefone</label>
                                            <input type="tel" class="form-control" id="exampleInputTelefone" aria-describedby="TelefoneHelp">
                                          </div>

                                        <span class="font-weight-bold"> Dados de endereço </span>

                                        <div class="form-group mt-2">
                                            <label for="exampleInputCidade">Cidade</label>
                                            <input type="text" class="form-control" id="exampleInputCidade" aria-describedby="CidadeHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEndereco">Endereço</label>
                                            <input type="text" class="form-control" id="exampleInputEndereco" aria-describedby="EnderecoHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNumero">Número</label>
                                            <input type="text" class="form-control" id="exampleInputNumero" aria-describedby="NumeroHelp">
                                        </div>

                                        <span class="font-weight-bold"> Escolha sua senha </span>

                                        <div class="form-group mt-2">
                                          <label for="exampleInputPassword1">Senha</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <a type="submit" class="btn btn-success" id="submitCadastro">Criar conta</a>
                                            </div>
                                            <div class="col-12 col-md-6 text-center">
                                                <a href="{{ URL::to('/') }}" class="btn btn-link">Já tenho conta</a>
                                            </div>
                                        </div>     
                                    </form>

                                    
                                    <div class="text-center d-flex justify-content-between pt-4">
                                        <p>© 2020 - LittleJoy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bg_login" class="col-md-6 d-none d-md-flex bg-image bg-primary p-0"></div>
            </div>
        </div>    
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>


    

</body>



<script type="text/javascript">

$("#submitCadastro").click(function(){

    let url = "{{ URL::to('/cadastro/post') }}"
    let formData = new FormData(document.getElementById("cadastro_usuario"));
            
            $.ajax({
                type: 'POST',
                headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
        
                    data = JSON.parse(data);
                    console.log(data);

                if(data['code'] ==  '200'){
                } else { 
                }
            },
            }).fail(function () {

            });

})

</script>


</html>