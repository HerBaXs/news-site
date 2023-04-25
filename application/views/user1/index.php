<?php $this->load->view('user1/includes/headerStyle'); ?>
<?php $this->load->view('user1/includes/firstBar'); ?>
<?php $this->load->view('user1/includes/navBar'); ?>


<!-- Start nav -->
			
<!-- End nav -->
		


					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">

							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>

						</div>
						<div class="owl-carousel owl-theme slide" id="featured">
                            <?php foreach ($sliderData as $news){ ?>
                                <div class="item">
                                    <article class="featured">
                                        <div class="overlay"></div>
                                        <figure>
                                            <?php if($news['file']){ ?>
                                                <img src="<?php echo base_url('uploads/news/'.$news['file']); ?>" alt="Sample Article">
                                            <?php }else{ ?>
                                                <img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt="">
                                            <?php } ?>

                                        </figure>
                                        <div class="details">
                                            <div class="category"><a href="category.php"><?php echo $news['namecategory']; ?></a></div>
                                            <h1><a href="<?php echo base_url('single/'.$news['id']) ?>"><?php echo $news['nametitle']; ?></a></h1>
                                            <div class="time"><?php echo $news['namedate']; ?></div>
                                        </div>
                                    </article>
                                </div>
                            <?php } ?>




						</div>


						<div class="banner">
							<a href="#">
								<img src="<?php echo base_url('public/user2/'); ?>images/ads.png" alt="Sample Article">
							</a>
						</div>


						<div class="line top">
							<div>Just Another News</div>
						</div>
						<div class="row">

                                <?php foreach ($newsData as $all_news_key){ ?>
                                <article class="col-md-12 article-list">
                                    <div class="inner">
                                        <figure>
                                            <a href="<?php echo base_url('single/'.$all_news_key['id']); ?>">

                                                <?php if($all_news_key['file_ext'] == ".mp3"){ ?>
                                                    <audio controls>
                                                        <source src="<?php echo base_url('uploads/news/'.$all_news_key['file']) ?>" type="audio/mpeg">
                                                    </audio>
                                                <?php }else{ ?>
                                                    <?php if($all_news_key['file']){ ?>
                                                        <img src="<?php echo base_url('uploads/news/'.$all_news_key['file']); ?>" alt="Sample Article">
                                                    <?php }else{ ?>
                                                        <img src="https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg" alt="">
                                                    <?php } ?>
                                                <?php } ?>

                                            </a>
                                        </figure>
                                        <div class="details">
                                            <div class="detail">
                                                <div class="category">
                                                    <a href="<?php echo base_url('single/'.$all_news_key['id']); ?>"><?php echo $all_news_key['namecategory']; ?></a>
                                                </div>
                                                <div class="time"><?php echo $all_news_key['namedate']; ?></div>
                                            </div>
                                            <h1><a href="<?php echo base_url('single/'.$all_news_key['id']); ?>"><?php echo $all_news_key['nametitle']; ?></a></h1>
                                            <p>
                                                <?php if(strlen($all_news_key['namedescription']) >= 105){ ?>
                                                    <?php echo substr($all_news_key['namedescription'],0,105)."..."; ?>
                                                <?php }else{
                                                        echo $all_news_key['namedescription'];
                                                } ?>

                                            </p>
                                            <footer>

                                                <a class="btn btn-primary more" href="<?php echo base_url('single/'.$all_news_key['id']); ?>">
                                                    <div>More</div>
                                                    <div><i class="ion-ios-arrow-thin-right"></i></div>
                                                </a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                            <?php } ?>


						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="featured-author">
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img15.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Featured</div>
											</div>
											<div class="featured-author-center">
												<figure class="featured-author-picture">
													<img src="<?php echo base_url('public/user2/'); ?>images/img01.jpg" alt="Sample Article">
												</figure>
												<div class="featured-author-info">
													<h2 class="name">John Doe</h2>
													<div class="desc">@JohnDoe</div>
												</div>
											</div>
										</div>
										<div class="featured-author-body">
											<div class="featured-author-count">
												<div class="item">
													<a href="#">
														<div class="name">Posts</div>
														<div class="value">208</div>
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="name">Stars</div>
														<div class="value">3,729</div>
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="icon">
															<div>More</div>
															<i class="ion-chevron-right"></i>
														</div>
													</a>
												</div>
											</div>
											<div class="featured-author-quote">
												"Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
											</div>
											<div class="block">
												<h2 class="block-title">Photos</h2>
												<div class="block-body">
													<ul class="item-list-round" data-magnific="gallery">
														<li><a href="images/news/img06.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img06.jpg');"></a></li>
														<li><a href="images/news/img07.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img07.jpg');"></a></li>
														<li><a href="images/news/img08.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img08.jpg');"></a></li>
														<li><a href="images/news/img09.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img09.jpg');"></a></li>
														<li><a href="images/news/img10.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img10.jpg');"></a></li>
														<li><a href="images/news/img11.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img11.jpg');"></a></li>
														<li><a href="images/news/img12.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img12.jpg');"><div class="more">+2</div></a></li>
														<li class="hidden"><a href="images/news/img13.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img13.jpg');"></a></li>
														<li class="hidden"><a href="images/news/img14.jpg" style="background-image: url('<?php echo base_url('public/user2/'); ?>images/news/img14.jpg');"></a></li>
													</ul>
												</div>
											</div>
											<div class="featured-author-footer">
												<a href="#">See All Authors</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Popular <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img07.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img09.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img11.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img06.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">neque est semper nulla, ac elementum risus quam a enim</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="<?php echo base_url('public/user2/'); ?>images/news/img03.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
										</div>
									</div>
								</article>
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
						<aside>
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active">
									<a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
										<i class="ion-android-star-outline"></i> Recomended
									</a>
								</li>
								<li>
									<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
										<i class="ion-ios-chatboxes-outline"></i> Comments
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="recomended">
									<article class="article-fw">
										<div class="inner">
											<figure>
												<a href="single.php">
													<img src="<?php echo base_url('public/user2/'); ?>images/news/img16.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="details">
												<div class="detail">
													<div class="time">December 31, 2016</div>
													<div class="category"><a href="category.php">Sport</a></div>
												</div>
												<h1><a href="single.php">Donec congue turpis vitae mauris</a></h1>
												<p>
													Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis.
												</p>
											</div>
										</div>
									</article>
									<div class="line"></div>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.php">
													<img src="<?php echo base_url('public/user2/'); ?>images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.php">
													<img src="<?php echo base_url('public/user2/'); ?>images/news/img02.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Travel</a></div>
													<div class="time">December 21, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.php">
													<img src="<?php echo base_url('public/user2/'); ?>images/news/img10.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Healthy</a></div>
													<div class="time">December 20, 2016</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="tab-pane comments" id="comments">
									<div class="comment-list sm">
										<div class="item">
											<div class="user">
												<figure>
													<img src="<?php echo base_url('public/user2/'); ?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">
												<figure>
													<img src="<?php echo base_url('public/user2/'); ?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">
												<figure>
													<img src="<?php echo base_url('public/user2/'); ?>images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>
						</aside>
						<aside id="sponsored">
							<h1 class="aside-title">Sponsored</h1>
							<div class="aside-body">
								<ul class="sponsored">
									<li>
										<a href="#">
											<img src="<?php echo base_url('public/user2/'); ?>images/sponsored.png" alt="Sponsored">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url('public/user2/'); ?>images/sponsored.png" alt="Sponsored">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url('public/user2/'); ?>images/sponsored.png" alt="Sponsored">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url('public/user2/'); ?>images/sponsored.png" alt="Sponsored">
										</a>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Best Of The Week</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img03.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
										<div class="time">December 11, 2016</div>
										<div class="category"><a href="category.php">Travel</a></div>
								</div>
								<h2><a href="single.php">tempor interdum Praesent tincidunt</a></h2>
								<p>Praesent tincidunt, leo vitae congue molestie.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img16.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
									<div class="category"><a href="category.php">Sport</a></div>
								</div>
								<h2><a href="single.php">Maecenas porttitor sit amet turpis a semper</a></h2>
								<p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img15.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.php">Lifestyle</a></div>
								</div>
								<h2><a href="single.php">Fusce ac odio eu ex volutpat pellentesque</a></h2>
								<p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img14.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.php">Travel</a></div>
								</div>
								<h2><a href="single.php">Nulla facilisis odio quis gravida vestibulum</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img01.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.php">Travel</a></div>
								</div>
								<h2><a href="single.php">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="<?php echo base_url('public/user2/'); ?>images/news/img11.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="category.php">Travel</a></div>
								</div>
								<h2><a href="single.php">Donec consequat arcu at ultrices sodales</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>


<?php $this->load->view('user1/includes/footer'); ?>
<?php $this->load->view('user1/includes/scriptJS'); ?>
