<?php

/* /blog/filter.html.twig */
class __TwigTemplate_c810dab3aed11ec082d61f0e085963f35851ef19109604c205cd39ab97c1b5a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/blog/filter.html.twig", 1);
        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/blog/filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/blog/filter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []), "html", null, true);
            echo "</a></h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_createdAt", []), "d/m/Y"), "html", null, true);
            echo "</time>
                    ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "p_lastUpdate", []) != null)) {
                // line 13
                echo "                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_lastUpdate", []), "d/m/Y"), "html", null, true);
                echo "</time>
                    ";
            }
            // line 15
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_authorId", [])]), "html", null, true);
            echo "\" class=\"author\">
                        <span class=\"name\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "u_username", []), "html", null, true);
            echo "</span>
                        <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.pic"), "html", null, true);
            echo "\"/>
                    </a>
                    <span class=\"icon fa-heart\">28</span>
                    <span class=\"icon fa-comment\">128</span>
                </div>
            </header>
            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []))]), "html", null, true);
            echo "\" class=\"image featured\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.pic"), "html", null, true);
            echo "\"/>
            </a>
            <div>
                <p>
                    ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_description", []), "html", null, true);
            echo "
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []))]), "html", null, true);
            echo "\" class=\"button large\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.reading"), "html", null, true);
            echo "</a></li>
                </ul>
                <ul class=\"stats\">
                    ";
            // line 36
            $context["tags"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_tags_id", []), ",");
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new Twig_Error_Runtime('Variable "tags" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 38
                echo "                        <li class=\"icon fa-tag\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts", ["tag" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter($context["tag"])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                </ul>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/blog/filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  139 => 38,  134 => 37,  132 => 36,  124 => 33,  116 => 28,  107 => 24,  103 => 23,  92 => 17,  88 => 16,  83 => 15,  77 => 13,  75 => 12,  71 => 11,  63 => 8,  58 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/base.html.twig' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2><a href=\"{{ path('blog_post', {'id': post.p_id, 'slug': post.p_title|slugify}) }}\">{{ post.p_title }}</a></h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>{{ post.p_createdAt|date(\"d/m/Y\") }}</time>
                    {% if post.p_lastUpdate != null %}
                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>{{ post.p_lastUpdate|date(\"d/m/Y\") }}</time>
                    {% endif %}
                    <a href=\"{{ path('user_profile', {'id': post.p_authorId}) }}\" class=\"author\">
                        <span class=\"name\">{{ post.u_username }}</span>
                        <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"{{ 'user.pic'|trans }}\"/>
                    </a>
                    <span class=\"icon fa-heart\">28</span>
                    <span class=\"icon fa-comment\">128</span>
                </div>
            </header>
            <a href=\"{{ path('blog_post', {'id': post.p_id, 'slug': post.p_title|slugify}) }}\" class=\"image featured\">
                <img src=\"{{ asset('assets/images/pic01.jpg') }}\" alt=\"{{ 'post.pic'|trans }}\"/>
            </a>
            <div>
                <p>
                    {{ post.p_description }}
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"{{ path('blog_post', {'id': post.p_id, 'slug': post.p_title|slugify}) }}\" class=\"button large\">{{ 'post.reading'|trans }}</a></li>
                </ul>
                <ul class=\"stats\">
                    {% set tags = post.p_tags_id|split(',') %}
                    {% for tag in tags %}
                        <li class=\"icon fa-tag\"><a href=\"{{ path('blog_posts', {'tag': tag|slugify}) }}\">{{ tag }}</a></li>
                    {% endfor %}
                </ul>
            </footer>
        </article>
    {% endfor %}
{% endblock %}", "/blog/filter.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/blog/filter.html.twig");
    }
}
