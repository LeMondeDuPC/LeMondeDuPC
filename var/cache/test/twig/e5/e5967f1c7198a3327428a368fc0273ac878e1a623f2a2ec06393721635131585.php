<?php

/* /base.html.twig */
class __TwigTemplate_04173cc5b1147f98e116855a554a003a5218a202ba979d4c29bd716e84a7e097 extends Twig_Template
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
            'nav' => [$this, 'block_nav'],
            'menu' => [$this, 'block_menu'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
    <title>";
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
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:600,700|Source+Sans+Pro:400,400i,600,600i\"
          rel=\"stylesheet\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <meta property=\"og:site_name\" content=\"Le Monde Du PC\"/>
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:title\" content=\"Titre\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:url\" content=\"https://www.lemondedupc.fr\"/>
    <meta property=\"og:image\" content=\"Image\"/>
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/apple-touch-icon.png"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/favicon-32x32.png"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/favicon-16x16.png"), "html", null, true);
        echo "\"/>
</head>
<body class=\"is-preload\">

<!-- Wrapper -->
<div id=\"wrapper\">

    <!-- Header -->
    <header id=\"header\">
        <h1><a href=\"#\">Le Monde Du PC</a></h1>
        <nav id=\"navheader\" class=\"links\">
            ";
        // line 33
        $this->displayBlock('nav', $context, $blocks);
        // line 34
        echo "        </nav>
        <nav class=\"main\">
            <ul>
                <li class=\"search\">
                    <a class=\"icon fa-search\" href=\"#search\">Rechercher</a>
                    <form id=\"search\" method=\"get\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Rechercher\"/>
                    </form>
                </li>
                <li class=\"menu\">
                    <a class=\"icon fa-bars\" href=\"#menu\">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <nav id=\"menu\">
        <!-- Search -->
        <div>
            <form class=\"search\" method=\"get\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Rechercher\"/>
            </form>
        </div>
        <!-- links -->
        <nav id=\"navmenu\">

        </nav>
        <!-- Links -->
        <nav>
            ";
        // line 64
        $this->displayBlock('menu', $context, $blocks);
        // line 65
        echo "        </nav>
    </nav>

    <!-- Main -->
    <div id=\"main\">
        ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 71
        echo "    </div>

    <!-- Sidebar -->
    <aside id=\"sidebar\">
        <!-- Intro -->
        <section id=\"intro\">
            <img class=\"logo\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo/android-chrome-192x192.png"), "html", null, true);
        echo "\" alt=\"\"/>
            <header>
                <h2>Le Monde Du PC</h2>
                <p>Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les
                    maitrisent.</p>
            </header>
        </section>
        <!-- Mini Posts -->
        <section>
            <h3>News :</h3>
            <div class=\"mini-posts\">
                ";
        // line 88
        $this->displayBlock('sidebar', $context, $blocks);
        // line 89
        echo "            </div>
        </section>
        <!-- Posts List -->
        <section>
            <h3>Newsletter :</h3>
            <form action=\"#\" method=\"post\">
                <div class=\"row gtr-uniform\">
                    <div class=\"col-6 col-12\">
                        <input type=\"email\" placeholder=\"Email\" name=\"email\"/>
                    </div>
                    <div class=\"col-12\">
                        <ul class=\"actions\">
                            <li><input type=\"submit\" value=\"S'inscrire\"/></li>
                        </ul>
                    </div>
                </div>
            </form>
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
            <p class=\"license\">Licence | Version 2 : Prototype <br/> Sur une base de <a href=\"https://html5up.net/\">HTML5
                    UP</a></p>
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le Monde Du PC - Du numérique expliqué simplement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les maitrisent. Retrouvez tout sur Le Monde Du PC !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_nav($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  311 => 88,  294 => 70,  277 => 64,  260 => 33,  242 => 6,  224 => 4,  210 => 129,  206 => 128,  202 => 127,  198 => 126,  159 => 89,  157 => 88,  143 => 77,  135 => 71,  133 => 70,  126 => 65,  124 => 64,  92 => 34,  90 => 33,  76 => 22,  72 => 21,  68 => 20,  55 => 10,  51 => 9,  45 => 6,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html lang=\"fr\">
<head>
    <title>{% block title %}Le Monde Du PC - Du numérique expliqué simplement{% endblock %}</title>
    <meta name=\"description\"
          content=\"{% block description %}Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les maitrisent. Retrouvez tout sur Le Monde Du PC !{% endblock %}\"/>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/style/css/main.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/style/css/font-awesome.css') }}\"/>
    <link href=\"https://fonts.googleapis.com/css?family=Raleway:600,700|Source+Sans+Pro:400,400i,600,600i\"
          rel=\"stylesheet\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\"/>
    <meta property=\"og:site_name\" content=\"Le Monde Du PC\"/>
    <meta property=\"og:locale\" content=\"fr_FR\"/>
    <meta property=\"og:title\" content=\"Titre\"/>
    <meta property=\"og:type\" content=\"website\"/>
    <meta property=\"og:url\" content=\"https://www.lemondedupc.fr\"/>
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
        <h1><a href=\"#\">Le Monde Du PC</a></h1>
        <nav id=\"navheader\" class=\"links\">
            {% block nav %}{% endblock %}
        </nav>
        <nav class=\"main\">
            <ul>
                <li class=\"search\">
                    <a class=\"icon fa-search\" href=\"#search\">Rechercher</a>
                    <form id=\"search\" method=\"get\" action=\"#\">
                        <input type=\"text\" name=\"query\" placeholder=\"Rechercher\"/>
                    </form>
                </li>
                <li class=\"menu\">
                    <a class=\"icon fa-bars\" href=\"#menu\">Menu</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Menu -->
    <nav id=\"menu\">
        <!-- Search -->
        <div>
            <form class=\"search\" method=\"get\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Rechercher\"/>
            </form>
        </div>
        <!-- links -->
        <nav id=\"navmenu\">

        </nav>
        <!-- Links -->
        <nav>
            {% block menu %}{% endblock %}
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
            <img class=\"logo\" src=\"{{ asset('assets/images/logo/android-chrome-192x192.png') }}\" alt=\"\"/>
            <header>
                <h2>Le Monde Du PC</h2>
                <p>Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les
                    maitrisent.</p>
            </header>
        </section>
        <!-- Mini Posts -->
        <section>
            <h3>News :</h3>
            <div class=\"mini-posts\">
                {% block sidebar %}{% endblock %}
            </div>
        </section>
        <!-- Posts List -->
        <section>
            <h3>Newsletter :</h3>
            <form action=\"#\" method=\"post\">
                <div class=\"row gtr-uniform\">
                    <div class=\"col-6 col-12\">
                        <input type=\"email\" placeholder=\"Email\" name=\"email\"/>
                    </div>
                    <div class=\"col-12\">
                        <ul class=\"actions\">
                            <li><input type=\"submit\" value=\"S'inscrire\"/></li>
                        </ul>
                    </div>
                </div>
            </form>
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
            <p class=\"license\">Licence | Version 2 : Prototype <br/> Sur une base de <a href=\"https://html5up.net/\">HTML5
                    UP</a></p>
        </footer>
    </aside>

</div>

<!-- Scripts -->
<script src=\"{{ asset('assets/js/libs/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/libs/breakpoints.js') }}\"></script>
<script src=\"{{ asset('assets/js/libs/util.js') }}\"></script>
<script src=\"{{ asset('assets/js/main.js') }}\"></script>

</body>
</html>", "/base.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/base.html.twig");
    }
}
