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
            margin-top:250px;
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
            width: 50%;
            margin: auto;
            height: 10vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        #pag1,#pag2{
            width: 90vw;
            height: 40vh;
            margin-top: 140px;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        #pag2{
            width: 75vw;
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
       
    
        h4 {
            display: flex;
            justify-content: center;
            text-align: center;
            font-size: 15px;
             margin-bottom: 1.5em;
            line-height: 1.4em;
            font-family:Georgia;
            margin-top: auto;
}
        
           h6{
            margin-right:400px;
            color:#c8c8c8;
           }  
           li{
            margin-left: 20px;
          }
          #pag2 h7{
           
            color: #31ce8b;
            margin-right: 20px;
            font-size: 16px;

          }
          h7{
            display: flex;
            justify-content: center;
            text-align: center;
            height: 100px;
            font-size: 20px;
            color: #e9164b;
            margin-left: 20px;
            text-transform: uppercase;
            font-weight: bold;
          }
          p{
            display: flex;
            text-align: center;
            width: 50%;
            margin: auto;
            justify-content: center;
            font-family:Georgia, Times, 'Times New Roman', serif;
            letter-spacing: 3px;
            margin-top: 200px;
            font-size: 15px;
            padding: 5px;
        }
       p,h4{
        background-color: #e8eceb;
        align-items: center;
        border-radius: 9px;
       }
        </style>
    </head>
    <script> 
        $(document).ready(function(){
        $("body").mouseenter(function(){
            $("#vid").animate({
                marginLeft:'300px',
                width:'450',
                height:'300px'
                
            });
            $("#vid2").animate({
                marginRight:'300px',
                width:'450',
                height:'300px'
                
            });
            $("#pag2").animate({
                marginLeft:'300px',
                
                
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
        <h2>Conheça nossos trabalhos de pesquisa:</h2>
        <div id="pag">
         <h4>"A disciplina de Projeto Integrador em Tecnologia da Informação está presente no curso a partir do segundo ano do curso Técnico em Informática para Internet, o componente foi criado para realizar a integração entre as disciplinas da formação geral e da formação técnica. O foco da disciplina é o projeto científico, a aluno irá aprender os conceitos de pesquisa, dos procedimentos e ritos da pesquisa, como elaborar um projeto de pesquisa e também aprender como preparar o projeto para submissão nos eventos de iniciação científica e por fim participar de avaliação por meio de banca de avaliação."</h4>   
        </div>
        <div id="pag1">
        <iframe id="vid" width="200" height="100" src="https://www.youtube.com/embed/3tie8DEv4OY" title="Apresentação do Projeto | BRAGANTEC | Projeto Safira" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h7>Projeto Safira</h7>
        </div>
        
        </div>
        <div id="pag2">
            <h7>Auxílio para pessoas analfabetas</h7>
            <iframe id="vid2" width="200" height="100" src="https://www.youtube.com/embed/06GocoEFjfQ" title="Projeto integrador - Auxílio para pessoas analfabetas por meio da tecnologia." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <p>"Por meio da pesquisa o aluno tem possibilidade de descobrir um mundo diferente, coisas novas, curiosidades. Dessa forma, o professor tem a incumbência de gerenciar e orientar os seus alunos na busca de informações, sua função é disponibilizar referências bibliográficas, oferecendo melhores condições de desenvolvimento da pesquisa. Além de atuar na orientação da construção de textos a partir do material da pesquisa, o professor deve ensinar como retirar as partes mais importantes do conteúdo pesquisado. Outro ponto de grande relevância que o educador deve abordar é a conscientização de que uma pesquisa não é uma mera cópia e sim uma síntese de um conjunto de informações."</p>
        <footer>
            <div class="rodape">
                <h3>EIKON DEVELOPER</h3>
            </div>
        </footer>
 
    </body>
</html>
