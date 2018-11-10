<?php

/* modular/form.html.twig */
class __TwigTemplate_f0722783fb4a4c8262eae491e4845bdca6efb8d8c031afb8cf1fb6dcc2653fa6 extends Twig_Template
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
        echo "<div class=\"contact-page\">
<div class=\"container modular-row contact ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    <div class=\"row contact-row\">
        <div id=\"listing-contact\" class=\"col-lg-6\">
            ";
        // line 5
        $this->loadTemplate("forms/form.html.twig", "modular/form.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
        <div id=\"sidebar-contact\" class=\"col-lg-6\">
            ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"contact-page\">
<div class=\"container modular-row contact {{ page.header.class }}\">
    <div class=\"row contact-row\">
        <div id=\"listing-contact\" class=\"col-lg-6\">
            {% include \"forms/form.html.twig\" %}
        </div>
        <div id=\"sidebar-contact\" class=\"col-lg-6\">
            {{ page.content }}
        </div>
    </div>
</div>
</div>", "modular/form.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\form.html.twig");
    }
}
