	<?php  ob_start(); ?>


<div id="carouselExampleIndicators" class="carousel slide perso_bgBluedegrade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../sources/images/cours1.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/catalogue.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../sources/images/cours3.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
	  </a>
  </div>
<div class="text-center mt-3 monBouton">
       <a class="btn perso_bgOrange text-center text-white rounded-pill" href="../sources/pdf/CV_Thierno.pdf" download="CV_Thierno">Télécharger mon CV !</a>
 </div>
<div class="container text-center" id="presentation">
	<h2 class="m-5 perso_colorBlueLight"> Thierno : développeur web en herbe </h2>
	<div class="embed-responsive embed-responsive-21by9">
		<iframe 
			class="embed-responsive-item" width="490" height="295" 
			src="https://www.youtube.com/embed/SewBNsbBnYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
		</iframe>
    </div>
</div>
<div class="container text-center" id="competence">
	<h2 class="m-5 perso_colorBlueLight">Compétences</h2>
	<div class="row">
		<div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> HTML / CSS </h3>
			<div class="progress">
               <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%
             </div>
           </div>	 
	    </div>
	    <div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> WordPress </h3>
			<div class="progress">
               <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">70%
             </div>
           </div>	 
	    </div>
	    <div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> Rédaction web/SEO </h3>
			<div class="progress">
               <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">65%
             </div>
           </div>	 
	    </div>
	    <div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> Javascript</h3>
			<div class="progress">
               <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%
             </div>
           </div>	 
	    </div>
	    <div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> PHP/Bootstrap </h3>
			<div class="progress">
               <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%
             </div>
           </div>	 
	    </div>
	 <div class="col-12 col-md-6 col-xl-4 my-3">
			<h3> Angular </h3>
			<div class="progress">
               <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%
             </div>
           </div>	 
	    </div>
   </div>
   <div class="container text-center" id="portfolio">
	<h2 class="m-5 perso_colorBlueLight">Portfolio</h2>
	<div class="card-group">
		<div class="card border-success mb-3">
		  <div class="card-header bg-transparent border-success">Cours Javascript</div>
		    <div class="card-body text-success">
			    <img src="../sources/images/cours1.png" class="d-block w-100" />
		    </div>
		   <div class="card-footer bg-transparent border-success">
		   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cours1">En savoir plus</button>
		   </div>
		</div>
		<div class="card border-success mb-3">
		  <div class="card-header bg-transparent border-success">PHP/MYSQL</div>
		    <div class="card-body text-success">
			    <img src="../sources/images/cours3.png" class="d-block w-100" />
		    </div>
		   <div class="card-footer bg-transparent border-success">
		   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cours3">En savoir plus</button>
		   </div>
		</div>
		<div class="card border-success mb-3">
		  <div class="card-header bg-transparent border-success">Cas pratique JS</div>
		    <div class="card-body text-success">
			    <img src="../sources/images/catalogue.png" class="d-block w-100" />
		    </div>
		   <div class="card-footer bg-transparent border-success">
		   	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catalogue">En savoir plus</button>
		   </div>
		</div>
	</div>
  </div>
<!-- Modal -->
<div class="modal fade" id="cours1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Javascript</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img src="../sources/images/cours1.png" class="d-block w-100" />
       <p style="text-align: justify;"> Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cours3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PHP/MYSQL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img src="../sources/images/cours3.png" class="d-block w-100" />
       <p style="text-align: justify;"> Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="catalogue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CAS Pratique</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img src="../sources/images/catalogue.png" alt="catalogue"class="d-block w-100" />
       <p style="text-align: justify;"> Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
 <div class="container text-center" id="temoignage">
	<h2 class="m-5 perso_colorBlueLight">Temoignage</h2>
	<div class="row">
		<div class="col-12 col-lg-4 temoignage1">
			<img src="../sources/images/aigle.jpg" alt="animal_aigle"class="rounded-circle" style="width: 140px; height: 140px">
			<h3>Témoignage 1</h3>
			<p class="temoi">Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam. </p>

		</div>
		<div class="col-12 col-lg-4 temoignage2">
			<img src="../sources/images/cat.webp" alt="animal_chat" class="rounded-circle" style="width: 140px; height: 140px">
            <h3>Témoignage 2</h3>
			<p class="temoi">Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam. </p>
		</div>
		<div class="col-12 col-lg-4 temoignage3">
			<img src="../sources/images/loup.jpg" alt="animal_loup"class="rounded-circle" style="width: 140px; height: 140px">
            <h3>Témoignage 3</h3>
			<p class="temoi">Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam. </p>
		</div>	
	</div>
 </div>
 <script src="../js/main.js"></script>

    <?php
	    $content = ob_get_clean();
	    require "commons/template.php";
   ?>
