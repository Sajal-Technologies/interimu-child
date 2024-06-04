<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $post;

$author_id = superio_get_post_author($post->ID);
?>
<?php 
    if(has_post_thumbnail()){
        $img_bg_src = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), 'full' );
        $style = 'style="background-image:url('.esc_url($img_bg_src).')"';
    }else{
        $style = '';
    }
    
    $application_deadline_date = get_post_meta( $post->ID, '_job_application_deadline_date', true );
    if (empty($application_deadline_date)) {
        $application_deadline_date = get_post_meta( $post->ID, '_job_expiry_date', true );
    }

    $deadline = !empty($application_deadline_date) && date('Y-m-d', strtotime('now')) > date('Y-m-d', strtotime($application_deadline_date));
?>
<div class="job-detail-header v1" <?php echo trim($style); ?>>
    <div class="container">
        <div class="row flex-middle-sm">
            <div class="col-xs-12">
                <?php $isfilled = get_post_meta($post->ID, '_job_filled', true)? 'yes':''; if( $isfilled == 'yes' || $deadline) { ?>
                <div class="error-message full-width">
                    <div class="icon">x</div>
                    <div>
                        <?php echo esc_html_e('Deze opdracht is gesloten, reageren is helaas niet meer mogelijk', 'superio') ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="row flex-middle-sm content-below-banner">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="flex-middle-sm">

                    <?php
                        superio_job_display_employer_logo($post, true, true);
                    ?>

                    <div class="info-detail-job">
                        <div class="title-wrapper flex-middle-sm">
                            <?php the_title( '<h1 class="job-detail-title">', '</h1>' ); ?>
                            <?php superio_job_display_featured_icon($post); ?>
                            <?php superio_job_display_filled_label($post); ?>
                        </div>
                        <div class="job-metas-detail">
                            <?php superio_job_display_job_category($post, 'icon'); ?>
                            <?php superio_child_job_display_short_location($post, 'icon'); ?>
                            <?php superio_job_display_postdate($post, 'icon'); ?>
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
                    <?php echo (get_post_meta($post->ID, '_job_filled', true) || $deadline)? '': WP_Job_Board_Pro_Job_Listing::display_apply_job_btn($post->ID); ?>
                    <?php WP_Job_Board_Pro_Job_Listing::display_shortlist_btn($post->ID); ?>
                </div>
            </div>
        </div>
    </div>
</div>