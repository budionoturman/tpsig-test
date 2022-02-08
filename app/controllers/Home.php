<?php

class Home extends Controller{
    public function index()
    {
        $data['judul'] = 'Peta Wisata';
        $data['wst'] = $this->model('Wisata_model')->getAllWisata();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}