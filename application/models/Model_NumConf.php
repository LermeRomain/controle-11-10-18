<?php

class Model_NumConf extends CI_Model
{

    function getAllNumConf()
    {
        $sql = $this->db->query("select idConference from conference");
        return $sql->result();
    }
}
?>