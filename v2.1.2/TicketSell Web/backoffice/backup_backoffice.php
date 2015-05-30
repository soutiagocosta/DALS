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

        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="../bootstrap/js/bootstrap.min.js"></script>

        <!-- Ficheiros Java -->
        <script src="../global.js">></script>
        
    </head>
    <body>

       

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
                <li class="menu_right active_menu"><a href="products.php">PRODUCTS</a></li>
                <li class="menu_right "><a href="products.php">USERS</a></li>
                <li class="menu_right "><a href="products.php">AUCTION</a></li>
                <li class="menu_right "><a href="products.php">MOVIE</a></li>
                <li class="menu_right "><a href="products.php">PLACES</a></li>

                
	        </ul>
        </div>

         

        <div id="section_2">
            <div id="section_2_2">

                <br><br><br><br><br>
                <table class="table tabela_products">
                    <thead>
                        <tr>
                            <td><strong>Name</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                </tbody>
                </table>
                <br>
                <br>
                <br>
            </div>  
        </div>
           
        
        </div>


    </body>
</html>
