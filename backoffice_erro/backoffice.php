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
        <!-- <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="myModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header modal_header_yellow">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div id="login_user">
                            <button type="submit" class="btn btn_orange">Entrar</button>          
                        </div>
                    </div>
                    <div class="modal-footer">
                        Don't have an account!<span class="title_bold_orange"> Sign Up Here </span>
                    </div>
                </div>
            </div>
        </div> -->

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
