<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index() {
        $results = $this->home_model->get_summaries();
        $language = ($this->session->userdata('site_lang') != '') ? $this->session->userdata('site_lang') : 'spanish';
        foreach ($results as $row) {
            if ($language == 'purhepecha') {
                $data['summaries']["cm_" . $row->id_community]['title'] = $row->purhe_title;
                $data['summaries']["cm_" . $row->id_community]['body'] = $row->purhe_body;
            } else {
                $data['summaries']["cm_" . $row->id_community]['title'] = $row->spanish_title;
                $data['summaries']["cm_" . $row->id_community]['body'] = $row->spanish_body;
            }
            $data['summaries']["cm_" . $row->id_community]['image'] = base_url($row->path_image ? $row->path_image : 'assets/img/placeholder.jpg');
            $data['summaries']["cm_" . $row->id_community]['name'] = $row->name_image;
            $data['summaries']["cm_" . $row->id_community]['alias'] = $row->alias;
        }
        $this->load->view('index', $data);
    }

    public function all($community) {
        $data['alias'] = $community;
        $articles = $this->home_model->get_articles($community);
        $summary = $this->home_model->get_summary($community);
        $data['videos'] = $this->home_model->get_videos($community);
        $gallery = $this->home_model->get_gallery($community);
        $language = ($this->session->userdata('site_lang') != '') ? $this->session->userdata('site_lang') : 'spanish';
        foreach ($summary as $row) {
            if ($language == 'purhepecha') {
                $data['summary']['title'] = $row->purhe_title;
                $data['summary']['body'] = $row->purhe_body;
            } else {
                $data['summary']['title'] = $row->spanish_title;
                $data['summary']['body'] = $row->spanish_body;
            }
            $data['summary']['image'] = base_url($row->path_image ? $row->path_image : 'assets/img/placeholder.jpg');
            $data['summary']['name'] = $row->name_image;
        }
        foreach ($articles as $row) {
            if ($language == 'purhepecha') {
                $data[$row->categoria]['title'] = $row->purhe_title;
                $data[$row->categoria]['body'] = $row->purhe_body;
            } else {
                $data[$row->categoria]['title'] = $row->spanish_title;
                $data[$row->categoria]['body'] = $row->spanish_body;
            }
        }
        foreach ($gallery as $key => $row) {
            $data['galeria'][$key] = base_url($row->path_image);
        }
        $this->load->view('all_data', $data);
    }
}
