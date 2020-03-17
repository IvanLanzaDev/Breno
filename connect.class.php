<?php
	$connect = mysqli_connect("mysql.hostinger.com.br","u640958987_breno","VivianeIvan2");
        if($connect){
            mysqli_select_db($connect,"u640958987_breno");
        }else{
            echo "Erro Ao conectar com o banco";
        }
?>