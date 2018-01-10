<?php

if(! function_exists('page_title')) { // permet d'afficher le titre celon la page

    function page_title($title) { 

        $base_title = config('app.name').' Communauté';

        // if($title === '') {
        //     return $base_title;
        // } else {
        //     return $title . ' | ' . $base_title ;
        // }
        //
        // ou 

        return empty($title) ? $base_title : $title . ' | ' . $base_title; // on test si $title est vide si oui (on renvoie juste $base_title) si non( on renvoie $title + $base_title)
    }

}

if(! function_exists('set_active_route')) { // permet de definir l'onglet dans la navbar active 

    function set_active_route($route) {

        return Route::is($route) ? 'active' : '';
    }

}