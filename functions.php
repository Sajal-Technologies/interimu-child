<?php

function superio_child_enqueue_styles() {
	wp_enqueue_style( 'superio-child-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'superio_child_enqueue_styles', 200 );


function custom_translations($translated_text, $text, $domain) {
	$translations = array(
		'Job Alert' => array(
			'english' => 'Job Alert',
			'dutch' => 'Opdracht Alert',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Daily' => array(
			'english' => 'Daily',
			'dutch' => 'Dagelijks',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Weekly' => array(
			'english' => 'Weekly',
			'dutch' => 'Wekelijks',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Fortnighly' => array(
			'english' => 'Fortnighly',
			'dutch' => 'Tweewekelijks',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Monthly' => array(
			'english' => 'Monthly',
			'dutch' => 'Maandelijks',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Biannually' => array(
			'english' => 'Biannually',
			'dutch' => 'Halfjaarlijks',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Save Job Alert' => array(
			'english' => 'Save Job Alert',
			'dutch' => 'Bewaar Opdracht Alert',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Search by job title' => array(
			'english' => 'Search by job title',
			'dutch' => 'Zoek op opdrachttitel',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Example' => array(
			'english' => 'Example',
			'dutch' => 'Bijvoorbeeld',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Region' => array(
			'english' => 'Region',
			'dutch' => 'Regio',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Show More' => array(
			'english' => 'Show More',
			'dutch' => 'Toon Meer',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Show Less' => array(
			'english' => 'Show Less',
			'dutch' => 'Toon Minder',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Field of expertise' => array(
			'english' => 'Field of expertise',
			'dutch' => 'Vakgebied',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Published' => array(
			'english' => 'Published',
			'dutch' => 'Gepubliceerd',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Last 3 days' => array(
			'english' => 'Last 3 days',
			'dutch' => 'Laatste 3 dagen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Last 7 days' => array(
			'english' => 'Last 7 days',
			'dutch' => 'Laatste 7 dagen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Last 14 days' => array(
			'english' => 'Last 14 days',
			'dutch' => 'Laatste 14 dagen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'All' => array(
			'english' => 'All',
			'dutch' => 'Alles',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Rate types (hour/day/month etc)' => array(
			'english' => 'Rate types (hour/day/month etc)',
			'dutch' => 'Uurtarieven (uur/dag/maand, etc.)',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Hour' => array(
			'english' => 'Hour',
			'dutch' => 'Uur',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		' / hour' => array(
			'english' => '/ hour',
			'dutch' => '/ uur',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Day' => array(
			'english' => 'Day',
			'dutch' => 'Dag',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		' / day' => array(
			'english' => '/ day',
			'dutch' => '/ dag',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Week' => array(
			'english' => 'Week',
			'dutch' => 'Week',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		' / week' => array(
			'english' => '/ week',
			'dutch' => '/ week',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Monthly' => array(
			'english' => 'Monthly',
			'dutch' => 'Maand',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		' / monthly' => array(
			'english' => '/ monthly',
			'dutch' => '/ Maand',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Apply now' => array(
			'english' => 'Apply now',
			'dutch' => 'Nu reageren',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Job Description' => array(
			'english' => 'Job Description',
			'dutch' => 'Opdrachtomschrijving',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Share this post' => array(
			'english' => 'Share this post',
			'dutch' => 'Deel deze opdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Related Jobs' => array(
			'english' => 'Related Jobs',
			'dutch' => 'Gerelateerde opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Job Overview' => array(
			'english' => 'Job Overview',
			'dutch' => 'Opdracht details',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Location' => array(
			'english' => 'Location',
			'dutch' => 'Locatie',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Offered Salary:' => array(
			'english' => 'Offered Salary:',
			'dutch' => 'Vergoeding:',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Expiration date' => array(
			'english' => 'Expiration date',
			'dutch' => 'Vervaldatum',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Experience' => array(
			'english' => 'Experience',
			'dutch' => 'Ervaring',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Gender' => array(
			'english' => 'Gender',
			'dutch' => 'Geslacht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Both' => array(
			'english' => 'Both',
			'dutch' => 'Beide',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Qualification' => array(
			'english' => 'Qualification',
			'dutch' => 'Kwalificatie',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Master’s Degree' => array(
			'english' => 'Master’s Degree',
			'dutch' => 'Masterdiploma',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Career Level' => array(
			'english' => 'Career Level',
			'dutch' => 'Carrièreniveau',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Executive' => array(
			'english' => 'Executive',
			'dutch' => 'Leidinggevende',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Apply for this job' => array(
			'english' => 'Apply for this job',
			'dutch' => 'Reageer nu op deze opdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'You accept our Terms and Conditions and Privacy Policy' => array(
			'english' => 'You accept our Terms and Conditions and Privacy Policy',
			'dutch' => 'Accepteer onze Algemene voorwaarden en Privacybeleid',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Apply Now' => array(
			'english' => 'Apply Now',
			'dutch' => 'Reageer Nu',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Add Another Network' => array(
			'english' => 'Add Another Network',
			'dutch' => 'Voeg andere social toe',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Safe Profile' => array(
			'english' => 'Safe Profile',
			'dutch' => 'Bewaar profiel',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Profile' => array(
			'english' => 'Profile',
			'dutch' => 'Profiel',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Shortlist Jobs' => array(
			'english' => 'Shortlist Jobs',
			'dutch' => 'Favoriete opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Alerts Jobs' => array(
			'english' => 'Alerts Jobs',
			'dutch' => 'Opdracht Alerts',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Change Password' => array(
			'english' => 'Change Password',
			'dutch' => 'Wachtwoord wijzigen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Logout' => array(
			'english' => 'Logout',
			'dutch' => 'Uitloggen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'jobs' => array(
			'english' => 'jobs',
			'dutch' => 'Opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Shortlist' => array(
			'english' => 'Shortlist',
			'dutch' => 'Shortlist',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Search' => array(
			'english' => 'Search',
			'dutch' => 'Zoeken',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Sort by' => array(
			'english' => 'Sort by',
			'dutch' => 'Sorteren op',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'No jobs' => array(
			'english' => 'No jobs',
			'dutch' => 'Geen opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'found' => array(
			'english' => 'found',
			'dutch' => 'gevonden',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Job Alerts' => array(
			'english' => 'Job Alerts',
			'dutch' => 'Werkwaarschuwingen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Title' => array(
			'english' => 'Title',
			'dutch' => 'Titel',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Alert Query' => array(
			'english' => 'Alert Query',
			'dutch' => 'Opdracht Alert Zoekopdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Number Jobs' => array(
			'english' => 'Number Jobs',
			'dutch' => 'Aantal opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Times' => array(
			'english' => 'Times',
			'dutch' => 'Tijden',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Actions' => array(
			'english' => 'Actions',
			'dutch' => 'Acties',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Old password' => array(
			'english' => 'Old password',
			'dutch' => 'Oud wachtwoord',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'New password' => array(
			'english' => 'New password',
			'dutch' => 'Nieuw wachtwoord',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Retype password' => array(
			'english' => 'Retype password',
			'dutch' => 'Wachtwoord herhalen',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Start Assignment' => array(
			'english' => 'Start Assignment',
			'dutch' => 'Start Opdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Job Start Date' => array(
			'english' => 'Job Start Date',
			'dutch' => 'Startdatum',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Hours / week' => array(
			'english' => 'Hours / week',
			'dutch' => 'Uren/week',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'View Company Profile' => array(
			'english' => 'View Company Profile',
			'dutch' => 'Bekijk Opdrachtgever Profiel',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Employer' => array(
			'english' => 'Employer',
			'dutch' => 'Opdrachtgever',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Apply Job' => array(
			'english' => 'Apply Job',
			'dutch' => 'Reageer op opdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Full Name' => array(
			'english' => 'Full Name',
			'dutch' => 'Volledige naam',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Phone' => array(
			'english' => 'Phone',
			'dutch' => 'Telefoonnummer',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Hourly Rate' => array(
			'english' => 'Hourly Rate',
			'dutch' => 'Voorgestelde tarief per uur',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Message' => array(
			'english' => 'Message',
			'dutch' => 'Bericht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Job Starts' => array(
			'english' => 'Job Starts',
			'dutch' => 'Opdracht begint',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Open Job' => array(
			'english' => 'Open Job',
			'dutch' => 'Open Opdracht',
			'domain' => ['wp-job-board-pro', 'superio']
		),
		'Open Jobs' => array(
			'english' => 'Open Job',
			'dutch' => 'Open Opdrachten',
			'domain' => ['wp-job-board-pro', 'superio']
		)
	);

    if (isset($translations[$text]) && in_array($domain, $translations[$text]['domain'] ) ) {
        $translated_text = $translations[$text]['dutch'];
    }

    return $translated_text;
}

add_filter('gettext', 'custom_translations', 999, 3);

add_filter('attribute_escape', 'attribute_escape_translations', 999, 2);
add_filter('esc_html', 'esc_html_translations', 999, 2);

function attribute_escape_translations( $safe_text, $text)
{
	if ($text == 'Job Alert') {
		return esc_attr_e($safe_text, 'wp-job-board-pro');
	}

	if ($text == 'Save Job Alert') {
		return esc_attr_e($safe_text, 'wp-job-board-pro');
	}

	if ( $text == 'Job Alerts') {
		return esc_attr_e($safe_text, 'wp-job-board-pro');
	}

	if ( $text == 'Job Overview') {
		return esc_attr_e($safe_text, 'wp-job-board-pro');
	}

	return $safe_text;
}

function esc_html_translations($safe_text, $text)
{
	if ( $text == 'View Company Profile') {
		return esc_attr_e($safe_text, 'wp-job-board-pro');
	}

	return $safe_text;
}

add_filter( 'wp_job_board_pro_display_field_data', 'jobs_display_custom_fields_display_hooks', 999, 6 );
function jobs_display_custom_fields_display_hooks($html, $custom_field, $post, $field_name, $output_value, $current_hook)
{
	if ( $current_hook === 'wp-job-board-pro-single-job-details' ) {
		$icon = !empty($custom_field['icon']) ? $custom_field['icon'] : '';
		ob_start();
        ?>
        <li>
            <div class="icon">
                <?php if ( !empty($icon) ) { ?>
                    <i class="<?php echo esc_attr($icon); ?>"></i>
                <?php } ?>
            </div>
            <div class="details">
                <?php if ( $field_name ) { ?>
                    <div class="text"><?php echo trim(esc_attr_e($field_name, 'wp-job-board-pro')); ?></div>
                <?php } ?>
                <div class="value"><?php echo (is_array($output_value) ? implode(', ', $output_value) : $output_value); ?></div>
            </div>
        </li>
        <?php
        $html = ob_get_clean();
    } elseif ( $current_hook === 'wp-job-board-pro-single-job-employer-info' || $current_hook === 'wp-job-board-pro-single-employer-details' ) {
    	ob_start();
    	?>
    	<div class="job-meta">
            <h3 class="title"><?php echo trim( esc_attr_e($field_name,'wp-job-board-pro' ) ); ?>:</h3>
            <div class="value">
                <?php echo (is_array($output_value) ? implode(', ', $output_value) : $output_value); ?>
            </div>
        </div>
    	<?php
    	$html = ob_get_clean();
    } elseif ( $current_hook === 'wp-job-board-pro-single-candidate-details' ) {
		$icon = !empty($custom_field['icon']) ? $custom_field['icon'] : '';
		ob_start();
        ?>
        <li>
            <div class="icon">
                <?php if ( !empty($icon) ) { ?>
                    <i class="<?php echo esc_attr($icon); ?>"></i>
                <?php } ?>
            </div>
            <div class="details">
                <?php if ( $field_name ) { ?>
                    <div class="text"><?php echo (is_array($field_name) ? implode(', ', $field_name) : esc_attr_e($field_name, 'wp-job-board-pro' )); ?></div>
                <?php } ?>
                <div class="value"><?php echo (is_array($output_value) ? implode(', ', $output_value) : $output_value); ?></div>
            </div>
        </li>
        <?php
        $html = ob_get_clean();
    }

    return $html;
}

add_filter('the_title', 'the_title_translations', 999, 2);
function the_title_translations($post_title, $post_id)
{
	if ($post_title == 'Employer') {
		return esc_attr_e($post_title, 'wp-job-board-pro' );
	}
	return $post_title;
}

add_filter('widget_title', 'widget_title_translations', 999, 1);
function widget_title_translations($widget_title)
{
	if ($widget_title == 'Job Overview') {
		return __($widget_title, 'wp-job-board-pro' );
	}

	return $widget_title;
}

add_filter('wp_job_board_pro_get_option_terms_conditions_page_id', 'terms_conditions_page_id', 999, 3);
function terms_conditions_page_id($value, $key, $default )
{
	return 0;
}


function superio_job_display_freelance_icon($post, $display = 'text') {
	$obj_job_meta = WP_Job_Board_Pro_Job_Listing_Meta::get_instance($post->ID);

	$freelance = $obj_job_meta->get_post_meta( 'freelance' );
	if ( $freelance ) { ?>
		<?php if($display == 'text') { ?>
        	<span class="urgent freelance"><?php esc_html_e('Freelance', 'superio'); ?></span>
        <?php } else { ?>
    		<span class="urgent urgent-icon freelance" data-toggle="tooltip" title="<?php esc_attr_e('Freelance', 'superio'); ?>">
    			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.4525 5.8875C13.4129 5.80063 13.3492 5.72692 13.2691 5.67509C13.1889 5.62325 13.0955 5.59546 13 5.595H9.11254L10.7725 1.175C10.8008 1.09944 10.8103 1.01816 10.8003 0.938117C10.7903 0.858071 10.7611 0.781629 10.7152 0.715315C10.6693 0.649001 10.608 0.594784 10.5366 0.55729C10.4651 0.519797 10.3857 0.500141 10.305 0.5H6.27504C6.17859 0.500417 6.08431 0.528725 6.00358 0.581511C5.92285 0.634297 5.85911 0.709307 5.82004 0.7975L2.54504 8.185C2.5114 8.26095 2.49721 8.34409 2.50375 8.4269C2.5103 8.50972 2.53737 8.58959 2.58253 8.65932C2.62769 8.72904 2.68951 8.78641 2.76241 8.82625C2.8353 8.86609 2.91697 8.88714 3.00004 8.8875H6.37504L5.67504 11.52L4.78504 14.8725C4.75567 14.982 4.76438 15.0982 4.80974 15.2021C4.8551 15.306 4.93441 15.3914 5.03467 15.4443C5.13494 15.4972 5.2502 15.5144 5.36155 15.4932C5.47291 15.472 5.57375 15.4136 5.64754 15.3275L13.375 6.4225C13.4379 6.35013 13.4786 6.26123 13.4923 6.16638C13.5061 6.07153 13.4923 5.97473 13.4525 5.8875ZM6.30754 13.0425L7.50004 8.515C7.51163 8.46251 7.51584 8.40866 7.51254 8.355C7.50428 8.2281 7.44797 8.10913 7.35508 8.02228C7.2622 7.93543 7.13971 7.88723 7.01254 7.8875H3.76254L6.60254 1.5H9.58254L7.92254 5.92C7.89423 5.99576 7.88473 6.07726 7.89484 6.1575C7.90495 6.23775 7.93437 6.31434 7.98059 6.38071C8.0268 6.44709 8.08843 6.50126 8.16018 6.53858C8.23193 6.5759 8.31166 6.59526 8.39254 6.595H11.8925L6.30754 13.0425Z" fill="currentColor"/>
				</svg>
    		</span>
        <?php } ?>
    <?php }
}

function superio_job_display_detachering_icon($post, $display = 'text') {
	$obj_job_meta = WP_Job_Board_Pro_Job_Listing_Meta::get_instance($post->ID);

	$detachering = $obj_job_meta->get_post_meta( 'detachering' );
	if ( $detachering ) { ?>
		<?php if($display == 'text') { ?>
        	<span class="urgent detachering"><?php esc_html_e('Detachering', 'superio'); ?></span>
        <?php } else { ?>
    		<span class="urgent urgent-icon detachering" data-toggle="tooltip" title="<?php esc_attr_e('Detachering', 'superio'); ?>">
    			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.4525 5.8875C13.4129 5.80063 13.3492 5.72692 13.2691 5.67509C13.1889 5.62325 13.0955 5.59546 13 5.595H9.11254L10.7725 1.175C10.8008 1.09944 10.8103 1.01816 10.8003 0.938117C10.7903 0.858071 10.7611 0.781629 10.7152 0.715315C10.6693 0.649001 10.608 0.594784 10.5366 0.55729C10.4651 0.519797 10.3857 0.500141 10.305 0.5H6.27504C6.17859 0.500417 6.08431 0.528725 6.00358 0.581511C5.92285 0.634297 5.85911 0.709307 5.82004 0.7975L2.54504 8.185C2.5114 8.26095 2.49721 8.34409 2.50375 8.4269C2.5103 8.50972 2.53737 8.58959 2.58253 8.65932C2.62769 8.72904 2.68951 8.78641 2.76241 8.82625C2.8353 8.86609 2.91697 8.88714 3.00004 8.8875H6.37504L5.67504 11.52L4.78504 14.8725C4.75567 14.982 4.76438 15.0982 4.80974 15.2021C4.8551 15.306 4.93441 15.3914 5.03467 15.4443C5.13494 15.4972 5.2502 15.5144 5.36155 15.4932C5.47291 15.472 5.57375 15.4136 5.64754 15.3275L13.375 6.4225C13.4379 6.35013 13.4786 6.26123 13.4923 6.16638C13.5061 6.07153 13.4923 5.97473 13.4525 5.8875ZM6.30754 13.0425L7.50004 8.515C7.51163 8.46251 7.51584 8.40866 7.51254 8.355C7.50428 8.2281 7.44797 8.10913 7.35508 8.02228C7.2622 7.93543 7.13971 7.88723 7.01254 7.8875H3.76254L6.60254 1.5H9.58254L7.92254 5.92C7.89423 5.99576 7.88473 6.07726 7.89484 6.1575C7.90495 6.23775 7.93437 6.31434 7.98059 6.38071C8.0268 6.44709 8.08843 6.50126 8.16018 6.53858C8.23193 6.5759 8.31166 6.59526 8.39254 6.595H11.8925L6.30754 13.0425Z" fill="currentColor"/>
				</svg>
    		</span>
        <?php } ?>
    <?php }
}

function superio_child_job_display_short_location($post, $display_type = 'no-icon', $echo = true) {
	$locations = get_the_terms( $post->ID, 'job_listing_location' );
	$map_location_properties = get_post_meta( $post->ID, '_job_map_location_properties', true );
	$parent_location = '';

	if(isset($map_location_properties) || !empty($map_location_properties)){
		$parent_location = $map_location_properties['road'];
	}

	ob_start();
	if ( $locations ) {
		$terms = array();
        superio_locations_walk($locations, 0, $terms);
        if ( empty($terms) ) {
        	$terms = $locations;
        } else {
        	$terms = array_reverse($terms, true);
        }

		?>
		<div class="job-location">
			<?php if ($display_type == 'icon') { ?>
	            <i class="flaticon-location"></i>
	        <?php } ?>
            <?php $i=1; foreach ($terms as $term) { if ($i==1) {?>
                <a href="<?php echo get_term_link($term); ?>"><?php echo trim($term->name); ?></a><?php echo esc_html( $parent_location != '' ? ', ' : '' ); ?>
            <?php } $i++; } ?>
			
			<?php echo $parent_location ?>
        </div>
		<?php
    }
    $output = ob_get_clean();
    if ( $echo ) {
    	echo trim($output);
    } else {
    	return $output;
    }
}

function superio_child_employer_display_open_position($post, $show_url = false) {
	$user_id = WP_Job_Board_Pro_User::get_user_by_employer_id($post->ID);
	$args = array(
	        'post_type' => 'job_listing',
	        'post_per_page' => 1,
	        'post_status' => 'publish',
	        'fields' => 'ids',
	        'author' => $user_id
	    );
	$jobs = WP_Job_Board_Pro_Query::get_posts($args);
	$count_jobs = $jobs->found_posts;
	
	?>
	<span class="wrapper-open-job">
		<?php if ($show_url) { ?>
			<a href="<?php echo esc_url(get_permalink($post)); ?>" class="open-job">
		<?php } ?>
        <?php 
		$open_job_text = __('Open Job', 'superio');
		$open_jobs_text = __('Open Jobs', 'superio');
		$job_count = intval($count_jobs);

		if ($job_count <= 1 ){
			echo sprintf($open_job_text . ' - <span>%s</span>', $job_count);
		}else{
			echo sprintf($open_jobs_text . ' - <span>%s</span>', $job_count);
		}
		?>
        <?php if ($show_url) { ?>
			</a> 
		<?php } ?> 
    </span>
    <?php
}