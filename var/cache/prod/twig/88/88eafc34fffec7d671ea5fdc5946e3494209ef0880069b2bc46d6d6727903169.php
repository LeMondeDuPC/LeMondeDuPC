<?php

/* /blog/about.html.twig */
class __TwigTemplate_7e817364d0c3ed2eabb8b891ed6efc0a6d55016f947fff263dca710e488082f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/blog/about.html.twig", 1);
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
    }

    public function getTemplateName()
    {
        return "/blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/blog/about.html.twig", "/home/niels/Bureau/dev/projets/Site/symfony/templates/blog/about.html.twig");
    }
}
