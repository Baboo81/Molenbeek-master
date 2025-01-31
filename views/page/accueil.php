<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
?>

<?php
    $path = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $path .=$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]);        
    echo $path;

# Utiliser <?php echo $path . " "; pour des liens ?>
<main>
		<section id="intro">
			<!-- <div id="wrapper"> -->
			<div id="intro-title">
				<img src="<?php echo $path . "./assets/img/logos/logo-thin.svg"?>;" alt="Molenbeek en promenade">
			</div>
			<div id="intro-img">
				<img id="cityscape" src="./assets/img/illustrations/Molenbeek-scene-mobile-outline.svg"
					alt="Paysage urbain de Molenbeek"></div>

			<!-- </div> -->
			<div id="intro-text" class="text">
				<p>Molenbeek est une des communes les plus passionnantes de Bruxelles.
				</p>
				<p>Autrefois centre industriel, Molenbeek est aujourd’hui un quartier diversifié et de plus en plus
					durable.
				</p>
				<p>Choisissez entre trois itinéraires différents qui vous emmèneront à travers l’histoire de Molenbeek,
					ses beaux parcs et sa communauté maritime.
				</p>
			</div>
			<div class="btn-wrapper">
				<button class="btn btn--dark">Aux itinéraires</button>
			</div>
			<!-- <button class="btn btn-light">les itinéraires</button> -->
		</section>
		<section id="carousel"></section><a name="carousel"></a>
			<div class="cards-wrapper" id="cards-wrapper">

				<div class="slider">

					<div class="slide slide-1">

						<div class="card-item">
							<div class="thumb thumb-1">
								<!--image here -->
								<img src="./assets/img/itin-maritime/maritime-sm/canal-soir-sm.jpeg" alt="image du canal">
							</div>
							<div class="description description-1">
								<h3>Molenbeek maritime</h3>

								<div>Autrefois centre de l’industrie lourde, le quartier du canal est aujourd’hui un
									quartier
									dynamique, créatif et durable.</div>
								<div class="filter">
									<img src="./assets/img/icons/icon-stopwatch.svg" alt="horloge">
									<p class="route-info" id="info-1">1 heure 30 minutes</p>
									<img src="./assets/img/icons/icon-distance.svg" alt="horloge">
									<p class="route-info" id="info-2">5 km</p>
									<img src="./assets/img/icons/icon-personne.svg" alt="horloge">
									<p class="route-info" id="info-3">Familles, personnes à mobilité reduite</p>
								</div>
								<div class="btn-wrapper-card"><a href="?nav=itin2"><button
											class="btn btn--light">Itineraire</button></a></div>
							</div>
						</div>

					</div>

					<div class="slide slide-2">
						<div id="card-item-1" class="card-item">
							<div class="thumb thumb-2">
								<!--image here -->
								<img src="./assets/img/itin-maritime/maritime-sm/fleurs-sm.jpeg" alt="image de la 1ere promenade">
							</div>
							<div class="description description-2">
								<h3>Molenbeek en vélo</h3>
								<div>Autrefois centre de l’industrie lourde, le quartier du canal est aujourd’hui un
									quartier
									dynamique, créatif et durable.</div>
								<div class="filter">
									<img src="./assets/img/icons/icon-stopwatch.svg" alt="horloge">
									<p class="route-info" id="info-1">1 heure 30 minutes</p>
									<img src="./assets/img/icons/icon-distance.svg" alt="horloge">
									<p class="route-info" id="info-2">5 km</p>
									<img src="./assets/img/icons/icon-personne.svg" alt="horloge">
									<p class="route-info" id="info-3">Familles, personnes à mobilité reduite</p>
								</div>
								<div class="btn-wrapper-card"><a href="?nav=itin1"><button
											class="btn btn--light">Itineraire</button></a></div>
							</div>
						</div>
					</div>

					<div class="slide slide-3">
						<div class="card-item">
							<div class="thumb thumb-3" >
								<!--image here -->
								<img src="./assets/img/itin-maritime/maritime-sm/De_Vaartkapoen-sm.jpeg" alt="image du monument Vaartkapoen">
							</div>
							<div class="description description-3">
								<h3>Molenbeek historique</h3>
								<div>Autrefois centre de l’industrie lourde, le quartier du canal est aujourd’hui un
									quartier
									dynamique, créatif et durable.</div>
								<div class="filter">
									<img src="./assets/img/icons/icon-stopwatch.svg" alt="horloge">
									<p class="route-info" id="info-1">1 heure 30 minutes</p>
									<img src="./assets/img/icons/icon-distance.svg" alt="horloge">
									<p class="route-info" id="info-2">5 km</p>
									<img src="./assets/img/icons/icon-personne.svg" alt="horloge">
									<p class="route-info" id="info-3">Familles, personnes à mobilité reduite</p>
								</div>
								<div class="btn-wrapper-card"><a href="?nav=itin3"><button
											class="btn btn--light">Itineraire</button></a></div>
							</div>
						</div>
					</div>

					<div class="arrow arrow-next"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
							viewBox="0 0 30 30">
							<path id="Path_274" data-name="Path 274"
								d="M19,4,16.356,6.644,26.819,17.125H4v3.75H26.819L16.356,31.356,19,34,34,19Z"
								transform="translate(-4 -4)" />
						</svg>
					</div>
					<div class="arrow arrow-prev"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
							viewBox="0 0 30 30">
							<path id="Path_274" data-name="Path 274"
								d="M19,4l2.644,2.644L11.181,17.125H34v3.75H11.181L21.644,31.356,19,34,4,19Z"
								transform="translate(-4 -4)" />
						</svg>
					</div>
				</div>


			</div>
		</section>
	</main>


<!-- JS : main -->
<script src="./assets/script/main.js" defer></script>

<!-- JS : slider -->
<script src="./assets/script/slider.js" defer></script>
