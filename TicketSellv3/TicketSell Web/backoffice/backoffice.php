<?php
	$link=mysqli_connect("localhost","root","","TicketSell");
	if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>
<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icone e Titulo -->
        <link rel="shortcut icon" type="image/x-icon" href="../../TicketSell Logo/logo2.png" />
        <title>TicketSell</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../StyleGlobal.css" />
        <link rel="stylesheet" type="text/css" href="StyleBackOffice.css" />

        <!-- Java -->
        <script src="../jquery-1.11.2.min.js"></script>
        <script src="script.js"></script>

        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <!-- Ficheiros Java -->
        <script src="../global.js">></script>
        
    </head>
    <body>
    <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="myModal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content" id="modallogin">

                <div class="modal-header modal_header_yellow">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Novo Artigo</h4>
                </div>

                <div class="modal-body">
                    <div id="login_user">
	                    
						<!-- 	                    Mudar o action 	                     -->
                        <form method="post" action="valida.php" id="formlogin" name="formlogin" >
                            <p class="title_bold_orange">ID</p>
                            <div class="input-group">
	                        <?php 
		                        $sql = "SELECT MAX(id_leilao) FROM Leilao;";  
		                        $show=mysqli_query($link,$sql) or die ("Error");
		                        
		                        
		                        	
// 		                        --------------------------------------FAZER APARECER ULTIMO ID NO INPUT !!! -------------------------	                      
							?>  
	                            
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                              <input name ="email" id ="email" type="text" class="form-control" placeholder='<?php echo var_dump($result); ?>' aria-describedby="basic-addon1" readonly>
                            </div>

                            <br>

                            <p class="title_bold_orange">Stock</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                              <input name="stock" id="stock" type="number" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                             <p class="title_bold_orange">Preço Base</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-euro"></span></span>
                              <input name="preco_base" id="preco_base" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>
                            
                            <br>
							
							 <p class="title_bold_orange">Preço Final</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-euro"></span></span>
                              <input name="preco_final" id="preco_final" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                             <p class="title_bold_orange">Licitações</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-repeat"></span></span>
                              <input name="licitacoes" id="licitacoes" type="number" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                             <p class="title_bold_orange">Extra</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-plus"></span></span>
                              <input name="extra" id="extra" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                             <p class="title_bold_orange">Tempo</p>
                            <div class='input-group date' id='datetimepicker1'>
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time"></span></span>
							  <!-- <input name="tempo" id="tempo" type="datepicker" class="form-control" aria-describedby="basic-addon1"> -->
	                          <input type='text' class="form-control" />
                            </div>
                            
								<!-- Funcao para aparecer calendario bootstrap -->
							<!--
								<script type="text/javascript">
						            $(function () {
						                $('#datetimepicker1').datetimepicker();
						            });
						        </script>
							-->
                            <br>
                            
                             <p class="title_bold_orange">Estado</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                              	<select class="form-control" id="sel1">
	                              	<option></option>
							        <option value="0">Pendente</option>
							        <option value="1">Em Execução</option>
							        <option value="2">Finalizado</option>
							     </select>
                            </div>

                            <br>
							
							 <p class="title_bold_orange">Local</p>
							  <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-home"></span></span>
                              <input name="local" id="local" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                             <p class="title_bold_orange">Movie</p>
							  <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-play"></span></span>
                              <input name="local" id="local" type="text" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            
                            <button type="submit" class="btn btn_orange">Adicionar</button>
                            
                           
                        </form>
                    </div>
                   
                </div>
                <div class="modal-footer">
                    Don't have an account!<span class="title_bold_orange"> Sign Up Here </span>
                </div>
              
            </div>
          </div>
        </div>

        <!-- ******************************************************************* -->
        <!-- Menu -->
        <div id="menu">
	        <ul>
		        <!-- <li><img class="logo_menu" src="../TicketSell Logo/logo2.png"></li> -->
				<li id="sign_in" class="menu_right last menu_sign_in">
                    <div class="dropdown">
                        <button id="dLabel" class="btn_no_background" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user "><span class="glyphicon glyphicon-chevron-down"></span></span>
                        </button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        LOGOUT
                        </ul>
                    </div>
                </li>	
                <li id="auction_menu" class="menu_right active_menu" onclick="printTabelaLeilao()">AUCTION</a></li>
                <li id="users_menu" class="menu_right " onclick="printTabelaUsers()">USERS</li>
                
                <li id="movie_menu" class="menu_right" onclick="printTabelaMovies()">MOVIE</li>
                <li id="places_menu" class="menu_right " onclick="printTabelaPlaces()">PLACES</li>

                
	        </ul>
        </div>
      

        <div id="section_2">
            <br><br><br><br><br>
            <div id="area_titulo"></div>
            <div id="area_table">
            
            </div>  
        </div>
           
        
        </div>


    </body>
</html>
