<?php

/* partials/header.html.twig */
class __TwigTemplate_a6ab3fe3e7e862d2b57dea4b34981728feafe45908bf0c03f2e5af0f8b297830 extends Twig_Template
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
        echo "\"><img alt=\"Grill point\" src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/img/logo.png\"></a></h1>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                ";
        // line 8
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 8)->display($context);
        // line 9
        echo "            </nav>
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
        return array (  35 => 9,  33 => 8,  23 => 3,  19 => 1,);
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
        <h1 class=\"navbar-brand navbar-brand_\"><a href=\"{{ base_url_absolute }}\"><img alt=\"Grill point\" src=\"{{ theme_url }}/img/logo.png\"></a></h1>
      </div>
      <div class=\"menuheader\">
          <div class=\"container\">
            <nav class=\"navbar navbar-default navbar-static-top tm_navbar\" role=\"navigation\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
          </div>
      </div>
</header>", "partials/header.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\header.html.twig");
    }
}
