<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1, user-scalable=yes"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Top10Tracks</title>

	<link rel="stylesheet" type="text/css" href="estilosTops.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="shortcut icon" href="PNG/djIcon.png" />
	
</head>
<body>
	<?php
		include ("../conection.php");
		include("../dataUser.php");
		$contador=0;
		$solicitud="SELECT * FROM cancionSubida where id_Usuario='$id'";
		$consulta=mysqli_query($conn,$solicitud);
		while($dataSubidas=mysqli_fetch_array($consulta)){
			$contrador++;
		}

	?>
	<div class="wrapper">	
	<nav id="navegador">
		<div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
		<div class="logo">SamsRadio</div>
		<div class="menu">
			<ul>
				<li><div class="button"><a href="topTracks.html">Top Tracks<a></div></li>
				<li><div class="button"><a href="topTracks.html">Genres<a></div></li>
				<li><div class="button"><a href="../create/music/subirCancion.php" target="_blank">Upload Track</a></div></li>
				
				<li><div class="button"><a href="https://djmag.com/news" target="_blank">EDM News</a></div></li>	
				<li><div class="button"><a href="../login/login.html" target="_blank">Logout</a></div></li>
			</ul>

		</div>
	</nav>
	<section class="sectionTop">
		<h1 class="title"  data-hover="BeatPort EDM!!"><div>Top Tracks</div></h1>
			<div class="block" onclick="seleccionarCancion(0)" onmouseout="ocultarDesc(0)" onmouseover="mostrarDesc(0)">
				<figcaption class="descrip"><p>Martin Grarrix & Justin Mylo-BURN OUT (Feat. Dewain Whitmore)</p></figcaption>
			
					<img src="images/MartinGarrix&JustinMylo-BurnOut(feat.DewainWhitmore)(OriginalMix).jpg" class="image">
				

			</div>
			
			<div class="block" onclick="seleccionarCancion(1)" onmouseout="ocultarDesc(1)" onmouseover="mostrarDesc(1)">
				<figcaption class="descrip"><p>Hardwell & Suyano–Light It Up (Feat. Richie Loop) (Extended Mix)</p> </figcaption>
			<img src="images/Hardwell_&_Suyano_Light_It_Up_feat.mp3.jpg" class="image" >
			</div>
			<div class="block" onclick="seleccionarCancion(2)" onmouseout="ocultarDesc(2)" onmouseover="mostrarDesc(2)">
				<figcaption class="descrip"><p>QUINTINO – INFERNO (EXTENDED MIX) (Spinnin Records)</p></figcaption>
			<img src="images/Quintino-Inferno(ExtendedMix).mp3.jpg" class="image">
			</div>
			<div class="block" onclick="seleccionarCancion(3)" onmouseout="ocultarDesc(3)" onmouseover="mostrarDesc(3)">
				<figcaption class="descrip"><p>DON DIABLO – SURVIVE (FEAT. EMELI SANDÉ & GUCCI MANE)</p></figcaption>
			<img src="images/Don_Diablo_Survive_feat_Emeli_Sande.jpg" class="image" >
			</div>
			<div class="block" onclick="seleccionarCancion(4)" onmouseout="ocultarDesc(4)" onmouseover="mostrarDesc(4)">
				<figcaption class="descrip"><p>DASTIC – LIGHT UP (EXTENDED MIX) (Spinnin Premium)</p></figcaption>
			<img src="images/Dastic-Light_Up_(Extended_Mix).jpg" class="image">
			</div>
			<div class="block" onclick="seleccionarCancion(5)" onmouseout="ocultarDesc(5)" onmouseover="mostrarDesc(5)">
				<figcaption class="descrip"><p>ARMIN VAN BUUREN & SUNNERY and MARCIANO – YOU ARE TOO</p></figcaption>
			<img src="images/ArminvanBuuren&SunneryJames&RyanMarciano-YouAreToo(ExtendedMix).jpg" class="image" >
			</div>
			<div class="block" onclick="seleccionarCancion(6)" onmouseout="ocultarDesc(6)" onmouseover="mostrarDesc(6)">
				<figcaption class="descrip"><p>CARDI B & BAD BUNNY & J BALVIN – I LIKE IT (Remix)</p></figcaption>
			<img src="images/CardiB&BadBunny&JBalvin-ILikeIt(DillonFrancisVIPRemix).mp3.jpg" class="image" >
			</div>
			<div class="block" onclick="seleccionarCancion(7)" onmouseout="ocultarDesc(7)" onmouseover="mostrarDesc(7)">
				<figcaption class="descrip" ><p>THE CHAINSMOKERS – THIS FEELING FEAT. KELSEA BALLERINI</p></figcaption>
			<img src="images/TheChainsmokersfeat.Kelsea_Ballerini-This_Feeling.jpg" class="image" >
			</div>
			<div class="block" onclick="seleccionarCancion(8)" onmouseout="ocultarDesc(8)" onmouseover="mostrarDesc(8)">
				<p class="descrip">KSHMR & Mark SIXMA - Gladiator (Remix)</p> 
			<img src="images/Gladiator-KSHMR.jpg" class="image">
			</div>
			<div class="block" onclick="seleccionarCancion(9)" onmouseout="ocultarDesc(9)" onmouseover="mostrarDesc(9)" >
				<p class="descrip">STEVE AOKI & NICKY ROMERO – BE SOMEBODY (FEAT. KIIARA)</p>
			<img src="images/SteveAoki&NickyRomero-BeSomebody(feat. Kiiara)(Tyron Hapi Remix).jpg" class="image">
			</div>
			<div class="block" onclick="seleccionarCancion(10)" onmouseout="ocultarDesc(10)" onmouseover="mostrarDesc(10)" >
				<p class="descrip">TAKI TAKI - DJ SNAKE FEAT SELENA GOMEZ & CARDI B & OZUNA</p>
			<img src="images/DJ_Snake_Taki_Taki_feat_Selena_Gomez.jpg" class="image">
			</div>
			<div class="block" onclick="seleccionarCancion(11)" onmouseout="ocultarDesc(11)" onmouseover="mostrarDesc(11)" >
				<p class="descrip">HOW YOU LOVE ME - HARDWELL FEAT CONOR </p>
			<img src="images/Hardwell_How_You_Love_Me_feat_Conor.jpg" class="image">
			</div>

	</section>
		<article class="articleTopTracks">
			<div class="mensaje"><p>¿Te apasiona Compartir Musica?</p><span>Convierte en un colaborador oficial y comparte canciones con toda la comunidad de 	madnessbeat (conectate a nuestro Grupo de Telegram)</span></div>
		</article>
		<div class="genres">
			<h2 class="title subtitle" data-Hover="Dj Sams!!"><div>Genres</div></h2>
			<div class="block blockGenres"><a href="BigRoom.html">Big Room House</a></div>
			<div class="block blockGenres"><a href="Progresive.html">Progresive House</a></div>
			<div class="block blockGenres"><a href="HardStyle.html">HardStyle Bass</a></div>
			<div class="block blockGenres"><a href="House.html">House</a></div>
		
			<div class="block blockGenres"><a href="Future.html">Future Bass</a></div>
		
			<div class="block blockGenres"><a href="Trance.html">Trance</a></div>
			<div class="block blockGenres"><a href="DeepHouse.html">Deep House</a></div>
			<div class="block blockGenres"><a href="Dubstep.html">Dubstep</a></div>
			<div class="block blockGenres"><a href="Thecno.html">Thecno</a></div>
			<div class="block blockGenres"><a href="#">Dharma</a></div>
			<div class="block blockGenres"><a href="#">Latin</a></div>
			<div class="block blockGenres"><a href="#">	Trap</a></div>
		</div>
		<div id="reproductor">
			<img src="" class="cover" id="art" />
			<div id="player">
    				
				<div class="trackinfo">
  					    <p id="title"></p>
        				<p id="artist"></p>
  				</div>
    				<div id="track">
        				<div id="progress"></div>
       					<div id="handler"></div>
    				</div>
    				<div class="container">
        				<div class="info">
            				<div class="cont">
               					<button id="prev" class="nav">
                    				<img src="pngImages/prev.png" />
                				</button>
                				<button id="play" class="nav">
                    				<img class="pad" src="pngImages/play.png" />
                				</button>
                				<button id="next" class="nav">
                    				<img src="pngImages/next.png" />
                				</button>
            				</div>
        				</div>
    				</div>
			</div>
		</div>
	<footer>
		<div class="usuarioLogin">
			<div class="perfilItem" id="imagePerfil">
				<?php
					echo '<img src="../'.$imagen.'">';
				?>
			</div>
			<div class="perfilItem">
				<?php
					$name=$data['nickName'];
					echo '<a href="../perfilSettings.php">'.$name.'</a>';
				?>
			</div>
			<div id="subidasEstad" class="perfilItem">
				<?php
					if($contador==0){
						echo "<span >0 Cancione Subidas</span>";
					}else{
					}
				?>
			</div>
		</div>
	</footer>
</div>



	<script type="text/javascript" src="js/navScroll.js"></script>
      <script type="text/javascript" src="js/funcionesReproductor.js"></script>
</body>
</html>