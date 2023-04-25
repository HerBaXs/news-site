<?php

class UserController extends CI_Controller {
    
    public function index() {
        $data['sliderData'] = $this->db->limit(10)->order_by('id','DESC')->where('namestatus','Active')->get('news')->result_array();
        $data['newsData'] = $this->db->order_by('id','DESC')->where('namestatus','Active')->get('news')->result_array();
        $this->load->view('user1/index',$data);

    }

    public function category()
    {
        $this->load->view('user1/category');
    }

    public function single($id){

        $data['getSingleNews'] = $this->db->where('id',$id)->get('news')->row_array();
        $data['getSameCategoryNews'] = $this->db->limit(3)->order_by('id','desc')->where('namecategory',$data['getSingleNews']['namecategory'])->get('news')->result_array();

        $this->load->view('user1/single',$data);
    }
}