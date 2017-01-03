<?php

/*  */
class __TwigTemplate_2c655aa79e614cb7a7ecce073f7b71c5d31c196d8f4d0aeb8b1f7a1d7cf4fc36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title><br />
<b>Notice</b>:  Use of undefined constant site_title - assumed 'site_title' in <b>D:\\xampp\\htdocs\\phpmvc-component-based\\app\\components\\header.php</b> on line <b>9</b><br />
</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" href=\"/apple-touch-icon.png\">
        <base href=\"http://localhost/phpmvc-component-based\" target=\"_self\">

        <link rel=\"stylesheet\" href=\"http://localhost/phpmvc-component-based/css/normalize.min.css\">
        <link rel=\"stylesheet\" href=\"http://localhost/phpmvc-component-based/css/main.css\">

        <script src=\"http://localhost/phpmvc-component-based/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js\"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class=\"header-container\">
            <header class=\"wrapper clearfix\">
                <h1 class=\"title\">h1.title</h1>
                <nav>
                    <ul>
                        <li><a href=\"http://localhost/phpmvc-component-based/#\">nav ul li a</a></li>
                        <li><a href=\"http://localhost/phpmvc-component-based/nav-3\">nav ul li a</a></li>
                        <li><a href=\"http://localhost/phpmvc-component-based/nav-2\">nav ul li a</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class=\"main-container\">
<div class='main wrapper clearfix'>

    <article>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 45
            echo "        <section>
            <h2>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "title", array()), "html", null, true);
            echo "</h2>
            <p>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "body", array()), "html", null, true);
            echo "</p>
        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    </article>

    <aside>
        <h3>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aside"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
        <p>L";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["aside"] ?? null), "body", array()), "html", null, true);
        echo "</p>
    </aside>

</div> <!-- #main -->

        </div> <!-- #main-container -->

        <div class=\"footer-container\">
            <footer class=\"wrapper\">
                <h3>footer</h3>
            </footer>
        </div>

        <script src=\"http://localhost/phpmvc-component-based/js/vendor/jquery-1.11.2.min.js\"></script>
        <script src=\"http://localhost/phpmvc-component-based/js/plugins.js\"></script>
        <script src=\"http://localhost/phpmvc-component-based/js/main.js\"></script>
        
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 55,  90 => 54,  84 => 50,  75 => 47,  71 => 46,  68 => 45,  64 => 44,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "", "");
    }
}
