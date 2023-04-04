<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contato </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
	
<style>
  body{
    background: url('img/logo.png'); 
    height: 770px;
    background-color:#EFE8E3;

   
   
}

h2{
   text-align: center;
   margin-top:45px ;
   font-family: n;

}
h6{
    margin-right:400px;
    color:#c8c8c8;
}

form{
 margin:center;
 margin-top: 27px;
 margin-left: 70px;

}

.wrapper{
    position: relative;
    width: 400px;
    height: 639px;
    background: transparent;
    border: 2px solid rgba(14, 13, 13, 0.5);
    margin:auto;
    margin-top: 230px;
    border-radius: 20px;
    backdrop-filter: blur(20px);
    

}

.input-box {
    position: relative;
    width: 80%;
    height: 60px;
    border-bottom: 2px solid  #1e1f20;
    margin:  30px 0;
   

}

.input-box label {
    position: absolute;
    top: 50%;
    left: 5px;
    transform:translatey(-50%);
    font-size: 1em;
    color: #1e1f20;
    font-weight: 500;
    pointer-events: none;

}

.input-box input {
    width: 100%;
    height: 50%;
    background: transparent;
    border: #1e1f20;
    outline: none;
    margin-top: 35px;
}

.input-box .icon {
   position: absolute;
   right: 8px;
   font-size: 1.2em;
   color: #1e1f20;
   line-height: 57px;

}

li{
  margin-left: 20px;
}

footer{
            position: absolute;
            background-color:#212529;
            height:auto;
            width:100%;
            color: #c8c8c8;
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


</style>

</head>
<body>
<header>
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
</header>
 <div class="wrapper">
    <div class="form-box contato">
    <h2>Contato</h2>
    <form id="frmCadastro">
            <div class="input-box">
                <span class="icon"><ion-icon name="pencil-outline"></ion-icon></span>
                <input type="text" id="nome">
                 <label>Nome</label>
                </div>

                <div class="input-box">
                <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                <input type="text" id="telefone">
                 <label>Telefone</label>
                </div>

                <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="text" id="email">
                 <label>E-mail</label>
                </div>

                <div class="input-box">
                <span class="icon"><ion-icon name="trail-sign-outline"></ion-icon></span>
                <input type="text" id="cep">
                 <label>Cep</label>
                </div>

                <div class="input-box">
                <span class="icon"><ion-icon name="location-outline"></ion-icon></span>
                <input type="text" id="logradouro">
                 <label>Logradouro</label>
                </div>

                <div class="input-box">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <input type="text" id="bairro">
                 <label>Bairro</label>
                </div>

                
    </form>


 </div>
    </div>

    <footer>
            <div class="rodape  navbar-dark">
                <h3>EIKON DEVELOPER</h3>
            </div>
        </footer>
 
    </body>
</html>

    <script type="text/javascript">
        var url = "";
        	var validCep = false;
        	var validEmail = false;
        	var validTelefone = false;

            function validarFormulario(){
				return( validCep &&  validEmail &&  validTelefone );
			}


			$(document).ready(function(){

                $("wrapper").focus(function (){
                    
                })
				$("#frmCadastro").submit(function( event ){
					event.preventDefault();
					alert("Depois me preocupo em submeter o form pro php!");
					if (validarFormulario()){
					} else{
						alert("Arrume os dados!");
					}
				});

                $("input").keypress(function( event ){
					if ( event.keyCode === 13 ){
						event.preventDefault();
						$(this).blur();
					}
				});
				
				$("#cep").blur(function( event ){
					let cepStr = $(event.target).val().trim(); 

					if ( cepStr.trim().replace("-","").match(/^[\d]{8}$/g) ){
    					let url = "https://viacep.com.br/ws/"+ cepStr +"/json/";
    					$.get( url , function(data, status){

    							$("#logradouro").val(data.logradouro);
    							$("#complemento").val(data.complemento);
    							$("#bairro").val(data.bairro);
    							$("#localidade").val(data.localidade);
    							$("#uf").val(data.uf);
    					});
    					validCep = true;
    					$(event.target).css("color", "black");			
    					$("#msgCep").hide();
					}else{
						$(event.target).css("color", "red");
						$(event.target).focus();
						$("#msgCep").html("Cep Inválido!").css("color", "red");
						$("#msgCep").show();
						validCep = false;
					}
				});
			});

        </script>
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" > </script> <!-- para os ícones!-->
    <script  nomodule  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>

</body>
 </html>
