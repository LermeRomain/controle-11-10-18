<?php

foreach($lesNumConfs as $unNumConf)
{  

    {
         echo "<input  type='text' name='numeroConf' value='".$unNumConf->IDCONFERENCE."'><br>"; 
    }
   
}
echo "<input type='button' value = 'Voter pour le conférences selectionner' onclick='ValiderVote()'>";
?>