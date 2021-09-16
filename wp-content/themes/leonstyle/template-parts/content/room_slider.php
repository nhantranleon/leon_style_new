<!-- <section class="interior-area">
	<div class="container">
		<div class="row">
			<div class="col-md-2 position-relative">
				<p class="category">内部</p>
				<div class="rotate-text position-absolute">Interior</div>
			</div>
			<div class="col-md-10">
				<div class="slider">
					<div class="slider-for"> -->
						<?php
// 							$rooms = new WP_Query( array(
// 								'post_type' => 'room'
// 							) );

// 							if ( $rooms->have_posts() ) {
// 								while ( $rooms->have_posts() ) {
// 									$rooms->the_post();
// 									$room_images = get_children( array(
// 										'post_parent' => get_the_ID(),
// 										'posts_per_page' => 1,
// 									) );
// 									if ( $room_images ) {
// 										foreach ( $room_images as $room_image ) {
// 											echo '<img src="' . esc_url($room_image->guid) . '" class="item"  alt="' . get_the_title() . '"/>';
// 										}
// 									}
// 								}
// 							} else {
// 							}
// 							wp_reset_postdata();
						?>	
<!-- 					</div>
					<div class="slider-nav"> -->
						<?php
// 							$rooms = new WP_Query( array(
// 								'post_type' => 'room'
// 							) );

// 							if ( $rooms->have_posts() ) {
// 								while ( $rooms->have_posts() ) {
// 									$rooms->the_post();
// 									$room_images = get_children( array(
// 										'post_type' => 'attachment',
// 										'post_parent' => get_the_ID(),
// 										'posts_per_page' => 1,
// 									) );
// 									if ( $room_images ) {
// 										foreach ( $room_images as $room_image ) {
// 											echo '<img src="' . esc_url($room_image->guid) . '" class="item"  alt="' . get_the_title() . '"/>';
// 										}
// 									}
// 								}
// 							} else {
// 							}
// 							wp_reset_postdata();
						?>
<!-- 					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--　interior-area　-->
<section class="interior-area">
    <div class="container">
        <div class="ttl-wrap">
            <h3 class="sec-ttl">内観</h3>
            <div class="en">Interior</div>
        </div> 
        <div class="slider-wrap">
            <div class="slider-for">
				<?php
					$rooms = new WP_Query( array(
						'post_type' => 'room'
					) );

					if ( $rooms->have_posts() ) {
						while ( $rooms->have_posts() ) {
							$rooms->the_post();
							$room_images = get_children( array(
								'post_parent' => get_the_ID(),
								'posts_per_page' => 1,
							) );
							if ( $room_images ) {
								foreach ( $room_images as $room_image ) {
									echo '<figure><a href="'.esc_url($room_image->guid).'" rel="lightbox[a-group]"><img src="'.esc_url($room_image->guid).'" alt="'.get_the_title().'"></a></figure>';
								}
							}
						}
					} else {
					}
					wp_reset_postdata();
						?>	
            </div>
            <div class="slider-nav">
                    <?php
					$rooms = new WP_Query( array(
						'post_type' => 'room'
					) );

					if ( $rooms->have_posts() ) {
						while ( $rooms->have_posts() ) {
							$rooms->the_post();
							$room_images = get_children( array(
								'post_parent' => get_the_ID(),
								'posts_per_page' => 1,
							) );
							if ( $room_images ) {
								foreach ( $room_images as $room_image ) {
									echo '<figure><a href="'.esc_url($room_image->guid).'" rel="lightbox[a-group]"><img src="'.esc_url($room_image->guid).'" alt="'.get_the_title().'"></a></figure>';
								}
							}
						}
					} else {
					}
					wp_reset_postdata();
						?>
            </div>
        </div><!-- slider-wrap -->
    </div>
</section><!--　interior-area　-->