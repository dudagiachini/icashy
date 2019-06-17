<?php

 $connection = mysqli_connect('localhost','id9085998_ricardo123','bdehomelhor','id9085998_icashy3');
            mysqli_set_charset($connection, 'utf8');
            
            if($connection-> connect_error){
                die("Falha ao realizar a conexão: ".$connection-> connect_error);
            }
?>