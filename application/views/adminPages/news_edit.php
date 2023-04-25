<?php $directory = "public/adminPanel/"; ?>
<?php $this->load->view('adminPages/includes/headerStyle'); ?>
<?php $this->load->view('adminPages/includes/leftMenu'); ?>
<?php $this->load->view('adminPages/includes/navBar'); ?>
<?php $this->load->view('adminPages/includes/counter'); ?>

<style>
    .center
    {
        width: 100%;
        text-align: center;
    }
</style>


<div class="col-12">
    <div class="card mb-4" style="padding: 20px;">
        <div class="card-header pb-0">
            <h6 class="center">New Edit</h6>
            <a href="<?php echo base_url('admin_news_list'); ?>" class="text-white">
                <button type="submit" class="btn btn-info" style="float: right;">Back To New List</>
            </a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">

                <form action="<?php echo base_url('admin_news_edit_act/'.$select_single_news['id']); ?>" method="post" enctype="multipart/form-data">

                    <label for="title">Title</label>
                    <input type="text" name="nametitle" id="title" placeholder="Enter Title" class="form-control" value="<?php echo $select_single_news['nametitle']; ?>">

                    <label for="desc">Description</label>
                    <textarea name="namedescription" id="desc" class="form-control" cols="30" rows="10"><?php echo $select_single_news['namedescription']; ?></textarea>

                    <br>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;">
                        <label for="date">Date</label>
                        <input type="date" name="namedate" id="date" class="form-control" value="<?php echo $select_single_news['namedate']; ?>">
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">
                        <label for="cate">Category</label>
                        <select name="namecategory" id="cate" class="form-control">
                            <option <?php if($select_single_news['namecategory'] == ""){ echo "SELECTED"; } ?>              value="">--SELECT--</option>
                            <option <?php if($select_single_news['namecategory'] == "Sport"){ echo "SELECTED"; } ?>         value="Sport">Sport</option>
                            <option <?php if($select_single_news['namecategory'] == "Finance"){ echo "SELECTED"; } ?>       value="Finance">Finance</option>
                            <option <?php if($select_single_news['namecategory'] == "Techonology"){ echo "SELECTED"; } ?>   value="Techonology">Techonology</option>
                            <option <?php if($select_single_news['namecategory'] == "Education"){ echo "SELECTED"; } ?>     value="Education">Education</option>
                        </select>
                    </div>


                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">
                        <label for="status">Status</label>
                        <select name="namestatus" id="status" class="form-control">
                            <option <?php if($select_single_news['namestatus'] == ""){ echo "SELECTED"; } ?>         value="">--SELECT--</option>
                            <option <?php if($select_single_news['namestatus'] == "Active"){ echo "SELECTED"; } ?>   value="Active">Active</option>
                            <option <?php if($select_single_news['namestatus'] == "Deactive"){ echo "SELECTED"; } ?> value="Deactive"><span class="btn btn-danger">Deactive</span></option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin-left: 15px;">

                        <label for="img" style="margin-top: 8px;">İmg
                            <br>
                            <i class="fa fa-picture-o fa-3x" style="margin-top: 5px;"></i>
                            <input type="file" id="img" name="user_file" hidden>
                        </label>

                        <?php if($select_single_news['file_ext'] == '.mp3'){ ?>
                            <audio controls style="width: 200px">
                                <source src="<?php echo base_url('uploads/news/'.$select_single_news['file']) ?>" type="audio/mpeg">
                            </audio>
                        <?php }else{ ?>
                            <img src="<?php echo base_url('uploads/news/'.$select_single_news['file']); ?>" width="50px">
                        <?php } ?>



                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;">
                        <button type="submit" class="form-control btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('adminPages/includes/footer'); ?>
<?php $this->load->view('adminPages/includes/coreJSfiles'); ?>