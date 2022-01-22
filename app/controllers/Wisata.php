<?php

class Wisata extends Controller{
    public function index()
    {
        $data['judul'] = 'Tempat Wisata';
        $data['wst'] = $this->model('Wisata_model')->getAllWisata();
        $this->view('templates/header',$data);
        $this->view('wisata/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Wisata';
        $data['wst'] = $this->model('Wisata_model')->getWisataById($id);
        $this->view('templates/header',$data);
        $this->view('wisata/detail',$data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Wisata_model')->tambahDataWisata($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        }
    }
    public function hapus($id)
    {
        if( $this->model('Wisata_model')->hapusDataWisata($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Wisata_model')->getWisataById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Wisata_model')->ubahDataWisata($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL. '/wisata');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Tempat Wisata';
        $data['wst'] = $this->model('Wisata_model')->cariDataWisata();
        $this->view('templates/header',$data);
        $this->view('wisata/index',$data);
        $this->view('templates/footer');
    }
}