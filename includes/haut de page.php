<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo7.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Pour le support : </p>
              <a href="mailto:sa.saghiranass@gmail.com">benaly.issa97@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service d'assistance téléphonique : </p>
              <a href="tel:+212643523193">+22391708023</a> </div>
            <div class="social-follow">
              
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Identifier/ Enregistrer</a> </div>
<?php }
else{ 

echo "Bienvenue sur le portail de location de voitures";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="page.php?type=aboutus">À propos de nous</a></li>
          <li><a href="liste de voitures.php">Liste de voitures</a>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="nous contacter.php">Nous contacter</a></li>
        <div class="header_wrap" style="margin-left: 250px">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
  {

   echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profil.php">Paramètres de profil</a></li>
              <li><a href="modifier mot de passe.php">Modifier mot de passe</a></li>
            <li><a href="mes résérvations.php">Mes résérvations</a></li>
            <li><a href="poster un témoignage.php">Poster un témoignage</a></li>
          <li><a href="mes témoignages.php">Mes témoignages</a></li>
            <li><a href="se déconnecter.php">Se déconnecter</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Paramètres de profil</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Modifier mot de passe</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mes résérvations</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Poster un témoignage</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mes témoignages</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Se déconnecter</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        
      </div>
        </ul>
      </div>

    </div>
  </nav>
</header>