<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin_index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/administration']], [], []],
        'admin_lists.fr' => [['data'], ['_controller' => 'App\\Controller\\AdminController::showLists', '_locale' => 'fr', '_canonical_route' => 'admin_lists'], [], [['variable', '/', '[^/]++', 'data', true], ['text', '/admin/liste']], [], []],
        'admin_lists' => [['data'], ['_controller' => 'App\\Controller\\AdminController::showLists'], [], [['variable', '/', '[^/]++', 'data', true], ['text', '/admin/list']], [], []],
        'admin_add.fr' => [['type'], ['_controller' => 'App\\Controller\\AdminController::add', '_locale' => 'fr', '_canonical_route' => 'admin_add'], [], [['variable', '/', '[^/]++', 'type', true], ['text', '/admin/ajouter']], [], []],
        'admin_add' => [['type'], ['_controller' => 'App\\Controller\\AdminController::add'], [], [['variable', '/', '[^/]++', 'type', true], ['text', '/admin/add']], [], []],
        'admin_edit.fr' => [['type', 'id'], ['_controller' => 'App\\Controller\\AdminController::editData', '_locale' => 'fr', '_canonical_route' => 'admin_edit'], [], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[^/\\-]++', 'type', true], ['text', '/admin/modifier']], [], []],
        'admin_edit' => [['type', 'id'], ['_controller' => 'App\\Controller\\AdminController::editData'], [], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[^/\\-]++', 'type', true], ['text', '/admin/edit']], [], []],
        'blog_index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/']], [], []],
        'blog_about.fr' => [[], ['_controller' => 'App\\Controller\\BlogController::showPost', '_locale' => 'fr', '_canonical_route' => 'blog_about'], [], [['text', '/a-propos']], [], []],
        'blog_about' => [[], ['_controller' => 'App\\Controller\\BlogController::showPost'], [], [['text', '/about']], [], []],
        'blog_post' => [['id', 'slug'], ['_controller' => 'App\\Controller\\BlogController::showPost'], ['id' => '\\d+'], [['variable', '-', '[^/]++', 'slug', true], ['variable', '/', '\\d+', 'id', true]], [], []],
        'blog_tag.fr' => [['tag'], ['_controller' => 'App\\Controller\\BlogController::showPosts', '_locale' => 'fr', '_canonical_route' => 'blog_tag'], [], [['variable', '/', '[^/]++', 'tag', true], ['text', '/categorie']], [], []],
        'blog_tag' => [['tag'], ['_controller' => 'App\\Controller\\BlogController::showPosts'], [], [['variable', '/', '[^/]++', 'tag', true], ['text', '/tag']], [], []],
        'user_registration.fr' => [[], ['_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'fr', '_canonical_route' => 'user_registration'], [], [['text', '/inscription']], [], []],
        'user_registration' => [[], ['_controller' => 'App\\Controller\\UserController::newUser'], [], [['text', '/registration']], [], []],
        'user_connection.fr' => [[], ['_controller' => 'App\\Controller\\UserController::loginUser', '_locale' => 'fr', '_canonical_route' => 'user_connection'], [], [['text', '/connexion']], [], []],
        'user_connection' => [[], ['_controller' => 'App\\Controller\\UserController::loginUser'], [], [['text', '/connection']], [], []],
        'user_profile.fr' => [['id'], ['_controller' => 'App\\Controller\\UserController::showUser', '_locale' => 'fr', '_canonical_route' => 'user_profile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/membre']], [], []],
        'user_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::showUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        'user_params.fr' => [['id'], ['_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'fr', '_canonical_route' => 'user_params'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/membre']], [], []],
        'user_params' => [['id'], ['_controller' => 'App\\Controller\\UserController::editUser'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
