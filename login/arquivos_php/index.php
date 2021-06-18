
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias curitiba</title>
    <link rel="stylesheet" href="../css/tela_principal.css">
</head>
<body>
    <div id="area-cabecalho">

        <div id="area-logo">
            <h1>Noticías<span class="branco">Curitiba</span></h1>
        </div>

        <div id="area-menu">
                      
                <div class="submenu">
                    <button class="dropbtn">Home</button>
                    
                </div>

                <div class="submenu">
                    <button  class="dropbtn">Videos</button>
                    <div class="submenu-content">
                    <a href="videos.html">Reportagens</a>
                    <a href="#">Entrevistas</a>
                    </div>
                </div>

                <div class="submenu">
                    <button class="dropbtn">Covid-19</button>
                    <div class="submenu-content">
                    <a href="casos.html">Casos</a>
                    <a href="#">Vacina</a>
                    <a href="#">Prevenções</a>
                    </div>
                </div>

                <div class="submenu">
                    <button class="dropbtn">Redes sociais</button>
                    <div class="submenu-content">
                    <a href="#">Instagram </a>
                    <a href="#">Facebook </a>
                    <a href="#">twitter </a>
                    </div>
                </div>

                <div class="submenu">
                    <button class="dropbtn">Regiões</button>
                    <div class="submenu-content">
                    <a href="#">Centro</a>
                    <a href="#">Região metropolitana</a>
                    </div>
                </div>
            <input type="search" placeholder="  Buscar" >

    
            <a href="../login.html">Login</a>
            
        </div>
   
    </div>


        <div id="area-principal">

         <div id="area-lateral">
                
                <div class="conteudo-lateral">
                    <h3>Postagens recentes</h3>
                    <div class="postagem-lateral">
                    <p> 
                        NY começa a vacinar jovens entre 16 e 29 anos contra a Covid
                    </p>
                        <a href="#">Leia mais</a>
                    </div>

                    <hr>

                    <div class="postagem-lateral">
                        <p> 
                            COVID-19: Quais os riscos da contaminação por gotículas de saliva?
                        </p>
                            <a href="#">Leia mais</a>
                        </div>
    

                </div>

                <div class="conteudo-lateral">
                    <h3>Categorias</h3>
                        <div id="links">
                            <a href="">Home</a><br>
                            <a href="">Videos</a><br>
                            <a href="">Covid</a><br>
                            <a href="">Redes Sociais</a><br>
                            <a href="">Regiões</a>
                        </div>
                </div>

            </div>
<?php

// Mostrando a noticia do banco de dados

    include 'conexao.php';
    
    $sql = mysqli_query($conn,"SELECT * FROM noticias order by data DESC "); // pega no banco de dados o id

    $qtd_ids = mysqli_num_rows($sql); // retorna a quantidade registros encontrados na consulta acima
    
    while($row=mysqli_fetch_assoc($sql)) {
        echo '
    
                <div id="area-postagens">

                    <div class="postagem" style="clear: right;">
                        <h2>'.$row['titulo'].'</h2>
                        <span class="data-postagem">Postado em  '.$row['data'].'</span>
                        <img width="700px"  src="'.$row['imagem'].'" alt="imagem noticia">
                        <p> '.$row['conteudo'].'
        
                        </p>
                        <a href=""> Leia mais</a>
                    </div>
             ';
    }
    
?>
