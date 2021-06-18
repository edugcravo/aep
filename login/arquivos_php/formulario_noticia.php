
<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header("../index.html");
        session_destroy();
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar noticia</title>
</head>
<style>
   
body {
    background: linear-gradient(to left,#d3d3d3,#a9a9a9);
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    text-align: center;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    min-width: 100vw;

}
    #bloco {
    background-color: white;
    opacity: 0.85;
    padding: 2rem; 
    border-radius: 8px;
    box-shadow: 0 0 10px #9ecaed;
    min-height: 40vh;
    max-width: 350px;
    box-shadow: 0 0 10px #000;
    }

    .input-field [type="text"]{
        width: 100%;
        text-align: left;
        padding: 0px 18px;
        background-image: url(imagens/user.png);
        background-size: 15px;
        background-repeat: no-repeat;
        background-position: 0px;
        font-size: 16px;
    }
</style>

</head>

<body>
<div id="bloco">

    <div id="area-logo">
        <h1>Saude<span class="branco">Curitiba</span></h1>
    </div>

    <div id="area-menu">
</div>
    <legend>Formulário</legend>

    <form class="enviar" action="enviar_noticia.php" method="POST" enctype="multipart/form-data">

        <label>titulo :  <input  type="text" name="tituloo"></label><br>
            <br>
        <label>data :  <input type="date" name="dataa"></label><br><br>


        <label>conteudo : <br><textarea name="conteudo" id="" cols="30" rows="10"></textarea></label>


		<br><br><label for="imagem">Imagem:</label><br>
		<br><input type="file" name="imagem"/>
		<br/><br>
		<input type="submit" value="salvar"/>
	</form>

    
</body>
</html>