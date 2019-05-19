<?php

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_12f117bf420ee228d03e4eb36cccad867cdfecff910f0934d3e25c3e94a854d0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 3, $this->source); })()), ["referer" => null]);
        // line 4
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("paginator.results", twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 7, $this->source); })()), "nbResults", []), [], "EasyAdminBundle");
        echo "
    </div>

    <div class=\"pager pagination list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 10, $this->source); })()), "hasPreviousPage", [])) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 10, $this->source); })()), "hasNextPage", [])) ? ("last-page") : (""));
        echo "\">
        <a class=\"btn btn-secondary ";
        // line 11
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 11, $this->source); })()), "hasPreviousPage", [])) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 12
        echo twig_escape_filter($this->env, (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 12, $this->source); })()), "hasPreviousPage", [])) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_paginator_request_parameters" does not exist.', 12, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 12, $this->source); })()), "previousPage", [])])))), "html", null, true);
        echo "\">
            <i class=\"fa fa-angle-left\"></i> <span class=\"btn-label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
        </a>

        <a class=\"btn btn-secondary ";
        // line 16
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 16, $this->source); })()), "hasNextPage", [])) ? ("disabled") : (""));
        echo "\"
           href=\"";
        // line 17
        echo twig_escape_filter($this->env, (( !twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 17, $this->source); })()), "hasNextPage", [])) ? ("#") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_paginator_request_parameters" does not exist.', 17, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 17, $this->source); })()), "nextPage", [])])))), "html", null, true);
        echo "\">
            <span class=\"btn-label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  65 => 16,  59 => 13,  55 => 12,  51 => 11,  45 => 10,  39 => 7,  34 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {{ 'paginator.results'|transchoice(paginator.nbResults)|raw }}
    </div>

    <div class=\"pager pagination list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
        <a class=\"btn btn-secondary {{ not paginator.hasPreviousPage ? 'disabled' }}\"
           href=\"{{ not paginator.hasPreviousPage ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
            <i class=\"fa fa-angle-left\"></i> <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
        </a>

        <a class=\"btn btn-secondary {{ not paginator.hasNextPage ? 'disabled' }}\"
           href=\"{{ not paginator.hasNextPage ? '#' : path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
            <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span> <i class=\"fa fa-angle-right\"></i>
        </a>
    </div>
</div>
", "@EasyAdmin/default/paginator.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
