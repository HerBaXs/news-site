<?php


public function news_add_action()
{
    $title      = $_POST['title'];
    $desc       = $_POST['description'];
    $date       = $_POST['namedate'];
    $category   = $_POST['namecategory'];
    $status     = $_POST['namestatus'];

if(!empty($title) && !empty($desc) && !empty($date) && !empty($category) && !empty($status)) {

    $data = [
        "nametitle"         => $title,
        "namedescription"   => $desc,
        "namedate"          => $date,
        "namecategory"      => $category,
        "namestatus"        => $status,
    ];

    $this->db->insert('news', $data);
    redirect(base_url('admin_news_list'));
    }else{
    redirect(base_url('admin_news_add'));
    }
}