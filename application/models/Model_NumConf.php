<?php

class Model_NumConf extends CI_Model
{

    function getAllNumConf()
    {
        $sql = $this->db->query("select IDCONFERENCE from conference");
        $sql = $this->db->get();
        return $sql->result();
    }
}
?>