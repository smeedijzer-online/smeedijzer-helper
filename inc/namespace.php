<?php
/**
 * Helper functions.
 */

namespace Smeedijzer\Helper;

/**
 * Check if the current user is Smeedijzer.
 *
 * @return boolean  Is the current user the developer (Smeedijzer) or not
 */
function is_smeedijzer(): bool
{
    $is_smeedijzer = false;


    if(smdzr_ends_with(wp_get_current_user()->user_email, '@smeedijzer.net') ){
        $is_smeedijzer = true;
    }

    return $is_smeedijzer;
}

/**
 * Check if string ends with a specific substring.
 *
 * @param string $haystack  the complete string which we are checking
 * @param string $needle    the substring we are checking for
 * @return string
 */
function smdzr_ends_with($haystack, $needle){
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}
