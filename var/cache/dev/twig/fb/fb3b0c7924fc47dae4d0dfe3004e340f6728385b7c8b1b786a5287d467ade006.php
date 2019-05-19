<?php

/* @EasyAdmin/default/includes/_actions.html.twig */
class __TwigTemplate_f1cabc3b2047d0db57fdb80d627018ac8d870cd6c07db32e92c43617c46a5905 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == twig_get_attribute($this->env, $this->source, $context["action"], "name", []))) {
                // line 3
                echo "        ";
                $context["action_href"] = ((((twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_parameters"] ?? null), "referer", []), "")) : (""))) ? (urldecode(twig_get_attribute($this->env, $this->source, (isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 3, $this->source); })()), "referer", []))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 3, $this->source); })()), ["action" => "list"]))));
                // line 4
                echo "    ";
            } elseif (("method" == twig_get_attribute($this->env, $this->source, $context["action"], "type", []))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 5, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", []), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 5, $this->source); })())]));
                // line 6
                echo "    ";
            } elseif (("route" == twig_get_attribute($this->env, $this->source, $context["action"], "type", []))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["action"], "name", []), twig_array_merge((isset($context["request_parameters"]) || array_key_exists("request_parameters", $context) ? $context["request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "request_parameters" does not exist.', 7, $this->source); })()), ["action" => twig_get_attribute($this->env, $this->source, $context["action"], "name", []), "id" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 7, $this->source); })())]));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo (((((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context))) ? (_twig_default_filter((isset($context["is_dropdown"]) || array_key_exists("is_dropdown", $context) ? $context["is_dropdown"] : (function () { throw new Twig_Error_Runtime('Variable "is_dropdown" does not exist.', 10, $this->source); })()), false)) : (false))) ? ("dropdown-item") : (""));
            echo " ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "css_class", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "css_class", []), "")) : ("")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "title", []), "")) : ("")))) ? ("") : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", []), (isset($context["trans_parameters"]) || array_key_exists("trans_parameters", $context) ? $context["trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "trans_parameters" does not exist.', 10, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 10, $this->source); })())))), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["action_href"]) || array_key_exists("action_href", $context) ? $context["action_href"] : (function () { throw new Twig_Error_Runtime('Variable "action_href" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "target", []), "html", null, true);
            echo "\">";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", []), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "label", [])))) {
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "label", []), twig_array_merge((isset($context["trans_parameters"]) || array_key_exists("trans_parameters", $context) ? $context["trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "trans_parameters" does not exist.', 13, $this->source); })()), ["%entity_id%" => (isset($context["item_id"]) || array_key_exists("item_id", $context) ? $context["item_id"] : (function () { throw new Twig_Error_Runtime('Variable "item_id" does not exist.', 13, $this->source); })())]), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 13, $this->source); })())), "html", null, true);
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
        return array (  79 => 15,  76 => 13,  74 => 12,  68 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ is_dropdown|default(false) ? 'dropdown-item' }} {{ action.css_class|default('') }}\" title=\"{{ action.title|default('') is empty ? '' : action.title|trans(trans_parameters, translation_domain) }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "@EasyAdmin/default/includes/_actions.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_actions.html.twig");
    }
}
