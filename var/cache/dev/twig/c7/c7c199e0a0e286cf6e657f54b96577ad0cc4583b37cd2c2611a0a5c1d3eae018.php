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

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_1e308b46e4b0d876121183061532f5b348ff044ad9ab7597a720e4abd2fa524c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 2
        if ((twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })())) || ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 2, $this->source); })()) == (twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "base_path", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "base_path", [], "any", false, false, false, 2), "")) : ("")), "/", "right") . "/")))) {
            // line 3
            echo "    ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity_config"]) || array_key_exists("entity_config", $context) ? $context["entity_config"] : (function () { throw new RuntimeError('Variable "entity_config" does not exist.', 3, $this->source); })()), "templates", [], "any", false, false, false, 3), "label_empty", [], "any", false, false, false, 3));
            echo "
";
        } else {
            // line 5
            echo "    <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
            echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new RuntimeError('Variable "uuid" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
        <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "\">
    </a>

    <div id=\"easyadmin-lightbox-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["uuid"]) || array_key_exists("uuid", $context) ? $context["uuid"] : (function () { throw new RuntimeError('Variable "uuid" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 10, $this->source); })())), "html", null, true);
            echo "\">
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  54 => 6,  49 => 5,  43 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# this check is needed because image fields can be optional #}
{% if value is empty or value == (field_options.base_path|default(''))|trim('/', side='right') ~ '/' %}
    {{ include(entity_config.templates.label_empty) }}
{% else %}
    <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
        <img src=\"{{ asset(value) }}\">
    </a>

    <div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
        <img src=\"{{ asset(value) }}\">
    </div>
{% endif %}
", "@EasyAdmin/default/field_image.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_image.html.twig");
    }
}
