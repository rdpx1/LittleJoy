
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" media="all">   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        #bg_login {
            background-image: url('/img/bg-login.jpg');
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
                        <img src="{{URL::asset('img/logo.svg')}}" style="width:100px;" class="mx-auto d-flex" alt="LittleJoy">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ml-auto float-left">
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('/listagem') }}">Eventos</a>
                        </li>

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nome do usuário
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Minha conta</a>
                            <a class="dropdown-item" href="#">Meus Eventos</a>
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
                    <h1 class="h3"> Cadastro de evento </h1>
                    <small> Cadastros de eventos </small>
                </div>
                
               <div class="col-12">
                <form class="py-4" id="f_cadastro_evento" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputNome">Nome do evento</label>
                        <input type="nome" name="nome_evento" class="form-control" id="exampleInputNome" aria-describedby="nomeHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputData">Data do evento</label>
                        <input type="nome" name="data_evento" class="form-control" id="exampleInputData" aria-describedby="dataHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputData">Horário</label>
                        <input type="nome" name="horario" class="form-control" id="exampleInputData" aria-describedby="dataHelp">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputLocal">Local</label>
                      <input type="text" name="local" class="form-control" id="exampleInputLocal" aria-describedby="localHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDescricao">Descrição</label>
                        <textarea class="form-control" name="descricao" id="exampleInputdescricao"></textarea>
                    </div>

                    <label for="exampleInputDescricao">Cadastrar imagem</label>
                    <div class="input-group mb-3">
                        
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="imagem" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Escolher imagem</label>
                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-12  text-right">
                            <a id="submitEvento" submit="" class="btn btn-success" onclick="salvar()">Criar evento</a>
                        </div>
                    </div>

                </form>
                    <hr>
                    
                    <div class="col-12 pb-md-3 mt-md-4" style="padding: 0px;">
                      <table id="dt_conteudo" class="table table-striped table-bordered font-12" style="width:100%">
                        <thead>
                          <tr>
                            <th>ID Evento</th>
                            <th>Título</th>
                            <th>Tipo</th>
                            <th>Resumo</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>                                
                        </tbody>
                      </table>
                  </div>  

                </form>
               </div>
            </div>
        </div>    
    </section>
  </body>
</html>

{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> --}}

<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">



  function salvar() 
  {

    let url = "{{ URL::to('/cadastro/evento/post') }}"
    var formData = new FormData(document.getElementById("f_cadastro_evento"));


    $.ajax({
      type: 'POST',
      headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
      url: url,
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
                
      }).done(function (data) {
        console.log(data);
        data = JSON.parse(data);

        Swal.fire({
        icon: 'success',
        title: "Ok!",
        text: "O evento foi incluído com sucesso",
        }).then(function(){
            // window.location.reload();
        });

      }).fail(function (data) {

          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Alguma coisa deu errada! Tente novamente!',
          });

          console.error('AJAX para '+url+' falhou', data);        
    });
        



  }

</script>