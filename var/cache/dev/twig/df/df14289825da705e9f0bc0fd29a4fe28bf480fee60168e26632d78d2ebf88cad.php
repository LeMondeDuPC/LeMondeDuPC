<?php

/* /blog/posts.html.twig */
class __TwigTemplate_0bb2994a292a7bc50189ae4b31db0620f9e45a89cf32cb727ee86a7ade5c46fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/blog/posts.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/blog/posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/blog/posts.html.twig"));

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
                    <h2>
                        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "title", []))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</a>
                    </h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", []), "d/m/Y"), "html", null, true);
            echo "</time>
                    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["post"], "updatedAt", []) != null)) {
                // line 15
                echo "                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "lastUpdate", []), "d/m/Y"), "html", null, true);
                echo "
                        </time>
                    ";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "authorId", [])]), "html", null, true);
            echo "\" class=\"author\">
                        <span class=\"name\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "authorId", []), "html", null, true);
            echo "</span>
                        <img src=\"";
            // line 20
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
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "title", []))]), "html", null, true);
            echo "\" class=\"image featured\">
                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.pic"), "html", null, true);
            echo "\"/>
            </a>
            <div>
                <p>
                    ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", []), "html", null, true);
            echo "
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "title", []))]), "html", null, true);
            echo "\"
                           class=\"button large\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.reading"), "html", null, true);
            echo "</a></li>
                </ul>
                <ul class=\"stats\">
                        <li class=\"icon fa-tag\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts", ["tag" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter("tag")]), "html", null, true);
            echo "\">tag</a>
                        </li>
                </ul>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        if (twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 46, $this->source); })()))) {
            // line 47
            echo "        <article class=\"post\">
            <div>
                <p>
                    ";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.no_result"), "html", null, true);
            echo "
                </p>
            </div>
        </article>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/blog/posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 50,  152 => 47,  149 => 46,  137 => 40,  131 => 37,  127 => 36,  119 => 31,  110 => 27,  106 => 26,  95 => 20,  91 => 19,  86 => 18,  79 => 15,  77 => 14,  73 => 13,  64 => 9,  58 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/base.html.twig' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2>
                        <a href=\"{{ path('blog_post', {'id': post.id, 'slug': post.title|slugify}) }}\">{{ post.title }}</a>
                    </h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>{{ post.createdAt|date(\"d/m/Y\") }}</time>
                    {% if post.updatedAt != null %}
                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>{{ post.lastUpdate|date(\"d/m/Y\") }}
                        </time>
                    {% endif %}
                    <a href=\"{{ path('user_profile', {'id': post.authorId}) }}\" class=\"author\">
                        <span class=\"name\">{{ post.authorId }}</span>
                        <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"{{ 'user.pic'|trans }}\"/>
                    </a>
                    <span class=\"icon fa-heart\">28</span>
                    <span class=\"icon fa-comment\">128</span>
                </div>
            </header>
            <a href=\"{{ path('blog_post', {'id': post.id, 'slug': post.title|slugify}) }}\" class=\"image featured\">
                <img src=\"{{ asset('assets/images/pic01.jpg') }}\" alt=\"{{ 'post.pic'|trans }}\"/>
            </a>
            <div>
                <p>
                    {{ post.description }}
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"{{ path('blog_post', {'id': post.id, 'slug': post.title|slugify}) }}\"
                           class=\"button large\">{{ 'post.reading'|trans }}</a></li>
                </ul>
                <ul class=\"stats\">
                        <li class=\"icon fa-tag\"><a href=\"{{ path('blog_posts', {'tag': 'tag'|slugify}) }}\">tag</a>
                        </li>
                </ul>
            </footer>
        </article>
    {% endfor %}
    {% if posts is empty %}
        <article class=\"post\">
            <div>
                <p>
                    {{ 'app.no_result'|trans }}
                </p>
            </div>
        </article>
    {% endif %}
{% endblock %}", "/blog/posts.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/blog/posts.html.twig");
    }
}
