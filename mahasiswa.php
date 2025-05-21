<?php 

require_once 'database.php';

class Mahasiswa {

    private $db;

    public function __construct() 
    {
        $this->db = new Database();
    }

    public function getAllData()
    {
        return $this->db->select('mahasiswa');
    }

    public function getDataById($id)
    {
        return $this->db->select('mahasiswa', ['id' => $id]);
    }

    public function addData($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function deleteData()
    {
        return $this->db->delete('mahasiswa');
    }

    public function updateData($data, $id)
    {
        return $this->db->update('mahasiswa', $data, $id);
    }
}

?>