<?php

/* /blog/filter.html.twig */
class __TwigTemplate_9ca587ccf2f769d841d197f632beaafbcbc74da4b5914b0b8487e93fc368633e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture of the author"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture of the post"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Continue reading"), "html", null, true);
            echo "</a></li>
                </ul>
                <ul class=\"stats\">
                    ";
            // line 36
            $context["tags"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "p_tags_id", []), ",");
            // line 37
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 38
                echo "                        <li class=\"icon fa-tag\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_tag", ["tag" => $this->extensions['Cocur\Slugify\Bridge\Twig\SlugifyExtension']->slugifyFilter($context["tag"])]), "html", null, true);
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
        return array (  132 => 40,  121 => 38,  116 => 37,  114 => 36,  106 => 33,  98 => 28,  89 => 24,  85 => 23,  74 => 17,  70 => 16,  65 => 15,  59 => 13,  57 => 12,  53 => 11,  45 => 8,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/blog/filter.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/blog/filter.html.twig");
    }
}
