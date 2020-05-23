<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exemple de manipulation du DOM</title>
        <link rel="stylesheet" type="text/css" href="forme.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="FR"/>
        <script type="text/javascript" src="exoDOMImg.js"></script>
    </head>

    <body onload="ajouterOnClick();remplissage();" style="background: yellow">

        <div id="titre">
            <h1>Magasin de disques</h1>
            Tous les disques &agrave; 7&#8364;50!!!<br/>
            cliquez sur l'image pour (d&eacute;)s&eacute;lectionnerx un album<br/>
            Montant du panier : <span id="panier"> 0 &#8364; </span>
        </div>

        <div id="source">
            <h3>Albums disponibles</h3>

            <img src="img/banana.jpg" name="banana"/>

            <img src="img/law.jpg" name="law"/>

            <img src="img/superfreak.jpg" name="superfreak"/>

            <img src="img/time.jpg" name="time"/>

            <img src="img/zeng.jpg" name="zeng"/>

            <img src="img/party.jpg" name="party"/>

            <img src="img/i-fought-the-law.jpg" name="i fought the law"/>

            
        </div>


        <div id="destination">
            <h3>Albums Choisis</h3>
        </div>
        
 
        <br/>
        
        
</body>









<footer style="background:pink">

<form action="magasin.php" method="post" >

  <fieldset>
<div class="info" style="text-align:center;">
        Monsieur : <input type="radio" name="monchoix" value="Monsieur" />
		Madame : <input type="radio" name="monchoix" value="Madame" />
	
<br/>
Nom : <input type="text" name="fname" required /> <br/>	
Prenom : <input type="text"name="lname" required  /> <br/>
Ville : <input type="text"id="obligatoire" name="ville" required /> <br/>
Code Postal : <input type="text" maxlength="5" name="postal" /> <br/>
Numéro : <input type="text" maxlength="8" name="numero" /> <br/>
Adresse : <textarea name="adress"> </textarea> <br/>
Naissance : 
	<select id="liste" name="annee" >
	
	</select>
    <br/>
    
Email: <input type="email" id="courriel" name="email"  /> <br/>


Je veux recevoir des informations sur vos sorties : <input type="checkbox" checked /> <br/>

<input type="submit" value="Confirmer"  /><br/>

	
</fieldset>

</div>
</form>
   </footer>
</html>
