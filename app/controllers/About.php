<?php

class About extends Controller{
    public function index($nama = 'galang',$pekerjaan = 'programmer',$umur = '22')
    {
        $data['judul'] = 'About index';
        $data['nama'] = $nama; 
        $data['pekerjaan'] = $pekerjaan; 
        $data['umur'] = $umur; 
        $this->view('templates/header',$data);        
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'About page';
        $this->view('templates/header',$data);        
        $this->view('about/page');
        $this->view('templates/footer');      
    }
}