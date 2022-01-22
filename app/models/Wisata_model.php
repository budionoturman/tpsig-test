<?php

class Wisata_model{
    private $table = 'wisata';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWisata()
        {
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->resultSet();
        }

    public function getWisataById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataWisata($data)
    {
        $query = "INSERT INTO wisata
                    VALUES
                    ('',:nama, :lokasi, :lat, :lng)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lng', $data['lng']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function hapusDataWisata($id)
    {
        $query = "DELETE FROM wisata WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataWisata($data)
    {
        $query = "UPDATE wisata SET
                    nama = :nama,
                    lokasi = :lokasi,
                    lat = :lat,
                    lng = :lng
                    WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lng', $data['lng']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function cariDataWisata()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM wisata WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}