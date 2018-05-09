<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Saine-Food</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="icons/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="icon" href="favicon.png" type="image/png">
        <link rel="icon" sizes="32x32" href="icons/favicon/favicon-32.png" type="image/png">
        <link rel="icon" sizes="64x64" href="icons/favicon/favicon-64.png" type="image/png">
        <link rel="icon" sizes="96x96" href="icons/favicon/favicon-96.png" type="image/png">
        <link rel="icon" sizes="196x196" href="icons/favicon/favicon-196.png" type="image/png">
        <link rel="apple-touch-icon" sizes="152x152" href="icons/favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="60x60" href="icons/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="icons/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="icons/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="icons/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="icons/favicon/apple-touch-icon-144x144.png">
        <meta name="msapplication-TileImage" content="favicon-144.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
	</head>
	<body class="dd">
        <div id="header" class="navbar navbar-fixed-top">
            <div class="container">
                <div class="d-flex">
                    <div class="p-2"><img src="images/Logo.svg" alt="Sainefood"></div>
                    <div class="p-2 baseline">Cours de cuisine & traiteur <b class="green">bio</b></div>
                </div>
                <div class="d-flex">
                    <div class="ml-auto p-2 connecter" data-toggle="modal" data-target="#gridSystemModal"><?php if (isset($_SESSION['user'])){echo "Bonjour ";}else {echo "Se connecter";}?></div>
                    <a href="account.php" class="user">&nbsp;<?php if (isset($_SESSION['user'])){echo $_SESSION['user'];}   else {echo "";}?></a>
                    <div class="ml-auto p-2"><span class="icon-panier"></span></div>
                </div>
            </div>
        </div>
            
        <nav id="nav" class="navbar navbar-fixed-top shadow">
            <div class="container">
                <div class="row headerow">
                    <ul>
                        <li class=""><a href="index.php">Home</a></li>
                        <li class=""><a href="a%20propos.php">À propos</a></li>
                        <li class=""><a href="cours-cuisine.php">Cours de cuisine</a></li>
                        <li class="current"><a href="livraison.php">Livraison</a></li>
                        <li><a href="no-sidebar.php">Actualités</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container main-content shadow">
            <div class="content">
                <?php
                $maConnexion = mysqli_connect("us-cdbr-iron-east-04.cleardb.net","bc79c844c05827","11e8e8f1","heroku_a4f632ea2ba8ee3");
                $rec = "SELECT * FROM `plat`";
                $result = mysqli_query($maConnexion,$rec);

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class='cartouche-bloc plats-bloc'>
                        <div class='d-flex justify-content-start'>
                            <div class='cartouche border-bloc'>
                                <div class='cartouche-img-overlay'>
                                    <div class='btn-produit'>
                                        <a class='float-left' href='#'><span class='icon-add-panier'></span></a>
                                        <a class='float-right' href='produit.php?nom=" . $row['nom'] . "'><span class='icon-details'></span></a>
                                    </div>
                                </div>
                                <img class='img-fluid' src='images/Plats/" . $row['image'] . "' alt='Sainefood'>   
                            </div>
                            <div class='cartouche-description'>
                                <h2 class='title-sf-2 semibold'>" . $row['nom'] . "</h2><hr class='separateur'>
                                <p>"
                                    . $row['details'] .
                                "</p>
                                <div class='d-flex mt-auto p-2'>
                                    <div class='mr-auto p-2'><span class='icon-price'></span><span class='semibold'>" . $row['prix'] . " €</span></div>
                                    <div class='p-2'><a href='produit.php?nom=" . $row['nom'] . "' class='btn-link'>Voir plus </a></div>
                                    <div class='p-2'><span class='icon-right'></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="logo-2"><img src="images/Logo-2.svg" alt="Sainefood"></div>
                    <form class="form-inline">
                        <div class="form-group mb-2">
                            <label>Recevez notre Newsletter !</label>
                            <input type="text" class="form-control" id="staticEmail2" value="" placeholder="Votre e-mail">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">S’inscrire</button>
                    </form>
                </div>
            </div>
            <hr class="separateur">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="icon-footer"><img src="images/icon-footer.png" alt=""></div>
                    <div class="d-flex flex-column">
                        <div class="p-2 title-groupe-footer">En savoir plus</div>
                        <div class="p-2 sous-title-footer">Concept</div>
                        <div class="p-2 sous-title-footer">Zone de livraison</div>
                        <div class="p-2 sous-title-footer">FAQ</div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="p-2 title-groupe-footer">Nos valeurs</div>
                        <div class="p-2 sous-title-footer">Nos engagements</div>
                        <div class="p-2 sous-title-footer">Blog</div>
                        <div class="p-2 sous-title-footer">Nos partenaires</div>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="p-2"><button type="button" class="btn btn-outline-primary btn-footer">Nous contacter</button></div>
                        <div class="p-2 title-groupe-footer">PARIS</div>
                        <div class="p-2 sous-title-footer">42,<br>avenue Versailles,<br> 75012</div>
                    </div>
                </div>
                <div class="d-flex p-2 sous-title-footer end-footer">© 2018<br>Tous droits réservés. Mentions légales</div>
            </div>
            <script type="text/javascript">
    window._chatlio = window._chatlio||[];
    !function(){ var t=document.getElementById("chatlio-widget-embed");if(t&&window.ChatlioReact&&_chatlio.init)return void _chatlio.init(t,ChatlioReact);for(var e=function(t){return function(){_chatlio.push([t].concat(arguments)) }},i=["configure","identify","track","show","hide","isShown","isOnline", "page", "open", "showOrHide"],a=0;a<i.length;a++)_chatlio[i[a]]||(_chatlio[i[a]]=e(i[a]));var n=document.createElement("script"),c=document.getElementsByTagName("script")[0];n.id="chatlio-widget-embed",n.src="https://w.chatlio.com/w.chatlio-widget.js",n.async=!0,n.setAttribute("data-embed-version","2.3");
       n.setAttribute('data-widget-id','c4647cb2-60ec-44fe-6c64-0238350faa1b');
       c.parentNode.insertBefore(n,c);
    }();
</script>
        </footer>
        <script src="assets/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
</html>