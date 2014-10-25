<?php get_header(); ?>
	<div id="teaser">
		<a href="#"><img width="960" height="382" src="<?php bloginfo( 'template_url' ); ?>/img/slides/00.jpg" alt="The Philosophy of the Teachings of Islam"></a>
	</div>

	<section id="three-third" class="home">

<!-- 1st row -->
		<article class="two-articles-per-row fl">
			<header>
				<h3><a class="heading" href="#">Ahmadiyya Muslim Community &ndash; Established by God to Unite Mankind</a></h3>
			</header>
			
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-03.jpg" alt="Hazoor" class="fl"></a>
				<figcaption>
					<h4><a class="title" href="#">The world Peace Leader</a></h4>
					<p>
						Learn more about <strong>His Holliness Mirza Masroor Ahmad</strong> and his activities to establish <strong>World Peace</strong> by emphasizing Unity and Brotherhood all over the world.						
					</p>
				</figcaption>
			</figure>		
		</article>
		
		<article class="two-articles-per-row fr">
			<header>
				<h3><a class="heading" href="#">Listen to Friday Sermons delivered by His Holliness</a></h3>
			</header>
			
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-04.jpg" alt="Hazoor" class="fl"></a>
				<figcaption>
					<time datetime="2012-11-16" pubdate>16.11.2012</time>
					<h4><a class="title" href="#">Companions of<br>the Promised Messiah (as)</a></h4>
					<p>
						Hadhrat Mirza Masroor Ahmad
					</p>
				</figcaption>
			</figure>		
		</article>	

<!-- 2nd row -->
		<article class="clr three-articles-per-row fl">
			<header>
				<h3><a class="heading" href="#">Browse our News on current issues</a></h3>
			</header>
			
			<figure>
				<?php
                    global $post;
                    $posts = get_posts("numberposts=1&post_type=post");
                    foreach($posts as $post) :
					setup_postdata($post);
                ?>
				<?php if(has_post_thumbnail()) {
					the_post_thumbnail('thumbnail');
				} ?>
				<figcaption class="clr">
					<time datetime="2012-09-07" pubdate><?php the_time('d.m.Y'); ?></time>
					<h4><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php echo "<p>" . substr(get_the_content(),0,140) . "...</p>"; ?>
				</figcaption>
                <?php endforeach; ?>
			</figure>
		</article>

		<article class="three-articles-per-row fl" style="margin-left: 15px;">
			<header>
				<h3><a class="heading" href="#">Browse our Events and participate</a></h3>
			</header>
			
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-06.jpg" alt="Hazoor" class="fl"></a>
				<figcaption class="clr">
					<time datetime="2012-07-13" pubdate>13.07.2012</time>
					<h4><a class="title" href="#"> Waqf-e-Nau Class with Hadhrat Mirza Masroor Ahmad in Torono</a></h4>
					<p>
						All Waqf-e-Nau children are requested toreport to their local presidents and submitOnline Form for participating.
					</p>
				</figcaption>
			</figure>
		</article>

		<article class="three-articles-per-row fr">
			<header>
				<h3><a class="heading" href="#">Read about the true teachings of Islam</a></h3>
			</header>
			
			<!-- Book 1 -->
			<figure>
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/book.jpg" alt="Book" class="fl" style="margin-right: 8px;"></a>
				<figcaption>
					<h4><a class="title" href="#">True Love for The Holy Prophet (saw)</a></h4>
					<p>
						Hadhrat Mirza Masroor Ahmad (aba)
					</p>
				</figcaption>
			</figure>

			<!-- Book 2 -->
			<figure style="margin-top: 30px;">
				<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/book.jpg" alt="Book" class="fl" style="margin-right: 8px;"></a>
				<figcaption>
					<h4><a class="title" href="#">Brahin-e-Ahmadiyya</a></h4>
					<p>
						Hadhrat Mirza Ghulam Ahmad (as)
					</p>
				</figcaption>
			</figure>
		</article>

<!-- 3rd row -->
		<article class="clr one-articles-per-row">
			<header>
				<h3><a class="heading" href="#">Browse our Media Library for Documentaries - Explanation of the Holy Quran - Speeches by Scholars and many more</a></h3>
			</header>

			<div class="fl">			
				<figure>
					<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/media-01.jpg" alt="Hazoor" class="fl"></a>
					<figcaption class="clr">
<!-- 					<time datetime="2012-09-07" pubdate>07.09.2012</time> -->
						<h4><a class="title" href="#">Urdu Rahe Huda 16th November 2012</a></h4>
<!--
						<p>
							Hadhrat Mirza Masroor Ahmad - the world Head of the Ahmadiyya Muslim Community inaugurated Jalsa Salana UK this Friday.
						</p>
-->
					</figcaption>
				</figure>
			</div>

			<div class="fl" style="margin: 0 21px;">			
				<figure>
					<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/media-02.jpg" alt="Hazoor" class="fl"></a>
					<figcaption class="clr">
<!-- 					<time datetime="2012-09-07" pubdate>07.09.2012</time> -->
						<h4><a class="title" href="#">Morality in the Online World - Speech by Dr. Nasim Rehmatullah</a></h4>
<!--
						<p>
							Hadhrat Mirza Masroor Ahmad - the world Head of the Ahmadiyya Muslim Community inaugurated Jalsa Salana UK this Friday.
						</p>
-->
					</figcaption>
				</figure>
			</div>

			<div class="fl">			
				<figure>
					<a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/media-03.jpg" alt="Hazoor" class="fl"></a>
					<figcaption class="clr">
<!-- 					<time datetime="2012-09-07" pubdate>07.09.2012</time> -->
						<h4><a class="title" href="#">The Path to Peace - Capitol Hill Address by Hadhrat Mirza Masroor Ahmad</a></h4>
<!--
						<p>
							<a class="excerpt" href="#">Hadhrat Mirza Masroor Ahmad - the world Head of the Ahmadiyya Muslim Community inaugurated Jalsa Salana UK this Friday.</a>
						</p>
-->
					</figcaption>
				</figure>
			</div>
			
			<br class="clr">			
		</article>

	</section>
<?php get_footer(); ?>