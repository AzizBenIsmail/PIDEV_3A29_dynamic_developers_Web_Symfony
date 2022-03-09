<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\BackController::index'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/excursion' => [[['_route' => 'excursion_index', '_controller' => 'App\\Controller\\ExcursionController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/excursion/Trie' => [[['_route' => 'excursion_indexTrie', '_controller' => 'App\\Controller\\ExcursionController::indexTrie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/excursion/Culturelle' => [[['_route' => 'excursion_indexCulturelle', '_controller' => 'App\\Controller\\ExcursionController::indexCulturelle'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/excursion/Historique' => [[['_route' => 'excursion_indexHistorique', '_controller' => 'App\\Controller\\ExcursionController::indexHistorique'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/excursion/new' => [[['_route' => 'excursion_new', '_controller' => 'App\\Controller\\ExcursionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/post' => [[['_route' => 'newsfeed', '_controller' => 'App\\Controller\\PostController::newsfeed'], null, null, null, true, false, null]],
        '/post/newpost' => [[['_route' => 'post_new', '_controller' => 'App\\Controller\\PostController::newpost'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/excursion' => [[['_route' => 'reservation_excursion_index', '_controller' => 'App\\Controller\\ReservationExcursionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/excursion/new' => [[['_route' => 'reservation_excursion_new', '_controller' => 'App\\Controller\\ReservationExcursionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/restaurant' => [[['_route' => 'reservation_restaurant_index', '_controller' => 'App\\Controller\\ReservationRestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/restaurant/new' => [[['_route' => 'reservation_restaurant_new', '_controller' => 'App\\Controller\\ReservationRestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/voyage' => [[['_route' => 'reservation_voyage_index', '_controller' => 'App\\Controller\\ReservationVoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/voyage/PDF_Reserver' => [[['_route' => 'PDF_Reserver', '_controller' => 'App\\Controller\\ReservationVoyageController::PDF_Reserver'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/order_By_Date_desc' => [[['_route' => 'order_By_Date_desc', '_controller' => 'App\\Controller\\ReservationVoyageController::order_By_Date_desc'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/order_By_Date_ASC' => [[['_route' => 'order_By_Date_ASC', '_controller' => 'App\\Controller\\ReservationVoyageController::order_By_Date_ASC'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Enfants' => [[['_route' => 'Enfants', '_controller' => 'App\\Controller\\ReservationVoyageController::Enfants'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Adolescents' => [[['_route' => 'Adolescents', '_controller' => 'App\\Controller\\ReservationVoyageController::Adolescents'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Adultes' => [[['_route' => 'Adultes', '_controller' => 'App\\Controller\\ReservationVoyageController::Adultes'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Aines' => [[['_route' => 'Aines', '_controller' => 'App\\Controller\\ReservationVoyageController::Aines'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Economy' => [[['_route' => 'Economy', '_controller' => 'App\\Controller\\ReservationVoyageController::Economy'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/Business' => [[['_route' => 'Business', '_controller' => 'App\\Controller\\ReservationVoyageController::Business'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/First' => [[['_route' => 'First', '_controller' => 'App\\Controller\\ReservationVoyageController::First'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/voyage/new' => [[['_route' => 'reservation_voyage_new', '_controller' => 'App\\Controller\\ReservationVoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant' => [[['_route' => 'restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/restaurant/pdf' => [[['_route' => 'PDF_Restaurant', '_controller' => 'App\\Controller\\RestaurantController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant/orderByNom' => [[['_route' => 'orderByNom', '_controller' => 'App\\Controller\\RestaurantController::orderByNom'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant/orderByAdresse' => [[['_route' => 'orderByAdresse', '_controller' => 'App\\Controller\\RestaurantController::orderByAdresse'], null, ['GET' => 0], null, false, false, null]],
        '/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/oubli_pass' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\SecurityController::index'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/voyage_index' => [[['_route' => 'voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/pdf' => [[['_route' => 'PDF_Voyage', '_controller' => 'App\\Controller\\VoyageController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/AllVoyageJSON' => [[['_route' => 'AllVoyageJSON', '_controller' => 'App\\Controller\\VoyageController::AllVoyageJSON'], null, null, null, false, false, null]],
        '/voyage/AddVoyageJSON' => [[['_route' => 'AddVoyageJSON', '_controller' => 'App\\Controller\\VoyageController::AddVoyageJSON'], null, null, null, false, false, null]],
        '/voyage/DateNow' => [[['_route' => 'DateNow', '_controller' => 'App\\Controller\\VoyageController::DateNow'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/order_By_Dest' => [[['_route' => 'order_By_Dest', '_controller' => 'App\\Controller\\VoyageController::order_By_Dest'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/order_By_Nom' => [[['_route' => 'order_By_Nom', '_controller' => 'App\\Controller\\VoyageController::order_By_Nom'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/order_By_Date' => [[['_route' => 'order_By_Date', '_controller' => 'App\\Controller\\VoyageController::order_By_Date'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/order_By_Prix' => [[['_route' => 'order_By_Prix', '_controller' => 'App\\Controller\\VoyageController::order_By_Prix'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Continent_Afrique' => [[['_route' => 'Continent_Afrique', '_controller' => 'App\\Controller\\VoyageController::Continent_Afrique'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Continent_Europe' => [[['_route' => 'Continent_Europe', '_controller' => 'App\\Controller\\VoyageController::Continent_Europe'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Continent_Asie' => [[['_route' => 'Continent_Asie', '_controller' => 'App\\Controller\\VoyageController::Continent_Asie'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Continent_Amerique' => [[['_route' => 'Continent_Amerique', '_controller' => 'App\\Controller\\VoyageController::Continent_Amerique'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Disponible' => [[['_route' => 'Disponible', '_controller' => 'App\\Controller\\VoyageController::Disponible'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Non_Disponible' => [[['_route' => 'Non_Disponible', '_controller' => 'App\\Controller\\VoyageController::Non_Disponible'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/Bientot_Disponible' => [[['_route' => 'Bientot_Disponible', '_controller' => 'App\\Controller\\VoyageController::Bientot_Disponible'], null, ['GET' => 0], null, false, false, null]],
        '/voyage/listVoyageWithSearch' => [[['_route' => 'listVoyageWithSearch', '_controller' => 'App\\Controller\\VoyageController::listVoyageWithSearch'], null, null, null, false, false, null]],
        '/voyage/listVoyageWithSearchPrix' => [[['_route' => 'listVoyageWithSearchPrix', '_controller' => 'App\\Controller\\VoyageController::listVoyageWithSearchPrix'], null, null, null, false, false, null]],
        '/voyage/listVoyageWithSearchdate' => [[['_route' => 'listVoyageWithSearchdate', '_controller' => 'App\\Controller\\VoyageController::listVoyageWithSearchdate'], null, null, null, false, false, null]],
        '/voyage/new' => [[['_route' => 'voyage_new', '_controller' => 'App\\Controller\\VoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/commentaire/([^/]++)(?'
                    .'|(*:193)'
                    .'|/edit(*:206)'
                    .'|(*:214)'
                .')'
                .'|/excursion/(?'
                    .'|([^/]++)(?'
                        .'|(*:248)'
                        .'|/edit(*:261)'
                        .'|(*:269)'
                    .')'
                    .'|search(*:284)'
                .')'
                .'|/post/(?'
                    .'|([^/]++)(*:310)'
                    .'|edit/([^/]++)(*:331)'
                    .'|delete/([^/]++)(*:354)'
                    .'|([^/]++)/(?'
                        .'|like(*:378)'
                        .'|hashtag(*:393)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:430)'
                        .'|/edit(*:443)'
                        .'|(*:451)'
                    .')'
                    .'|s(?'
                        .'|e(?'
                            .'|rvation/(?'
                                .'|excursion/([^/]++)(?'
                                    .'|(*:500)'
                                    .'|/edit(*:513)'
                                    .'|(*:521)'
                                .')'
                                .'|restaurant/([^/]++)(?'
                                    .'|(*:552)'
                                    .'|/edit(*:565)'
                                    .'|(*:573)'
                                .')'
                                .'|voyage/([^/]++)(?'
                                    .'|(*:600)'
                                    .'|/edit(*:613)'
                                    .'|(*:621)'
                                .')'
                            .')'
                            .'|t_pass/([^/]++)(*:646)'
                        .')'
                        .'|taurant/([^/]++)(?'
                            .'|(*:674)'
                            .'|/edit(*:687)'
                            .'|(*:695)'
                        .')'
                    .')'
                .')'
                .'|/activation/([^/]++)(*:726)'
                .'|/([^/]++)(?'
                    .'|(*:746)'
                    .'|/edit(*:759)'
                    .'|(*:767)'
                .')'
                .'|/voyage/(?'
                    .'|UpdateVoyageJSON/([^/]++)(*:812)'
                    .'|DeleteVoyageJSON/([^/]++)(*:845)'
                    .'|([^/]++)(?'
                        .'|(*:864)'
                        .'|/edit(*:877)'
                        .'|(*:885)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        248 => [[['_route' => 'excursion_show', '_controller' => 'App\\Controller\\ExcursionController::show'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'excursion_edit', '_controller' => 'App\\Controller\\ExcursionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'excursion_delete', '_controller' => 'App\\Controller\\ExcursionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [[['_route' => 'exsearch', '_controller' => 'App\\Controller\\ExcursionController::searchPlanajax'], [], null, null, false, false, null]],
        310 => [[['_route' => 'userpost', '_controller' => 'App\\Controller\\PostController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        331 => [[['_route' => 'post_edit', '_controller' => 'App\\Controller\\PostController::edit'], ['id'], null, null, false, true, null]],
        354 => [[['_route' => 'post_delete', '_controller' => 'App\\Controller\\PostController::Delete_Post'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'post_like', '_controller' => 'App\\Controller\\PostController::like'], ['id'], null, null, false, false, null]],
        393 => [[['_route' => 'post_hashtag', '_controller' => 'App\\Controller\\PostController::hashtagpost'], ['id'], null, null, false, false, null]],
        430 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        500 => [[['_route' => 'reservation_excursion_show', '_controller' => 'App\\Controller\\ReservationExcursionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        513 => [[['_route' => 'reservation_excursion_edit', '_controller' => 'App\\Controller\\ReservationExcursionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        521 => [[['_route' => 'reservation_excursion_delete', '_controller' => 'App\\Controller\\ReservationExcursionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        552 => [[['_route' => 'reservation_restaurant_show', '_controller' => 'App\\Controller\\ReservationRestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        565 => [[['_route' => 'reservation_restaurant_edit', '_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        573 => [[['_route' => 'reservation_restaurant_delete', '_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        600 => [[['_route' => 'reservation_voyage_show', '_controller' => 'App\\Controller\\ReservationVoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        613 => [[['_route' => 'reservation_voyage_edit', '_controller' => 'App\\Controller\\ReservationVoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [[['_route' => 'reservation_voyage_delete', '_controller' => 'App\\Controller\\ReservationVoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        674 => [[['_route' => 'restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        687 => [[['_route' => 'restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        726 => [[['_route' => 'activation', '_controller' => 'App\\Controller\\SecurityController::activation'], ['token'], null, null, false, true, null]],
        746 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\SecurityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        759 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\SecurityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        767 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\SecurityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        812 => [[['_route' => 'UpdateVoyageJSON', '_controller' => 'App\\Controller\\VoyageController::UpdateVoyageJSON'], ['id'], null, null, false, true, null]],
        845 => [[['_route' => 'DeleteVoyageJSON', '_controller' => 'App\\Controller\\VoyageController::DeleteVoyageJSON'], ['id'], null, null, false, true, null]],
        864 => [[['_route' => 'voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        877 => [[['_route' => 'voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        885 => [
            [['_route' => 'voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
