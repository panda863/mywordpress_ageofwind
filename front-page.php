<?php get_header() ;?>

<?php get_sidebar() ;?>

<div class="article">
    <div class="box">
		
    <div id="main">
		<h2>日記</h2>
        <section id="infomation">
            <ul>
				<?php if(have_posts()):while(have_posts()):the_post() ;?>
                <li>
					<a href="<?php the_permalink();?>">
                    <div class="date"><?php echo get_the_date('Y.M.d') ;?></div>
                    <div class="ttl"><?php the_title() ;?></div>
					</a>
                </li>
				<?php endwhile; endif;?>
            </ul>
			<button class="all"><a href="<?php bloginfo('url') ;?>/news">一覧を見る</a></button>
        </section>
    </div><!--main-->

    </div><!--box-->
</div><!--article-->

<?php get_footer() ;?>