<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>SILMO 2019</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://www.angeleyes-eyewear.com/wp-content/themes/angel-eyes-vitrine/assets/img/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="silmo.css">
	<link rel="stylesheet" type="text/css" href="chargement.css">
	<link rel="stylesheet" type="text/css" href="gobold_squirel/stylesheet.css">
    <link href="fontawsome/css/fontawesome.css" rel="stylesheet">
  <link href="fontawsome/css/brands.css" rel="stylesheet">
  <link href="fontawsome/css/solid.css" rel="stylesheet">
</head>
<body>
<div style="background-color:black;">
  <!--[if gte mso 9]>
  <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
    <v:fill type="tile" src="https://i.imgur.com/YJOX1PC.png" color="#7bceeb"/>
  </v:background>
  <![endif]-->
  <table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0" >
    <tr>
      <td valign="top" align="center" >
      	<table width="600px"  border="0" class="background">
      		<tr>
      			<td rowspan="2" width="103px"  >&nbsp;</td>
      			<td  style="text-align: center;position: relative;" height="240vh">
      				<img src="Silmo.png" class="logo_silmo" width="200px">
      				<img src="2019.png" class="deux19" width="140px">
      			</td>
      			<td rowspan="2" width="127px">&nbsp;</td>
      		</tr>
      		<tr>
      			<td height="auto" style="padding: 50px 10px;">
      				<img src="logos.png" width="100%">
              <br><br>
          <div id="derouler"> Derouler  <i class="fas fa-sort-down"></i></div>
          
					<?php if(empty($_SESSION)){
					?>

          <div class="cachee">

      				<p class="texte">Du vendredi 27 au lundi 30 septembre, vous pouvez prévoir un weekend chez votre belle-mère, ou bien vous rendre aux Journées d’initiation des Amis de la flûte à bec, ou encore passer par le SILMO, et en particulier sur le stand Angel Eyes dont la réputation n’est plus à faire. Si vous êtes arrivés jusqu’ici, cette dernière option remportera sans doute vos faveurs, et vous ne serez pas déçus.</p>
      				<p class="texte">
  					Au programme de ces 4 jours de folie douce, vous pourrez découvrir les dernières nouveautés de Vinyl Factory, de Freakshow, et, en avant-première mondiale, la toute nouvelle collection Mazette ! qui risque de faire beaucoup de bruit, de jaloux et d’heureux !<br>
					Et comme il n’y a pas que les lunettes dans la vie, le stand d’Angel Eyes vous réserve comme à son habitude un accueil savoureux, dont vous profiterez encore plus en remplissant le formulaire ci-dessous ! De quoi vous faire oublier votre belle-mère et la flûte à bec *… 
      				</p>
          </div>
      				<p class="texte">
					*Un cadeau sera offert à toute personne se présentant sur notre stand avec sa belle-mère et une flûte à bec.</p>
					<?php
					}else {
						echo '
						<div class="alert alert-secondary" role="alert">
  							vos données personnelles restent strictement confidentielles.
						</div>
						';
					}
					?>
					<div class="alert alert-danger" role="alert" id="message_alert">
						
					</div>
          <div class="alert alert-primary" role="alert" id="message_success">
            L'equipe d'Angel Eyes vous remercie pour votre participation et espere vous voir au stand <b>H060</b>.
          </div>
					<p class="gobold" >hall 5 stand h060</p>
					<div class="chargement">
						<div class="loading exemple5 color5"><p>Chargement</p></div>
					</div>
					<?php include "form.php"; ?>
      			</td>
      		</tr>

      	</table>

      </td>
    </tr>
  </table>
</div>




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="functions.js"></script>
<script src="validation.js"></script>
</body>
</html>