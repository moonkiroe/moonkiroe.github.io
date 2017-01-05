<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name="DISTRIBUTION" content="GLOBAL">
  <meta name="author" content="Dubosson S&eacute;bastien &amp; Alex Crampon">
  <meta name="COPYRIGHT" content="Copyright (c) 2007-2008, Moonkiroe et les auteurs. ">
  <meta name="description" content="Moonkiroe est un jeu Online multi-joueurs, de type RPG (jeu de role). Les joueurs y vivent des aventures palpitantes. Ce jeu comporte de nombreuses fonctions de gameplay (qu&eacute;te, drop, m&eacute;tier, commerce, combat de type action-rpg, et bien d'autres choses). Visitez le site pour t&eacute;l&eacute;charger du jeu video Moonkiroe (avec zone gratuite). Des news, des trailers, des vid&eacute;os, des goodies...">
  <meta name="keywords" content="telecharger, jeux, jeu, gratuit, dubosson, free, download, moonkiroe, rpg, mmo, online, multi, joueurs, multiplayer, multi, player, jeu vid&eacute;o, mmorpg, massively multiplayer, 2D isom&eacute;trique, isometrique, action, blendmand, qu&egrave;te, quete, mmog, mmorpg gratuit, jeu gratuit, cybertwister, blender, blender 3D, gamemaker, jeu 2D isometrique, animation 3D">
  <meta name="ROBOTS" content="INDEX, FOLLOW">
  <meta name="REVISIT-AFTER" content="1 DAYS">
  <meta name="RATING" content="GENERAL">
  <title>Moonkiroe - MMO RPG - Jeu video Online multi joueur</title>

  <link href="http://www.moonkiroe.com/fr/img/moonkiroe.ico" rel="SHORTCUT ICON">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <link rel="stylesheet" type="text/css" media="screen" href="colorschemes/colorscheme2/colorscheme.css">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">
  <link href="css/import.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="live_tinc.js">
  </script>
  <script type="text/javascript">
// Utilisation: spop( 'monfichier.html', 'MaPopup', 100, 100, 'Mes options (Facultatif)' )
// spop( fichier, nom, largeur, hauteur, options )
function spop( fichier, nom, largeur, hauteur, options )
{
var id = Math.round( Math.random() * 100 );
var gauche = ( screen.width - largeur ) / 2;
var haut = ( screen.height - hauteur ) / 2;
if ( options )
{
options = 'width=' + largeur + 'px, height=' + hauteur + 'px, top=' + haut + ', left=' + gauche + ', ' + options;
}
else
{
options = 'width=' + largeur + 'px, height=' + hauteur + 'px, top=' + haut + ', left=' + gauche;
}
document.open( fichier, nom + id, options );
}
  </script>
  <script language="JavaScript">
function prechargimg() {
var doc=document;
if(doc.images){
if(!doc.precharg) doc.precharg=new Array();
var i,j=doc.precharg.length,x=prechargimg.arguments; for(i=0; i<x.length; i++)
if (x[i].indexOf("#")!=0){
doc.precharg[j]=new Image; doc.precharg[j++].src=x[i];
}
}
}
  </script>
  <script language="javascript">
function Popup(page,nom,dimension,option) {
window.open(page,nom,dimension,option);
}
  </script>
  <style type="text/css" media="all">
/* Ce style CSS ne dois pas être enlevé, sinon les divs ne se cacherons pas ... */
.cachediv {
visibility: hidden;
overflow: hidden;
height: 1px;
margin-top: -1px;
position: absolute;
}
  </style><!-- Script créé par KevBrok ;-) -->
  <script type="text/javascript">
