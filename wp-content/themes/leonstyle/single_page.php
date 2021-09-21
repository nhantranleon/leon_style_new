<?php
/**
 * The main template file
 *
 * @package leonstyle
 */

get_header();
?>
    <main class="">
		<?php get_template_part('/template-parts/page/mv_area')?>
		<?php get_template_part('/template-parts/page/concept_area')?>
		<?php get_template_part('/template-parts/page/home_movie_area')?>
		<?php get_template_part('/template-parts/page/home_room_area')?>
		<?php get_template_part('/template-parts/page/home_news_area')?>
    </main>
</div>

<?php
get_footer();