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

/* @EasyAdmin/default/includes/_actions.html.twig */
class __TwigTemplate_ecbddd59f6872cccc9224241044181b79edbff507dbbdae2f573cd5a7268bda6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 2))) {
                // line 3
                echo "        ";
                $context["action_href"] = ((((twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", false, false, false, 3), "")) : (""))) ? (urldecode(twig_get_attribute($this->env, $this->source, (isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new RuntimeError('Variable "request_parameters" does not exist.', 3, $this->source); })()), "referer", [], "any", false, false, false, 3))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new RuntimeError('Variable "request_parameters" does not exist.', 3, $this->source); })()), ["action" => "list"]))));
                // line 4
                echo "    ";
            } elseif (("method" == twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 4))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new RuntimeError('Variable "request_parameters" does not exist.', 5, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 5), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 5, $this->source); })())]));
                // line 6
                echo "    ";
            } elseif (("route" == twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 6))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 7), twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new RuntimeError('Variable "request_parameters" does not exist.', 7, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 7), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 7, $this->source); })())]));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo (((((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context))) ? (_twig_default_filter((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new RuntimeError('Variable "is_dropdown" does not exist.', 10, $this->source); })()), false)) : (false))) ? ("dropdown-item") : (""));
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 10), "")) : ("")))) ? (print ("")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 10), (isset($context["trans_parameters"]) || array_key_exists("trans_parameters", $context) ? $context["trans_parameters"] : (function () { throw new RuntimeError('Variable "trans_parameters" does not exist.', 10, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })())), "html", null, true))));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) || array_key_exists("action_href", $context) ? $context["action_href"] : (function () { throw new RuntimeError('Variable "action_href" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "target", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 11)) {
                echo "<i class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 11), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 12)))) {
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 13), twig_array_merge((isset($context["trans_parameters"]) || array_key_exists("trans_parameters", $context) ? $context["trans_parameters"] : (function () { throw new RuntimeError('Variable "trans_parameters" does not exist.', 13, $this->source); })()), ["%entity_id%" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new RuntimeError('Variable "item_id" does not exist.', 13, $this->source); })())]), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 13, $this->source); })())), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  88 => 13,  86 => 12,  80 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ is_dropdown|default(false) ? 'dropdown-item' }} {{ action.css_class|default('') }}\" title=\"{{ action.title|default('') is empty ? '' : action.title|trans(trans_parameters, translation_domain) }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-fw fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "@EasyAdmin/default/includes/_actions.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_actions.html.twig");
    }
}
