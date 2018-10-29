<?php

/* partials/base.html.twig */
class __TwigTemplate_2a040777bbcf20797b02ada5530953d1da803195cc86a15be466709af1ee3ab8 extends Twig_Template
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
        // line 66
        echo "    </head>
    <body>
        ";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "

        <script src=\"";
        // line 77
        echo ($context["theme_url"] ?? null);
        echo "/js/bootstrap.min.js\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 78
        echo ($context["theme_url"] ?? null);
        echo "/js/tm-scripts.js\" type=\"text/javascript\" ></script>

        ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 83
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

         ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <script>
        \$(window).load( function(){

         jQuery('.camera_wrap').camera();

     });
        </script>

        ";
        // line 61
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 62
            echo "                 <div style='text-align:center'><a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a></div>
         ";
        }
        // line 64
        echo "
        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.css"), "method");
        // line 13
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/camera.css"), "method");
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 17
        echo "
                ";
        // line 18
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 19
            echo "               ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/tm/css/tm_docs.css"), "method");
            // line 20
            echo "                ";
        }
        // line 21
        echo "
        ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.js"), "method");
        // line 28
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/superfish.js"), "method");
        // line 29
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.easing.1.3.js"), "method");
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.mobilemenu.js"), "method");
        // line 31
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.ui.totop.js"), "method");
        // line 32
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.touchSwipe.min.js"), "method");
        // line 33
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.equalheights.js"), "method");
        // line 34
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/camera.js"), "method");
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 39
        echo "

            ";
        // line 41
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) > 9)) || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) != "msie"))) {
            // line 42
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.mobile.customized.min.js"), "method");
            // line 43
            echo "            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) < 9))) {
            // line 46
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/assets/js/html5shiv.js"), "method");
            // line 47
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/assets/js/respond.min.js"), "method");
            // line 48
            echo "            ";
        }
        // line 49
        echo "
        ";
    }

    // line 68
    public function block_header($context, array $blocks = array())
    {
        // line 69
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "        ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 81)->display($context);
        // line 82
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
        return array (  266 => 82,  263 => 81,  260 => 80,  255 => 73,  251 => 74,  248 => 73,  245 => 72,  241 => 70,  238 => 69,  235 => 68,  230 => 49,  227 => 48,  224 => 47,  221 => 46,  219 => 45,  216 => 44,  213 => 43,  210 => 42,  208 => 41,  204 => 39,  201 => 38,  198 => 37,  195 => 36,  192 => 35,  189 => 34,  186 => 33,  183 => 32,  180 => 31,  177 => 30,  174 => 29,  171 => 28,  168 => 27,  165 => 26,  162 => 25,  157 => 21,  154 => 20,  151 => 19,  149 => 18,  146 => 17,  143 => 16,  140 => 15,  137 => 14,  134 => 13,  131 => 12,  128 => 11,  123 => 64,  119 => 62,  117 => 61,  103 => 51,  101 => 25,  95 => 23,  93 => 11,  88 => 9,  85 => 8,  83 => 7,  75 => 6,  72 => 5,  69 => 4,  62 => 83,  60 => 80,  55 => 78,  51 => 77,  47 => 75,  45 => 72,  42 => 71,  40 => 68,  36 => 66,  34 => 4,  29 => 2,  26 => 1,);
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

        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}

    </body>
</html>
", "partials/base.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\base.html.twig");
    }
}
