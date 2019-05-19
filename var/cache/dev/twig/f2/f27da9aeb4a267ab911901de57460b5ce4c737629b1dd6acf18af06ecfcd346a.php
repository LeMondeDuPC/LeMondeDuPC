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

/* base.html.twig */
class __TwigTemplate_19c7296a57f58215bed21011d710afa40ddbba115250a46c05ac94feb3b3351b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
    <title>Le Monde Du PC - ";
        // line 4
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
    <meta property=\"og:site_name\" content=\"Le Monde Du PC\"/>
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:title\" content=\"Le Monde Du PC - ";
        // line 16
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts");
        echo "\">Le Monde Du PC</a></h2>
        <nav id=\"navheader\" class=\"links\">
            <ul id=\"nav\">
                <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts", ["tag" => "news"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.news"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_posts", ["tag" => "articles"]);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.articles"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.about"), "html", null, true);
        echo "</a></li>
            </ul>
        </nav>
        <nav class=\"main\">
            <ul>
                <li class=\"search\">
                    <a class=\"icon fa-search\" href=\"#search\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.search"), "html", null, true);
        echo "</a>
                    <form id=\"search\" method=\"get\" action=\"#\">
                        <input type=\"search\" name=\"query\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.search"), "html", null, true);
        echo "\"/>
                    </form>
                </li>
                <li class=\"menu\">
                    <a class=\"icon fa-bars\" href=\"#menu\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.menu"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.search"), "html", null, true);
        echo "\"/>
            </form>
        </div>
        <!-- links -->
        <nav id=\"navmenu\">

        </nav>

        <!--<nav>
            <ul class=\"links\">
                <li><a href=\"\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profile"), "html", null, true);
        echo "</a></li>
                <li><a href=\"\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.edit"), "html", null, true);
        echo "</a></li>
                <li><a href=\"\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.settings"), "html", null, true);
        echo "</a></li>
            </ul>
        </nav>-->

        <!-- Links -->
        <nav>
            <ul class=\"actions fit\">
                <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_connection");
        echo "\" class=\"button fit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.connection"), "html", null, true);
        echo "</a></li>
                <li><a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_registration");
        echo "\" class=\"button fit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.registration"), "html", null, true);
        echo "</a></li>
                <!--<li><a href=\"\" class=\"button fit\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.log_out"), "html", null, true);
        echo "</a></li>-->
            </ul>
        </nav>
    </nav>

    <!-- Main -->
    <div id=\"main\">
        ";
        // line 86
        $this->displayBlock('main', $context, $blocks);
        // line 87
        echo "    </div>

    <!-- Sidebar -->
    <aside id=\"sidebar\">
        <!-- Intro -->
        <section id=\"intro\">
            <img class=\"logo\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/android-chrome-192x192.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.logo"), "html", null, true);
        echo "\"/>
            <header>
                <h2>Le Monde Du PC</h2>
                <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.description"), "html", null, true);
        echo "
                    .</p>
            </header>
        </section>
        <!-- Mini Posts -->
        <section>
            <h3>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.news"), "html", null, true);
        echo " :</h3>
            <div class=\"mini-posts\">
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::showPosts", ["tag" => "windows", "target" => "/libs/_asidePosts.html.twig"]));
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
            <p class=\"license\">Le Monde Du PC | Version 2.0 CC BY NC ND <br/> ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.base"), "html", null, true);
        echo " <a
                        href=\"https://html5up.net/\">HTML5 UP!</a></p>
        </footer>
    </aside>

</div>

<!-- Scripts -->
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/breakpoints.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/libs/util.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.title_part"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("app.description"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 86,  314 => 6,  296 => 4,  282 => 129,  278 => 128,  274 => 127,  270 => 126,  259 => 118,  242 => 104,  237 => 102,  228 => 96,  220 => 93,  212 => 87,  210 => 86,  200 => 79,  194 => 78,  188 => 77,  178 => 70,  174 => 69,  170 => 68,  157 => 58,  143 => 47,  136 => 43,  131 => 41,  120 => 35,  114 => 34,  108 => 33,  102 => 30,  90 => 21,  86 => 20,  82 => 19,  76 => 16,  69 => 12,  64 => 10,  60 => 9,  54 => 6,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
    <title>Le Monde Du PC - {% block title %}{{ 'app.title_part'|trans }}{% endblock %}</title>
    <meta name=\"description\"
          content=\"{% block description %}{{ 'app.description'|trans }}{% endblock %}\"/>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/style/css/main.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/style/css/font-awesome.css') }}\"/>
    <link rel=\"stylesheet\"
          href=\"{{ asset('https://fonts.googleapis.com/css?family=Raleway:600,700|Source+Sans+Pro:400,400i,600,600i') }}\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <meta property=\"og:site_name\" content=\"Le Monde Du PC\"/>
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:title\" content=\"Le Monde Du PC - {{ block('title') }}\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:image\" content=\"Image\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/images/logo/apple-touch-icon.png') }}\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('assets/images/logo/favicon-32x32.png') }}\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('assets/images/logo/favicon-16x16.png') }}\"/>
</head>
<body class=\"is-preload\">

