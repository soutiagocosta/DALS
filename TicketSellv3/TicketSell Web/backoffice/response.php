<?php
$link=mysqli_connect("localhost","root","","TicketSell");

if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

$action=$_POST["action"];
// -------------------------------------------------------------- TABELA LEILAO -------------------------------------------------------
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
        // echo "<td><input id='estado_".$row['id_leilao']."' value='".$row['estado']."' ></td>";
        echo "<td id='estado_".$row['id_leilao']."'>".$estado."</td>";
        echo "<td><input id='vencedor_".$row['id_leilao']."' value='".$row['vencedor']."' ></td>";
        echo "<td><input id='fk_id_local_".$row['id_leilao']."' value='".$row['fk_id_local']."' ></td>";
        echo "<td><input id='fk_id_movies_".$row['id_leilao']."' value='".$row['fk_id_movies']."' ></td>";
		
		//EDIT
        echo "<td id='option_leilao_".$row['id_leilao']."'><button id ='button_edit_".$row['id_leilao']."' onclick='changetoEdit(".$row['id_leilao'].")' type='button' value='".$row['id_leilao']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        
        //DELETE
        echo "<button id ='button_delete_".$row['id_leilao']."' type='button' onclick='delete_row_from_table_leilao(".$row['id_leilao'].")' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>&nbsp;";
        
        //UPDATE
        echo "<button id='button_check_".$row['id_leilao']."' onclick='update_Table_Leilao(".$row['id_leilao'].")' class='btn btn-success btn-xs non_display_button'> <span class='glyphicon glyphicon-ok'> </span> </button></td>";   
       
        echo "</tr>";

    }

    echo "</tbody></table>";
}

// -------------------------------------------------------------- TABELA USERS -------------------------------------------------------
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
        echo "<tbody><tr id='row_users_".$row['id_users']."'>";
        echo "<td>".$row['id_users']."</td>";
        //echo "<td><input id='stock_".$row['id_leilao']."' value='".$row['stock']."' ></td>";
        echo "<td><input id='username_".$row['username']."' value='".$row['username']."'</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['salt']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td><input id='cod_postal_".$row['cod_postal']."' value='".$row['cod_postal']."'</td>";
        echo "<td><input id='telefone_".$row['telefone']."' value='".$row['telefone']."'</td>";
        echo "<td><input id='cartao_cidadao_".$row['cartao_cidadao']."' value='".$row['cartao_cidadao']."'</td>";
        echo "<td><input id='nif_".$row['nif']."' value='".$row['nif']."'</td>";
        echo "<td><input id='saldo_".$row['saldo']."' value='".$row['saldo']."'</td>";

        //echo "<td><button type='button' value='".$row['id_users']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
       
        //EDIT
        echo "<td id='button_users_".$row['id_users']."'><button id ='button_edit_".$row['id_users']."' onclick='changetoEdit(".$row['id_users'].")' type='button' value='".$row['id_users']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";

        //DELETE
        echo "<button id ='button_delete_".$row['id_users']."' type='button' onclick='delete_row_from_table_users(".$row['id_users'].")' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>&nbsp;";
        
        //UPDATE
        echo "<button id='button_check_".$row['id_users']."' onclick='update_Table_users(".$row['id_users'].")' class='btn btn-success btn-xs non_display_button'> <span class='glyphicon glyphicon-ok'> </span> </button></td>";   
          
        echo "</tr>";

    }
    echo "</tbody></table>";
}
// -------------------------------------------------------------- TABELA MOVIES -------------------------------------------------------
else if($action=="printTabelaMovies"){

    // $id_aluno=$_POST["value"];

    $query="SELECT * FROM Movies";

    $show=mysqli_query($link,$query) or die ("Error");
    echo "<table class='table'>";
    echo "<thead><tr >";
    echo "<td>ID Filme</td>";
    echo "<td>Titulo</td>";
    echo "<td>Imagem</td>";
    echo "<td>Descrição</td>";
    echo "<td colspan='2'>Opções</td>";
    echo "</tr></thead>";
    while($row=mysqli_fetch_array($show)){
        echo "<tbody><tr  id='row_movies_".$row['id_movie']."'>";
        echo "<td>".$row['id_movie']."</td>";
        echo "<td><input id='title_'".$row['title']."' value='".$row['title']."'</td>";
        // echo "<td>".$row['image']."</td>";
        // echo "<td>".$row['description']."</td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";

        //EDIT
        echo "<td id='button_movies_".$row['id_movie']."'><button id ='button_edit_".$row['id_movie']."' onclick='changetoEdit(".$row['id_movie'].")' type='button' value='".$row['id_movie']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";        
        
        //DELETE
        echo "<button id ='button_delete_".$row['id_movie']."' type='button' onclick='delete_row_from_table_movies(".$row['id_movie'].")' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>&nbsp;";  
        
        //UPDATE
        echo "<button id='button_check_".$row['id_movie']."' onclick='update_Table_movies(".$row['id_movie'].")' class='btn btn-success btn-xs non_display_button'> <span class='glyphicon glyphicon-ok'> </span> </button></td>"; 
                 
        echo "</tr>";

    }
    echo "</tbody></table>";
}

