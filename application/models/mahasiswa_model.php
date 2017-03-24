<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    function get_data_basic($keyword)
    {
        $sql = "SELECT * FROM pddikti.dbo.peserta_didik where contains(nm_pd, '\"$keyword\"')
        ORDER BY id_pd
        OFFSET 10 ROWS
        FETCH NEXT 20 ROWS ONLY";
        //echo $sql;exit;
        $query = $this->db->query($sql);
        return $query->result();
    }

}
