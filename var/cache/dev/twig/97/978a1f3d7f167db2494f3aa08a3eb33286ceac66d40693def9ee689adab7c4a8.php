<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_1c799903a81a206e1e1aca4621c652c3014f0c70f16a644222326c0bdce47af9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'global_actions' => [$this, 'block_global_actions'],
            'search_action' => [$this, 'block_search_action'],
            'search_form' => [$this, 'block_search_form'],
            'new_action' => [$this, 'block_new_action'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'item_actions' => [$this, 'block_item_actions'],
            'delete_form' => [$this, 'block_delete_form'],
            'content_footer' => [$this, 'block_content_footer'],
            'paginator' => [$this, 'block_paginator'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 5, $this->source); })()), "templates", [], "any", false, false, false, 5), "layout", [], "any", false, false, false, 5), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "get", [0 => "entity"], "method", false, false, false, 1));
        // line 2
        $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] = twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 2, $this->source); })()), "translation_domain", [], "any", false, false, false, 2);
        // line 3
        $context["_trans_parameters"] = ["%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3), [],         // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })()))];
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "query", [], "any", false, false, false, 7), "all", [], "any", false, false, false, 7), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 7, $this->source); })()), [])) : ([]))), ["action" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "action"], "method", false, false, false, 8), "entity" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "menuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "menuIndex"], "method", false, false, false, 10), "submenuIndex" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", [0 => "submenuIndex"], "method", false, false, false, 11), "sortField" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "sortField", 1 => ""], "method", false, false, false, 12), "sortDirection" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "sortDirection", 1 => "DESC"], "method", false, false, false, 13), "page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "page", 1 => 1], "method", false, false, false, 14), "referer" => null]);
        // line 18
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "action"], "method", false, false, false, 18))) {
            // line 19
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 19, $this->source); })()), ["query" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["app"] ?? null), "request", [], "any", false, true, false, 20), "get", [0 => "query"], "method", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 20), "get", [0 => "query"], "method", false, false, false, 20), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 21), "sort", [], "any", false, true, false, 21), "field", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 21), "sort", [], "any", false, true, false, 21), "field", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "sortField", 1 => ""], "method", false, false, false, 21))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", [0 => "sortField", 1 => ""], "method", false, false, false, 21))), "sortDirection" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 22), "sort", [], "any", false, true, false, 22), "direction", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 22), "sort", [], "any", false, true, false, 22), "direction", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", [0 => "sortDirection", 1 => "DESC"], "method", false, false, false, 22))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", [0 => "sortDirection", 1 => "DESC"], "method", false, false, false, 22)))]);
        }
        // line 26
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 26, $this->source); })()), ["referer" => twig_urlencode_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 26, $this->source); })())))]);
        // line 27
        $context["_has_batch_actions"] = ((isset($context["batch_form"]) || array_key_exists("batch_form", $context)) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "batch_actions", [], "any", false, false, false, 27)) > 0));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 29
    public function block_body_id($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_body_class($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30))), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_content_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 33
        echo "    ";
        ob_start(function () { return ''; });
        // line 34
        echo "        ";
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "action"], "method", false, false, false, 34))) {
            // line 35
            echo "            ";
            $context["_default_title"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("search.page_title", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "nbResults", [], "any", false, false, false, 35), [], "EasyAdminBundle");
            // line 36
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 36), "title", [], "any", true, true, false, 36)) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 36, $this->source); })()), "search", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 36, $this->source); })()), "nbResults", [], "any", false, false, false, 36), [],             // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })()))) : (            // line 36
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 36, $this->source); })())));
            echo "
        ";
        } else {
            // line 38
            echo "            ";
            $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 38, $this->source); })()), "EasyAdminBundle");
            // line 39
            echo "            ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "list", [], "any", false, true, false, 39), "title", [], "any", true, true, false, 39)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 39, $this->source); })()), "list", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 39, $this->source); })()),             // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })()))) : (            // line 39
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new RuntimeError('Variable "_default_title" does not exist.', 39, $this->source); })())));
            echo "
        ";
        }
        // line 41
        echo "    ";
        $___internal_957b3cffcf85f7f8399384f223c2ac1e2946cf83a68247d8bc85393d3d439673_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo twig_spaceless($___internal_957b3cffcf85f7f8399384f223c2ac1e2946cf83a68247d8bc85393d3d439673_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_global_actions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_actions"));

        // line 45
        echo "    ";
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45))) {
            // line 46
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46));
            // line 47
            echo "
        ";
            // line 48
            $this->displayBlock('search_action', $context, $blocks);
            // line 67
            echo "    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69))) {
            // line 70
            echo "        ";
            $context["_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70));
            // line 71
            echo "        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 79
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_search_action($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_action"));

        // line 49
        echo "            <div class=\"form-action form-action-search ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "\">
                <form method=\"get\" action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">
                    ";
        // line 51
        $this->displayBlock('search_form', $context, $blocks);
        // line 64
        echo "                </form>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_search_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_form"));

        // line 52
        echo "                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 53, $this->source); })()), "entity", [], "any", false, false, false, 53), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 54), "sort", [], "any", false, true, false, 54), "field", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 54), "sort", [], "any", false, true, false, 54), "field", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 54, $this->source); })()), "sortField", [], "any", false, false, false, 54))) : (twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 54, $this->source); })()), "sortField", [], "any", false, false, false, 54))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 55), "sort", [], "any", false, true, false, 55), "direction", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "search", [], "any", false, true, false, 55), "sort", [], "any", false, true, false, 55), "direction", [], "any", false, false, false, 55), twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 55, $this->source); })()), "sortDirection", [], "any", false, false, false, 55))) : (twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 55, $this->source); })()), "sortDirection", [], "any", false, false, false, 55))), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 56, $this->source); })()), "menuIndex", [], "any", false, false, false, 56), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 57, $this->source); })()), "submenuIndex", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 60), "get", [0 => "query"], "method", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 60), "get", [0 => "query"], "method", false, false, false, 60), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", false, false, false, 60), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 60, $this->source); })()),         // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })())), "html", null, true);
        // line 60
        echo "\">
                            </div>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_new_action($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "new_action"));

        // line 72
        echo "            <div class=\"button-action\">
                <a class=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "css_class", [], "any", false, false, false, 73), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 73, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73)])), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 73, $this->source); })()), "target", [], "any", false, false, false, 73), "html", null, true);
        echo "\">
                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 74, $this->source); })()), "icon", [], "any", false, false, false, 74)) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 74, $this->source); })()), "icon", [], "any", false, false, false, 74), "html", null, true);
            echo "\"></i>";
        }
        // line 75
        echo "                    ";
        (((twig_get_attribute($this->env, $this->source, ($context["_action"] ?? null), "label", [], "any", true, true, false, 75) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 75, $this->source); })()), "label", [], "any", false, false, false, 75)))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new RuntimeError('Variable "_action" does not exist.', 75, $this->source); })()), "label", [], "any", false, false, false, 75), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 75, $this->source); })()),         // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })())), "html", null, true))) : (print ("")));
        // line 75
        echo "
                </a>
            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_batch_actions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 83
        echo "    ";
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "        <div class=\"batch-actions\" style=\"display: none\">
            ";
            // line 85
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 85, $this->source); })()), $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.form_theme"), true);
            // line 86
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["batch_form"]) || array_key_exists("batch_form", $context) ? $context["batch_form"] : (function () { throw new RuntimeError('Variable "batch_form" does not exist.', 86, $this->source); })()), 'form');
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 92
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "
    ";
        // line 93
        $this->displayBlock("batch_actions", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 97
        echo "    ";
        $context["_list_item_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 97, $this->source); })()), "name", [], "any", false, false, false, 97));
        // line 98
        echo "
    <table class=\"table datagrid\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 180
        echo "        </tbody>
    </table>

    ";
        // line 183
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_table_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        echo "            <tr>
                ";
        // line 103
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                ";
        }
        // line 106
        echo "
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 108
            echo "                    ";
            $context["isSortingField"] = ((twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 108) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "get", [0 => "sortField"], "method", false, false, false, 108)) || (("association" == twig_get_attribute($this->env, $this->source, $context["metadata"], "type", [], "any", false, false, false, 108)) && (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "get", [0 => "sortField"], "method", false, false, false, 108)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 108) . ".")) && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))));
            // line 109
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 109, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "get", [0 => "sortDirection"], "method", false, false, false, 109) == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 110
            echo "                    ";
            $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 110), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 110, $this->source); })()),             // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })()));
            // line 111
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 111, $this->source); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 111, $this->source); })()) == "DESC")) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 112
            echo "
                    <th class=\"";
            // line 113
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 113, $this->source); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["metadata"], "virtual", [], "any", false, false, false, 113)) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 113)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 113), "html", null, true);
            echo "\" ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, $context["metadata"], "sortable", [], "any", false, false, false, 114)) {
                // line 115
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 115, $this->source); })()), ["page" => 1, "sortField" => twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 115), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new RuntimeError('Variable "nextSortDirection" does not exist.', 115, $this->source); })())])), "html", null, true);
                echo "\">
                                ";
                // line 116
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 116, $this->source); })());
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new RuntimeError('Variable "_column_icon" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\"></i>
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new RuntimeError('Variable "_column_label" does not exist.', 119, $this->source); })());
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 124, $this->source); })())) > 0)) {
            // line 125
            echo "                    <th ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 125, $this->source); })()), "list", [], "any", false, false, false, 125), "collapse_actions", [], "any", false, false, false, 125)) {
                echo "width=\"10px\"";
            }
            echo " ";
            echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
            echo ">
                        <span class=\"sr-only\">";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 126, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 135, $this->source); })()), "currentPageResults", [], "any", false, false, false, 135));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->source, $context["item"], twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 137, $this->source); })()), "primary_key_field_name", [], "any", false, false, false, 137), [], "any", false, false, false, 137));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 139
            if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 139, $this->source); })())) {
                // line 140
                echo "                        <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 140, $this->source); })()), "html", null, true);
                echo "\"></td>
                    ";
            }
            // line 142
            echo "
                    ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 143, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 144
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->source, $context["metadata"], "property", [], "any", false, false, false, 144) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "get", [0 => "sortField"], "method", false, false, false, 144));
                // line 145
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 145)) ? (twig_get_attribute($this->env, $this->source, $context["metadata"], "label", [], "any", false, false, false, 145)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 145, $this->source); })()),                 // line 2
(isset($context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"]) || array_key_exists("__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1", $context) ? $context["__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1"] : (function () { throw new RuntimeError('Variable "__internal_9a66815d0e6dc69234692334eab0b860f82f969310d4d71e6fc0ca04c7270cf1" does not exist.', 2, $this->source); })()));
                // line 146
                echo "
                        <td class=\"";
                // line 147
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new RuntimeError('Variable "isSortingField" does not exist.', 147, $this->source); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "dataType", [], "any", false, false, false, 147)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metadata"], "css_class", [], "any", false, false, false, 147), "html", null, true);
                echo "\" ";
                echo (($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getBackendConfiguration("design.rtl")) ? ("dir=\"rtl\"") : (""));
                echo ">
                            ";
                // line 148
                echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 148, $this->source); })()), "name", [], "any", false, false, false, 148), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
                    ";
            // line 152
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 152, $this->source); })())) > 0)) {
                // line 153
                echo "                        ";
                $context["_column_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 153, $this->source); })()), "EasyAdminBundle");
                // line 154
                echo "                        <td class=\"actions\">
                        ";
                // line 155
                $this->displayBlock('item_actions', $context, $blocks);
                // line 169
                echo "                        </td>
                    ";
            }
            // line 171
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 173
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 174
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 174, $this->source); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 174, $this->source); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 174, $this->source); })())))), "html", null, true);
            echo "\">
                        ";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 175, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_item_actions($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item_actions"));

        // line 156
        echo "                            ";
        $context["_actions_template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 156, $this->source); })()), "list", [], "any", false, false, false, 156), "collapse_actions", [], "any", false, false, false, 156)) ? ("@EasyAdmin/default/includes/_actions_dropdown.html.twig") : ("@EasyAdmin/default/includes/_actions.html.twig"));
        // line 160
        echo "                            ";
        echo twig_include($this->env, $context, (isset($context["_actions_template"]) || array_key_exists("_actions_template", $context) ? $context["_actions_template"] : (function () { throw new RuntimeError('Variable "_actions_template" does not exist.', 160, $this->source); })()), ["actions" =>         // line 161
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new RuntimeError('Variable "_list_item_actions" does not exist.', 161, $this->source); })()), "request_parameters" =>         // line 162
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 162, $this->source); })()), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 163
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 163, $this->source); })()), "translation_domain", [], "any", false, false, false, 163), "trans_parameters" =>         // line 164
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 164, $this->source); })()), "item_id" =>         // line 165
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new RuntimeError('Variable "_item_id" does not exist.', 165, $this->source); })()), "item" =>         // line 166
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 166, $this->source); })())], false);
        // line 167
        echo "
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 183
    public function block_delete_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 184
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 184, $this->source); })()), "currentPage", [], "any", false, false, false, 184) == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 184, $this->source); })()), "nbPages", [], "any", false, false, false, 184)) && (1 != twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 184, $this->source); })()), "currentPage", [], "any", false, false, false, 184))) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 184, $this->source); })()), "currentPageResults", [], "any", false, false, false, 184))))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 185
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "query", [], "any", false, false, false, 185), ["page" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "query", [], "any", false, false, false, 185), "get", [0 => "page"], "method", false, false, false, 185) - 1)]))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 186
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "requestUri", [], "any", false, false, false, 186)));
        // line 188
        echo "
        ";
        // line 189
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", ["view" => "list", "referer" => twig_urlencode_filter(        // line 191
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 191, $this->source); })())), "delete_form" =>         // line 192
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new RuntimeError('Variable "delete_form_template" does not exist.', 192, $this->source); })()), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 193
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 193, $this->source); })()), "translation_domain", [], "any", false, false, false, 193), "_trans_parameters" =>         // line 194
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new RuntimeError('Variable "_trans_parameters" does not exist.', 194, $this->source); })()), "_entity_config" =>         // line 195
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 195, $this->source); })())], false);
        // line 196
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 201
        echo "    ";
        $this->displayBlock('paginator', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_paginator($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator"));

        // line 202
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 202, $this->source); })()), "templates", [], "any", false, false, false, 202), "paginator", [], "any", false, false, false, 202));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_body_javascript($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 207
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", ["action" => "edit", "entity" => twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new RuntimeError('Variable "_entity_config" does not exist.', 219, $this->source); })()), "name", [], "any", false, false, false, 219), "view" => "list"]);
        echo "\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            ";
        // line 250
        if ((isset($context["_has_batch_actions"]) || array_key_exists("_has_batch_actions", $context) ? $context["_has_batch_actions"] : (function () { throw new RuntimeError('Variable "_has_batch_actions" does not exist.', 250, $this->source); })())) {
            // line 251
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            ";
        }
        // line 287
        echo "        });
    </script>

    ";
        // line 290
        if (("search" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 290, $this->source); })()), "request", [], "any", false, false, false, 290), "get", [0 => "action"], "method", false, false, false, 290))) {
            // line 291
            echo "        <script type=\"text/javascript\">
            const _search_query = \"";
            // line 292
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 292), "get", [0 => "query"], "method", true, true, false, 292)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 292), "get", [0 => "query"], "method", false, false, false, 292), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  928 => 292,  925 => 291,  923 => 290,  918 => 287,  880 => 251,  878 => 250,  844 => 219,  828 => 207,  819 => 206,  806 => 202,  787 => 201,  778 => 200,  767 => 196,  765 => 195,  764 => 194,  763 => 193,  762 => 192,  761 => 191,  760 => 189,  757 => 188,  755 => 186,  754 => 185,  752 => 184,  743 => 183,  732 => 167,  730 => 166,  729 => 165,  728 => 164,  727 => 163,  726 => 162,  725 => 161,  723 => 160,  720 => 156,  711 => 155,  701 => 179,  691 => 175,  687 => 174,  684 => 173,  670 => 171,  666 => 169,  664 => 155,  661 => 154,  658 => 153,  656 => 152,  653 => 151,  644 => 148,  634 => 147,  631 => 146,  629 => 2,  627 => 145,  624 => 144,  620 => 143,  617 => 142,  611 => 140,  609 => 139,  604 => 138,  601 => 137,  599 => 136,  580 => 135,  571 => 134,  560 => 129,  554 => 126,  545 => 125,  543 => 124,  540 => 123,  533 => 121,  527 => 119,  519 => 116,  514 => 115,  512 => 114,  500 => 113,  497 => 112,  494 => 111,  492 => 2,  490 => 110,  487 => 109,  484 => 108,  480 => 107,  477 => 106,  473 => 104,  471 => 103,  468 => 102,  459 => 101,  449 => 183,  444 => 180,  442 => 134,  437 => 131,  435 => 101,  430 => 98,  427 => 97,  418 => 96,  406 => 93,  401 => 92,  392 => 91,  377 => 86,  375 => 85,  372 => 84,  369 => 83,  360 => 82,  347 => 75,  345 => 2,  343 => 75,  337 => 74,  329 => 73,  326 => 72,  317 => 71,  304 => 60,  302 => 2,  299 => 60,  293 => 57,  289 => 56,  285 => 55,  281 => 54,  277 => 53,  274 => 52,  265 => 51,  253 => 64,  251 => 51,  247 => 50,  242 => 49,  233 => 48,  222 => 79,  219 => 71,  216 => 70,  214 => 69,  211 => 68,  208 => 67,  206 => 48,  203 => 47,  200 => 46,  197 => 45,  188 => 44,  178 => 33,  175 => 41,  170 => 39,  169 => 2,  167 => 39,  164 => 38,  159 => 36,  158 => 2,  156 => 36,  153 => 35,  150 => 34,  147 => 33,  138 => 32,  120 => 30,  102 => 29,  92 => 5,  90 => 27,  88 => 26,  85 => 22,  84 => 21,  83 => 20,  82 => 19,  80 => 18,  78 => 14,  77 => 13,  76 => 12,  75 => 11,  74 => 10,  73 => 9,  72 => 8,  71 => 7,  69 => 2,  68 => 3,  67 => 2,  66 => 3,  64 => 2,  62 => 1,  50 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = app.request.query.all|merge(_request_parameters|default({}))|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1),
    referer: null
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}
{% set _has_batch_actions = batch_form is defined and batch_form.vars.batch_actions|length > 0 %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
    {% apply spaceless %}
        {% if 'search' == app.request.get('action') %}
            {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
            {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
        {% else %}
            {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
            {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
        {% endif %}
    {% endapply %}
{% endblock %}

{% block global_actions %}
    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

        {% block search_action %}
            <div class=\"form-action form-action-search {{ _action.css_class|default('') }}\">
                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                    {% block search_form %}
                        <input type=\"hidden\" name=\"action\" value=\"search\">
                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                        <div class=\"form-group\">
                            <div class=\"form-widget\">
                                <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\" placeholder=\"{{ _action.label|default('action.search')|trans(_trans_parameters) }}\">
                            </div>
                        </div>
                    {% endblock %}
                </form>
            </div>
        {% endblock search_action %}
    {% endif %}

    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
        {% block new_action %}
            <div class=\"button-action\">
                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                    {% if _action.icon %}<i class=\"fa fa-fw fa-{{ _action.icon }}\"></i>{% endif %}
                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                </a>
            </div>
        {% endblock new_action %}
    {% endif %}
{% endblock global_actions %}

{% block batch_actions %}
    {% if _has_batch_actions %}
        <div class=\"batch-actions\" style=\"display: none\">
            {% form_theme batch_form with easyadmin_config('design.form_theme') %}
            {{ form(batch_form) }}
        </div>
    {% endif %}
{% endblock batch_actions %}

{% block content_header %}
    {{ parent() }}
    {{ block('batch_actions') }}
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <table class=\"table datagrid\">
        <thead>
        {% block table_head %}
            <tr>
                {% if _has_batch_actions %}
                    <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                {% endif %}

                {% for field, metadata in fields %}
                    {% set isSortingField = (metadata.property == app.request.get('sortField')) or ('association' == metadata.type and app.request.get('sortField') starts with metadata.property ~ '.') %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = metadata.label|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-arrow-up' : 'fa-arrow-down') : 'fa-sort' %}

                    <th class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                {{ _column_label|raw }} <i class=\"fa fa-fw {{ _column_icon }}\"></i>
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th {% if _entity_config.list.collapse_actions %}width=\"10px\"{% endif %} {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                        <span class=\"sr-only\">{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% if _has_batch_actions %}
                        <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"{{ _item_id }}\"></td>
                    {% endif %}

                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\" {{ easyadmin_config('design.rtl') ? 'dir=\"rtl\"' }}>
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td class=\"actions\">
                        {% block item_actions %}
                            {% set _actions_template = _entity_config.list.collapse_actions
                                ? '@EasyAdmin/default/includes/_actions_dropdown.html.twig'
                                : '@EasyAdmin/default/includes/_actions.html.twig'
                            %}
                            {{ include(_actions_template, {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id,
                                item: item
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults|length
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block content_footer %}
    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            const toggles = document.querySelectorAll('.checkbox-switch input[type=\"checkbox\"]');
            for (i = 0; i < toggles.length; i++) {
                toggles[i].addEventListener('change', function () {
                    const toggle = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;
                    const propertyName = this.closest('.checkbox-switch').dataset.propertyname;

                    const toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                        + \"&id=\" + this.closest('tr').dataset.id
                        + \"&property=\" + propertyName
                        + \"&newValue=\" + newValue.toString();

                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        toggle.checked = oldValue;
                        toggle.disabled = true;
                        toggle.closest('.checkbox-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });

            {% if _has_batch_actions %}
            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });
            {% endif %}
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            const _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
