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
        '/service' => [[['_route' => 'listerservice', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/service/lister' => [[['_route' => 'listeremployer', '_controller' => 'App\\Controller\\ServiceController::ListerEmployer'], null, null, null, false, false, null]],
        '/service/newemployer' => [[['_route' => 'addemployer', '_controller' => 'App\\Controller\\ServiceController::CreerEditEmployer'], null, null, null, false, false, null]],
        '/service/newservice' => [[['_route' => 'addservice', '_controller' => 'App\\Controller\\ServiceController::CreerService'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\ServiceController::Accueil'], null, null, null, false, false, null]],
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
                .'|/service/([^/]++)/(?'
                    .'|edit(?'
                        .'|employer(*:205)'
                        .'|service(*:220)'
                    .')'
                    .'|del(*:232)'
                    .'|lister/service/employer(*:263)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        205 => [[['_route' => 'editemployer', '_controller' => 'App\\Controller\\ServiceController::CreerEditEmployer'], ['id'], null, null, false, false, null]],
        220 => [[['_route' => 'editservice', '_controller' => 'App\\Controller\\ServiceController::CreerService'], ['id'], null, null, false, false, null]],
        232 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ServiceController::Supprimer'], ['id'], null, null, false, false, null]],
        263 => [
            [['_route' => 'listerserviceemployer', '_controller' => 'App\\Controller\\ServiceController::listerServiceEmployer'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
