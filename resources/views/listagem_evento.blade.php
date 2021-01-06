
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
                          <a class="nav-link" href="{{ URL::to('/') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item">
                          <a class="nav-link" href="{{ URL::to('/cadastro/evento') }}">Cadastrar Eventos</a>
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

                @foreach($eventos as $evento)


                <div class="col-12 col-md-4 my-2">
                  <div class="card">
                      <img src="img/evento.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{$evento->nome}}</h5>
                        <p class="card-text">
                            <span><b>Data:</b> {{$evento->data_evento . " - " . $evento->horario}}</span> <br/>
                            <span><b>Local:</b> {{$evento->local}}</span> <br/><br/>
                            <span><b>Descrição</b> {{$evento->descricao}}</span> <br/><br/>   
                        </p>
                        <a href="#" class="btn btn-warning" onclick="confirmEvento({{$evento->id_evento}})">Quero participar</a>

                        {{-- @if($data_entrega->lessThan($data_atual);) --}}
                        {{-- @php($data = \Carbon\Carbon::parse($evento->data_evento)) --}}
                        
                        {{-- @if($data->isPast()) --}}
                        <a href="#" class="btn btn-success" onclick="feedbackEvento({{$evento->id_evento}})">Feedback</a>
                        {{-- @endif --}}
                      </div>
                    </div>
              </div>

              @endforeach
            </div>
        </div>    
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    

</body>

</html>


<script>

  function confirmEvento(id_evento)
  {

  
      Swal.fire({
        icon: 'success',
        title: "Ok!",
        text: "Sua presença foi confirmada com sucesso",
        })
      
  }

  function feedbackEvento(id_evento)
  {

    let url = "{{ URL::to('/evento/feedback') }}"

    const { value: text } = Swal.fire({
      title: "Feedback",
      input: 'textarea',
      inputPlaceholder: 'Digite o seu feedback aqui',
      inputAttributes: {
        'aria-label': 'Digite o seu feedback aqui'
      },
      showCancelButton: true
    })
    .then(value => {
      if (value && !value.dismiss) {
        $.ajax({
            url: url,
            headers: {'X-CSRF-Token': '{{ csrf_token() }}'},
            method: 'POST',
            data: {
              'feedback': value,
              'id_evento': id_evento
            },
          })
          .done(function (data) {
            Swal.fire('Feito!', 'O seu feedback foi recebido!', 'success');
           })
          .fail(function (err) {
            Swal.fire('Opa!', 'Algo deu errado. Por favor, tente novamente.', 'error');
            console.log(err);
            });
      
      } else {
          
          return;
        }
      
      });

  }

</script>