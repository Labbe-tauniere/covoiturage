<div data-role="page" id="pageoffresoffertes">
<?php
include "vues/entetepageavecboutonretour.html";

$jour = $lesOffres[0]['jour']
?>
     
<div data-role="collapsible-set" id="divliste" data-theme="c"> 
      <div data-role="collapsible" >
          <h3><?php echo $jour?></h3>
          <ul data-role="listview" id="lstoffres">
<?php
$i = 0;    
foreach ($lesOffres as $uneOffre){
    if($jour!=$uneOffre['jour'] && $i!=0){
        $jour=$uneOffre['jour'];
        ?>
          </ul>
            </div><!-- /fin collapsible -->
            <div data-role="collapsible" >
                <h3><?php echo $jour ?></h3>
             <ul data-role="listview" id="lstoffres">
        <?php 
     }
         ?>
               
              <li id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre" >
          <?php 
              if($_SESSION['choix']=="arriveeentreprise")
                  echo $uneOffre['date']." à ".$uneOffre['heure']." depart de ".$uneOffre['depart'];
              else 
                  echo $uneOffre['date']." à ".$uneOffre['heure']." arrivée à ".$uneOffre['retour'];
                                
                            
          ?> 
                    </a>
             </li> 
          <?php 
    $i++;   
    }
?>
 </div>  <!-- /fin collapsible -->            
 </div>  <!-- /fin collapsible-set -->
    <?php    
include "vues/pied.html";
?>
</div><!-- /fin page -->