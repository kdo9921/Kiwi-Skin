<?php get_header() ; ?>
<div class="container">
    <section class="site-content">
        <article>
            <div class="post_content">
                <?php the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
            </div>
        </article>
        <?php if (have_posts()) : while (have_posts()) : the_post() ; ?>
        <a href=<?php the_permalink();?>>
            <article>
                <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <div class="post_content">
                    <h1><?php the_title();?></h1>
                    <?php the_excerpt(); ?>
                </div>
            </article>
        </a>
        <?php
		endwhile; else :?>
        <article>
            <div class="post_content">
                <h1>찾을 수 없습니다</h1>
                <hr>
                <p>검색어와 일치하는 것이 없습니다. 다른 검색어로 다시 시도해보세요.</p>
                <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/">
                    <input type="text" placeholder="검색 …" value="" name="s" id="s">
                </form>
            </div>
        </article>
        <?php endif;?>
        <?php the_posts_navigation() ?>
    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer() ; ?>