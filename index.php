<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        
        <title>Eikon </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        
        <style>
            body, html {
            height: 100%;
            background-color: #EFE8E3;
            }


            .parallax {
                background-image: url('img/fundo.png');
                height: 100%;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 250px;
            }

            .parallax2{
            background-image: url('img/fundo2.png');
            height: 100%; 
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 250px;
            }

      

           #logo{
            height:480px;
            font-size:36px;
            background-repeat:no-repeat;
            margin: auto;
            margin-top: 60px;
            display: flex;
            justify-content: center;
            
           }
           #logo img{
            width: 50%;
            height: 600px;
           
           }
           img{
            width: 20%;
            height: 18%;
           }
           
           h6{
            margin-right:400px;
              color:#c8c8c8;
        }

         
           footer{
            position: absolute;
            background-color:#212529;
            height: auto;
            width:100vw;
            color: #c8c8c8;
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



        </style>
    </head>
    <script> 
        $(document).ready(function(){
        $("body").mouseenter(function(){
            $(".nav-item").animate({
                padding: '10px'

            });
            $("#logo img").animate({
                margin: '30px',
                width: '50%',          
                height: '300px'
            });
            $("#logo ").animate({
                width: '40%',          
                height: '300px'
            });
        });
        });
    </script>
        <body>
           

        </div>

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

            <div id="logo">   <img src="img/logo.png"></div>
            
            <div style="height:2px;background-color:black;font-size:36px"></div>

            <div class="parallax">
                <div class="link">
                    <a class="btn btn-primar" href="mvv.php">Missão, Visão e Valores</a>
                </div>
            </div>
            <div style="height:2px;background-color:black;font-size:36px"></div>

            <div class="parallax2">
                <div class="link">
                    <a class="btn btn-primar" href="equipe.php">Equipe</a>
                </div>
            </div>
            <div style="height:2px;background-color:black;font-size:36px"></div>

            <div class="parallax">
                <div class="link">
                    <a class="btn btn-primar" href="#">Projetos</a>
                </div>
            </div>
            <div style="height:2px;background-color:black;font-size:36px"></div>
            
            <div class="parallax2">
                <div class="link">
                    <a class="btn btn-primar" href="#">Contato</a>
                </div>
            </div>
            <div style="height:2px;background-color:black;font-size:36px"></div>

        <footer>
            <div class="rodape">
                <h3>EIKON DEVELOPER</h3>
            </div>
        </footer>
 
    </body>
</html>
