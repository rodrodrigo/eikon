<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        
        <title>Eikon </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        
        <script> 
            $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
            });

            $(document).ready(function(){
            $("#flip1").click(function(){
                $("#panel1").slideToggle("slow");
            });
            });
        
            $(document).ready(function(){
            $("#flip2").click(function(){
                $("#panel2").slideToggle("slow");
            });
            });

        </script>
        
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
           img{
            width: 20%;
            height: 18%;
           }


           
           footer{
            position: absolute;
            background-color:#212529;
            height:auto;
            width:100%;
            color:#c8c8c8;
            margin-top:300px;
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

           #pag{
            align-items: center;
            width: 95vw;
            height: 50vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        h2{
            display: flex;
            justify-content: center;
            font-family: Cochin, Georgia, Times, 'Times New Roman', serif;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-top: 200px;
            font-size: 20px;
            padding: 5px;
        }
       
        
           #panel, #flip, #flip1, #panel1, #flip2, #panel2 {
            margin-top: 50px;
            padding: 2px;
            text-align: center;
            border: solid 1px #c3c3c3;
            border-radius: 4px;
            width: 300px;
            padding: 30px;
            margin: 30px;
            }
           

            #panel, #panel1, #panel2 {
            padding: 10px;
            background-color: #faf7d3;
            display: none;
            border-radius: 5px;
            width: 280px;
            }

        
           h6{
            margin-right:350px;
            color:#c8c8c8;
           }  
           li{
            margin-left: 20px;
          }
          h7{
            display: flex;
            text-align: center;
            width: 50%;
            margin: auto;
            justify-content: center;
            font-family:Georgia, Times, 'Times New Roman', serif;
            letter-spacing: 3px;
            font-size: 15px;
            padding: 5px;
            background-color: #e8eceb;
            align-items: center;
            border-radius: 9px;
          }
        </style>
    </head>
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
        <h2>Conheça mais a fundo nossa empresa:</h2>
        <div id="pag">
            
            <div id="flip"><img src="img/missao.png"></div>
            <div id="panel"><b>Missão</b>
                <p>Construir sites dinâmicos, eficazes e modernos para os nossos clientes </p>
            </div>

            <div id="flip1"><img src="img/visao.png"></div>
            <div id="panel1"><b>Visão</b>
                <p>Ser reconhecida por sua comunicação com os usuários</p>
            </div>

            <div id="flip2"><img src="img/valores.png"></div>
            <div id="panel2"><b>Valores</b>
                <p>Comunicação, inovação, modernidade e diversidade</p>
            </div>
            
        </div>
        <h7>"Missão, Visão e Valores são as partes de uma das mais importantes ferramentas de gestão que as empresas podem usar para definir a sua estratégia de negócio. É a partir da MVV que as empresas alinham seu propósito e promovem a reflexão sobre o presente e futuro do empreendimento."</h7>
        <footer>
            <div class="rodape">
                <h3>EIKON DEVELOPER</h3>
            </div>
        </footer>
 
    </body>
</html>
