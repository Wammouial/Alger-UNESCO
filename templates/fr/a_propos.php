<?php 
	/*include("co_bdd.php");
	$msg = 0;
	
	if ( isset($_POST['form_name']) && isset($_POST['form_subject']) ) {
		
		if ( isset($_COOKIE['FormSubmitted']) ) {
			$msg = 3;
		
		} else {
			$name = htmlspecialchars($_POST['form_name']);
			$content = htmlspecialchars($_POST['form_subject']);
			$now = date('Y-m-d H:i:s');

			$add = $bdd->prepare('INSERT INTO comment (author, datePost, content) VALUES (:author, :date, :content);');
			$result = $add->execute(array(':author' => $name, ':date' => $now, ':content' => $content));

			if ($result) {
				$msg = 1;
				$_SESSION['cookie_form'] = true;  // Pour eviter qu'une meme personne n'envoie trop de formulaires d'un coup (1 par jour max).
				// Dans le fichier php qui inclue celui ci cela provoquera l'envoi d'un cookie pour empecher d'envoyer trop de formulaires.
			} else {
				$msg = 2;
			}
		}
	} */  // Pas de BDD
?>
	
	<div id="all-propos">
	  <div class="container">
			
		<?php 
			/*if ( $msg == 1 ) {
				echo '<div class="alert alert-success alert-form"><strong>Succès!</strong> Votre commentaire a bien été posté.</div>';
			}
			if ( $msg == 2 ) {
				echo '<div class="alert alert-danger alert-form"><strong>Attention!</strong> Erreur lors de l\'enregistrement de votre commentaire.</div>';
			}
			if ( $msg == 3 ) {
				echo '<div class="alert alert-danger alert-form"><strong>Attention!</strong> Vous avez déjà posté un commentaire aujourd\'hui.</div>';
			} */
		?>
		<h2>A propos</h2>
		<div class="row">
		  <div class="col-xs-12">
			<h3>Qui sommes nous ?</h3>
			<p class="p_prop">
			  Nous sommes une équipe d'étudiants de l'IUT de Marne-La-Vallée.
			  Ce site est un projet réalisé dans le cadre d'un partenariat avec l' UNESCO 
			  qui vise à valoriser la patrimoine mondial à travers le numérique.
			  Vous trouverez donc sur ce site une présentation de la casbah d'Alger à travers Histoire et
			  Légendes afin de mieux comprendre son incroyable potentiel culturel millénaire.
			</p>
			<div class="row">
				  
			  <!-- Personne 1 -->
			  
			  <div class="col-lg-3 col-sm-6">

				<div class="card hovercard">
					<div class="cardheader">

					</div>
					<div class="avatar">
						<img alt="" src="img/propos/sami.jpg">
					</div>
					<div class="info">
						<div class="title">
							<a target="_blank" href="https://www.linkedin.com/in/sami-ch%C3%A9bili-44750a15b/">Sami</a>
						</div>
						<div class="desc">Chef de projet</div>
					</div>
					<div class="bottom">
						<a rel="publisher" href="https://www.linkedin.com/in/sami-ch%C3%A9bili-44750a15b/" target="_blank">
							<img class="img-responsive propos_linkedin" src="img/linkedin.svg"></img>
						</a>
					</div>
				</div>
			  </div>
			  
			  <!-- Personne 2 -->
			  <div class="col-lg-3 col-sm-6">

				<div class="card hovercard">
					<div class="cardheader">

					</div>
					<div class="avatar">
						<img alt="" src="img/propos/mel.jpg">
					</div>
					<div class="info">
						<div class="title">
							<a target="_blank" href="https://www.linkedin.com/in/m%C3%A9lissa-buczko-a5541b157/">Mélissa</a>
						</div>
						<div class="desc">Communicante</div>
					</div>
					<div class="bottom">
						<a rel="publisher" href="https://www.linkedin.com/in/m%C3%A9lissa-buczko-a5541b157/" target="_blank">
							<img class="img-responsive propos_linkedin" src="img/linkedin.svg"></img>
						</a>
					</div>
				</div>
			  </div>
			  
			  <!-- Personne 3 -->
			  
			  <div class="col-lg-3 col-sm-6">

				<div class="card hovercard">
					<div class="cardheader">

					</div>
					<div class="avatar">
						<img alt="" src="img/propos/soud.jpg">
					</div>
					<div class="info">
						<div class="title">
							<a target="_blank" href="https://www.linkedin.com/in/soudsada-koulabouth-492532157/">Soudsada</a>
						</div>
						<div class="desc">Traductrice</div>
					</div>
					<div class="bottom">
						<a rel="publisher" href="https://www.linkedin.com/in/soudsada-koulabouth-492532157/" target="_blank">
							<img class="img-responsive propos_linkedin" src="img/linkedin.svg"></img>
						</a>
					</div>
				</div>
			  </div>
			  
			  <!-- Personne 4 -->
			  
			  <div class="col-lg-3 col-sm-6">

				<div class="card hovercard">
					<div class="cardheader">

					</div>
					<div class="avatar">
						<img alt="" src="img/propos/wil.jpg">
					</div>
					<div class="info">
						<div class="title">
							<a target="_blank" href="https://www.linkedin.com/in/william-ammouial-06850a15b/">William</a>
						</div>
						<div class="desc">Développeur</div>
					</div>
					<div class="bottom">
						<a rel="publisher" href="https://www.linkedin.com/in/william-ammouial-06850a15b/" target="_blank">
							<img class="img-responsive propos_linkedin" src="img/linkedin.svg"></img>
						</a>
					</div>
				</div>
			  </div>
			  
			  <!-- FIN -->
				  
			</div>
		  </div>
        </div>
		  
		<!-- Remerciements -->
		<div class="row propos_low">
		  <div class="col-md-6">
			<h3>Remerciements</h3>
			<!-- <p class="p_prop">
			  
			</p> -->
			<h4>Equipe pédagogique IUT :</h4>
			<ol>
			  <li>ETTAYEB Tewfik : Responsable du forum UNESCO/UPEM</li>
			  <li>MATHIEU Georges : Aide à la gestion de projet</li>
			  <li>CESSY David : Aide au développement du site</li>
			  <li>THEODORAKAKOS Konstantinos : Aide à la traduction du site en Anglais</li>
			</ol>
			<h4>Collaborateurs extérieurs :</h4>
			<ol>
			  <li>CARDINET Emeline : Charte graphique du site</li>
			  <li>NUSSBAUMER Benjamin : Design Thinking</li>
			  <li>ATH Salem : Auteur et propriétaire de certaines photos du site</li>
			  <li>BERKESI Gabor : Créateur du générateur du menu circulaire</li>
			</ol>
			  
		  </div>
          
          <div class="col-md-6">
            <h3>Laissez un commentaire :</h3>
            
            <form class="form-comment" action="" method="POST">
              <div class="form-group">
                <label for="form_name">Pseudo:</label>
                <input class="form-control" type="text" id="form_name" name="form_name" placeholder="Entrez votre pseudo" required maxlength="254">
              </div>
              
              <div class="form-group">
                <label for="form_subject">Commentaire:</label>
                <textarea class="form-control" id="form_subject" name="form_subject" placeholder="Entrez votre commentaire" required maxlength="511"></textarea>
              </div>
              
              <div class="form-group">
                <input class="btn btn-warning" id="form_button" type="submit" value="Envoyer">
              </div>
            </form>
            
          </div>
        </div>


        <div class="row propos_low">
		  <div class="col-md-12">
		  	<h3>Commentaires</h3>
			
		<?php
			// $recup = $bdd->prepare('SELECT author, datePost, content FROM comment ORDER BY datePost DESC;');
			// $recup->execute(); ?>
			
		<?php while( $row = $recup->fetch() ) : ?>
		  	
			<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('img/propos/avatar.png')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text"><?php echo $row['content']; ?></p>
						<div class="bottom-comment">
								<div class="comment-date"><?php echo $row['datePost']; ?></div>
								<div class="comment-author"><i><?php echo $row['author']; ?></i></div>
						</div>
				</div>
		    </div>
		
		<?php endwhile; ?>

		  </div>
		</div>


	  </div>	
    
	  
	  <!-- Menu Circulaire -->
    <div id='piemenu' class="radial" data-wheelnav
         data-wheelnav-slicepath='DonutSlice'
         data-wheelnav-spreader data-wheelnav-spreaderpath='PieSpreader'
         data-wheelnav-rotateoff
         data-wheelnav-navangle='270'
         data-wheelnav-cssmode 
         data-wheelnav-init>
          <div data-wheelnav-navitemtext='A visiter' onmouseup='window.location.href = "monuments.php";' ></div>
          <div data-wheelnav-navitemtext='Carte' onmouseup='window.location.href = "carte.php";'></div>
          <div data-wheelnav-navitemtext='A propos' onmouseup='window.location.href = "a_propos.php";'></div>
          <div data-wheelnav-navitemtext='Photos' onmouseup='window.location.href = "photos.php";'></div>
    </div>
	</div>
