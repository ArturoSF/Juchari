<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function get_summaries() {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->join('galleries', 'galleries.id_article = articles.id and galleries.is_summary = articles.is_summary and galleries.is_summary = 1');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_summary($community) {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->join('galleries', 'galleries.id_article = articles.id and galleries.is_summary = articles.is_summary and galleries.is_summary = 1');
        $this->db->where('articles.alias', $community);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_gallery($community) {
        $array = array('alias' => $community);
        $query = $this->db->get_where('galleries', $array);
        return $query->result();
    }

    public function get_articles($community) {
        $array = array('is_summary' => '0', 'alias' => $community);
        $query = $this->db->get_where('articles', $array);
        return $query->result();
    }

    public function get_videos($community) {
        $array = array('alias' => $community);
        $query = $this->db->get_where('videos', $array);
        return $query->result();
    }

    public function get_sonidos($community) {
        $array = array('alias' => $community);
        $query = $this->db->get_where('sonidos', $array);
        return $query->result();
    }

    public function get_artesanos($community) {
        $array = array('alias' => $community);
        $query = $this->db->get_where('artesanos', $array);
        return $query->result();
    }
}