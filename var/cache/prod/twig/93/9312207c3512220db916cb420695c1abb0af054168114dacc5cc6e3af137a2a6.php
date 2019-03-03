<?php

/* /user/show.html.twig */
class __TwigTemplate_b59e30401805247bea1af8ed40261e5b55a89247fdcaf1ba3499ae408094e6ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/user/show.html.twig", 1);
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
        echo "    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile of"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", []), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"meta\">
                <time class=\"published\"><i class=\"icon fa-archive\"></i>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", []), "d/m/Y"), "html", null, true);
        echo "</time>
            </div>
        </header>
        <img class=\"image featured\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pic01.jpg"), "html", null, true);
        echo "\"
             alt=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Picture of the post"), "html", null, true);
        echo "\"/>
        <div>
            <p>
                ";
        // line 17
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", []))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "description", []), "html", null, true);
        } else {
            echo "Aucune description";
        }
        // line 18
        echo "            </p>
        </div>
        <footer>
            <ul class=\"stats\">
                <li>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Connection"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastConnection", []), "d/m/Y"), "html", null, true);
        echo "</li>
            </ul>
        </footer>
    </article>
";
    }

    public function getTemplateName()
    {
        return "/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  70 => 18,  64 => 17,  58 => 14,  54 => 13,  48 => 10,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/user/show.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/user/show.html.twig");
    }
}
