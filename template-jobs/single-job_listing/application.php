<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $post;
?>
<div class="job-detail-description">
    <h3 class="title">
        <?php esc_html_e('Onze werkwijze bij InterimU', 'superio'); ?></h3>

    <div style="margin-bottom: 30px; background-color: rgba(25, 103, 210, 0.07); padding: 20px; border-radius: 10px;">
        <h3 style="color: #1451a4; margin-bottom: 10px;"><?php esc_html_e('1. SNEL ANTWOORD', 'superio'); ?></h3>
        <p> <?php esc_html_e('Binnen 24 uur beoordelen we je reactie en laten we weten of we je profiel voldoende bij de opdracht
            aansluit (zo niet, dan denken we meteen graag met je mee of er een opdracht is die wellicht beter zou
            kunnen aansluiten).', 'superio'); ?> </p>
        <ul style="margin-left: 20px;">
            <li> <?php esc_html_e('We checken direct of je aan de eisen en wensen van onze opdrachtgevers voldoet.', 'superio'); ?>
            </li>
            <li><?php esc_html_e('We kijken ook of je tarief in lijn ligt met de markt.', 'superio'); ?> </li>
            <li> <?php esc_html_e('Bij een match gaan we snel aan de slag!', 'superio'); ?> </li>
        </ul>
    </div>

    <div style="margin-bottom: 30px; background-color: rgba(25, 103, 210, 0.08); padding: 20px; border-radius: 10px;">
        <h3 style="color: #1451a4; margin-bottom: 10px;"><?php esc_html_e('2. JE PROFIEL VOORSTELLEN', 'superio'); ?>
        </h3>
        <p><?php esc_html_e('Het proces loopt vaak via aanbestedingen, dus de eerste indruk maken we schriftelijk.', 'superio'); ?>
        </p>
        <ul style="margin-left: 20px;">
            <li><?php esc_html_e('We maken een pakkend voorstel dat jouw kwaliteiten en ervaring benadrukt.', 'superio'); ?>
            </li>
            <li><?php esc_html_e('We verzamelen de benodigde documenten zoals referenties, diploma’s, en een VOG-verklaring.', 'superio'); ?>
            </li>
            <li><?php esc_html_e('We bespreken samen het beste uurtarief, met oog voor marktconformiteit en jouw wensen.', 'superio'); ?>
            </li>
        </ul>
    </div>

    <div style="margin-bottom: 30px; background-color: rgba(25, 103, 210, 0.15); padding: 20px; border-radius: 10px;">
        <h3 style="color: #1451a4; margin-bottom: 10px;"><?php esc_html_e('3. AAN DE SLAG', 'superio'); ?></h3>
        <p><?php esc_html_e('Wij staan voor transparantie en eerlijkheid. Onze voorwaarden zijn simpel:', 'superio'); ?>
        </p>
        <ul style="margin-left: 20px;">
            <li><?php esc_html_e('We rekenen een fee van 10% op je uurtarief voor Freelance opdrachten en 15% voor Detachering
                opdrachten (het hier getoonde max uurtarief is ook het all-in tarief inclusief onze fee).', 'superio'); ?>
            </li>
            <li><?php esc_html_e('Snelle betaling.', 'superio'); ?> </li>
            <li> <?php esc_html_e('Na je opdracht ben je vrij om opnieuw met dezelfde opdrachtgever te werken zonder restricties.', 'superio'); ?>
            </li>
        </ul>
    </div>

    <?php do_action('wp-job-board-pro-single-job-application', $post); ?>
</div>