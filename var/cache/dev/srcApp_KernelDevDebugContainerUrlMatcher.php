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
            '/a-propos' => [[['_route' => 'blog_about', '_controller' => 'App\\Controller\\BlogController::showPost', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/membre/inscription' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/membre/connexion' => [[['_route' => 'user_connection', '_controller' => 'App\\Controller\\UserController::loginUser', '_locale' => 'fr'], null, null, null, false, false, null]],
            '/admin/index' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/(\\w+)?(*:14)'
                    .'|/(\\d+)\\-([^/]++)(*:37)'
                    .'|/membre/([^/]++)(?'
                        .'|(*:63)'
                        .'|/modifier(*:79)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:118)'
                        .'|wdt/([^/]++)(*:138)'
                        .'|profiler(?'
                            .'|(*:157)'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|search/results(*:195)'
                                    .'|router(*:209)'
                                    .'|exception(?'
                                        .'|(*:229)'
                                        .'|\\.css(*:242)'
                                    .')'
                                .')'
                                .'|(*:252)'
                            .')'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            14 => [[['_route' => 'blog_posts', 'tag' => 'all', '_controller' => 'App\\Controller\\BlogController::showPosts'], ['tag'], null, null, false, true, null]],
            37 => [[['_route' => 'blog_post', 'id' => null, '_controller' => 'App\\Controller\\BlogController::showPost'], ['id', 'slug'], null, null, false, true, null]],
            63 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::showUser', '_locale' => 'fr'], ['id'], null, null, false, true, null]],
            79 => [[['_route' => 'user_params', '_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'fr'], ['id'], null, null, false, false, null]],
            118 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            138 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            157 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
            195 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            209 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            229 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            242 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            252 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
