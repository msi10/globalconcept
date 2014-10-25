	<footer>
    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
		<article>
			<h4><a class="footerH" href="#">Information about Islam</a></h4>
			<p>
				Islam is the religion that represents the<br>
				pinnacle of religious evolution.
			</p>

			<figure>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/muhammad.png" alt="Muhammad (saw) The Holy Prophet">
				<figcaption>
					<a class="excerpt" href="#"><em>Muhammad (saw)<br>The Holy Prophet</em></a><br>
					Messenger of God and<br>the Seal of the Prophets.
				</figcaption>
			</figure>
			
			<p>
				<a class="white" href="#">The Belief in the Unity of God</a><br>
				<a class="white" href="#">The Belief in the Angels of God</a><br>
				<a class="white" href="#">The Six main Articles of Islam</a><br>
				<a class="white" href="#">The Five Pillars of Islam</a>			
			</p>
		</article>
		
		<article>
			<h4><a class="footerH" href="#">Information about Ahmadiyya</a></h4>
			<p>
				Ahmadiyyat is the revival of Islam prophesied<br>
				to unite mankind in the Latter Days.
			</p>

			<figure>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/hadhrat.jpg" alt="Muhammad (saw) The Holy Prophet">
				<figcaption>
					<a class="excerpt" href="#"><em>Hadhrat Mirza Ghulam<br>Ahmad Qadiani (as)</em></a><br>
					The Promised Messiah<br>and Imam Mahdi.
				</figcaption>
			</figure>

			<p>			
				<a class="white" href="#">A Community established by God</a><br>
				<a class="white" href="#">About the Finality of Prophethood</a><br>
				<a class="white" href="#">About the death of Jesus (as) and his return</a><br>
				<a class="white" href="#">The Re-instition of Khilafat</a>
			</p>
		</article>

		<article>
			<h4><a class="footerH" href="#">Information about Khilafat</a></h4>
			<p>
				After Prophethood, Khilafat is the most<br>
				important institution in Islam.
			</p>

			<figure>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/hazoor-02.jpg" alt="Hadhrat Mirza Masroor Ahmad (aba)">
				<figcaption>
					<a class="excerpt" href="#"><em>Hadhrat Mirza Masroor<br>Ahmad (aba)</em></a>
					<br>
					The Champion of Peace<br>and Defender of Islam.
				</figcaption>
			</figure>
			
			<p>
				<a class="white" href="#">Khilafat mentioned in the Holy Quran</a><br>
				<a class="white" href="#">Khilafat mentioned in the Hadith</a><br>
				<a class="white" href="#">The Khalifa is elected by God himself</a><br>
				<a class="white" href="#">The Devision between State and Faith</a>			
			</p>
		</article>
        <?php endif;  wp_footer();  ?>
		
		<br class="clr">
	</footer>
</body>
</html>
