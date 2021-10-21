<?php
/**
* Plugin Name: Register Button for Event Manager
* Plugin URI: 
* Description: Plugin dodający do wtyczki Event Manager button umożliwiający rejestrację
* Version: 1.0
* Author: Edwin Harmata
* Author URI: https://edwinharmata.pl/
**/

function register_button_event_manager() {
    ?>
        <script>
           console.log('Test wtyczki!');
        </script>
    <?php
}
add_action('wp_footer', 'register_button_event_manager');
?>