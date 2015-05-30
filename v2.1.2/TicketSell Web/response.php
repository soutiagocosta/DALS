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
        echo $row['id_leilao']."#".$row['preco_final'];
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

else if($action=="LoadActiveLeiloes"){
    //procurar leilões activos
    // $query="SELECT * FROM Leilao  WHERE estado = 1 ORDER BY id_leilao DESC";
    $query="SELECT * FROM Leilao INNER JOIN  Local ON Leilao.fk_id_local = Local.id_local INNER JOIN Movies ON Leilao.fk_id_movies = Movies.id_movie WHERE Leilao.estado = 1 ORDER BY id_leilao DESC";

    
    $show=mysqli_query($link,$query) or die ("Error");

    while($row=mysqli_fetch_array($show)){
        // echo $row['id_leilao']."#";
        $bid = $row['preco_final'] + 0.1;
        $ID_id_leilao =  "id_leilao_".$row['id_leilao'];
        $span_preco = "preco_".$row['id_leilao'];
        // echo $ID_id_leilao;
        echo '<div class="col-md-3 row_seller">
                        <div class="titulo_product">
                            <span id="'. $ID_id_leilao .'">'.$row['id_leilao'].' - '.$row['title'].'</span>
                        </div>
                        <div class="main_product">
                            
                            <p><img src="data:image/jpg;base64,'.base64_encode($row['image']).'"/> </p>
                            <div class="row">
                                <div class="col-md-5 price_product">
                                    <p><span id="'.$span_preco.'">'.$row['preco_final'].'</span> €</p>
                                    
                                </div>
                                <div class="col-md-7">
                                    <p><button onclick="BidAuction('.$bid.')" type="button" class="btn btn-success">Bid</button>
                                    <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star-empty"></i></button> </p>
                                </div>
                            </div>
                            <p><b>Local:</b></p>
                            <p>Shoping '.$row['nome'].'</p>

                            
                        </div>
                </div>';

    }
}
