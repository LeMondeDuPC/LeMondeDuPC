<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/administration' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
            '/a-propos' => [[['_route' => 'blog_about', '_controller' => 'App\\Controller\\BlogController::showPost', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/about' => [[['_route' => 'blog_about', '_controller' => 'App\\Controller\\BlogController::showPost'], null, null, null, false, false, null]],
            '/inscription' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\UserController::newUser'], null, null, null, false, false, null]],
            '/connexion' => [[['_route' => 'user_connection', '_controller' => 'App\\Controller\\UserController::loginUser', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/connection' => [[['_route' => 'user_connection', '_controller' => 'App\\Controller\\UserController::loginUser'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|list(?'
                            .'|e/([^/]++)(*:34)'
                            .'|/([^/]++)(*:50)'
                        .')'
                        .'|a(?'
                            .'|jouter/([^/]++)(*:77)'
                            .'|dd/([^/]++)(*:95)'
                        .')'
                        .'|modifier/([^/\\-]++)\\-([^/]++)(*:132)'
                        .'|edit/([^/\\-]++)\\-([^/]++)(*:165)'
                    .')'
                    .'|/(\\d+)\\-([^/]++)(*:190)'
                    .'|/categorie/([^/]++)(*:217)'
                    .'|/tag/([^/]++)(*:238)'
                    .'|/membre/([^/]++)(?'
                        .'|(*:265)'
                        .'|/modifier(*:282)'
                    .')'
                    .'|/user/([^/]++)(?'
                        .'|(*:308)'
                        .'|/edit(*:321)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:361)'
                        .'|wdt/([^/]++)(*:381)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:427)'
                                .'|router(*:441)'
                                .'|exception(?'
                                    .'|(*:461)'
                                    .'|\\.css(*:474)'
                                .')'
                            .')'
                            .'|(*:484)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            34 => [[['_route' => 'admin_lists', '_controller' => 'App\\Controller\\AdminController::showLists', '_locale' => 'fr'], ['data'], null, null, false, true, null]],
            50 => [[['_route' => 'admin_lists', '_controller' => 'App\\Controller\\AdminController::showLists'], ['data'], null, null, false, true, null]],
            77 => [[['_route' => 'admin_add', '_controller' => 'App\\Controller\\AdminController::add', '_locale' => 'fr'], ['type'], null, null, false, true, null]],
            95 => [[['_route' => 'admin_add', '_controller' => 'App\\Controller\\AdminController::add'], ['type'], null, null, false, true, null]],
            132 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::editData', '_locale' => 'fr'], ['type', 'id'], null, null, false, true, null]],
            165 => [[['_route' => 'admin_edit', '_controller' => 'App\\Controller\\AdminController::editData'], ['type', 'id'], null, null, false, true, null]],
            190 => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::showPost'], ['id', 'slug'], null, null, false, true, null]],
            217 => [[['_route' => 'blog_tag', '_controller' => 'App\\Controller\\BlogController::showPosts', '_locale' => 'fr'], ['tag'], null, null, false, true, null]],
            238 => [[['_route' => 'blog_tag', '_controller' => 'App\\Controller\\BlogController::showPosts'], ['tag'], null, null, false, true, null]],
            265 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::showUser', '_locale' => 'fr'], ['id'], null, null, false, true, null]],
            282 => [[['_route' => 'user_params', '_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
            308 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::showUser'], ['id'], null, null, false, true, null]],
            321 => [[['_route' => 'user_params', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, false, null]],
            361 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            381 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            427 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            441 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            461 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            474 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            484 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
