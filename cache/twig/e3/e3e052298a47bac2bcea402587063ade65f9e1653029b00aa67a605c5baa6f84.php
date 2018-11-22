<?php

/* partials/header.html.twig */
class __TwigTemplate_d5bde5cd38d5d54c6b7bd5714aa6c033d7c2b18030bd05826374d8160dce420a extends Twig_Template
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
        echo "<header id=\"header\">
      <div class=\"container\">
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"";
        // line 3
        echo ($context["base_url_absolute"] ?? null);
        echo "\"></a></h1>
          <img class=\"logo_header2\" alt=\"logo NaturAmat\" src=\"";
        // line 4
        echo ($context["theme_url"] ?? null);
        echo "/img/logo/logo.png\">
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"logo_menubar col-lg-3\">
                      <img class=\"logo_header\" alt=\"logo NaturAmat\" src=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/img/logo/logo.png\">

                  </div>
                  <div class=\"nav_header col-lg-9\">
                      <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                          ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 15)->display($context);
        // line 16
        echo "                      </nav>
                      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </button>
                  </div>
              </div>
          </div>
      </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  44 => 15,  36 => 10,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
      <div class=\"container\">
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"{{ base_url_absolute }}\"></a></h1>
          <img class=\"logo_header2\" alt=\"logo NaturAmat\" src=\"{{ theme_url }}/img/logo/logo.png\">
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"logo_menubar col-lg-3\">
                      <img class=\"logo_header\" alt=\"logo NaturAmat\" src=\"{{ theme_url }}/img/logo/logo.png\">

                  </div>
                  <div class=\"nav_header col-lg-9\">
                      <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                          {% include 'partials/navigation.html.twig' %}
                      </nav>
                      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </button>
                  </div>
              </div>
          </div>
      </div>
</header>", "partials/header.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\header.html.twig");
    }
}
