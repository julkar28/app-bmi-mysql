<?php
class Pasien_model extends CI_Model
{
    public function getAll()
    {
        //select * from pasien
        $query = $this->db->get('pasien');
        return $query;
    }
    public function findById($id)
    {
        // select * from pasien where id=$id
        $query = $this->db->get_where('pasien', ['id' => $id]);
        return $query->row();
    }
}
