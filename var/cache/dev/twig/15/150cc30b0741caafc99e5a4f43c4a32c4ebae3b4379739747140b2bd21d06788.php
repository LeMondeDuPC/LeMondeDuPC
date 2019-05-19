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

/* blog/about.html.twig */
class __TwigTemplate_7f09891cedf7f8284348be805aba2cb02beedc38943dbc67642a036ab0c92356 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $this->parent = $this->loadTemplate("/base.html.twig", "blog/about.html.twig", 1);
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
        echo "    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h2>A propos</h2>
            </div>
            <div class=\"meta\">
                <time class=\"published\">date maj</time>
            </div>
        </header>
        <section>
            <h1>Notre équipe</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
        <section>
            <h1>Nous contacter</h1>
            <form method=\"post\" action=\"#\">
                <div class=\"row gtr-uniform\">
                    <div class=\"col-12\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"Email\"/>
                        <textarea name=\"name\" placeholder=\"Entrez votre message...\" rows=\"6\"></textarea>
                    </div>
                    <div class=\"col-4 col-12-xsmall\">
                        <input type=\"text\" name=\"name\" placeholder=\"Captcha\" />
                    </div>
                    <div class=\"col-12\">
                        <ul class=\"actions\">
                            <li><input type=\"submit\" value=\"Envoyer\" name=\"name\"/></li>
                            <li><input type=\"reset\" value=\"Reset\"/></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <h1>Les mentions légales</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
        <section>
            <h1>Les conditions générales d'utilisation</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
    </article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/base.html.twig' %}

{% block main %}
    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h2>A propos</h2>
            </div>
            <div class=\"meta\">
                <time class=\"published\">date maj</time>
            </div>
        </header>
        <section>
            <h1>Notre équipe</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
        <section>
            <h1>Nous contacter</h1>
            <form method=\"post\" action=\"#\">
                <div class=\"row gtr-uniform\">
                    <div class=\"col-12\">
                        <input type=\"text\" name=\"name\" value=\"\" placeholder=\"Email\"/>
                        <textarea name=\"name\" placeholder=\"Entrez votre message...\" rows=\"6\"></textarea>
                    </div>
                    <div class=\"col-4 col-12-xsmall\">
                        <input type=\"text\" name=\"name\" placeholder=\"Captcha\" />
                    </div>
                    <div class=\"col-12\">
                        <ul class=\"actions\">
                            <li><input type=\"submit\" value=\"Envoyer\" name=\"name\"/></li>
                            <li><input type=\"reset\" value=\"Reset\"/></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <section>
            <h1>Les mentions légales</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
        <section>
            <h1>Les conditions générales d'utilisation</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At beatae dolorem dolorum eaque ex impedit
                ipsam ipsum laboriosam non odio qui, quibusdam reprehenderit similique sint sit? Dolorem illo natus
                nesciunt.
            </p>
        </section>
    </article>
{% endblock %}", "blog/about.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/blog/about.html.twig");
    }
}
