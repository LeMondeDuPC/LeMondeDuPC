<?php

/* pages/home.html.twig */
class __TwigTemplate_a01084556e7a0406a92ddf2a80182cfa29ed127b5d8ea34820884c1ec9277014 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "pages/home.html.twig", 1);
        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'menu' => [$this, 'block_menu'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 4
        echo "    <ul id=\"nav\">
        <li><a href=\"#\">News</a></li>
        <li><a href=\"#\">Articles</a></li>
        <li><a href=\"#\">A propos</a></li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 12
        echo "    ";
        if (((isset($context["connected"]) || array_key_exists("connected", $context) ? $context["connected"] : (function () { throw new Twig_Error_Runtime('Variable "connected" does not exist.', 12, $this->source); })()) == true)) {
            // line 13
            echo "        <ul class=\"links\">
            <li><a href=\"#\">Mon profil</a></li>
            <li><a href=\"#\">Mes paramètres</a></li>
            <li><a href=\"#\">Messages privés</a></li>
        </ul>
        <ul class=\"actions fit\">
            <!--<li><a href=\"#\" class=\"button fit\">Connexion</a></li>
            <li><a href=\"#\" class=\"button fit\">Inscription</a></li>-->
            <li><a href=\"#\" class=\"button fit\">Deconnexion</a></li>
        </ul>
    ";
        } else {
            // line 24
            echo "        <ul class=\"actions fit\">
            <li><a href=\"#\" class=\"button fit\">Connexion</a></li>
            <li><a href=\"#\" class=\"button fit\">Inscription</a></li>
        </ul>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 32
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo "</a></h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\">";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "datecreated", []), "d/m/Y"), "html", null, true);
            echo "</time>
                    <a href=\"#\" class=\"author\"><span class=\"name\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "autor", []), "html", null, true);
            echo "</span>
                        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar.jpg"), "html", null, true);
            echo "\" alt=\"\"/></a>
                </div>
            </header>
            <a href=\"#\" class=\"image featured\"><img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg"), "html", null, true);
            echo "\" alt=\"\"/></a>
            <p>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", []), "html", null, true);
            echo "</p>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"#\" class=\"button large\">Poursuivre la lecture</a></li>
                </ul>
                <ul class=\"stats\">
                    <li><a href=\"#\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", []), "html", null, true);
            echo "</a></li>
                </ul>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 60
            echo "        <article class=\"mini-post\">
            <header>
                <h3><a href=\"#\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", []), "html", null, true);
            echo "</a></h3>
                <time class=\"published\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "datecreated", []), "d/m/Y"), "html", null, true);
            echo "</time>
                <a href=\"#\" class=\"author\"><span class=\"name\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "autor", []), "html", null, true);
            echo "</span>
                    <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar.jpg"), "html", null, true);
            echo "\" alt=\"\"/></a>
            </header>
            <a href=\"#\" class=\"image\"><img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg"), "html", null, true);
            echo "\" alt=\"\"/></a>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 67,  212 => 65,  208 => 64,  204 => 63,  200 => 62,  196 => 60,  191 => 59,  182 => 58,  163 => 51,  154 => 45,  150 => 44,  144 => 41,  140 => 40,  136 => 39,  130 => 36,  125 => 33,  120 => 32,  111 => 31,  96 => 24,  83 => 13,  80 => 12,  71 => 11,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/base.html.twig' %}

{% block nav %}
    <ul id=\"nav\">
        <li><a href=\"#\">News</a></li>
        <li><a href=\"#\">Articles</a></li>
        <li><a href=\"#\">A propos</a></li>
    </ul>
{% endblock %}

{% block menu %}
    {% if connected == true %}
        <ul class=\"links\">
            <li><a href=\"#\">Mon profil</a></li>
            <li><a href=\"#\">Mes paramètres</a></li>
            <li><a href=\"#\">Messages privés</a></li>
        </ul>
        <ul class=\"actions fit\">
            <!--<li><a href=\"#\" class=\"button fit\">Connexion</a></li>
            <li><a href=\"#\" class=\"button fit\">Inscription</a></li>-->
            <li><a href=\"#\" class=\"button fit\">Deconnexion</a></li>
        </ul>
    {% else %}
        <ul class=\"actions fit\">
            <li><a href=\"#\" class=\"button fit\">Connexion</a></li>
            <li><a href=\"#\" class=\"button fit\">Inscription</a></li>
        </ul>
    {% endif %}
{% endblock %}

{% block main %}
    {% for article in articles %}
        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2><a href=\"#\">{{ article.title }}</a></h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\">{{ article.datecreated|date(\"d/m/Y\") }}</time>
                    <a href=\"#\" class=\"author\"><span class=\"name\">{{ article.autor }}</span>
                        <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"\"/></a>
                </div>
            </header>
            <a href=\"#\" class=\"image featured\"><img src=\"{{ asset('assets/images/pic01.jpg') }}\" alt=\"\"/></a>
            <p>{{ article.description }}</p>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"#\" class=\"button large\">Poursuivre la lecture</a></li>
                </ul>
                <ul class=\"stats\">
                    <li><a href=\"#\">{{ article.category }}</a></li>
                </ul>
            </footer>
        </article>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% for new in news %}
        <article class=\"mini-post\">
            <header>
                <h3><a href=\"#\">{{ new.title }}</a></h3>
                <time class=\"published\">{{ new.datecreated|date(\"d/m/Y\") }}</time>
                <a href=\"#\" class=\"author\"><span class=\"name\">{{ new.autor }}</span>
                    <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"\"/></a>
            </header>
            <a href=\"#\" class=\"image\"><img src=\"{{ asset('assets/images/pic04.jpg') }}\" alt=\"\"/></a>
        </article>
    {% endfor %}
{% endblock %}", "pages/home.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/pages/home.html.twig");
    }
}
