<?php

class Model_Conferences extends CI_Model
{
    public function getConferences($TITRE)
    {
        $sql = $this->db->select('TITRE')->from('conference');
        $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}