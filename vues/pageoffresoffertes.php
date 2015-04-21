<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/buttonback.html";
    include "vues/entetepage.html";
?>
<div data-role="collapsible-set" id="divliste"> 
    <!-- <ul data-role="listview" id="lstoffres" > -->
<?php
    $jour = "";
    $openedDiv = false;
    foreach ($lesOffres as $uneOffre){
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
?>
        </div>
<?php
            }
            $openedDiv = true;
?>
        <div data-role="collapsible">
            <h1 data-theme="b"><?php echo $jour ?></h1>
<?php 
        } //fin si
?>
            <a href ="#pageoffre" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?> </a></br>
<?php 
    } //fin foreach
?>   
    </div>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->