<!-- Wrapper -->
<div id=\"wrapper\">

    <!-- Header -->
    <header id=\"header\">
        <h2><a href=\"{{ path('blog_posts') }}\">Le Monde Du PC</a></h2>
        <nav id=\"navheader\" class=\"links\">
            <ul id=\"nav\">
                <li><a href=\"{{ path('blog_posts', {'tag': 'news'}) }}\">{{ 'post.news'|trans }}</a></li>
                <li><a href=\"{{ path('blog_posts', {'tag': 'articles'}) }}\">{{ 'post.articles'|trans }}</a></li>
                <li><a href=\"{{ path('blog_about') }}\">{{ 'app.about'|trans }}</a></li>
            </ul>
        </nav>
        <nav class=\"main\">
            <ul>
                <li class=\"search\">
                    <a class=\"icon fa-search\" href=\"#search\">{{ 'post.search'|trans }}</a>
                    <form id=\"search\" method=\"get\" action=\"#\">
                        <input type=\"search\" name=\"query\" placeholder=\"{{ 'post.search'|trans }}\"/>
                    </form>
                </li>
                <li class=\"menu\">
                    <a class=\"icon fa-bars\" href=\"#menu\">{{ 'app.menu'|trans }}</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <nav id=\"menu\">
        <!-- Search -->
        <div>
            <form class=\"search\" method=\"get\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"{{ 'post.search'|trans }}\"/>
            </form>
        </div>
        <!-- links -->
        <nav id=\"navmenu\">

        </nav>

        <!--<nav>
            <ul class=\"links\">
                <li><a href=\"\">{{ 'account.profile'|trans }}</a></li>
                <li><a href=\"\">{{ 'account.edit'|trans }}</a></li>
                <li><a href=\"\">{{ 'account.settings'|trans }}</a></li>
            </ul>
        </nav>-->

        <!-- Links -->
        <nav>
            <ul class=\"actions fit\">
                <li><a href=\"{{ path('user_connection') }}\" class=\"button fit\">{{ 'user.connection'|trans }}</a></li>
                <li><a href=\"{{ path('user_registration') }}\" class=\"button fit\">{{ 'user.registration'|trans }}</a></li>
                <!--<li><a href=\"\" class=\"button fit\">{{ 'user.log_out'|trans }}</a></li>-->
            </ul>
        </nav>
    </nav>

    <!-- Main -->
    <div id=\"main\">
        {% block main %}{% endblock %}
    </div>

    <!-- Sidebar -->
    <aside id=\"sidebar\">
        <!-- Intro -->
        <section id=\"intro\">
            <img class=\"logo\" src=\"{{ asset('assets/images/logo/android-chrome-192x192.png') }}\" alt=\"{{ 'app.logo'|trans }}\"/>
            <header>
                <h2>Le Monde Du PC</h2>
                <p>{{ 'app.description'|trans }}
                    .</p>
            </header>
        </section>
        <!-- Mini Posts -->
        <section>
            <h3>{{ 'post.news'|trans }} :</h3>
            <div class=\"mini-posts\">
                {{ render(controller(\"App\\\\Controller\\\\BlogController::showPosts\", {'tag': 'windows', 'target': '/libs/_asidePosts.html.twig'})) }}
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
            <p class=\"license\">Le Monde Du PC | Version 2.0 CC BY NC ND <br/> {{ 'app.base'|trans }} <a
                        href=\"https://html5up.net/\">HTML5 UP!</a></p>
        </footer>
    </aside>

</div>

<!-- Scripts -->
<script src=\"{{ asset('assets/js/libs/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/libs/breakpoints.js') }}\"></script>
<script src=\"{{ asset('assets/js/libs/util.js') }}\"></script>
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
</html>", "base.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/base.html.twig");
    }
}
