<?php

/* @EasyAdmin/default/includes/_delete_form.html.twig */
class __TwigTemplate_83dbdd85353345345281eede33e063f6bf6e7a24c26f52bb760c9d41e2ebb993 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_delete_form.html.twig"));

        // line 1
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 2, $this->source); })()), 'form', ["action" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 3, $this->source); })()), "vars", []), "action", []) . ((twig_in_filter("?", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 3, $this->source); })()), "vars", []), "action", []))) ? ("&") : ("?"))) . "referer=") . (isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 3, $this->source); })())), "method" => "DELETE", "attr" => ["id" => "delete-form", "style" => "display: none"]]);
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 13, $this->source); })()), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.content", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 14, $this->source); })()), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 18, $this->source); })()), (isset($context["_translation_domain"]) || array_key_exists("_translation_domain", $context) ? $context["_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "_translation_domain" does not exist.', 18, $this->source); })())), "html", null, true);
        echo "</span>
                </button>

                ";
        // line 21
        if ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->isActionEnabled((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 21, $this->source); })()), "delete", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 21, $this->source); })()), "name", []))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionConfiguration((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 22, $this->source); })()), "delete", twig_get_attribute($this->env, $this->source, (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 22, $this->source); })()), "name", []));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 23, $this->source); })()), "target", []), "html", null, true);
            echo "\">
                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 24, $this->source); })()), "icon", [])) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["_delete_action"]) || array_key_exists("_delete_action", $context) ? $context["_delete_action"] : (function () { throw new Twig_Error_Runtime('Variable "_delete_action" does not exist.', 24, $this->source); })()), "icon", []), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        <span class=\"btn-label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.action", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 25, $this->source); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  74 => 25,  68 => 24,  63 => 23,  60 => 22,  58 => 21,  52 => 18,  45 => 14,  41 => 13,  33 => 7,  31 => 3,  30 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{
    form(delete_form, {
        action: delete_form.vars.action ~ ('?' in delete_form.vars.action ? '&' : '?') ~ 'referer=' ~ referer,
        method: 'DELETE',
        attr: { id: 'delete-form', style: 'display: none' }
    })
}}

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>{{ 'delete_modal.title'|trans(_trans_parameters, 'EasyAdminBundle') }}</h4>
                <p>{{ 'delete_modal.content'|trans(_trans_parameters, 'EasyAdminBundle') }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">{{ 'action.cancel'|trans(_trans_parameters, _translation_domain) }}</span>
                </button>

                {% if easyadmin_action_is_enabled(view, 'delete', _entity_config.name) %}
                    {% set _delete_action = easyadmin_get_action(view, 'delete', _entity_config.name) %}
                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"{{ _delete_action.target }}\">
                        {% if _delete_action.icon %}<i class=\"fa fa-{{ _delete_action.icon }}\"></i>{% endif %}
                        <span class=\"btn-label\">{{ 'delete_modal.action'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </button>
                {% endif %}
            </div>
        </div>
    </div>
</div>
", "@EasyAdmin/default/includes/_delete_form.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/includes/_delete_form.html.twig");
    }
}
