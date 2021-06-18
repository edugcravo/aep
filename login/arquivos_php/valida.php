<?php
    //$_POST['login'];
    //$_POST['senha'];

    include 'conexao.php';

    $sql = "SELECT id, login, senha FROM logins WHERE login ='".$_POST['login']."'";
    $result = mysqli_query($conn, $sql);
    
    $_SESSION['logado'] = true;

    if (mysqli_num_rows($result) > 0) {
        if ($_POST['senha'] == mysqli_fetch_assoc($result)['senha']) {
            header('location: ../adm.html');

        } else {
            echo 'senha incorreta';
            header('location: ../login_errado.html');

        }
        
      } else {
        echo "login invalido";
        header('location: ../login_errado.html');
        
      }


      
      mysqli_close($conn);

?>