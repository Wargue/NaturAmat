<?php

/* partials/base.html.twig */
class __TwigTemplate_c0fd3da8c4e9ad9e96027b79a51b058f0f24954c3b0aab998abe0bd604836575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 72
        echo "    </head>
    <body>
        ";
        // line 74
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "
        <script src=\"";
        // line 82
        echo ($context["theme_url"] ?? null);
        echo "/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 83
        echo ($context["theme_url"] ?? null);
        echo "/js/tm-scripts.js\" type=\"text/javascript\" ></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.2/lazysizes.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.js'></script>
        <script id=\"dsq-count-scr\" src=\"//naturamat.disqus.com/count.js\" async></script>



        ";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "


    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/img/favicon.ico\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/default-skin/default-skin.min.css'>

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        ";
        // line 67
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 68
            echo "                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         ";
        }
        // line 70
        echo "
        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 17
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/camera.css"), "method");
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 20
        echo "

                ";
        // line 22
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 23
            echo "               ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/tm/css/tm_docs.css"), "method");
            // line 24
            echo "                ";
        }
        // line 25
        echo "
        ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/superfish.js"), "method");
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.easing.1.3.js"), "method");
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.mobilemenu.js"), "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.ui.totop.js"), "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.touchSwipe.min.js"), "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.equalheights.js"), "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/camera.js"), "method");
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 41
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 42
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 43
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/galery.js"), "method");
        // line 44
        echo "


            ";
        // line 47
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) > 9)) || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) != "msie"))) {
            // line 48
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.mobile.customized.min.js"), "method");
            // line 49
            echo "            ";
        }
        // line 50
        echo "
            ";
        // line 51
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 52
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/assets/js/html5shiv.js"), "method");
            // line 53
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/assets/js/respond.min.js"), "method");
            // line 54
            echo "            ";
        }
        // line 55
        echo "
        ";
    }

    // line 74
    public function block_header($context, array $blocks = array())
    {
        // line 75
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "        ";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        // line 79
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "        ";
    }

    // line 79
    public function block_content($context, array $blocks = array())
    {
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 92)->display($context);
        // line 93
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 93,  278 => 92,  275 => 91,  270 => 79,  266 => 80,  263 => 79,  260 => 78,  256 => 76,  253 => 75,  250 => 74,  245 => 55,  242 => 54,  239 => 53,  236 => 52,  234 => 51,  231 => 50,  228 => 49,  225 => 48,  223 => 47,  218 => 44,  215 => 43,  212 => 42,  209 => 41,  206 => 40,  203 => 39,  200 => 38,  197 => 37,  194 => 36,  191 => 35,  188 => 34,  185 => 33,  182 => 32,  179 => 31,  176 => 30,  173 => 29,  168 => 25,  165 => 24,  162 => 23,  160 => 22,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  144 => 16,  141 => 15,  138 => 14,  133 => 70,  129 => 68,  127 => 67,  113 => 57,  111 => 29,  105 => 27,  103 => 14,  95 => 9,  92 => 8,  90 => 7,  82 => 6,  79 => 5,  76 => 4,  67 => 94,  65 => 91,  54 => 83,  50 => 82,  47 => 81,  45 => 78,  42 => 77,  40 => 74,  36 => 72,  34 => 4,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/img/favicon.ico\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css\">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/default-skin/default-skin.min.css'>

        {% block stylesheets %}
                {% do assets.addCss('theme://css/bootstrap.css') %}
                {% do assets.addCss('theme://css/style.css') %}
                {% do assets.addCss('theme://css/camera.css') %}
                {% do assets.addCss('theme://css/custom.css') %}
                {% do assets.addCss('theme://assets/css/main.css') %}


                {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
               {% do assets.addCss('theme://assets/tm/css/tm_docs.css') %}
                {% endif %}

        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/jquery-migrate-1.2.1.js') %}
            {% do assets.addJs('theme://js/superfish.js') %}
            {% do assets.addJs('theme://js/jquery.easing.1.3.js') %}
            {% do assets.addJs('theme://js/jquery.mobilemenu.js') %}
            {% do assets.addJs('theme://js/jquery.ui.totop.js') %}
            {% do assets.addJs('theme://js/jquery.touchSwipe.min.js') %}
            {% do assets.addJs('theme://js/jquery.equalheights.js') %}
            {% do assets.addJs('theme://js/camera.js') %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
            {% do assets.addJs('theme://js/galery.js') %}



            {% if browser.getBrowser == 'msie' and browser.getVersion > 9 or browser.getBrowser != 'msie' %}
                 {% do assets.addJs('theme://js/jquery.mobile.customized.min.js') %}
            {% endif %}

            {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                {% do assets.addJs('theme://assets/assets/js/html5shiv.js') %}
                {% do assets.addJs('theme://assets/assets/js/respond.min.js') %}
            {% endif %}

        {% endblock %}
        {{ assets.js() }}

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        {% if browser.getBrowser == 'msie' and browser.getVersion < 9 %}
                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         {% endif %}

        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        <script src=\"{{ theme_url }}/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"{{ theme_url }}/js/tm-scripts.js\" type=\"text/javascript\" ></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.0.2/lazysizes.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.js'></script>
        <script id=\"dsq-count-scr\" src=\"//naturamat.disqus.com/count.js\" async></script>



        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}



    </body>
</html>
", "partials/base.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\base.html.twig");
    }
}
