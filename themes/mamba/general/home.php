
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['background']['slide']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $general['index']['content']['home']['title']['1']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $general['index']['content']['home']['short']['1']; ?></p>
                <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contact</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['background']['slide']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $general['index']['content']['home']['title']['2']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $general['index']['content']['home']['short']['2']; ?></p>
                <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contact</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['background']['slide']; ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $general['index']['content']['home']['title']['3']; ?></h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $general['index']['content']['home']['short']['3']; ?></p>
                <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Contact</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only"><?php echo $general['pages']['full']['previous']; ?></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only"><?php echo $general['pages']['full']['next']; ?></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Counts Section ======= -->
    <section class="section-bg bg-primary">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 text-center">
            <h1 class="text-white">Dépannage urgent 24h/24 et 7j/7<br />
				<a href="tel:<?php echo $business['local']['mobile']['code']; ?><?php echo $business['local']['mobile']['number']; ?>" class="text-white"><?php echo $business['local']['mobile']['normal']; ?><?php echo $business['local']['mobile']['longs']; ?></a>
			</h1>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center">
			<?php if(!empty($business['local']['name'])){ ?>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4><?php echo $business['local']['name']; ?></h4>
                <p>
				Chez vous en -30min
				</p>
              </div>
			<?php } else { ?>
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4><?php echo $private['name']; ?></h4>
                <p> </p>
              </div>
			<?php } ?>
			<?php if(!empty($business['local']['name'])){ ?>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo $email['index']['content']['default']['email']; ?>:</h4>
                <p><?php echo $business['local']['mail']['business'].' [AT] '.$domainTLD; ?></p>
              </div>
			<?php } else { ?>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4><?php echo $email['index']['content']['default']['email']; ?>:</h4>
                <p> <?php 
				  if(!empty($private['mail']['public'])){
					echo $private['mail']['public'].' [AT] '.$domainTLD; 
				  } else {			  
					echo $private['mail']['private'].' [AT] '.$private['mail']['private']['@']['external']; 
				  }
				  ?></p>
              </div>
			<?php } ?>
			
			<?php if(!empty($business['local']['name'])){ ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>">
					<?php echo $business['local']['phone']['code']; ?> (<?php echo $business['local']['phone']['normal']; ?>) <?php echo $business['local']['phone']['number']; ?>
				</a><br>
				<a href="tel:<?php echo $business['local']['mobile']['code']; ?><?php echo $business['local']['mobile']['number']; ?>">
					<?php echo $business['local']['mobile']['code']; ?> (<?php echo $business['local']['mobile']['normal']; ?>) <?php echo $business['local']['mobile']['number']; ?>
				</a></p>
              </div>
			<?php } else { ?>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4><?php echo $email['index']['content']['default']['phone']; ?>:</h4>
                <p><a href="tel:<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>">
					<?php echo $private['mobile']['code']; ?> (<?php echo $private['mobile']['normal']; ?>) <?php echo $private['mobile']['number']; ?>
				</a></p>
              </div>
			
			<?php } ?>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" data-rule="required" id="name" placeholder="<?php echo $email['index']['content']['default']['name']; ?>" data-rule="minlen:4" data-msg="<?php echo $email['index']['content']['placeholder']['name']; ?>" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" data-rule="required" id="email" placeholder="<?php echo $email['index']['content']['default']['email']; ?>" data-rule="email" data-msg="<?php echo $email['index']['content']['placeholder']['email']; ?>" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">	
				  <div class="col-12 col-md-4 form-group"> 
					<select name="phone-country-code" id="select">
						<option value="<?php echo $PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE']; ?>" selected>France (+<?php echo $PhoneNumberUtil->getCountryCodeForRegion($PhoneRegionCodeManualNumbers[strtolower('FR')]['COUNTRY-CODE']); ?>)</option>
					</select>
				  </div>
                <div class="col-12 col-md-8 form-group">
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="<?php echo $email['index']['content']['default']['phone']; ?>" data-rule="minlen:3" data-msg="<?php echo $email['index']['content']['placeholder']['phone']; ?>" />
                  <div class="validate"></div>
                </div>
				
              </div>	
              <div class="form-group">
                <input type="text" class="form-control" name="subject" data-rule="required" id="subject" placeholder="<?php echo $email['index']['content']['default']['subject']; ?>" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="<?php echo $email['index']['content']['placeholder']['message']; ?>" placeholder="<?php echo $email['index']['content']['default']['message']; ?>"></textarea>
                <div class="validate"></div>
              </div>
              <?php if(!empty($apiexternal['captcha']['hcaptcha']['public'])){ ?>
			  <div class="form-group">
                <div class="h-captcha" data-sitekey="<?php echo $apiexternal['captcha']['hcaptcha']['public']; ?>" data-theme="dark"></div>
              </div>
				<?php } ?>
              <div class="mb-3">
                <div class="loading"><?php echo $email['index']['content']['form']['load']; ?></div>
                <div class="error-message"></div>
                <div class="sent-message"><?php echo $email['index']['content']['form']['msg-thanks']; ?></div>
              </div>
              <div class="text-center"><button type="submit"><?php echo $email['index']['content']['form']['send']; ?></button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

    <section class="about-lists">
      <div class="container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['1']; ?>" alt="1">--><i class="tplsgen tplsgen-picto-1"></i></span>
            <h4>La plomberie</h4>
            <p>Notre équipe de plombiers expérimentés intervient pour tous les travaux de plomberie et les dépannages de plomberie en urgence comme la recherche et la réparation de fuite d’eau, la recherche d’infiltration, le détartrage tuyauterie ou encore le débouchage de sanitaires.</p>
          </div>

          <div class="col-lg-3 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['2']; ?>" alt="2">--><i class="tplsgen tplsgen-picto-2"></i></span>
            <h4>Le chauffage</h4>
            <p>Nous installons, réparons et entretenons vos installations de chauffage : chaudières, radiateurs, planchers chauffants, pompes à chaleur.</p>
          </div>

          <div class="col-lg-3 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['3']; ?>" alt="3">--><i class="tplsgen tplsgen-picto-3"></i></span>
            <h4>La serrurerie</h4>
            <p>Nos serruriers interviennent pour toutes les installations, réparations et dépannages de tous les types de serrures: Une porte claquée, une porte forcée, pour une remise en état après effraction, pour un déblocage de rideau métallique.</p>
          </div>

          <div class="col-lg-3 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['4']; ?>" alt="4">--><i class="tplsgen tplsgen-picto-4"></i></span>
            <h4>L’électricité</h4>
            <p>Nous posons, réparons et entretenons toutes les installations électriques de votre habitat ou de vos locaux professionnels. De la pose d’interrupteurs à la réparation de tableaux électriques, en passant par le réglage de votre chauffe-eau.</p>
          </div>

          <div class="col-lg-4 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['5']; ?>" alt="5">--><i class="tplsgen tplsgen-picto-5"></i></span>
            <h4>La vitrerie</h4>
            <p>Notre équipe de vitriers réalise vos travaux de vitrerie pour une construction neuve ou en rénovation, la pose de vitrage simple et double, la pose de vitrine ainsi que tous les dépannages de vitrerie.</p>
          </div>

          <div class="col-lg-4 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['6']; ?>" alt="6">--><i class="tplsgen tplsgen-picto-6"></i></span>
            <h4>La climatisation</h4>
            <p>Pour l’installation, le dépannage et l’entretien de tous vos systèmes de climatisation et de pompes à chaleur, faites appel à nos chauffagistes agréés pour la manipulation des fluides frigorifiques.</p>
          </div>

          <div class="col-lg-4 col-md-12 content-item">
            <span><!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['activities']['7']; ?>" alt="7">--><i class="tplsgen tplsgen-picto-7"></i></span>
            <h4>L’assainissement</h4>
            <p>Que vous soyez particulier ou professionnel, nous intervenons pour l’installation, l’entretien de fosses septiques, la pose et l’entretien d’assainissement autonome, le terrassement, la pose de système de filtration, le raccordement au tout-à-l’égout, l’installation de collecteur pour les eaux de pluie.</p>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="bg-primary section-bg">
      <div class="container">

        <div class="section-title">
			<h2 class="text-center text-white">Fournisseur</h2>
		</div>
        <div class="row">

          <div class="col-lg-2 col-md-6 text-center">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['founisseur']['1']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-velux"></i>
          
          </div>

          <div class="col-lg-2 col-md-6 text-center">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['founisseur']['2']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-atlantic"></i>
         
          </div>
		  
          <div class="col-lg-2 col-md-6 text-center">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['founisseur']['3']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-elm-leblanc"></i>
            
          </div>
		  
          <div class="col-lg-2 col-md-6 text-center">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['founisseur']['4']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-fichet"></i>
          
          </div>
		  
          <div class="col-lg-2 col-md-6 text-center">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['founisseur']['5']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-legrand"></i>
            
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Counts Section ======= -->
    <section class="inner-page">
      <div class="container">

        <div class="section-title">
			<h2 class="text-center">Artisan Certifier</h2>
		</div>
        <div class="row">

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['certifier']['1']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-les-compagnons-du-devoir img-fluid"></i>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['certifier']['2']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-qualibat img-fluid"></i>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['certifier']['3']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-rge-eco-artisan img-fluid"></i>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box">
              <!--<img src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['certifier']['4']; ?>" class="img-fluid">--><i class="tplsgen tplsgen-artisan img-fluid"></i>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Counts Section ======= -->
    <section class="bg-primary section-bg">
      <div class="container">

        <div class="section-title">
			<h2 class="text-center text-white">Avis clientèle</h2>
		</div>
	 </div>
	<div class="container">
      <div id="AdviceCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators" id="advice-carousel-indicators text-dark">
			<li data-target="#AdviceCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#AdviceCarousel" data-slide-to="1"></li>
			<li data-target="#AdviceCarousel" data-slide-to="2"></li>
			<li data-target="#AdviceCarousel" data-slide-to="3"></li>
			<li data-target="#AdviceCarousel" data-slide-to="4"></li>
			<li data-target="#AdviceCarousel" data-slide-to="5"></li>
		</ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
			  <img width="100%" height="250" alt="avis client 1" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['1']; ?>">
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
			  <img width="100%" height="250" alt="avis client 2" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['2']; ?>">
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
			  <img width="100%" height="250" alt="avis client 3" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['3']; ?>">
              </div>
            </div>
          </div>
          <!-- Slide 1 -->
          <div class="carousel-item" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
			  <img width="100%" height="250" alt="avis client 4" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['4']; ?>">
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
               <img width="100%" height="250" alt="avis client 5" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['5']; ?>">
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" data-interval="2000">
            <div class="carousel-container">
              <div class="carousel-content container">
               <img width="100%" height="250" alt="Avis client 6" src="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['home']['clients']['avis']['6']; ?>">
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#AdviceCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left text-dark" aria-hidden="true"></span>
          <span class="sr-only"><?php echo $general['pages']['full']['previous']; ?></span>
        </a>
        <a class="carousel-control-next" href="#AdviceCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right text-dark" aria-hidden="true"></span>
          <span class="sr-only"><?php echo $general['pages']['full']['next']; ?></span>
        </a>

      </div>
    </div>
	  
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
              <p class="text-white text-center">Retrouver toutes les avis clients sur <a href="https://www.google.com/search?q=atelier-carpentier&oq=atelier-carpentier&aqs=chrome..69i57j69i60l3.3519j0j1&sourceid=chrome&ie=UTF-8#">Google</a> et <a href="https://www.pagesjaunes.fr/pros/54578606#blocAvis">Pages Jaune</a></p>
           
          </div>

		</div>
	 </div>
    </section><!-- End Counts Section -->


    <section class="inner-page">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box text-center">
              <p><i class="fas fa-file-alt fa-4x text-info"></i><br>Devis gratuit</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box text-center">
              <p><i class="fas fa-history fa-4x text-info"></i><br>Dépannage 24h/24 7j/7</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box text-center">
              <p><i class="fas fa-phone-alt fa-4x text-info"></i><br>SAV</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
            <div class="count-box text-center">
              <p><i class="fas fa-comment fa-4x text-info"></i><br>Conseils</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  </main><!-- End #main -->
