<?php
$link=mysqli_connect("localhost","root","","TicketSell");

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

$action=$_POST["action"];

if($action=="printLastLeiloes"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Leilao ORDER BY  id_leilao desc ";

    $show=mysqli_query($link,$query) or die ("Error");

    while($row=mysqli_fetch_array($show)){
        echo "#".$row['id_leilao']."#".$row['preco_base']."#".$row['preco_base']."#".$row['fk_id_local']."#".$row['fk_id_movies']."#*";
    }

}
else if($action=="LeilaoById"){

    // $id_aluno=$_POST["value"];
    $id_leilao=$_POST["id_leilao"];
    $query="SELECT * FROM Leilao  WHERE id_leilao = $id_leilao ORDER BY id_leilao DESC";

    $show=mysqli_query($link,$query) or die ("Error");

    while($row=mysqli_fetch_array($show)){
        echo $row['id_leilao']."#".$row['preco_base'];
    }

}

else if($action=="ActiveLeiloes"){
    //procurar leilões activos
    $query="SELECT * FROM Leilao  WHERE estado = 1 ORDER BY id_leilao DESC";

    $show=mysqli_query($link,$query) or die ("Error");

    while($row=mysqli_fetch_array($show)){
        echo $row['id_leilao']."#";
    }

}
