<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icone e Titulo -->
        <link rel="shortcut icon" type="image/x-icon" href="../TicketSell Logo/logo2.png" />
        <title>TicketSell</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StyleGlobal.css" />
        <link rel="stylesheet" type="text/css" href="StyleIndex.css" />

        <!-- Java -->
        <script src="jquery-1.11.2.min.js"></script>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Ficheiros Java -->
        <script src="global.js">></script>
        
    </head>
    <body>

        <div class="modal fade" tabindex="-1" role="dialog"  aria-hidden="true" id="myModal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content" id="modallogin">

                <div class="modal-header modal_header_yellow">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Login</h4>
                </div>

                <div class="modal-body">
                    <div id="login_user">
                        <form method="post" action="valida.php" id="formlogin" name="formlogin" >
                            <p class="title_bold_orange">E-mail</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                              <input name ="email" id ="email" type="text" class="form-control" placeholder="example@email.com" aria-describedby="basic-addon1">
                            </div>

                            <br>

                            <p class="title_bold_orange">Password</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-asterisk"></span></span>
                              <input name="password" id="password" type="password" class="form-control" placeholder="************" aria-describedby="basic-addon1">
                            </div>

                            <br>
                            <button type="submit" class="btn btn_orange">Entrar</button>
                            
                           
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
				<li id="sign_in" class="menu_right last menu_sign_in">SIGN IN</li>	
                <li class="menu_right "><a href="contactos.html">CONTACT</a></li>
                <li class="menu_right "><a href="products.php">PRODUCTS</a></li>
                <li class="menu_right active_menu"><a href="index.html">HOME</a></li>
	        </ul>
        </div>
         <div id="section_1">
            <div id="section_1_1">
                <div class="row">
                      <div class="col-md-6 letters_section_1">
                                <br><br><br><br><br><br><br><br><br><br><br><br>
                                <p class="title_letters_section_1">BUY THE CHIPEST TICKETS</p>
                                    <p>The Most Recent Movies, Here And Now!</p>
                               <button type="button" class="btn btn-warning">JOIN NOW</button>
                               <p class="title_bold_orange">Scroll for more information</p>



                      </div>
                      <div class="col-md-6"><br><br><br><br><br><br><br><p><img src="../TicketSell Logo/logo2.png"></p></div>
                      
                </div>   
            </div>  
        </div>

        <div id="section_2">
            <div id="section_2_2">
                <br><br><br>
                <div class="row">
                        <div class="col-md-4 home_image_sec_2">
                            <p><img src="../TicketSell Images/online-tv_2x.png"></p>
                            <p class="title_section_2">Buy tickets for any movie</p>
                            <p>Bypass online blocks to access foreign content like a local. Get to websites back home when you're abroad. And bypass government or workplace censorship of sites like Facebook, Gmail and YouTube.</p>
                        </div>
                        <div class="col-md-4 home_image_sec_2">
                            <p><img src="../TicketSell Images/be-secure_2x.png"></p>
                            <p class="title_section_2">Buy from your smartphone </p>
                            <p>Enjoy complete security, even on public wifi connections. Prevent hackers stealing your personal passwords, bank account and credit card details. And protect your device from malware, phishing and spam sites.</p>
                        </div>
                        <div class="col-md-4 home_image_sec_2">
                            <p><img src="../TicketSell Images/become-anonymous_2x.png"></p>
                            <p class="title_section_2">Surf privately</p>
                            <p>Conceal your personal information and your location (IP address) online. Protect your data from snooping by your internet service provider. And prevent websites you visit targeting you with manipulative prices and messages.</p>
                        </div>

                </div>   
            </div>  
        </div>
                


        <div id="footer">

            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li class="cabecalho">Conhece-nos</li>
                        <li>&nbsp; </li>
                        <li>Quem somos</li>
                        <li>Video de Apresentação</li>
                        <li>Contacta-nos</li>
                        <li>Fornecedores</li>
                        <li>Junta-te a equipa</li>
                    </ul>
                </div>
                <div class="col-md-3 border">
                    <ul>
                        <li class="cabecalho">Subscrever Newsletter</li>
                        <li>&nbsp; </li>
                        <li>Quem somos</li>
                        <li>Video de Apresentação</li>
                        <li>Contacta-nos</li>
                        <li>Fornecedores</li>
                        <li>Junta-te a equipa</li>
                    </ul>
                </div>
                <div class="col-md-3 border">
                    <ul>
                        <li class="cabecalho">Ajuda</li>
                        <li>&nbsp; </li>
                        <li>Termos & Condições</li>
                        <li>Como Comprar?</li>
                        <li>Descontos</li>
                        <li>Promoções</li>
                     
                    </ul>
                </div>
                <div class="col-md-3 border">
                    <ul>
                    <li class="cabecalho">Segue-nos</li>
                    <li>&nbsp; </li>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Youtube</li>
                    <li>Google+</li>
                 
                </ul>
                </div>
            </div>

        </div>
        <script type="text/javascript">

        </script>
    </body>
</html>