<?php

class Model_Inscription extends CI_Model
{
    public function ValiderVote($tabv)
    {
        $tabNBVOTES= explode(',',$tabNBVOTES);

        for($i = 0 ; $i < count($tabNBVOTES); $i++)
        {
            $sql = $this->db->query("update conference set NBVOTES =".$tabNBVOTES[$i]." ");
        }
    }
}
