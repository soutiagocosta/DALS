// <?php
$link=mysqli_connect("localhost","root","","TicketSell");

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

$action=$_POST["action"];

if($action=="printTabelaLeilao"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Leilao";

    $show=mysqli_query($link,$query) or die ("Error");
    echo '<div class="input-group">
    <span class="input-group-addon" id="basic-addon1">M</span>
    <input type="text" class="form-control search_box" placeholder="Search" >
    <button class="btn btn-primary" onclick="showModalNovoLeilao()" >Novo <span class="glyphicon glyphicon-plus"></button>
    </div>';
    // echo "<button class='btn btn-primary '>Novo <span class='glyphicon glyphicon-plus'></button>";

    echo "<table class='table'>";
    echo "<thead><tr>";
    echo "<td>ID Leilao</td>";
    echo "<td>Stock</td>";
    echo "<td>Preço Base</td>";
    echo "<td>Preço Final</td>";
    echo "<td>Licitações</td>";
    echo "<td>Extra</td>";
    echo "<td>Tempo (min)</td>";
    echo "<td>Estado</td>";
    echo "<td>Vencedor</td>";
    echo "<td>fk_id_local</td>";
    echo "<td>fk_id_movies</td>";
    echo "<td colspan='2'>Opções</td>";
    echo "</tr></thead>";
    echo "<tbody>";
    while($row=mysqli_fetch_array($show)){
        $estado = $row['estado'];
        switch ($estado) {
            case 0:
                $estado = "<span class='label label-default'>Pendente</span>";
                break;
            case 1:
               $estado = "<span class='label label-warning'>Em Execução</span>";
                break;
            case 2:
                $estado = "<span class='label label-success'>Finalizado</span>";
                break;
        }

        echo "<tr id='row_leilao_".$row['id_leilao']."'>";
        echo "<td>".$row['id_leilao']."</td>";
        echo "<td><input id='stock_".$row['id_leilao']."' value='".$row['stock']."' ></td>";
        echo "<td><input id='preco_base_".$row['id_leilao']."' value='".$row['preco_base']."' ></td>";
        echo "<td><input id='preco_final_".$row['id_leilao']."' value='".$row['preco_final']."' ></td>";
        echo "<td><input id='nr_licitacoes_".$row['id_leilao']."' value='".$row['nr_licitacoes']."' ></td>";
        echo "<td><input id='extra_".$row['id_leilao']."' value='".$row['extra']."' ></td>";
        echo "<td><input id='tempo_".$row['id_leilao']."' value='".$row['tempo']."' ></td>";
        echo "<td><input id='estado_".$row['id_leilao']."' value='".$row['estado']."' ></td>";
        // echo "<td id='estado_".$row['id_leilao']."'>".$estado."</td>";
        echo "<td><input id='vencedor_".$row['id_leilao']."' value='".$row['vencedor']."' ></td>";
        echo "<td><input id='fk_id_local_".$row['id_leilao']."' value='".$row['fk_id_local']."' ></td>";
        echo "<td><input id='fk_id_movies_".$row['id_leilao']."' value='".$row['fk_id_movies']."' ></td>";

        echo "<td id='option_leilao_".$row['id_leilao']."'><button id ='button_edit_".$row['id_leilao']."' onclick='changetoEdit(".$row['id_leilao'].")' type='button' value='".$row['id_leilao']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        echo "<button id ='button_delete_".$row['id_leilao']."' type='button' onclick='delete_row_from_table_leilao(".$row['id_leilao'].")' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>&nbsp;";
        echo "<button id='button_check_".$row['id_leilao']."' onclick='update_Table_Leilao(".$row['id_leilao'].")' class='btn btn-success btn-xs non_display_button'> <span class='glyphicon glyphicon-ok'> </span> </button></td>";   
        echo "</tr>";

    }

    echo "</tbody></table>";
}
else if($action=="printTabelaUsers"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Users";

    $show=mysqli_query($link,$query) or die ("Error");
    echo "<table class='table'>";
    echo "<thead><tr>";
    echo "<td>ID User</td>";
    echo "<td>Username</td>";
    echo "<td>Password</td>";
    echo "<td>Salt</td>";
    echo "<td>Email</td>";
    echo "<td>Código Postal</td>";
    echo "<td>Telefone</td>";
    echo "<td>Cartão Cidadão</td>";
    echo "<td>NIF</td>";
    echo "<td>Saldo</td>";
    echo "<td colspan='2'>Opções</td>";
    echo "</tr></thead>";
    while($row=mysqli_fetch_array($show)){
        echo "<tbody><tr>";
        echo "<td>".$row['id_users']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['salt']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['cod_postal']."</td>";
        echo "<td>".$row['telefone']."</td>";
        echo "<td>".$row['cartao_cidadao']."</td>";
        echo "<td>".$row['nif']."</td>";
        echo "<td>".$row['saldo']."</td>";

        echo "<td><button type='button' value='".$row['id_users']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        echo "<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></button>&nbsp;</td>";
           
        echo "</tr>";

    }
    echo "</tbody></table>";
}
else if($action=="printTabelaMovies"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Movies";

    $show=mysqli_query($link,$query) or die ("Error");
    echo "<table class='table'>";
    echo "<thead><tr>";
    echo "<td>ID Filme</td>";
    echo "<td>Titulo</td>";
    echo "<td>Imagem</td>";
    echo "<td>Descrição</td>";
    echo "<td colspan='2'>Opções</td>";
    echo "</tr></thead>";
    while($row=mysqli_fetch_array($show)){
        echo "<tbody><tr>";
        echo "<td>".$row['id_movie']."</td>";
        echo "<td>".$row['title']."</td>";
        // echo "<td>".$row['image']."</td>";
        // echo "<td>".$row['description']."</td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";

        echo "<td><button type='button' value='".$row['id_movie']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        echo "<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></button>&nbsp;</td>";
           
        echo "</tr>";

    }
    echo "</tbody></table>";
}
else if($action=="printTabelaPlaces"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Local";

    $show=mysqli_query($link,$query) or die ("Error");
    echo "<p><button class='btn btn-primary btn-xs'>Novo <span class='glyphicon glyphicon-plus'></span></button></p>";
    echo "<table class='table'>";
    echo "<thead><tr>";
    echo "<td>ID Local</td>";
    echo "<td>Nome</td>";
    echo "<td>Morada</td>";
    echo "<td>Area</td>";
    echo "<td>Descrição</td>";
    echo "<td colspan='2'>Opções</td>";
    echo "</tr></thead>";
    while($row=mysqli_fetch_array($show)){
        echo "<tbody><tr>";
        echo "<td>".$row['id_local']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['morada']."</td>";
        echo "<td>".$row['area']."</td>";
        // echo "<td>".$row['descricao']."</td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";


        echo "<td><button type='button' value='".$row['id_local']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        echo "<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></button>&nbsp;</td>";
           
        echo "</tr>";

    }
    echo "</tbody></table>";
}
else if($action=="update_Table_Leilao"){

    // $id_aluno=$_POST["value"];
    $stock=$_POST["stock"];
    $preco_base=$_POST["preco_base"];
    $preco_final=$_POST["preco_final"];
    $nr_licitacoes=$_POST["nr_licitacoes"];
    $extra=$_POST["extra"];
    $estado=$_POST["estado"];
    $vencedor=$_POST["vencedor"];
    $fk_id_local=$_POST["fk_id_local"];
    $fk_id_movies=$_POST["fk_id_movies"];
    $tempo=$_POST["tempo"];
    $id_leilao=$_POST["id_leilao"];


    $query=" UPDATE Leilao SET stock = $stock, preco_base = $preco_base , preco_final = $preco_final, nr_licitacoes = $nr_licitacoes, extra = $extra, tempo = '$tempo', estado = $estado, vencedor = $vencedor, fk_id_local = $fk_id_local, fk_id_movies = $fk_id_local WHERE id_leilao = $id_leilao";
    // echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");    
}
else if($action=="delete_row_from_table_leilao"){

    // $id_aluno=$_POST["value"];
    $id_leilao=$_POST["id_leilao"];
    // echo $id_leilao;
    $query="DELETE FROM Leilao WHERE id_leilao = $id_leilao;"; 
    // echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");
    
    
}


?>