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

    /**
     * Featured coaches section content
     * 
     * @return array
     */
    public static function featured_coaches()
    {
        $featured_coaches_section = [
            'section_class' => 'featured-coaches',
            'title'         => get_field('featured_coaches_section_title'),
            'excerpt'       => get_field('featured_coaches_section_excerpt'),
            'slider_items'  => []
        ];

        $featured_coaches = get_field('featured_coaches_list');

        foreach($featured_coaches as $featured_coach) {
            $featured_coach = $featured_coach['featured_coach'];

            $coach = [
                'name' => $featured_coach->post_title,
                'info' => get_field('coach_description', $featured_coach->ID),
                'pic'  => get_field('coach_profile_picture_image', $featured_coach->ID)
            ];

            array_push($featured_coaches_section['slider_items'], $coach);
        }

        return $featured_coaches_section;
    }

    /**
     * Featured coaches section content
     * 
     * @return array
     */
    public static function pricing()
    {
        $pricing_section = [
            'section_class' => 'pricing',
            'title'         => get_field('pricing_section_title'),
            'options'       => get_field('pricing_list')
        ];
        
        return $pricing_section;
    }

    /**
     * Locations section
     *
     * @return array
     */
    public static function locations()
    {
        $section_data = [
            'title' => get_field('locations_section_title'),
            'locations'  => []
        ];

        $locations = get_field('locations_list');

        foreach($locations as $location) {
            $location = $location['location'];

            $location_info = [
                'name' => $location->post_title,
                'slug' => $location->post_name,
                'address' => get_field('location_address', $location->ID),
                'lat' => get_field('location_lat', $location->ID),
                'long' => get_field('location_long', $location->ID),
                'hours' => get_field('location_hours', $location->ID),
                'gallery_images' => get_field('location_gallery', $location->ID),
            ];

            array_push($section_data['locations'], $location_info);
        }

        return $section_data;
    }

    /**
     * Shop section content
     *
     * @return array
     */
    public static function shop()
    {
        $shop_section = [
            'title' => get_field('shop_section_title'),
            'excerpt' => get_field('shop_section_excerpt'),
            'cta' => get_field('shop_section_cta_button'),
            'products' => get_field('shop_section_products')
        ];

        return $shop_section;
    }

    public static function subscribe()
    {
        $subscribe_section = [
            'title' => get_field('subscribe_section_title'),
            'excerpt' => get_field('subscribe_section_excerpt'),
            'after_form' => get_field('subscribe_section_after_form_content'),
            'coupon' => get_field('subscribe_section_coupon'),
        ];

        return $subscribe_section;
    }
}
