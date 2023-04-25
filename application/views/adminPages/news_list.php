<?php $directory = "public/adminPanel/"; ?>
<?php $this->load->view('adminPages/includes/headerStyle'); ?>
<?php $this->load->view('adminPages/includes/leftMenu'); ?>
<?php $this->load->view('adminPages/includes/navBar'); ?>
<?php $this->load->view('adminPages/includes/counter'); ?>


            <div class="col-12">
                <div class="card mb-4" style="padding: 20px;">
                        <div class="card-header pb-0">
                        <h6>Authors table</h6>
                            <a href="<?php echo base_url('admin_news_add') ?>">
                                <button type="submit" class="btn btn-success" style="float: right">New Creat</button>
                            </a>
                        </div>
                            <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">

                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMG</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Operation</th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($select_all_news as $news){ ?>

                            <tr>
                                <td class="align-middle text-center text-sm">
                                    <a href="<?php echo base_url('admin_news_view/'.$news['id']); ?>">
                                    <?php echo $news['nametitle']; ?>
                                    </a>
                                </td>

                                <td class="align-middle text-center text-sm">

                                    <?php if($news['namestatus'] == 'Active'){ ?>
                                        <span class="badge badge-sm bg-gradient-success">
                                        <?php echo $news['namestatus']; ?>
                                        </span>
                                    <?php }else{ ?>
                                        <span class="badge badge-sm bg-gradient-danger">
                                        <?php echo $news['namestatus']; ?>
                                        </span>
                                    <?php } ?>


                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        <?php echo date('d-m-Y',strtotime($news["namedate"])); ?>
                                    </span>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <?php echo $news['namecategory']; ?>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <?php if($news['file']){ ?>

                                        <!--New if-->
                                            <?php if($news['file_ext'] == ".mp3"){ ?>
                                            <audio controls style="width: 200px">
                                                <source src="<?php echo base_url('uploads/news/'.$news['file']) ?>" type="audio/mpeg">
                                            </audio>
                                            <?php }else{ ?>
                                            <img width="50px" height="50px" style="object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['file']) ?>" alt="">
                                            <?php } ?>
                                        <!--End if-->

                                        <?php }else { ?>
                                        <img src="./uploads/img/image.jpg" width="50px" height="50px" style="object-fit: cover" alt="">
                                        <?php } ?>
                                </td>
                                <td style="padding-left: 40px; font-size: 20px;">
                                    <a href="<?php echo base_url('admin_news_view/'.$news['id']); ?>" class="text-secondary font-weight-bold text-xs">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    /
                                    <a href="<?php echo base_url('admin_news_edit/'.$news['id']); ?>" class="text-secondary font-weight-bold text-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    /
                                    <a href="<?php echo base_url('admin_delete_news/'.$news['id']); ?>" onclick="return confirm('Məlumati Silmək İstədiyinizə Əminsiniz?')" class="text-secondary font-weight-bold text-xs">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>


                            
                        </tbody>
                        </table>
                    

<?php $this->load->view('adminPages/includes/footer'); ?>
<?php $this->load->view('adminPages/includes/coreJSfiles'); ?>