<?php

foreach($lesConferences as $uneConference)
{  

    {
         echo "<input  type='checkbox' name='present[]' value='".$uneConference->IDCONFERENCE."'>".$uneConference->TITRE ." - ".$uneConference->NBVOTES."<br>"; 
    }
   
}
echo "<input type='button' value = 'Voter pour le conférences selectionner' onclick='ValiderVote()'>";
?>