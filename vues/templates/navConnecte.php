	<!-- ENTETE DU SITE -->    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container arriereLogoEntete">
        <div class="row navLogoPlume">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle boutonBurger" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../site/index.php"><img src="<?php echo RACINE.DS; ?>site/img/Logo/logoplume.png" alt="Logo Plume"></a>            
          </div>
        </div>
        <div class="navbar-collapse collapse liensNavPrincipal"> 
          <ul class="nav navbar-nav navbar-left navPrincipal">
              <li><a href="<?php echo TEST.DS; ?>index.php?s=1">Accueil</a></li>
              <li><a href="index.php?s=monCompte">Mes oeuvres</a></li>              
              <li><a href="#">Contact</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navPrincipalDroite">
                <!-- <li><a href="#">Se connecter</a></li>
                <li><a href="#">Créer un compte</a></li> --> 
                    <li><a class="user"><img src="<?php echo RACINE.DS; ?>site/img/Avatars/avatar.png" width="20" height="auto" alt="Utilisateur"><?php echo $_SESSION['sNomUtilisateur']?></a></li>
				      <li><a href="index.php?s=5"><button class="btn btn-blue btnNav">Deconnecter</button></a></li>			
          </ul>

        </div><!-- navbar-collapse -->
      </div>
    </div> <!-- FIN ENTETE DU SITE -->



		