 <div id="contenu">
      <h2>Mes fiches d'affectation</h2>
      <h3>Visiteur à sélectionner : </h3>
      <form action="index.php?uc=afficherHistorique&action=voirAfficherHistorique" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstVisiteur" accesskey="n">Visiteur : </label>
        <select id="lstVisiteur" name="lstVisiteur">
            <?php
			foreach ($lesVisiteur as $unVisiteur)
			{
			    $visiteur = $unVisiteur ['visiteur'];
				$id =  $unVisiteur ['id'];
				$nom =  $unVisiteur ['nom'];
				$prenom =  $unVisiteur ['prenom'];
				if($visiteur == $visiteurASelectionner){
				?>
				<option selected value="<?php echo $visiteur ?>"><?php echo  $nom."/".$prenom ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $visiteur ?>"><?php echo  $nom."/".$prenom ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>