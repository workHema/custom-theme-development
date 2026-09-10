<?php

class Bootstrap_Navwalker extends Walker_Nav_Menu {


    function start_lvl(&$output, $depth = 0, $args = null){

        $output .= '<ul class="dropdown-menu">';

    }


    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0){

        $classes = empty($item->classes) ? array() : (array)$item->classes;


        $has_children = in_array(
            'menu-item-has-children',
            $classes
        );


        if($depth == 0){

            if($has_children){

                $output .= '<li class="nav-item dropdown">';

                $output .= '<a class="nav-link dropdown-toggle" 
                href="'.$item->url.'" 
                data-toggle="dropdown">';

            }else{

                $output .= '<li class="nav-item">';

                $output .= '<a class="nav-link" 
                href="'.$item->url.'">';

            }

        }else{

            $output .= '<li>';

            $output .= '<a class="dropdown-item" 
            href="'.$item->url.'">';

        }


        $output .= $item->title;

        $output .= '</a>';

    }


    function end_lvl(&$output, $depth = 0, $args = null){

        $output .= '</ul>';

    }


    function end_el(&$output, $item, $depth = 0, $args = null){

        $output .= '</li>';

    }

}