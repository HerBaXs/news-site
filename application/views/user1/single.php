<?php $this->load->view('user1/includes/headerStyle'); ?>
<?php $this->load->view('user1/includes/firstBar'); ?>
<?php $this->load->view('user1/includes/navBar'); ?>

					<div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									<img src="<?php echo base_url('public/user2/')?>images/ad.png">
									<figcaption>Advertisement</figcaption>
								</figure>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Recent Post</h1>
							<div class="aside-body">

                                <?php foreach ($getSameCategoryNews as $category_key){ ?>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="<?php echo base_url('single/'.$category_key['id']); ?>">
                                                    <?php if($category_key['file_ext'] == ".mp3"){ ?>
                                                        <audio controls>
                                                            <source src="<?php echo base_url('uploads/news/'.$category_key['file']) ?>" type="audio/mpeg">

                                                        </audio>
                                                    <?php }else{ ?>
                                                        <?php if($category_key['file']){ ?>
                                                            <img src="<?php echo base_url('uploads/news/'.$category_key['file']); ?>" alt="Sample Article">
                                                        <?php }else{ ?>
                                                            <img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt="">
                                                        <?php } ?>
                                                    <?php } ?>
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="<?php echo base_url('single/'.$category_key['id']); ?>"><?php echo $category_key['nametitle']; ?></a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="category.php"><?php echo $category_key['namecategory']; ?></a></div>
                                                    <div class="time"><?php echo $category_key['namedate']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php } ?>



							</div>
						</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
					</div>
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Film</li>
						</ol>
						<article class="article main-article">
							<header>
								<h1><?php echo $getSingleNews['nametitle']; ?></h1>
								<ul class="details">
									<li>Posted on <?php echo $getSingleNews['namedate']; ?></li>
									<li><a><?php echo $getSingleNews['namecategory']; ?></a></li>
								</ul>
							</header>
							<div class="main">

								<div class="featured">
									<figure>
                                        <?php if($getSingleNews['file_ext'] == ".mp3"){ ?>
                                            <audio controls>
                                                <source src="<?php echo base_url('uploads/news/'.$getSingleNews['file']) ?>" type="audio/mpeg">
                                            </audio>
                                        <?php }else{ ?>
                                            <?php if($getSingleNews['file']){ ?>
                                                <img src="<?php echo base_url('uploads/news/'.$getSingleNews['file']); ?>">
                                            <?php }else{ ?>
                                                <img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt="">
                                            <?php } ?>
                                        <?php } ?>


									</figure>
								</div>

                                <p><?php echo $getSingleNews['namedescription']; ?></p>
							</div>

						</article>





					</div>
<?php $this->load->view('user1/includes/footer'); ?>
<?php $this->load->view('user1/includes/scriptJS'); ?>