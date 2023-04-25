<?php $directory = "public/adminPanel/"; ?>
<?php $this->load->view('adminPages/includes/headerStyle'); ?>
<?php $this->load->view('adminPages/includes/leftMenu'); ?>
<?php $this->load->view('adminPages/includes/navBar'); ?>
<?php $this->load->view('adminPages/includes/counter'); ?>

<style>
    .floatL
    {
        float: left;
    }
</style>

    <div class="col-12">
        <div class="card mb-4" style="padding: 20px;">
            <div class="card-header pb-0">
                <h6>View Page</h6>
                <a href="<?php echo base_url('admin_news_list') ?>">
                    <button type="submit" class="btn btn-info" style="float: right">New List Page</button>
                </a>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
                <?php if($select_single_news['file_ext'] == '.mp3'){ ?>
                    <audio controls style="width: 200px">
                        <source src="<?php echo base_url('uploads/news/'.$select_single_news['file']) ?>" type="audio/mpeg">
                    </audio>
                <?php }else{ ?>
                <img src="<?php echo base_url('uploads/news/'.$select_single_news['file']); ?>" width="50%">
                <?php } ?>

                <br><br>
                <h2><?php echo $select_single_news['nametitle']; ?></h2>

                <p><?php echo $select_single_news['namedescription']; ?></p>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 floatL" id="date">
                    <label for="date">Date</label><br>
                    <?php echo $select_single_news['namedate']; ?>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 floatL" id="category">
                    <label for="category">Category</label><br>
                    <?php echo $select_single_news['namecategory']; ?>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 floatL" id="status">
                    <label for="status">Status</label><br>
                    <?php if($select_single_news['namestatus'] == 'Active'){ ?>
                        <span class="badge badge-sm bg-gradient-success">
                            <?php echo $select_single_news['namestatus']; ?>
                        </span>
                    <?php }else{ ?>
                        <span class="badge badge-sm bg-gradient-danger">
                            <?php echo $select_single_news['namestatus']; ?>
                        </span>
                    <?php } ?>

                </div>

            </div>
        </div>
    </div>

<?php $this->load->view('adminPages/includes/footer'); ?>
<?php $this->load->view('adminPages/includes/coreJSfiles'); ?>
