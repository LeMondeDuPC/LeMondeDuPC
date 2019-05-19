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

/* user/account.html.twig */
class __TwigTemplate_b9264f521a343d573d28f36b47b0471a5c99510dc7e5fa55b30487044a319ce1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "user/account.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Espace membre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo "Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les maitrisent. Retrouvez tout sur Le Monde Du PC !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.area"), "html", null, true);
        echo "</h1>
            </div>
        </header>
        ";
        // line 14
        if ((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context))) {
            // line 15
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 15, $this->source); })()), 'form_start');
            echo "
            <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.registration"), "html", null, true);
            echo "</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), 'widget');
            echo "
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'widget');
            echo "
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'widget');
            echo "
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 25, $this->source); })()), "create", [], "any", false, false, false, 25), 'widget');
            echo "</li>
                        <li>";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 26, $this->source); })()), "cancel", [], "any", false, false, false, 26), 'widget');
            echo "</li>
                    </ul>
                </div>
            </div>
            ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context) ? $context["formRegistration"] : (function () { throw new RuntimeError('Variable "formRegistration" does not exist.', 30, $this->source); })()), 'form_end');
            echo "
        ";
        } else {
            // line 32
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 32, $this->source); })()), 'form_start');
            echo "
            <h3>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.connection"), "html", null, true);
            echo "</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'widget');
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'widget');
            echo "
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 41, $this->source); })()), "connection", [], "any", false, false, false, 41), 'widget');
            echo "</li>
                        <li>";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 42, $this->source); })()), "cancel", [], "any", false, false, false, 42), 'widget');
            echo "</li>
                    </ul>
                </div>
            </div>
            ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLogin"]) || array_key_exists("formLogin", $context) ? $context["formLogin"] : (function () { throw new RuntimeError('Variable "formLogin" does not exist.', 46, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 48
        echo "    </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 48,  191 => 46,  184 => 42,  180 => 41,  173 => 37,  169 => 36,  163 => 33,  158 => 32,  153 => 30,  146 => 26,  142 => 25,  135 => 21,  131 => 20,  127 => 19,  121 => 16,  116 => 15,  114 => 14,  108 => 11,  103 => 8,  94 => 7,  76 => 5,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block title %}Espace membre{% endblock %}

{% block description %}Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les maitrisent. Retrouvez tout sur Le Monde Du PC !{% endblock %}

{% block main %}
    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h1>{{ 'user.area'|trans }}</h1>
            </div>
        </header>
        {% if formRegistration is defined %}
            {{ form_start(formRegistration) }}
            <h3>{{ 'user.registration'|trans }}</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    {{ form_widget(formRegistration.username) }}
                    {{ form_widget(formRegistration.email) }}
                    {{ form_widget(formRegistration.password) }}
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>{{ form_widget(formRegistration.create) }}</li>
                        <li>{{ form_widget(formRegistration.cancel) }}</li>
                    </ul>
                </div>
            </div>
            {{ form_end(formRegistration) }}
        {% else %}
            {{ form_start(formLogin) }}
            <h3>{{ 'user.connection'|trans }}</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    {{ form_widget(formLogin.username) }}
                    {{ form_widget(formLogin.password) }}
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>{{ form_widget(formLogin.connection) }}</li>
                        <li>{{ form_widget(formLogin.cancel) }}</li>
                    </ul>
                </div>
            </div>
            {{ form_end(formLogin) }}
        {% endif %}
    </article>
{% endblock %}", "user/account.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/user/account.html.twig");
    }
}
