<?php
    include "Funcionario.class.php";

    $id=$_GET['cod_del']; 

    Funcionario::delete($id);  
?>
<p><a href="index.php">Voltar</a>
