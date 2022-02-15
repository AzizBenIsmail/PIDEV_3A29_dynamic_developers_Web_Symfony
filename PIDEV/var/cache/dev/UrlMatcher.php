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
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/excursion' => [[['_route' => 'excursion_index', '_controller' => 'App\\Controller\\ExcursionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/excursion/new' => [[['_route' => 'excursion_new', '_controller' => 'App\\Controller\\ExcursionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/excursion' => [[['_route' => 'reservation_excursion_index', '_controller' => 'App\\Controller\\ReservationExcursionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/excursion/new' => [[['_route' => 'reservation_excursion_new', '_controller' => 'App\\Controller\\ReservationExcursionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/restaurant' => [[['_route' => 'reservation_restaurant_index', '_controller' => 'App\\Controller\\ReservationRestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/restaurant/new' => [[['_route' => 'reservation_restaurant_new', '_controller' => 'App\\Controller\\ReservationRestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/voyage' => [[['_route' => 'reservation_voyage_index', '_controller' => 'App\\Controller\\ReservationVoyageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/voyage/new' => [[['_route' => 'reservation_voyage_new', '_controller' => 'App\\Controller\\ReservationVoyageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/restaurant' => [[['_route' => 'restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/restaurant/new' => [[['_route' => 'restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/voyage' => [[['_route' => 'voyage_index', '_controller' => 'App\\Controller\\VoyageController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/c(?'
                    .'|lient/([^/]++)(?'
                        .'|(*:191)'
                        .'|/edit(*:204)'
                        .'|(*:212)'
                    .')'
                    .'|ommentaire/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                .')'
                .'|/excursion/([^/]++)(?'
                    .'|(*:296)'
                    .'|/edit(*:309)'
                    .'|(*:317)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:353)'
                        .'|/edit(*:366)'
                        .'|(*:374)'
                    .')'
                    .'|s(?'
                        .'|ervation/(?'
                            .'|excursion/([^/]++)(?'
                                .'|(*:420)'
                                .'|/edit(*:433)'
                                .'|(*:441)'
                            .')'
                            .'|restaurant/([^/]++)(?'
                                .'|(*:472)'
                                .'|/edit(*:485)'
                                .'|(*:493)'
                            .')'
                            .'|voyage/([^/]++)(?'
                                .'|(*:520)'
                                .'|/edit(*:533)'
                                .'|(*:541)'
                            .')'
                        .')'
                        .'|taurant/([^/]++)(?'
                            .'|(*:570)'
                            .'|/edit(*:583)'
                            .'|(*:591)'
                        .')'
                    .')'
                .')'
                .'|/voyage/([^/]++)(?'
                    .'|(*:621)'
                    .'|/edit(*:634)'
                    .'|(*:642)'
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
        191 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'excursion_show', '_controller' => 'App\\Controller\\ExcursionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'excursion_edit', '_controller' => 'App\\Controller\\ExcursionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'excursion_delete', '_controller' => 'App\\Controller\\ExcursionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        353 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        366 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        374 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'reservation_excursion_show', '_controller' => 'App\\Controller\\ReservationExcursionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        433 => [[['_route' => 'reservation_excursion_edit', '_controller' => 'App\\Controller\\ReservationExcursionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        441 => [[['_route' => 'reservation_excursion_delete', '_controller' => 'App\\Controller\\ReservationExcursionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        472 => [[['_route' => 'reservation_restaurant_show', '_controller' => 'App\\Controller\\ReservationRestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        485 => [[['_route' => 'reservation_restaurant_edit', '_controller' => 'App\\Controller\\ReservationRestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        493 => [[['_route' => 'reservation_restaurant_delete', '_controller' => 'App\\Controller\\ReservationRestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        520 => [[['_route' => 'reservation_voyage_show', '_controller' => 'App\\Controller\\ReservationVoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'reservation_voyage_edit', '_controller' => 'App\\Controller\\ReservationVoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        541 => [[['_route' => 'reservation_voyage_delete', '_controller' => 'App\\Controller\\ReservationVoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        570 => [[['_route' => 'restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        583 => [[['_route' => 'restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        591 => [[['_route' => 'restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        621 => [[['_route' => 'voyage_show', '_controller' => 'App\\Controller\\VoyageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        634 => [[['_route' => 'voyage_edit', '_controller' => 'App\\Controller\\VoyageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        642 => [
            [['_route' => 'voyage_delete', '_controller' => 'App\\Controller\\VoyageController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
