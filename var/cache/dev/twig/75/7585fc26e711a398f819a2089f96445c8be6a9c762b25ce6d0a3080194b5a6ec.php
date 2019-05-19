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

/* /libs/_asidePosts.html.twig */
class __TwigTemplate_3e7afc761e2eeda17ae5c0ea43354399a7045be572bf130676c80e3662501582 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/libs/_asidePosts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/libs/_asidePosts.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <article class=\"mini-post\">
        <header>
            <h3><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
            echo "</a></h3>
            <time class=\"published\" datetime=\"2015-10-20\"><i class=\"icon fa-pencil\"></i>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 5), "createdAt", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true);
            echo "</time>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\" class=\"author\">
                <span class=\"name\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 7), "username", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
            </a>
        </header>
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "post", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10))]), "html", null, true);
            echo "\" class=\"image\">
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.pic"), "html", null, true);
            echo "\"/>
        </a>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        if (twig_test_empty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    <article class=\"mini-post\">
        <div>
            <p>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.no_result"), "html", null, true);
            echo "
            </p>
        </div>
    </article>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/libs/_asidePosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  87 => 16,  85 => 15,  73 => 11,  69 => 10,  63 => 7,  59 => 6,  55 => 5,  49 => 4,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for post in posts %}
    <article class=\"mini-post\">
        <header>
            <h3><a href=\"{{ path('blog_post', {'id': post.post.id, 'slug': post.post.title|slugify}) }}\">{{ post.post.title }}</a></h3>
            <time class=\"published\" datetime=\"2015-10-20\"><i class=\"icon fa-pencil\"></i>{{ post.post.createdAt|date(\"d/m/Y\") }}</time>
            <a href=\"{{ path('user_profile', {'id': post.user.id}) }}\" class=\"author\">
                <span class=\"name\">{{ post.user.username }}</span>
            </a>
        </header>
        <a href=\"{{ path('blog_post', {'id': post.post.id, 'slug': post.post.title|slugify}) }}\" class=\"image\">
            <img src=\"{{ asset('assets/images/pic04.jpg') }}\" alt=\"{{ 'post.pic'|trans }}\"/>
        </a>
    </article>
{% endfor %}
{% if posts is empty %}
    <article class=\"mini-post\">
        <div>
            <p>
                {{ 'app.no_result'|trans }}
            </p>
        </div>
    </article>
{% endif %}", "/libs/_asidePosts.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/libs/_asidePosts.html.twig");
    }
}
