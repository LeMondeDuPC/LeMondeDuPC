<?php

/* libs/_asidePosts.html.twig */
class __TwigTemplate_20941b5c16f0d65386fa0673f939b55e13f449f0c3c2558e304dab9584643edd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "libs/_asidePosts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "libs/_asidePosts.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "    <article class=\"mini-post\">
        <header>
            <h3><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []), "html", null, true);
            echo "</a></h3>
            <time class=\"published\" datetime=\"2015-10-20\"><i class=\"icon fa-pencil\"></i>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_createdAt", []), "d/m/Y"), "html", null, true);
            echo "</time>
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_authorId", [])]), "html", null, true);
            echo "\" class=\"author\">
                <span class=\"name\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "u_username", []), "html", null, true);
            echo "</span>
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture of the author"), "html", null, true);
            echo "\"/>
            </a>
        </header>
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "p_id", []), "slug" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter(twig_get_attribute($this->env, $this->source, $context["post"], "p_title", []))]), "html", null, true);
            echo "\" class=\"image\">
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic04.jpg"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture of the post"), "html", null, true);
            echo "\"/>
        </a>
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "libs/_asidePosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}
    <article class=\"mini-post\">
        <header>
            <h3><a href=\"{{ path('blog_post', {'id': post.p_id, 'slug': post.p_title|slugify}) }}\">{{ post.p_title }}</a></h3>
            <time class=\"published\" datetime=\"2015-10-20\"><i class=\"icon fa-pencil\"></i>{{ post.p_createdAt|date(\"d/m/Y\") }}</time>
            <a href=\"{{ path('user_profile', {'id': post.p_authorId}) }}\" class=\"author\">
                <span class=\"name\">{{ post.u_username }}</span>
                <img src=\"{{ asset('assets/images/avatar.jpg') }}\" alt=\"{{ 'Picture of the author'|trans }}\"/>
            </a>
        </header>
        <a href=\"{{ path('blog_post', {'id': post.p_id, 'slug': post.p_title|slugify}) }}\" class=\"image\">
            <img src=\"{{ asset('assets/images/pic04.jpg') }}\" alt=\"{{ 'Picture of the post'|trans }}\"/>
        </a>
    </article>
{% endfor %}", "libs/_asidePosts.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/libs/_asidePosts.html.twig");
    }
}
