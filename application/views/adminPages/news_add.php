<?php $directory = "public/adminPanel/"; ?>
<?php $this->load->view('adminPages/includes/headerStyle'); ?>
<?php $this->load->view('adminPages/includes/leftMenu'); ?>
<?php $this->load->view('adminPages/includes/navBar'); ?>
<?php $this->load->view('adminPages/includes/counter'); ?>




<div class="col-12">
    <div class="card mb-4" style="padding: 20px;">
        <div class="card-header pb-0">
            <h6>New Add</h6>
            <a href="<?php echo base_url('admin_news_list'); ?>">
                <button type="submit" class="btn btn-success" style="float: right">New Creat</button>
            </a>
        </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">

                    <form action="<?php echo base_url('admin_news_add_action'); ?>" method="post" enctype="multipart/form-data">

                        <label for="title">Title</label>
                        <input type="text" name="nametitle" id="title" placeholder="Enter Title" class="form-control">

                        <label for="desc">Description</label>
                        <textarea name="namedescription" id="desc" class="form-control" cols="30" rows="10"></textarea>

                        <br>

                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;">
                            <label for="date">Date</label>
                            <input type="date" name="namedate" id="date" class="form-control">
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">
                            <label for="cate">Category</label>
                            <select name="namecategory" id="cate" class="form-control">
                                <option value="">--SELECT--</option>
                                <option value="Sport">Sport</option>
                                <option value="Finance">Finance</option>
                                <option value="Techonology">Techonology</option>
                                <option value="Education">Education</option>
                            </select>
                        </div>


                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">
                            <label for="status">Status</label>
                            <select name="namestatus" id="status" class="form-control">
                                <option value="">--SELECT--</option>
                                <option value="Active">Active</option>
                                <option value="Deactive"><span class="btn btn-danger">Deactive</span></option>
                            </select>
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">

                            <label for="img" style="margin-top: 8px;">İmg
                                <br>
                                <i class="fa fa-picture-o fa-3x" style="margin-top: 5px;"></i>
                                <input type="file" id="img" name="user_file" hidden>
                            </label>

                        </div>
                        <br>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;">
                            <button type="submit" class="form-control btn btn-success">Create</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('adminPages/includes/footer'); ?>
<?php $this->load->view('adminPages/includes/coreJSfiles'); ?>

