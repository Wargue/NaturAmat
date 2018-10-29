<?php

/* partials/header.html.twig */
class __TwigTemplate_3c04bc97faa422de44882b70ce02db411adefeefb5be8708e936d583b2da75ee extends Twig_Template
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
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"logo_menubar col-lg-2\">
                      <img class=\"logo_header\" alt=\"logo NaturAmat\" src=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/img/logo/logo.jpg\">
                  </div>
                  <div class=\"nav_header col-lg-10\">
                      <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                          ";
        // line 13
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 13)->display($context);
        // line 14
        echo "                      </nav>
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
        return array (  41 => 14,  39 => 13,  32 => 9,  23 => 3,  19 => 1,);
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
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"logo_menubar col-lg-2\">
                      <img class=\"logo_header\" alt=\"logo NaturAmat\" src=\"{{ theme_url }}/img/logo/logo.jpg\">
                  </div>
                  <div class=\"nav_header col-lg-10\">
                      <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                          {% include 'partials/navigation.html.twig' %}
                      </nav>
                  </div>
              </div>
          </div>
      </div>
</header>", "partials/header.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\header.html.twig");
    }
}