// -------------------------------------------------------------- TABELA PLACES -------------------------------------------------------
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
        echo "<tbody><tr id='row_places_".$row['id_local']."'>";
        echo "<td>".$row['id_local']."</td>";
        echo "<td><input id='nome_".$row['nome']."' value='".$row['nome']."'</td>";
        echo "<td><input id='morada_".$row['morada']."' value='".$row['morada']."'</td>";
        echo "<td><input id='area_".$row['area']."' value='".$row['area']."'</td>";
        // echo "<td>".$row['descricao']."</td>";
        echo "<td><button class='btn btn-primary btn-xs'>Ver mais</button></td>";

		//EDIT
        echo "<td id='button_places_".$row['id_local']."'><button id ='button_edit_".$row['id_local']."' onclick='changetoEdit(".$row['id_local'].")' type='button' value='".$row['id_local']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";   
        //echo "<td><button type='button' value='".$row['id_local']."' class='btn btn-warning btn-xs'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;";
        
        //DELETE
        echo "<button id ='button_delete_".$row['id_local']."' type='button' onclick='delete_row_from_table_places(".$row['id_local'].")' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></button>&nbsp;";  
        
		//UPDATE
        echo "<button id='button_check_".$row['id_local']."' onclick='update_Table_places(".$row['id_local'].")' class='btn btn-success btn-xs non_display_button'> <span class='glyphicon glyphicon-ok'> </span> </button></td>"; 
            
        //echo "<button type='button' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span></button>&nbsp;</td>";
           
        echo "</tr>";

    }
    echo "</tbody></table>";
}
// -------------------------------------------------------------- UPDATE TABELA LEILAO -------------------------------------------------------
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


    $query=" UPDATE Leilao SET stock = $stock, preco_base = $preco_base , preco_final = $preco_final, nr_licitacoes = $nr_licitacoes, extra = $extra, tempo = $tempo, estado = $estado, vencedor = $vencedor, fk_id_local = $fk_id_local, fk_id_movies = $fk_id_local WHERE id_leilao = $id_leilao";
    // echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");    
}

// -------------------------------------------------------------- DELETE TABELA LEILAO -------------------------------------------------------
else if($action=="delete_row_from_table_leilao"){

    // $id_aluno=$_POST["value"];
    $id_leilao=$_POST["id_leilao"];
    // echo $id_leilao;
    $query="DELETE FROM Leilao WHERE id_leilao = $id_leilao;"; 
    echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");
    
    
}
// -------------------------------------------------------------- UPDATE TABELA USERS -------------------------------------------------------
else if($action=="update_Table_users"){

    $id_users=$_POST['id_users'];
    $username=$_POST["username"];
    $cod_postal=$_POST["cod_postal"];
    $telefone=$_POST["telefone"];
    $cartao_cidadao=$_POST["cartao_cidadao"];
    $nif=$_POST["nif"];
    $saldo=$_POST["saldo"];
   


    $query=" UPDATE Users SET username = '".$username."', cod_postal = ".$cod_postal.", telefone = ".$telefone.", cartao_cidadao = ".$cartao_cidadao.", nif = ".$nif.", saldo = ".$saldo." WHERE id_users = ".$id_users."";
    //echo $query;
    $show=mysqli_query($link,$query) or die ("Error");    
}
// -------------------------------------------------------------- DELETE TABELA USERS -------------------------------------------------------
else if($action=="delete_row_from_table_users"){

    // $id_aluno=$_POST["value"];
    $id_users=$_POST["id_users"];
    // echo $id_leilao;
    $query="DELETE FROM Users WHERE id_users = $id_users;"; 
    echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");
    
    
}
// -------------------------------------------------------------- UPDATE TABELA MOVIES -------------------------------------------------------
else if($action=="update_Table_movies"){

    $id_movie=$_POST['id_movie'];
    $title=$_POST['title'];
    
   


    $query= "UPDATE Movies SET title = '".$title."' WHERE id_movie = $id_movie";
    // echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");    
}

// -------------------------------------------------------------- DELETE TABELA MOVIES -------------------------------------------------------
else if($action=="delete_row_from_table_movies"){

    // $id_aluno=$_POST["value"];
    $id_movie=$_POST["id_movie"];
    // echo $id_leilao;
    $query="DELETE FROM Movies WHERE id_movie = $id_movie;"; 
    //echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");
    
    
}
// -------------------------------------------------------------- UPDATE TABELA PLACES -------------------------------------------------------
else if($action=="update_Table_places"){

    $id_local=$_POST['id_local'];
    $nome=$_POST['nome'];
    $morada=$_POST['morada'];
    $area=$_POST['area'];
    
   


    $query= "UPDATE Local SET nome = '".$nome."', morada='".$morada."', area='".$area."' WHERE id_local = $id_local";
    // echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");    
}
// -------------------------------------------------------------- DELETE TABELA PLACES -------------------------------------------------------
else if($action=="delete_row_from_table_palces"){

    // $id_aluno=$_POST["value"];
    $id_local=$_POST['id_local'];
    // echo $id_leilao;
    $query="DELETE FROM Local WHERE id_local = $id_local;"; 
    //echo ($query);
    $show=mysqli_query($link,$query) or die ("Error");
    
    
}
?>