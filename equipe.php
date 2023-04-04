<!doctype html>
<html lang="pt-br">
  <head>
    <title>Equipe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
     <style>
            body, html {
              height: 100%;
              background-color: #c3c3c3;
              }


           #logo{
            height:480px;
            font-size:36px;
            background-repeat:no-repeat;
            margin: auto;
            margin-top: 150px;
            display: flex;
            justify-content: center;
            
           }
           #logo img{
            width: 60%;
            height: 300px;
           
           }

           footer{
            position: absolute;
            background-color:#212529;
            height:auto;
            width:100%;
            color:#c8c8c8;
            margin-top:200px;
           }

           .link{
            
            display: flex;
            justify-content: center;
            font-family: Cochin, Georgia, Times, 'Times New Roman', serif;
            text-transform: uppercase;
            letter-spacing: 3px;
            width: 200px;
            font-size: 20px;
            margin: auto;
            border-radius: 3px;
            padding: 5px;
            background: #c8c8c8;
           }
           .link:hover{
            background-color: #ff8c8c; 
            color: #fff;
            transition: 0.2s;
            opacity: 0.7;   
           }
           .rodape{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
           }


           .rodape h3{
                font-size: 1.8em;
                font-weight: 500;
                text-transform: capitalize;
                line-height: 3rem;
                margin-left:40px;
           }

           .card1,.card2,.card3{
            margin-top: 200px;
            margin-left:70px;
            background-color:#EFE8E3;
            padding: 10px;
           }
           h6{
            margin-right:400px;
            color:#c8c8c8;
           }  
           li{
            margin-left: 20px;
          }

         
           

     </style>
  </head>
  <script> 
        $(document).ready(function(){
        $(".card1").mouseenter(function(){
            $(".card1").animate({
              padding:'0px',
             


            });

        });
        $(".card1").mouseleave(function(){
            $(".card1").animate({
              padding:'10px'


            });

        });
        $(".card2").mouseenter(function(){
            $(".card2").animate({
              padding:'0px',
             


            });

        });
        $(".card2").mouseleave(function(){
            $(".card2").animate({
              padding:'10px'


            });

        });
        $(".card3").mouseenter(function(){
            $(".card3").animate({
              padding:'0px',
             


            });

        });
        $(".card3").mouseleave(function(){
            $(".card3").animate({
              padding:'10px'


            });

        });
        });
        
    </script>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><h6>EIKON</h6></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="mvv.php">Missão, Visão e Valores</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="historia.php">História</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" href="equipe.php">Equipe</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" href="projetos.php">Projetos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Contato</a>
                </li>   
            </ul>
            </div>
        </div>
        
        </nav>
  <div class="row row-cols-1 row-cols-md-3 g-3 col-10 m-auto">

      <div class="col">
      <div class="card1" style="width: 20rem;">
        <img src="img/cunha.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Larissa Cunha</h5>
          <p class="card-text">Olá, meu nome é Larissa Cunha, eu tenho 18 anos e sou estudante do 4°ano de informática do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos.</p> 
            <p>  Sou co-criadora da empresa Eikon.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Conheça nossas qualificações!
        </div>
      </div>
    </div>
    
    <div class="col">
        <div class="card2" style="width: 20rem;">
          <img src="img/torres.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Larissa Torres</h5>
            <p class="card-text"> Olá, meu nome é Larissa Torres, eu tenho 18 anos e sou estudante do 4°ano de informática do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos </p>
            <p> Sou co-criadora da empresa Eikon.   </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
         
              Conheça nossas qualificações!
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card3" style="width: 20rem;">
          <img src="img/rodrigo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rodrigo Xavier</h5>
            <p class="card-text">Olá, meu nome é Rodrigo Xavier, eu tenho 18 anos e sou estudante do 4°ano de informática do Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Campus Guarulhos</p>
            <p> Sou o co-criador e gerente da empresa Eikon.</p>
            <button type="button1" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Conheça nossas qualificações!

        <!-- MODAL -->

            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>HTML</li>
                      <li>CSS</li>
                      <li>PHP</li>
                      <li>Design</li>
                      <li>Brainstorm</li>
                      <li>Marketing</li>   
                      <li>Adiministração</li>
                      <li>Banco de dados</li>
                      <li>Requerimentos do sistema</li>   
                      <li>Atendimento ao público</li> 
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button1" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


     
    <footer>
            <div class="rodape">
                <h3>EIKON DEVELOPER</h3>
            </div>
        </footer>
  </body>
</html>
