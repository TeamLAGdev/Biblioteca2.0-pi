<?php

require_once '../class/Conn.class.php';


if(isset($_POST['email']) && isset($_POST['sugestao'])){
    $msg = Indicacoes::Sugestoes($_POST['email'],$_POST['sugestao']);

    if ($msg == 1) {
        header('Location: sugestoes.php?result=1');
    }else{
        if ($msg == 0) {
            header('Location: sugestoes.php?result=0');
        }else{
            header('Location: sugestoes.php?result=2');
        }
    }
}else{
    header('Location: sugestoes.php?result=0');
}