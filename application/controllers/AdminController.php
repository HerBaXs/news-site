<?php


class AdminController extends CI_controller {

    public function index()
    {
        $this->load->view('adminPages/sign-in');
    }

    public function loginAct(){

        $username = $_POST['username'];
        $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {

        $data = [
            "a_username" => $username,
            "a_password" => md5($password),
        ];

        $result = $this->db->where($data)->get('admin')->row_array();

        if($result){

            $_SESSION['admin_id'] = $result['a_id'];

            redirect(base_url('Dashbook'));

        }else{

            $this->session->set_flashdata('err','Isdifadeci Tapilmadi!');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }else{
        $this->session->set_flashdata('err','Bosluq Buraxmayin!');
        redirect($_SERVER['HTTP_REFERER']);
    }

    }

    public function loginOut(){
        unset($_SESSION['admin_id']);
        redirect(base_url('user_sign'));
    }

    public function dashboard()
    {
        $this->load->view('adminPages/dashboard');
    }

    public function tables()
    {
        $this->load->view('adminPages/tables');
    }

    public function news_list()
    {
        $data['select_all_news'] = $this->db->order_by('id','DESC')->get('news')->result_array();

        $this->load->view("adminPages/news_list", $data);
    }

    public function news_add()
    {
        $this->load->view('adminPages/news_add');
    }

    public function news_add_action()
    {
        $title      = $_POST['nametitle'];
        $desc       = $_POST['namedescription'];
        $date       = $_POST['namedate'];
        $category   = $_POST['namecategory'];
        $status     = $_POST['namestatus'];

    if(!empty($title) && !empty($desc) && !empty($date) && !empty($category) && !empty($status)){

        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
        $config['encrypt_name']         = TRUE;
//        $config['max_size']             = 100;
//        $config['max_width']            = 1024;
//        $config['max_height']           = 768;
        $this->upload->initialize($config);

        if($this->upload->do_upload('user_file')){
           $file            = $this->upload->data('file_name');
           $fileExt         = $this->upload->data('file_ext');

            $data = [
                "nametitle"         => $title,
                "namedescription"   => $desc,
                "namedate"          => $date,
                "namecategory"      => $category,
                "namestatus"        => $status,
                'file'              => $file,
                'file_ext'          => $fileExt
            ];

            $this->db->insert('news', $data);
            redirect(base_url('admin_news_list'));

        }else{
            $data = [
                "nametitle"         => $title,
                "namedescription"   => $desc,
                "namedate"          => $date,
                "namecategory"      => $category,
                "namestatus"        => $status,
            ];

            $this->db->insert('news', $data);
            redirect(base_url('admin_news_list'));
        }

    }else{
        redirect(base_url('admin_news_add'));
        }
    }

    public function delete_news($id){

        $this->db->where('id', $id)->delete('news');
        redirect(base_url('admin_news_list'));

    }

    public function news_view($id){
        $data['select_single_news'] = $this->db->where('id',$id)->get('news')->row_array();
        $this->load->view('adminPages/single_news',$data);
    }

    public function news_edit($id){
        $data['select_single_news'] = $this->db->where('id',$id)->get('news')->row_array();
        $this->load->view('adminPages/news_edit',$data);
    }

    public function news_edit_act($id){
        $title      = $_POST['nametitle'];
        $desc       = $_POST['namedescription'];
        $date       = $_POST['namedate'];
        $category   = $_POST['namecategory'];
        $status     = $_POST['namestatus'];

    if(!empty($title) && !empty($desc) && !empty($date) && !empty($category) && !empty($status)){

        $config['upload_path']          = './uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4';
        $config['encrypt_name']         = TRUE;
//        $config['max_size']             = 100;
//        $config['max_width']            = 1024;
//        $config['max_height']           = 768;
        $this->upload->initialize($config);

        if ($this->upload->do_upload('user_file')){

            $file       = $this->upload->data('file_name');
            $fileExt    = $this->upload->data('file_ext');

            $data = [
                "nametitle"         => $title,
                "namedescription"   => $desc,
                "namedate"          => $date,
                "namecategory"      => $category,
                "namestatus"        => $status,
                "file"              => $file,
                "file_ext"          => $fileExt
            ];

            $this->db->where('id', $id)->update('news', $data);
            redirect(base_url('admin_news_list'));
        }else{
            $data = [
                "nametitle"         => $title,
                "namedescription"   => $desc,
                "namedate"          => $date,
                "namecategory"      => $category,
                "namestatus"        => $status
            ];

            $this->db->where('id', $id)->update('news', $data);
            redirect(base_url('admin_news_list'));
        }

    }else{
        redirect($_SERVER['HTTP_REFERER']);
        }
    }

}