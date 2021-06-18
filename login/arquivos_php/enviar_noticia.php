
<?php 
// Enviando noticia para o banco de dados
include 'conexao.php';

$imagem = $_FILES["imagem"];
if($imagem != NULL) {
$nomeFinal = time().'.jpg';
(move_uploaded_file($imagem['tmp_name'], $nomeFinal));
} else {
  $nomeFinal = NULL;
}
//gravando no banco de dados
    $sql = "INSERT INTO noticias(id, titulo, data, conteudo, imagem) VALUES (NULL,'".$_POST['tituloo']."', '".$_POST['dataa']."', '".$_POST['conteudo']."', '".$nomeFinal."')";


    if ($result = mysqli_query($conn, $sql)) {
        
      $sql = "SELECT id FROM noticias WHERE conteudo = '".$_POST['conteudo']."'";
      $result2 = mysqli_query($conn, $sql);
        
        
      } else {
        echo "erro";
      }


header("location:index.php");




?>