<!Doctype html>
<html>
	<head>
	<title>Gestion de Concours Nationaux</title>
	  <link rel="stylesheet" type="text/css" href="../view/bootstrap/css/bootstrap.css"> 
	   <link rel="stylesheet" type="text/css" href="../view/css/menu.css">
	   <link rel="stylesheet" type="text/css" href="../view/css/banner.css">
	   <link rel="stylesheet" type="text/css" href="../view/css/footer.css">
	     <link rel="stylesheet" type="text/css" href="../view/css/styleDiv.css">
	  
	</head>
	<body>
	<div class="container">		
<ul id="menu">
        <li><a href="#">Accueil</a></li>
        <li>
                <a href="#">Concours</a>
                <ul>
                        <li><a href="#">Lieu</a></li>
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Age</a></li>
                        <li><a href="#">Niveau</a></li>
                </ul>
        </li>
        <li><a href="#">Emploie</a>
        	<ul>
                        <li><a href="#">Lieu</a></li>
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Age</a></li>
                        <li><a href="#">Niveau</a></li>
                </ul>

        </li>
        <li><a href="#">Stage</a>

        <ul>
                        <li><a href="#">Lieu</a></li>
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Age</a></li>
                        <li><a href="#">Niveau</a></li>
                </ul>

        </li>
        <li><a href="#">Contact</a></li>
</ul>
	<div class="rows" id="deroule">
	<div class="col-sm-6 col-md-3" >
     <img src="images/logo.png" alt="GesConNationaux" />
	</div>
	
	<div class="col-sm-6 col-md-6" >
	  <p>Gestion de concours.sn</p>
	 </div>
	
	<div class="col-sm-6 col-md-3" >
	  <p id="p1"><button ><a href="">Connexion</a></button>
	  <a href="" id="p2">S'inscrire?</a></p>
	  </div>
	  
	 
	  </div>
	  
	
	 <br>
	 
	 <div class="rows" id="">
	 
	 <div class="col-sm-6 col-md-3" id="pub" >
     <p>
	 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
	 </p>
	</div>
	
	 <div class="col-sm-6 col-md-9" id="body">
     <div class="rows">
     <?php
     $resul=selectionConcours();
foreach($resul as $annonce)
{
?>
		<div class="col-sm-6 col-md-4" id="article">
		<div id="titrearticle">
		
		<p id="titrearticletexte"><?php echo $annonce['SPECIALITE_'];?>  </p>
		</div>
		<div id="corparticle"> 
		
		<p> <span id="htitrearticle"> Date d'ouverture</span>: <span id="htitrearticle2"><?php echo $annonce['DATE_'];?></span>	 </p>
		<p>	<span id="htitrearticle"> Date limite</span> : <span id="htitrearticle2"><?php echo $annonce['DATE_DEPOT'];?></span> 	</p>
		<p>	<span id="htitrearticle"> Niveau</span> : <span id="htitrearticle2"><?php echo $annonce['NIVEAU_'];?></span>	 </p>
		<p>	<span id="htitrearticle"> Age</span> : <span id="htitrearticle2"><?php echo $annonce['SPECIALITE_'];?></span>	 </p>
		</div>
		<div id="piedarticle">
		<span class="label label-default" id="bliresuit" > <a href="" id="liresuit">lire la suite</a></span>
		</div>
		</div>
		<?php
}
?>
	 </div>

	</div>
	
	 </div>
	 
	<footer>
	<span>fff</span>
    </footer>	
	</div>
	
	</body>
</html>