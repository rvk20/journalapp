<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/attendance' => [[['_route' => 'app_attendance_student', '_controller' => 'App\\Controller\\AttendanceController::index'], null, null, null, false, false, null]],
        '/doctrine' => [[['_route' => 'doctrine', '_controller' => 'App\\Controller\\DoctrineController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_student', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/grade' => [[['_route' => 'app_grade', '_controller' => 'App\\Controller\\GradeController::index'], null, null, null, false, false, null]],
        '/index' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/lesson' => [[['_route' => 'lesson', '_controller' => 'App\\Controller\\LessonController::index'], null, null, null, false, false, null]],
        '/mysqli' => [[['_route' => 'mysqli', '_controller' => 'App\\Controller\\MySQLIController::index'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'app_note_student', '_controller' => 'App\\Controller\\NoteController::index'], null, null, null, false, false, null]],
        '/pdo' => [[['_route' => 'pdo', '_controller' => 'App\\Controller\\PDOController::index'], null, null, null, false, false, null]],
        '/chpass' => [[['_route' => 'app_password', '_controller' => 'App\\Controller\\PasswordController::index'], null, null, null, false, false, null]],
        '/plan' => [[['_route' => 'app_plan', '_controller' => 'App\\Controller\\PlanController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/settings' => [[['_route' => 'app_settings', '_controller' => 'App\\Controller\\SettingsController::index'], null, null, null, false, false, null]],
        '/testing' => [[['_route' => 'tqtt', '_controller' => 'App\\Controller\\TestingController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/lesson/([^/]++)(*:23)'
                .'|/subject/([^/]++)(?'
                    .'|(*:50)'
                    .'|/(?'
                        .'|at/([^/]++)(*:72)'
                        .'|nt/([^/]++)(*:90)'
                        .'|et/([^/]++)(*:108)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:149)'
                    .'|wdt/([^/]++)(*:169)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:215)'
                            .'|router(*:229)'
                            .'|exception(?'
                                .'|(*:249)'
                                .'|\\.css(*:262)'
                            .')'
                        .')'
                        .'|(*:272)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'lessonplan', '_controller' => 'App\\Controller\\LessonController::plan'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'app_subject', '_controller' => 'App\\Controller\\SubjectController::index'], ['id'], null, null, false, true, null]],
        72 => [[['_route' => 'app_attendance', '_controller' => 'App\\Controller\\SubjectController::attendance'], ['id', 'sid'], null, null, false, true, null]],
        90 => [[['_route' => 'app_note', '_controller' => 'App\\Controller\\SubjectController::note'], ['id', 'sid'], null, null, false, true, null]],
        108 => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\SubjectController::event'], ['id', 'sid'], null, null, false, true, null]],
        149 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        169 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        215 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        229 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        249 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        262 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        272 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
