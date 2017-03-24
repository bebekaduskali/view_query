<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {
    
    function get_data_basic($keyword)
    {
        $sql = "SELECT * FROM pddikti.dbo.peserta_didik where nm_pd like '%$keyword%' ";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
?>