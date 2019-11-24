<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    /**
     * Hero banner data
     *
     * @return array
     */
    public static function hero_banner()
    {
        $acf_prefix = 'home_banner';

        $banner = [
            'title'         => get_field( $acf_prefix . '_hero_banner_title'),
            'excerpt'       => get_field( $acf_prefix . '_hero_banner_excerpt'),
            'primary_cta'   => get_field( $acf_prefix . '_hero_banner_primary_cta_button'),
            'secondary_cta' => get_field( $acf_prefix . '_hero_banner_secondary_cta_button'),
            'bg_img'        => get_field( $acf_prefix . '_hero_banner_background_image')
        ];

        return $banner;
    }

    /**
     * Why vigor section content
     * 
     * @return array
     */
    public static function why_vigor()
    {
        $content = [
            'section_class' => 'why-vigor',
            'title'         => get_field('why_vigor_title'),
            'excerpt'       => get_field('why_vigor_excerpt')
        ];

        return $content;
    }
}
