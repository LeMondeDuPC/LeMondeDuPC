<?php

/* /base.html.twig */
class __TwigTemplate_05a861c526f73652711adeff3c1303f4464a306ad00b773bb389c473bfacbd0d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo " - ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\"
          content=\"";
        // line 6
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style/css/main.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style/css/font-awesome.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\"
          href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Raleway:600,700|Source+Sans+Pro:400,400i,600,600i"), "html", null, true);
        echo "\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <meta property=\"og:site_name\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo "\"/>
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo " - ";
        $this->displayBlock("title", $context, $blocks);
        echo "\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:image\" content=\"Image\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/apple-touch-icon.png"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/favicon-32x32.png"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/favicon-16x16.png"), "html", null, true);
        echo "\"/>
</head>
<body class=\"is-preload\">

<!-- Wrapper -->
<div id=\"wrapper\">

    <!-- Header -->
    <header id=\"header\">
        <h2><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo "</a></h2>
        <nav id=\"navheader\" class=\"links\">
            <ul id=\"nav\">
                <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_tag", ["tag" => "news"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("News"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_tag", ["tag" => "articles"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("About"), "html", null, true);
        echo "</a></li>
            </ul>
        </nav>
        <nav class=\"main\">
            <ul>
                <li class=\"search\">
                    <a class=\"icon fa-search\" href=\"#search\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</a>
                    <form id=\"search\" method=\"get\" action=\"#\">
                        <input type=\"search\" name=\"query\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"/>
                    </form>
                </li>
                <li class=\"menu\">
                    <a class=\"icon fa-bars\" href=\"#menu\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <nav id=\"menu\">
        <!-- Search -->
        <div>
            <form class=\"search\" method=\"get\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"/>
            </form>
        </div>
        <!-- links -->
        <nav id=\"navmenu\">

        </nav>
        <!-- Links -->
        <nav>
            <ul class=\"actions fit\">
                <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_connection");
        echo "\" class=\"button fit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connection"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\" class=\"button fit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration"), "html", null, true);
        echo "</a></li>
            </ul>
        </nav>
    </nav>

    <!-- Main -->
    <div id=\"main\">
        ";
        // line 76
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "    </div>

    <!-- Sidebar -->
    <aside id=\"sidebar\">
        <!-- Intro -->
        <section id=\"intro\">
            <img class=\"logo\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/android-chrome-192x192.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
        echo "\"/>
            <header>
                <h2>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo "</h2>
                <p>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The topics of digital and high tech should not be understood only by those who master them"), "html", null, true);
        echo "
                    .</p>
            </header>
        </section>
        <!-- Mini Posts -->
        <section>
            <h3>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("News"), "html", null, true);
        echo " :</h3>
            <div class=\"mini-posts\">
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::showPosts", ["tag" => "news", "target" => "aside"]));
        echo "
            </div>
        </section>
        <!-- Footer -->
        <footer id=\"footer\">
            <ul class=\"icons\">
                <li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                <li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                <li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                <li><a href=\"#\" class=\"icon fa-google\"><span class=\"label\">Google</span></a></li>
                <li><a href=\"#\" class=\"icon fa-linkedin\"><span class=\"label\">Linkedin</span></a></li>
                <li><a href=\"#\" class=\"icon fa-rss\"><span class=\"label\">RSS</span></a></li>
                <li><a href=\"#\" class=\"icon fa-envelope\"><span class=\"label\">Email</span></a></li>
            </ul>
            <p class=\"license\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "name", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "version", []), "html", null, true);
        echo " <br/> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("On a base of"), "html", null, true);
        echo " <a
                        href=\"https://html5up.net/\">HTML5 UP!</a></p>
        </footer>
    </aside>

</div>

<!-- Scripts -->
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/breakpoints.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Digital explained simply"), "html", null, true);
    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The topics of digital and high tech should not be understood only by those who master them"), "html", null, true);
    }

    // line 76
    public function block_main($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 76,  272 => 6,  266 => 4,  258 => 119,  254 => 118,  250 => 117,  246 => 116,  231 => 108,  214 => 94,  209 => 92,  200 => 86,  196 => 85,  189 => 83,  181 => 77,  179 => 76,  167 => 69,  161 => 68,  148 => 58,  134 => 47,  127 => 43,  122 => 41,  111 => 35,  105 => 34,  99 => 33,  91 => 30,  79 => 21,  75 => 20,  71 => 19,  63 => 16,  58 => 14,  53 => 12,  48 => 10,  44 => 9,  38 => 6,  31 => 4,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/base.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/base.html.twig");
    }
}
