<?php
if (!function_exists('debug')) {

    function debug($var, $exit = TRUE) {
        $arr = @debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        $var_type = gettype($var);
        echo '<pre>';
        echo '<div style="border:1px solid; background-color: #FFA500; padding: 10px; color: #000000;">';
        echo '<strong>FILE:</strong> ' . "\t\t\t" . $arr[0]['file'] . "\n\n";
        echo '<strong>LINE:</strong> ' . "\t\t\t" . $arr[0]['line'] . "\n\n";
        echo '<strong>VARIABLE TYPE:</strong> ' . "\t\t" . $var_type . "\n\n";
        echo '<strong>VARIABLE VALUE:</strong> ' . "\t\n";
        print_r($var);
        echo "\n";
        echo '</div>';
        echo '</pre>';

        if ($exit) {
            exit;
        }
    }

}
/**
 * Created by PhpStorm.
 * User: Nabeel Alvi
 * Date: 9/15/2017
 * Time: 7:12 AM
 */