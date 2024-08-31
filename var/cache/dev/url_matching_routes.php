<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chef/task' => [[['_route' => 'app_chef_task', '_controller' => 'App\\Controller\\ChefTaskController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/competance' => [[['_route' => 'app_competance_index', '_controller' => 'App\\Controller\\CompetanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competance/new' => [[['_route' => 'app_competance_new', '_controller' => 'App\\Controller\\CompetanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/domaine' => [[['_route' => 'app_domaine_index', '_controller' => 'App\\Controller\\DomaineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/domaine/new' => [[['_route' => 'app_domaine_new', '_controller' => 'App\\Controller\\DomaineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/etat' => [[['_route' => 'app_etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat/new' => [[['_route' => 'app_etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fonction' => [[['_route' => 'app_fonction_index', '_controller' => 'App\\Controller\\FonctionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fonction/new' => [[['_route' => 'app_fonction_new', '_controller' => 'App\\Controller\\FonctionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_root', '_controller' => 'App\\Controller\\HomeController::root'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/user-notification' => [[['_route' => 'app_notification_index', '_controller' => 'App\\Controller\\NotificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user-notification/new' => [[['_route' => 'app_notification_new', '_controller' => 'App\\Controller\\NotificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/priorite' => [[['_route' => 'app_priorite_index', '_controller' => 'App\\Controller\\PrioriteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/priorite/new' => [[['_route' => 'app_priorite_new', '_controller' => 'App\\Controller\\PrioriteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/projet' => [[['_route' => 'app_projet_index', '_controller' => 'App\\Controller\\ProjetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/projet/new' => [[['_route' => 'app_projet_new', '_controller' => 'App\\Controller\\ProjetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register-client' => [[['_route' => 'app_register_client', '_controller' => 'App\\Controller\\RegistrationController::registerClient'], null, null, null, false, false, null]],
        '/register-employe' => [[['_route' => 'app_register_employe', '_controller' => 'App\\Controller\\RegistrationController::registerEmploye'], null, null, null, false, false, null]],
        '/ressource' => [[['_route' => 'app_ressource_index', '_controller' => 'App\\Controller\\RessourceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ressource/new' => [[['_route' => 'app_ressource_new', '_controller' => 'App\\Controller\\RessourceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/role' => [[['_route' => 'app_role_index', '_controller' => 'App\\Controller\\RoleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/role/new' => [[['_route' => 'app_role_new', '_controller' => 'App\\Controller\\RoleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sprint' => [[['_route' => 'app_sprint_index', '_controller' => 'App\\Controller\\SprintController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sprint/new' => [[['_route' => 'app_sprint_new', '_controller' => 'App\\Controller\\SprintController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tache' => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tache/new' => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/home-user/projet' => [[['_route' => 'app_user_project', '_controller' => 'App\\Controller\\UserProjectController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/c(?'
                    .'|lient/([^/]++)(?'
                        .'|(*:64)'
                        .'|/edit(*:76)'
                        .'|(*:83)'
                    .')'
                    .'|ompetance/([^/]++)(?'
                        .'|(*:112)'
                        .'|/edit(*:125)'
                        .'|(*:133)'
                    .')'
                .')'
                .'|/domaine/([^/]++)(?'
                    .'|(*:163)'
                    .'|/edit(*:176)'
                    .'|(*:184)'
                .')'
                .'|/e(?'
                    .'|mploye/([^/]++)(?'
                        .'|(*:216)'
                        .'|/edit(*:229)'
                        .'|(*:237)'
                    .')'
                    .'|quipe/([^/]++)(?'
                        .'|(*:263)'
                        .'|/edit(*:276)'
                        .'|(*:284)'
                    .')'
                    .'|tat/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                        .'|(*:329)'
                    .')'
                .')'
                .'|/f(?'
                    .'|acture/([^/]++)(?'
                        .'|(*:362)'
                        .'|/edit(*:375)'
                        .'|(*:383)'
                    .')'
                    .'|onction/([^/]++)(?'
                        .'|(*:411)'
                        .'|/edit(*:424)'
                        .'|(*:432)'
                    .')'
                .')'
                .'|/user\\-notification/(?'
                    .'|notification/read/([^/]++)(*:491)'
                    .'|([^/]++)(?'
                        .'|(*:510)'
                        .'|/edit(*:523)'
                        .'|(*:531)'
                    .')'
                .')'
                .'|/pr(?'
                    .'|iorite/([^/]++)(?'
                        .'|(*:565)'
                        .'|/edit(*:578)'
                        .'|(*:586)'
                    .')'
                    .'|ojet/([^/]++)(?'
                        .'|(*:611)'
                        .'|/edit(*:624)'
                        .'|(*:632)'
                    .')'
                .')'
                .'|/r(?'
                    .'|essource/([^/]++)(?'
                        .'|(*:667)'
                        .'|/edit(*:680)'
                        .'|(*:688)'
                    .')'
                    .'|ole/([^/]++)(?'
                        .'|(*:712)'
                        .'|/edit(*:725)'
                        .'|(*:733)'
                    .')'
                .')'
                .'|/sprint/([^/]++)(?'
                    .'|(*:762)'
                    .'|/edit(*:775)'
                    .'|(*:783)'
                .')'
                .'|/tache/(?'
                    .'|([^/]++)(*:810)'
                    .'|tache\\-chef(*:829)'
                    .'|([^/]++)(?'
                        .'|/edit(*:853)'
                        .'|(*:861)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        112 => [[['_route' => 'app_competance_show', '_controller' => 'App\\Controller\\CompetanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_competance_edit', '_controller' => 'App\\Controller\\CompetanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        133 => [[['_route' => 'app_competance_delete', '_controller' => 'App\\Controller\\CompetanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_domaine_show', '_controller' => 'App\\Controller\\DomaineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'app_domaine_edit', '_controller' => 'App\\Controller\\DomaineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_domaine_delete', '_controller' => 'App\\Controller\\DomaineController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        229 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'app_etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        329 => [[['_route' => 'app_etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_fonction_show', '_controller' => 'App\\Controller\\FonctionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'app_fonction_edit', '_controller' => 'App\\Controller\\FonctionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        432 => [[['_route' => 'app_fonction_delete', '_controller' => 'App\\Controller\\FonctionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'notification_read', '_controller' => 'App\\Controller\\NotificationController::markAsRead'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_notification_show', '_controller' => 'App\\Controller\\NotificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'app_notification_edit', '_controller' => 'App\\Controller\\NotificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'app_notification_delete', '_controller' => 'App\\Controller\\NotificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_priorite_show', '_controller' => 'App\\Controller\\PrioriteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_priorite_edit', '_controller' => 'App\\Controller\\PrioriteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'app_priorite_delete', '_controller' => 'App\\Controller\\PrioriteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'app_projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        624 => [[['_route' => 'app_projet_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        632 => [[['_route' => 'app_projet_delete', '_controller' => 'App\\Controller\\ProjetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        667 => [[['_route' => 'app_ressource_show', '_controller' => 'App\\Controller\\RessourceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        680 => [[['_route' => 'app_ressource_edit', '_controller' => 'App\\Controller\\RessourceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        688 => [[['_route' => 'app_ressource_delete', '_controller' => 'App\\Controller\\RessourceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        712 => [[['_route' => 'app_role_show', '_controller' => 'App\\Controller\\RoleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        725 => [[['_route' => 'app_role_edit', '_controller' => 'App\\Controller\\RoleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        733 => [[['_route' => 'app_role_delete', '_controller' => 'App\\Controller\\RoleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        762 => [[['_route' => 'app_sprint_show', '_controller' => 'App\\Controller\\SprintController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        775 => [[['_route' => 'app_sprint_edit', '_controller' => 'App\\Controller\\SprintController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        783 => [[['_route' => 'app_sprint_delete', '_controller' => 'App\\Controller\\SprintController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        810 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_tache_chef', '_controller' => 'App\\Controller\\TacheController::myTask'], [], null, null, false, false, null]],
        853 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        861 => [
            [['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
