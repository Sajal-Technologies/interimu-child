<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $post;

?>
<?php do_action( 'wp_job_board_pro_before_job_content', $post->ID ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('map-item layout-job job-list default'); ?> <?php superio_job_item_map_meta($post); ?>>
    <div class="clearfix">
        <?php
            superio_job_display_employer_logo($post, true, true);
        ?>
        <div class="job-list-content job-detail-custom">
            <div class="row flex-middle-sm">
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="flex-middle-sm">
                        <div class="info-detail-job">
                            <div class="title-wrapper flex-middle-sm">
                                <?php the_title( sprintf( '<h2 class="job-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                                <?php superio_job_display_featured_icon($post,'text'); ?>
                                <?php
                                    $status_label = isset($status_label) ? $status_label : '';
                                    echo trim($status_label);
                                ?>

                                <?php superio_job_display_filled_label($post); ?>
                            </div>
                            <div class="job-metas-detail">
                                <?php superio_job_display_job_category($post, 'icon'); ?>
                                <?php superio_child_job_display_short_location($post, 'icon'); ?>
                                <?php superio_job_display_salary($post, 'icon'); ?>
                            </div>
                            <div class="job-metas-detail-bottom">
                                <?php superio_job_display_job_type($post); ?>
                                <?php superio_job_display_urgent_icon($post); ?>
                                <?php superio_job_display_freelance_icon($post); ?>
                <?php superio_job_display_detachering_icon($post); ?>
                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-detail-buttons col-md-4 col-sm-5 col-xs-12">
                    <div class="action">
                        <a href="<?php echo esc_url( get_permalink());?>" class="btn btn-view-details"><?php esc_html_e('Bekijk Details', 'wp-job-board-pro'); ?><i class="next flaticon-right-arrow"></i></a>
                        <?php WP_Job_Board_Pro_Job_Listing::display_shortlist_btn($post->ID); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-## -->
<?php do_action( 'wp_job_board_pro_after_job_content', $post->ID ); ?>