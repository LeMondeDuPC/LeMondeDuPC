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

/* @WebProfiler/Icon/yes.svg */
class __TwigTemplate_a712a899e11bf5fdb5aae14c5097d6b4f02be2180f3b86aa03a61afde2091af9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/yes.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/yes.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#5E976E\" d=\"M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/yes.svg";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\"><path fill=\"#5E976E\" d=\"M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z\"/></svg>
", "@WebProfiler/Icon/yes.svg", "/home/niels/Bureau/dev/projets/Site/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Icon/yes.svg");
    }
}
