<?php 
	/* include("co_bdd.php");
	$msg = 0;
	
	if ( isset($_POST['form_name']) && isset($_POST['form_subject']) ) {
		
		if ( isset($_COOKIE['FormSubmitted']) ) {
			$msg = 3;
		
		} else {
			// Pour eviter injections de scripts dans les commentaires
			$name = htmlspecialchars($_POST['form_name']);
			$content = htmlspecialchars($_POST['form_subject']);
			$now = date('Y-m-d H:i:s');
			
			// prepare pour eviter injections sql
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
	} */
?>

	<div id="all-propos">
	  <div class="container">
		
		<?php 
		/*	if ( $msg == 1 ) {
				echo '<div class="alert alert-success alert-form"><strong>Success!</strong> Your comment has been posted.</div>';
			}
			if ( $msg == 2 ) {
				echo '<div class="alert alert-danger alert-form"><strong>Warning!</strong> An error occured while posting your comment.</div>';
			}
			if ( $msg == 3 ) {
				echo '<div class="alert alert-danger alert-form"><strong>Warning!</strong> You have already posted a comment today.</div>';
			} */
		?>
		
		<h2>About Us</h2>
		<div class="row">
		  <div class="col-xs-12">
			<h3>Who are we ?</h3>
			<p class="p_prop">
			We are a team of students from the University Institute of Technology of Marne-La-Vallée. 
			This website is a project made in partnership with UNESCO, which intends to highlight world heritage through digital technology.
			You will find on this site a presentation of the Kasbah of Algiers through its history and legends to better understand its incredible millennial cultural potential.

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
						<div class="desc">Project Manager</div>
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
						<div class="desc">Communication Manager</div>
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
						<div class="desc">Translator and content</div>
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
						<div class="desc">IT Developer</div>
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
			<h3>Thanks</h3>
			<!-- <p class="p_prop">
			  
			</p> -->
			<h4>Educational Team :</h4>
			<ol>
			  <li>ETTAYEB Tewfik : In charge of forum UNESCO/UPEM</li>
			  <li>MATHIEU Georges : help in project management </li>
			  <li>CESSY David : help in website development </li>
			  <li>THEODORAKAKOS Konstantinos : Help in website translation</li>
			</ol>
			<h4>External collaborators :</h4>
			<ol>
			  <li>CARDINET Emeline : Website’s graphical charter</li>
			  <li>NUSSBAUMER Benjamin : Design Thinking</li>
			  <li>ATH Salem : Author and owner of  some pictures on the website</li>
			  <li>BERKESI Gabor : Creator of circular menu</li>
			</ol>
		  </div>
          
          <div class="col-md-6">
            <h3>Leave a comment :</h3>
            
            <form class="form-comment" action="" method="POST">
              <div class="form-group">
                <label for="form_name">Username:</label>
                <input class="form-control" type="text" id="form_name" name="form_name" placeholder="Enter your username">
              </div>
              
              <div class="form-group">
                <label for="form_subject">Comment:</label>
                <textarea class="form-control" id="form_subject" name="form_subject" placeholder="Enter your comment"></textarea>
              </div>
              
              <div class="form-group">
                <input class="btn btn-warning" id="form_button" type="submit" value="Send">
              </div>
            </form>
            
          </div>
		</div>
		
		<div class="row propos_low">
		  <div class="col-md-12">
		  	<h3>Comments</h3>
			
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
	  <div id='piemenu' class="radial" data-wheelnav
         data-wheelnav-slicepath='DonutSlice'
         data-wheelnav-spreader data-wheelnav-spreaderpath='PieSpreader'
         data-wheelnav-rotateoff
         data-wheelnav-navangle='270'
         data-wheelnav-cssmode 
         data-wheelnav-init>
          <div data-wheelnav-navitemtext='Places to visit' onmouseup='window.location.href = "monuments.php";' ></div>
          <div data-wheelnav-navitemtext='Map' onmouseup='window.location.href = "carte.php";'></div>
          <div data-wheelnav-navitemtext='About Us' onmouseup='window.location.href = "a_propos.php";'></div>
          <div data-wheelnav-navitemtext='Gallery' onmouseup='window.location.href = "photos.php";'></div>
      </div>
	</div>