/*
* Montre / Cache un div
*/
function DivStatus( nom, numero )
{
var divID = nom + numero;
if ( document.getElementById && document.getElementById( divID ) ) // Pour les navigateurs récents
{
Pdiv = document.getElementById( divID );
PcH = true;
}
else if ( document.all && document.all[ divID ] ) // Pour les veilles versions
{
Pdiv = document.all[ divID ];
PcH = true;
}
else if ( document.layers && document.layers[ divID ] ) // Pour les très veilles versions
{
Pdiv = document.layers[ divID ];
PcH = true;
}
else
{
PcH = false;
}
if ( PcH )
{
Pdiv.className = ( Pdiv.className == 'cachediv' ) ? '' : 'cachediv';
}
}
/*
* Cache tous les divs ayant le même préfixe
*/
function CacheTout( nom )
{ var NumDiv = 1;
if ( document.getElementById ) // Pour les navigateurs récents
{
while ( document.getElementById( nom + NumDiv) )
{
SetDiv = document.getElementById( nom + NumDiv );
if ( SetDiv && SetDiv.className != 'cachediv' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
else if ( document.all ) // Pour les veilles versions
{
while ( document.all[ nom + NumDiv ] )
{
SetDiv = document.all[ nom + NumDiv ];
if ( SetDiv && SetDiv.className != 'cachediv' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
else if ( document.layers ) // Pour les très veilles versions
{
while ( document.layers[ nom + NumDiv ] )
{
SetDiv = document.layers[ nom + NumDiv ];
if ( SetDiv && SetDiv.className != 'cachediv' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
}
/*
* Montre tous les divs ayant le même préfixe
*/
function MontreTout( nom )
{ var NumDiv = 1;
if ( document.getElementById ) // Pour les navigateurs récents
{
while ( document.getElementById( nom + NumDiv) )
{
SetDiv = document.getElementById( nom + NumDiv );
if ( SetDiv && SetDiv.className != '' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
else if ( document.all ) // Pour les veilles versions
{
while ( document.all[ nom + NumDiv ] )
{
SetDiv = document.all[ nom + NumDiv ];
if ( SetDiv && SetDiv.className != '' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
else if ( document.layers ) // Pour les très veilles versions
{
while ( document.layers[ nom + NumDiv ] )
{
SetDiv = document.layers[ nom + NumDiv ];
if ( SetDiv && SetDiv.className != '' )
{
DivStatus( nom, NumDiv );
}
NumDiv++;
}
}
}
/*
* Inverse les divs: Cache les divs visible et montre le divs cachés :)
*/
function InverseTout( nom )
{ var NumDiv = 1;
if ( document.getElementById ) // Pour les navigateurs récents
{
while ( document.getElementById( nom + NumDiv ) )
{
SetDiv = document.getElementById( nom + NumDiv );
DivStatus( nom, NumDiv );
NumDiv++;
}
}
else if ( document.all ) // Pour les veilles versions
{
while ( document.all[ nom + NumDiv ] )
{
SetDiv = document.all[ nom + NumDiv ];
DivStatus( nom, NumDiv );
NumDiv++;
}
}
else if ( document.layers ) // Pour les très veilles versions
{
while ( document.layers[ nom + NumDiv ] )
{
SetDiv = document.layers[ nom + NumDiv ];
DivStatus( nom, NumDiv );
NumDiv++;
}
}
}
  </script>
</head>


<body id="main_body" onLoad="prechargimg('images/','images/','images/','images/','images/')" >

<div id="_wfx_document">
<div id="container">
<div id="header">
<div id="slogan"></div>

<div id="key_visual">
&nbsp;
</div>

<div id="logo">
&nbsp;
</div>

</div>

<div id="main_nav_container">
<ul id="main_nav_list">

  <li> <a class="main_nav_active_item" href="news.php3" title="Annonces, &eacute;v&egrave;nements, archive..." accesskey="a" alt="Annonces, &eacute;v&egrave;nements, archive..."><span class="main_nav_active_item_text">News </span></a></li>

  <li> <a class="main_nav_item" href="le_jeu.php3" title="D&eacute;couvrir, d&eacute;buter, jouer ou voir les caract&eacute;ristiques du jeu.." accesskey="d" alt="D&eacute;couvrir, d&eacute;buter, jouer ou voir les caract&eacute;ristiques du jeu.."><span class="main_nav_item_text">Le Guide du Jeu </span></a></li>

  <li> <a class="main_nav_item" href="media.php3" title="Screenshots, trailer vid&eacute;os, wallpaper, artworks..." accesskey="e" alt="Screenshots, trailer vid&eacute;os, wallpaper, artworks..."><span class="main_nav_item_text">M&eacute;dias </span></a></li>

  <li> <a class="main_nav_item" href="communaute.php3" title="Forums, site de fan" alt="Forums, site de fan"><span class="main_nav_item_text">Communaut&eacute; </span></a></li>

  <li> <a class="main_nav_item" href="support.php3" title="Support, besoin d'aide, FAQ..." alt="Support, besoin d'aide, FAQ..."><span class="main_nav_item_text">Supports </span></a></li>

  <li> <a class="main_nav_item" href="shop.php3" title="Abonnement, produits d&eacute;riv&eacute;s (BD, Manga, DVD...)" alt="Abonnement, produits d&eacute;riv&eacute;s (BD, Manga, DVD...)"><span class="main_nav_item_text">Boutique </span></a></li>

</ul>

</div>

<div id="main_container">
<div id="left_column_container">
<div class="sub_nav_container">
<div class="sub_nav_container">
<ul class="sub_nav_list">

  <div align="center"> <b><font face="Verdana" size="2">Connection
: </font></b>
  <form method="post" action="login.php3"><b><font face="Verdana" size="1">Pseudo <br>

    <input name="pseudo_membre" type="text"> <br>

    <br>

Mot de passe </font></b> <br>

    <input name="passe_membre" type="password"> <br>

    <br>

    <input name="Submit" value="Entrer" type="submit"></form>

  </div>

  <hr style="" 100="" height="" 2px="">
  <li><a class="sub_nav_item" href="adduser.php3"><span class="sub_nav_item_text">Creer un compte </span></a></li>

</ul>

<ul class="sub_nav_list">
<li><a class="sub_nav_item" href="inscription_beta.php3" title="Inscription aux Bétas Tests" alt="Inscription aux Béta Tests"><span class="sub_nav_item_text">Inscription</span></a></li>
</ul>
<ul class="sub_nav_list">
<li><a class="sub_nav_item" href="telechargement.php3"><span class="sub_nav_item_text">Téléchargement</span></a></li>
</ul> </div><br>

</div>
<div id="sub_container1"></div>
</div>
<div id="sub_container2">
<div xmlns:wal="http://www.schlund.de/webfix/assignmentLanguage" id="content_container" wal:element="content">

<p style="text-align: center;">
<span style="font-weight: bold;"></span><b>Informations</b> <br></p>


<div style="text-align: center;">
<p style="text-align: center;" font="" size="2">|
<a href="news.php3" title="Annonces et nouveaut&eacute;s">
Nouveaut&eacute;s</a> |&nbsp;
<a href="update.php3" title="mise a jour">Mise
&agrave; jour</a> |&nbsp;
<a href="evenement.php3" title="Evenement">Evenements</a>
| <a href="sondages.php3" title="sondages">Sondages</a>
| <a href="archives.php3" title="archives">Archives</a>
| </p>
</div>







<img style="width: 500px; height: 32px;" alt="" src="images/newsbox.gif"><br><br>
<div style="text-align: center;">| <a href="javascript:MontreTout( 'mondiv' )">+</a> | <a href="javascript:CacheTout( 'mondiv' )">-</a> |<br>
<br></div><br>


<a href="javascript:DivStatus( 'mondiv', '13' )">Artwork et trailer (06-07): nouvelles image et vidéos</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv13" id="mondiv13">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">

<center><a href="img/moonkiroe_mmorpg_illustration2.jpg" target="_blank"><img src="img/moonkiroe_mmorpg_illustration2.jpg" width="320" height="225"></center></a><br>
Nous avons ajouté dans la partie <a href="artworks.php3">Artworks</a> une nouvelle illustration (pour la forêt des Guduls).<br>
Nous avons aussi ajouté des vidéos dans la partie <a href="trailer.php3">trailer</a> du site.<br>
<br></div></div>



<a href="javascript:DivStatus( 'mondiv', '12' )">Annonce (06-07): modification de la version démo</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv12" id="mondiv12">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
Après avoir testé notre version démo (version de l'équipe), et suite à certains changements, nous avons décidé d'intégrer 
de nouvelles fonctions dans le jeu. Cependant ces nouvelles fonctions demandent de retravailler énormément la démo.
Nous avons donc commencé le développement de ces nouvelles fonctions :<br>
- le scrolling est désormais intégré au jeu (scrolling = déplacement du décor)<br>
- ainsi les maps ne sont plus limitées au 1024*768 ((1 ancienne map=1 screenshot), mais sont désormais en 10240*7680 
(soit 100 fois plus grandes)<br>
- divers éléments ont été retouchés (interfaces, décors, maisons...).<br>
L'ensemble de ces changements nécessite donc que nous retravaillons sur le développement du jeu pendant quelques temps, 
donc la sortie de la Bêta "privée" est repoussée. Aucune date n'est encore arrêtée, nous vous tiendrons au courant. 
Merci de votre compréhension.<br>
Plus d'informations sur le <a href="http://moonkiroe.fr-bb.com" target=_blank>forum officiel</a>.<br>
<br></div></div>



<a href="javascript:DivStatus( 'mondiv', '11' )">Inscription aux bêta-tests (05-07): avis aux utilisateurs d'Hotmail</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv11" id="mondiv11">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
Bonjour. Si vous avez postulé pour être bêta-testeurs 
pour le jeu, avec une adresse email hotmail (.com ou . fr), 
veuillez nous renvoyer vos message, car la plupart des adresses 
email avec hotmail ne nous arrivent pas ou alors, nos réponses nous reviennent. Nous répondons à TOUTES LES DEMANDES 
D'INSCRIPTIONS pour les bêta-tests. Donc, si vous n'avez pas reçu de réponses, c'est que nous avons un problème 
avec votre adresse email. POur cela, il est plus simple de passer par le <a href="http://moonkiroe.fr-bb.com" target=_blank>forum officiel</a> et de vous y inscrire directement, afin d'être tenu informé de la progression du jeu. Merci.<br>
<br></div></div>

<a href="javascript:DivStatus( 'mondiv', '10' )">Annonce (05-07) : date de la Version Bêta-test repoussée.</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv10" id="mondiv10">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
La Version pour les bêta-tests est retardée. Nous avons presque terminé le développement, mais il nous reste 
encore quelques fonctions à vérifier. De plus, nous connaissons quelques petits soucis de connections (FAI) qui 
devraient être résolus d'ici peu. Enfin, il nous reste encore l'encryption des données à terminer afin que cette 
version soit totalement finie. Nous vous tiendrons au courant sur le <a href="http://moonkiroe.fr-bb.com" target=_blank>forum officiel</a> ou ici de la sortie prochaine de cette version. Merci de votre compréhension et de votre patience et à bientôt !<br>
<br></div></div>


<a href="javascript:DivStatus( 'mondiv', '9' )">Site 12/04/2007 : Artworks</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv9" id="mondiv9">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
La section <a href="artworks.php3">Artworks</a> est ouverte. Vous y trouverez par la suite des illustrations pour le jeu (test pour le futur trailer du jeu). Puis, nous y mettrons les recherches graphiques (dessins, images 3D), ayant servi à créer Moonkiroe.<br>
<br></div></div>


<a href="javascript:DivStatus( 'mondiv', '8' )">Médias 12/04/2007 : une 2ème illustration</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv8" id="mondiv8">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
<center><a href="images/moonkiroe_mmorpg2.jpg" target="_blank"><img src="images/moonkiroe_mmorpg2.jpg" width="384" height="225"></center></a><br><br>
Voici une 2ème illustration pour le jeu Moonkiroe.<br>
<br></div></div>

<a href="javascript:DivStatus( 'mondiv', '7' )">Médias 10/04/2007 :  une nouvelle illustration </a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv7" id="mondiv7">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
<center><a href="images/moonkiroe_mmorpg.jpg" target="_blank"><img src="images/moonkiroe_mmorpg.jpg" width="384" height="225"></center></a><br><br>
Voici une nouvelle illustration pour le jeu Moonkiroe. Prochainement, nous essayerons de réaliser un trailer qui présentera le jeu et son univers. Ce trailer devrait être un film d'animation en 3D, qui reprendra les éléments du jeu, ainsi que les personnages et les animaux.<br>
<br></div></div>


<a href="javascript:DivStatus( 'mondiv', '6' )">Annonce 09/04/2007: Bêta-test privé : </a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv6" id="mondiv6">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
Nous avons mis des informations concernant l'inscription au bêta-test privé : <a href="inscription_beta.php3">bêta-test privé</a>.<br>
<br></div></div>

<a href="javascript:DivStatus( 'mondiv', '5' )">Nouveauté 04/04/2007 Nouveaux Fonds D'écran</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv5" id="mondiv5">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">
Nous avons mis à votre disposition de nouveaux Fonds D'écran (wallpaper). Rubrique : <a href="wallpaper.php3">Wallpaper</a><br>
<br></div></div>


<a href="javascript:DivStatus( 'mondiv', '1' )">Annonce 25/03/2007
: Ouverture du site officiel</a><br>

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv1" id="mondiv1">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">Le
site officiel moonkiroe.com est officiellement ouvert. <br>

Vous y trouverez de nombreuses informations sur le jeu (les personnages, les contr&eacute;es &agrave; visiter, le gameplay, etc...), des
screenshots, ainsi que des liens vers le forum officiel. Nous avons mis &agrave; votre disposition des formulaires pour les probl&egrave;mes que vous
pourriez rencontrer. <br>
Nous avons aussi mis en ligne des sondages pour que vous puissiez voter pour les personnages avec lesquels vous aimeriez voter en priorité dans le jeu, ou pour les ennemis que vous aimeriez trouver dans le jeu. Rubrique : <a href="sondage.php3">Sondage</a>.<br>
Vous avez aussi la possibilit&eacute; de nous &eacute;crire si vous le souhaitez.<br>
Amusez-vous bien :).<br><br>

</div></div>

<a href="javascript:DivStatus( 'mondiv', '2' )">Annonce 24/03/2007
: date de la d&eacute;mo (version 1.0)</a><br>

<div name="mondiv2" id="mondiv2">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">La
date pour la premi&egrave;re d&eacute;mo est&nbsp; le 25
avril 2007. <br>

La
d&eacute;mo devrait permettre de tester le jeu avec de nombreux
&nbsp;joueurs en
m&ecirc;me temps (Online, bien entendu). Pour cela, nous
r&eacute;serverons un
serveur qui devrait &ecirc;tre ouvert 24H/24 et devrait nous
permettre
d'accueuillir jusqu'&agrave; 1000 joueurs simultan&eacute;ment.<br>

<br>

</div>

</div>

<a style="font-family: Helvetica,Arial,sans-serif;" href="javascript:DivStatus( 'mondiv', '3' )">Annonce 24/03/2007 :
Inscription pour la d&eacute;mo</a><br style="font-family: Helvetica,Arial,sans-serif;">

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv3" id="mondiv3">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">La
date d'inscription, pour participer aux tests de la d&eacute;mo,
commencera d&eacute;but avril 2007 (aux alentours du 10
avril certainement).. <br>

Pour s'inscrire, il suffit d'envoyer un mail &agrave; l'adresse
suivante : <a href="mailto:moonkiroe@free.fr">moonkiroe@free.fr</a><br>
Vous pouvez pr&eacute;ciser dans ce message les jeux auxquels vous avez d&eacute;j&agrave;
jou&eacute; et auxquels vous aimez jouer (genre, type, etc...).<br>

<br>

</div>

</div>

<a href="javascript:DivStatus( 'mondiv', '4' )">Nouveaut&eacute;
du Jeu (23/03/2007)</a><br style="font-family: Helvetica,Arial,sans-serif;">

<div style="font-family: Helvetica,Arial,sans-serif;" name="mondiv4" id="mondiv4">
<div style="border: 0px solid black; background-color: whitesmoke; margin-bottom: 2px;">Voici
ce que contient actuellement la d&eacute;mo (et donc le jeu):<br>

- moteur Online op&eacute;rationnel<br>

- tchat <br>

- pr&egrave;s de 30 maps (1 map= 1 screenshot) sont
pr&egrave;tes.<br>

- 2 ennemis sont anim&eacute;s <br>

<br>




</div>

</div>

<br>

<br>
<!--
<div style="text-align: center;">Autres news :&nbsp; [ 1 ] [ 2 ]<br></div>

-->


</div>

</div>

</div>

<div id="footer">
<div id="footer_text">
<div id="sub_container2">
<center>
<div xmlns:wal="http://www.schlund.de/webfix/assignmentLanguage" id="content_container" wal:element="content"><font color="white" face="Arial" size="1"><b>|
</b></font><b><b><a class="main_nav_item" href="dracaena.php3">Copyright
&copy; 2007 Dracaena Studio.
</a><font color="white" face="Verdana" size="1"><b>|
</b></font>






<SCRIPT language="javascript">
    var w;
    function Conf() {
       w=window.open("legal/confidentialite.php3","form1","width=716,height=546","menubar=no,scrollbars=no,statusbar=no");
    }
    function Fermer() {
       if (w.document) { w.close(); }
    }
  </SCRIPT>

<a HREF="javascript:Conf()" >Confidentialité</a><font face="Arial" size="1" color="white"> <b> | <b></font>

<SCRIPT language="javascript">
    var w;
    function Ouvrir() {
       w=window.open("legal/utilisation.php3","pop1","width=716,height=546");
    }
    function Fermer() {
       if (w.document) { w.close(); }
    }
  </SCRIPT>





<b><a href="javascript:Ouvrir()">Conditions
d'Utilisation
</a><font color="white" face="Arial" size="1"><b>|
</b></font>
<b><b><a href="contact.php3">Contacts
</a><font color="white" face="Verdana" size="1"><b>|
</b></font>
</div>

</center>

</div>

</div>

</div>

</div>

<div id="extra_div1">
<span></span></div>

<div id="extra_div2">
<span></span></div>

<div id="extra_div3">
<span></span></div>

<div id="extra_div4">
<span></span></div>

<div id="extra_div5">
<span></span></div>

<div id="extra_div6">
<span></span></div>

<div id="extra_div7">
<span></span></div>

<div id="extra_div8">
<span></span></div>

<div id="extra_div9">
<span></span></div>

<div id="extra_div10">
<span></span></div>

<div id="extra_div11">
<span></span></div>

<div id="extra_div12">
<span></span></div>

</div>
</body>
</html>
