<?php

/* /user/account.html.twig */
class __TwigTemplate_c488d67fccc37354b8d6e04682bbd471a08200bd2c940ca39638451d4078949b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/user/account.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
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
    public function block_title($context, array $blocks = [])
    {
        echo "Espace membre";
    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        echo "Les sujets du numérique et du high tech ne doivent pas être compris uniquement par ceux qui les maitrisent. Retrouvez tout sur Le Monde Du PC !";
    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        // line 8
        echo "    <article class=\"post\">
        <header>
            <div class=\"title\">
                <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member area"), "html", null, true);
        echo "</h1>
            </div>
        </header>
        ";
        // line 14
        if ((isset($context["formRegistration"]) || array_key_exists("formRegistration", $context))) {
            // line 15
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRegistration"] ?? null), 'form_start');
            echo "
            <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration"), "html", null, true);
            echo "</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRegistration"] ?? null), "Username", []), 'widget');
            echo "
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRegistration"] ?? null), "Email", []), 'widget');
            echo "
                    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRegistration"] ?? null), "Password", []), 'widget');
            echo "
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRegistration"] ?? null), "Create", []), 'widget');
            echo "</li>
                        <li>";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRegistration"] ?? null), "Cancel", []), 'widget');
            echo "</li>
                    </ul>
                </div>
            </div>
            ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRegistration"] ?? null), 'form_end');
            echo "
        ";
        } else {
            // line 32
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLogin"] ?? null), 'form_start');
            echo "
            <h3>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connection"), "html", null, true);
            echo "</h3>
            <div class=\"row gtr-uniform\">
                <div class=\"col-12\">
                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formLogin"] ?? null), "Username", []), 'widget');
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formLogin"] ?? null), "Password", []), 'widget');
            echo "
                </div>
                <div class=\"col-12\">
                    <ul class=\"actions\">
                        <li>";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formLogin"] ?? null), "Connection", []), 'widget');
            echo "</li>
                        <li>";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formLogin"] ?? null), "Cancel", []), 'widget');
            echo "</li>
                    </ul>
                </div>
            </div>
            ";
            // line 46
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLogin"] ?? null), 'form_end');
            echo "
        ";
        }
        // line 48
        echo "    </article>
";
    }

    public function getTemplateName()
    {
        return "/user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  137 => 46,  130 => 42,  126 => 41,  119 => 37,  115 => 36,  109 => 33,  104 => 32,  99 => 30,  92 => 26,  88 => 25,  81 => 21,  77 => 20,  73 => 19,  67 => 16,  62 => 15,  60 => 14,  54 => 11,  49 => 8,  46 => 7,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/user/account.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/user/account.html.twig");
    }
}
