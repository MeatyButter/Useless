<?php

if (!function_exists('get_img_src')) {

    /**
     * Get an img src with the correct sizing
     *
     * @param string $value
     * @param string $size
     * @return string
     */
    function get_img_src($value, $size)
    {
    	$path = pathinfo($value);
        $str = $path['dirname'] . '/' . $path['filename'] . '_' . $size . '.' . $path['extension'];
        return $str;
    }
}
