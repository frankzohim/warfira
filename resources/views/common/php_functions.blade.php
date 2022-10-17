<?php
/**
 *check if the valid array
 *
 *@param array $array array which has to be validated
 *
 *@return boolean
 */
function valid_array($array='') {
    $status = '';
    if (is_array($array) == true and count($array) > 0) {
        $status = true;
    } else {
        $status = false;
    }
    return $status;
}
?>
