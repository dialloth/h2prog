	<?php  ob_start(); 
        require"../utile/formatage.php";
	?>
     
     <?php 
             if(isset($_POST['mail'])){
            $to = "bhounoukoye@hotmail.com";
            $from = $_POST['mail'];
            $object = $_POST['objet'];
            $message = $_POST['message'];
            mail($to,$object,$message,$from);
    ?>
       	<div class="alert alert-success text-center monBouton" role="alert">
                 Votre message a été envoyé avec succès. Nos équipes réviendront très vite vers vous !
        </div>
     <?php } ?>
     	<!--  // echo "Adresse mail : "  .   $_POST["mail"].    "</br/>";
     	 // echo "Objet mail : " .      $_POST["objet"].   "</br/>";
     	 // echo "Message du mail : " . $_POST["message"]. "</br/>"; -->
   
    <div class="container text-center">
    	<?php formatageTitre("Mes informations personnelles"); ?>
		<!-- <h2 class="m-5 perso_colorBlueLight perso_bgBlue text-white rounded-lg p-3">>Mes informations personnelles<</h2> -->
    <table class="table table-borderless">
  <thead>
    <tr>
      <td> <img src="../sources/images/contact/tel.png" width="100px" />  </td>
      <td> <img src="../sources/images/contact/fb.png"  width="100px"/>  </td>
      <td> <img src="../sources/images/contact/yt.png"  width="100px"/>  </td>
    </tr>
  </thead>
  <tbody>
    <tr>  
      <td>06.50.27.26.61</td>
      <td><a href="https://www.facebook.com/alseny.diallo.9" target="_blank">Facebook</a></td>
      <td><a href="https://www.youtube.com/watch?v=9LvBOoKdgOM" target="_blank">Youtube_GG</a></td>
    </tr>
  </tbody>
</table>
</div>
<div class="container text-center">
	<?php formatageTitre("Formulaire de contact"); ?>
	<form method="POST" action="">
		  <div class="form-group">
			    <label for="exampleInputEmail1">Adresse mail :</label>
			    <input type="email" class="form-control" name="mail" id="exampleInputEmail1" placeholder="Entrez votre mail" />
		  </div>
	   	<div class="form-group">
            <label for="objet">Objet :</label>
            <select class="form-control" id="objet" name="objet">
                <option value="question">Question</option>
                <option value="remarque">Remarque</option>
                <option value="autre">Autre</option>
            </select>
        </div>
         <div class="form-group">
   			 <label for="message">Votre message : </label>
    		<textarea class="form-control" name="message" id="message" rows="3"></textarea>
         </div>
		 <button type="submit" class="btn btn-primary">Valider</button>
	</form>
</div>
    <?php
	    $content = ob_get_clean();
	    require "commons/template.php";
   ?>