<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_news');
        $this->load->model('m_map');
        $this->load->model('m_home');
    }
    
    public function index()
    {
        $count_home = $this->m_home->getHome();
        $data['hotNews'] = $this->m_news->getNewsHot($count_home["count_news"]);
        $data['hotMap'] = $this->m_map->getMapHot($count_home["count_map"]);
        $this->load->view('home/home', $data);
    }
}
