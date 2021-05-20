<?php
class Bmi_pasien_model extends CI_Model
{
    public function getAll()
    {
        //select * from bmi_pasien
        $this->db->select('*');
        $this->db->from('bmi_pasien');
        $this->db->join('pasien', 'pasien.id = bmi_pasien.pasien_id');
        $query = $this->db->get();
        return $query;
    }
    public function findById($id)
    {
        // select * from bmi_pasien where id=$id
        $this->db->select('*');
        $this->db->from('bmi_pasien');
        $this->db->join('pasien', 'pasien.id = bmi_pasien.pasien_id');
        $this->db->where('bmi_pasien.id', $id);
        $query = $this->db->get();
        // $query = $this->db->get_where('pasien',['id' => $id]);
        return $query->row();
    }
}
