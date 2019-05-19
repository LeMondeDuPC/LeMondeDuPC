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

/* @EasyAdmin/data_collector/icon.svg.twig */
class __TwigTemplate_9e6c21a4c2b9a73307d67d62b194d43c622bf451491fdc938ba4e62da529072c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/icon.svg.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/icon.svg.twig"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"";
        echo twig_escape_filter($this->env, (((isset($context["height"]) || array_key_exists("height", $context))) ? (_twig_default_filter((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 1, $this->source); })()), "24")) : ("24")), "html", null, true);
        echo "\" viewBox=\"0 0 24 24\" version=\"1.1\">
  <path
     d=\"m 15.367133,9.67868 2.86378,-2.8637733 -1.04582,-1.04582 -2.863773,2.86378 z M 19.7361,6.8149067 q 0,0.2638933 -0.175927,0.4398266 L 6.99084,19.824067 Q 6.8149067,20 6.5510067,20 6.2871133,20 6.11118,19.824067 L 4.1759333,17.88882 Q 4,17.712887 4,17.448993 4,17.185093 4.1759333,17.00916 L 16.745267,4.4398267 Q 16.9212,4.2639 17.185093,4.2639 q 0.2639,0 0.439834,0.1759267 l 1.935246,1.9352466 Q 19.7361,6.5510067 19.7361,6.8149067 z M 6.53146,4.9578467 7.4893067,5.2510667 6.53146,5.5442867 6.23824,6.50214 5.94502,5.5442867 4.9871733,5.2510667 5.94502,4.9578467 6.23824,4 z m 3.4208933,1.5833866 1.9156997,0.58644 -1.9156997,0.58644 -0.58644,1.9157 -0.58644,-1.9157 -1.9157,-0.58644 1.9157,-0.58644 0.58644,-1.9157 z M 19.042153,11.213193 20,11.506413 l -0.957847,0.29322 -0.29322,0.957847 -0.29322,-0.957847 -0.957853,-0.29322 0.957853,-0.29322 0.29322,-0.957846 z m -6.255346,-6.2553463 0.957846,0.29322 -0.957846,0.29322 -0.29322,0.9578533 -0.29322,-0.9578533 -0.957847,-0.29322 0.957847,-0.29322 L 12.493587,4 z\"
     fill=\"";
        // line 4
        echo twig_escape_filter($this->env, (((isset($context["fill_color"]) || array_key_exists("fill_color", $context))) ? (_twig_default_filter((isset($context["fill_color"]) || array_key_exists("fill_color", $context) ? $context["fill_color"] : (function () { throw new RuntimeError('Variable "fill_color" does not exist.', 4, $this->source); })()), "#222")) : ("#222")), "html", null, true);
        echo "\" />
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/icon.svg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"{{ height|default('24') }}\" viewBox=\"0 0 24 24\" version=\"1.1\">
  <path
     d=\"m 15.367133,9.67868 2.86378,-2.8637733 -1.04582,-1.04582 -2.863773,2.86378 z M 19.7361,6.8149067 q 0,0.2638933 -0.175927,0.4398266 L 6.99084,19.824067 Q 6.8149067,20 6.5510067,20 6.2871133,20 6.11118,19.824067 L 4.1759333,17.88882 Q 4,17.712887 4,17.448993 4,17.185093 4.1759333,17.00916 L 16.745267,4.4398267 Q 16.9212,4.2639 17.185093,4.2639 q 0.2639,0 0.439834,0.1759267 l 1.935246,1.9352466 Q 19.7361,6.5510067 19.7361,6.8149067 z M 6.53146,4.9578467 7.4893067,5.2510667 6.53146,5.5442867 6.23824,6.50214 5.94502,5.5442867 4.9871733,5.2510667 5.94502,4.9578467 6.23824,4 z m 3.4208933,1.5833866 1.9156997,0.58644 -1.9156997,0.58644 -0.58644,1.9157 -0.58644,-1.9157 -1.9157,-0.58644 1.9157,-0.58644 0.58644,-1.9157 z M 19.042153,11.213193 20,11.506413 l -0.957847,0.29322 -0.29322,0.957847 -0.29322,-0.957847 -0.957853,-0.29322 0.957853,-0.29322 0.29322,-0.957846 z m -6.255346,-6.2553463 0.957846,0.29322 -0.957846,0.29322 -0.29322,0.9578533 -0.29322,-0.9578533 -0.957847,-0.29322 0.957847,-0.29322 L 12.493587,4 z\"
     fill=\"{{ fill_color|default('#222') }}\" />
</svg>
", "@EasyAdmin/data_collector/icon.svg.twig", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/data_collector/icon.svg.twig");
    }
}
