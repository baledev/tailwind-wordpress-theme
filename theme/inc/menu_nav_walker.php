<?php

class Tailwind_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        
        //     if($args->walker->has_children) {
            //         $output .= '<menu class="astronav-dropdown group" aria-expanded="false">';
            //     }
            
        if($args->walker->has_children) {
            $output .= "<li class='relative" .  implode(" ", $item->classes) . "'><menu class=\"astronav-dropdown group\" aria-expanded=\"false\">";
            $output .= '<button class="flex items-center gap-1 w-full lg:w-auto lg:px-3 py-2 text-gray-600 hover:text-gray-900">'. $item->title;

            if(!empty($args->show_caret)) {
                $output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-3 h-3 mt-0.5 group-open:rotate-180"> <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path> </svg>';
            }

            $output .= '</button>';
        } else {
            $output .= "<li class='relative" .  implode(" ", $item->classes) . "'>";
            if ($item->url && $item->url != '#') {
                $output .= '<a class="flex lg:px-3 py-2 space-x-1 items-center text-gray-600 hover:text-gray-900" href="' . $item->url . '">';
            }
    
            $output .= '<span>'. $item->title . '</span>';
            
            if ($item->url && $item->url != '#') {
                $output .= '</a>';
            }
            else {
                $output .= '</span>';
            }
        }
    }

    function start_lvl(&$output, $depth=0, $args=null) {
        $output .= '<div class="astronav-dropdown dropdown-toggle hidden" aria-expanded="false">
        <div class="lg:absolute w-full lg:w-48 z-10 lg:left-0 origin-top-left">
            <ul class="px-3 lg:py-2 lg:bg-white lg:rounded-md lg:shadow lg:border flex flex-col">';
    }

    function end_lvl(&$output, $depth=0, $args=null) {
        $output .= "</ul></div></div>";
    }
}