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

/* /blog/posts.html.twig */
class __TwigTemplate_c6faf1d46dc50e888943093ceeefcf4d20fe4b0d263d790b9023da3df282b231 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/blog/posts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/blog/posts.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "/blog/posts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2>
                        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
                    </h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 13), "createdAt", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
            echo "</time>
                    ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 14), "updatedAt", [], "any", false, false, false, 14) != null)) {
                // line 15
                echo "                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 15), "updatedAt", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
                echo "
                        </time>
                    ";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"author\">
                        <span class=\"name\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                        <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.pic"), "html", null, true);
            echo "\"/>
                    </a>
                </div>
            </header>
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24))]), "html", null, true);
            echo "\" class=\"image featured\">
                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.pic"), "html", null, true);
            echo "\"/>
            </a>
            <div>
                <p>
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 29), "description", [], "any", false, false, false, 29), "html", null, true);
            echo "
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34))]), "html", null, true);
            echo "\"
                           class=\"button large\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.reading"), "html", null, true);
            echo "</a></li>
                </ul>
                <ul class=\"stats\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 39
                echo "                        <li class=\"icon fa-tag\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts", ["tag" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 39))]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </ul>
            </footer>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    ";
        if (twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "        <article class=\"post\">
            <div>
                <p>
                    ";
            // line 49
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
        return array (  179 => 49,  174 => 46,  171 => 45,  162 => 41,  151 => 39,  147 => 38,  141 => 35,  137 => 34,  129 => 29,  120 => 25,  116 => 24,  107 => 20,  103 => 19,  98 => 18,  91 => 15,  89 => 14,  85 => 13,  76 => 9,  70 => 5,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block main %}
    {% for post in posts %}
        <article class=\"post\">
            <header>
                <div class=\"title\">
                    <h2>
                        <a href=\"{{ path('blog_post', {'id': post.post.id, 'slug': post.post.title|slugify}) }}\">{{ post.post.title }}</a>
                    </h2>
                </div>
                <div class=\"meta\">
                    <time class=\"published\"><i class=\"icon fa-pencil\"></i>{{ post.post.createdAt|date(\"d/m/Y\") }}</time>
                    {% if post.post.updatedAt != null %}
                        <time class=\"published\"><i class=\"icon fa-refresh\"></i>{{ post.post.updatedAt|date(\"d/m/Y\") }}
                        </time>
                    {% endif %}
                    <a href=\"{{ path('user_profile', {'id': post.user.id}) }}\" class=\"author\">
                        <span class=\"name\">{{ post.user.username }}</span>
                        <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"{{ 'user.pic'|trans }}\"/>
                    </a>
                </div>
            </header>
            <a href=\"{{ path('blog_post', {'id': post.post.id, 'slug': post.post.title|slugify}) }}\" class=\"image featured\">
                <img src=\"{{ asset('assets/images/pic01.jpg') }}\" alt=\"{{ 'post.pic'|trans }}\"/>
            </a>
            <div>
                <p>
                    {{ post.post.description }}
                </p>
            </div>
            <footer>
                <ul class=\"actions\">
                    <li><a href=\"{{ path('blog_post', {'id': post.post.id, 'slug': post.post.title|slugify}) }}\"
                           class=\"button large\">{{ 'post.reading'|trans }}</a></li>
                </ul>
                <ul class=\"stats\">
                    {% for tag in post.tags %}
                        <li class=\"icon fa-tag\"><a href=\"{{ path('blog_posts', {'tag': tag.name|slugify}) }}\">{{ tag.name }}</a></li>
                    {% endfor %}
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
