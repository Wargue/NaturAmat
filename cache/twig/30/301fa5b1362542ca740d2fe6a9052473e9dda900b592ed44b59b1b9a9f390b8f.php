<?php

/* form.html.twig */
class __TwigTemplate_34a9842e26407cfcd4202800687a6dcb4a182d0435b0ef27b95bb558cd9ade14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"contact-page\">
<div class=\"container modular-row contact ";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    <div class=\"row contact-row\">
        <div id=\"listing-contact\" class=\"col-lg-6\">
            ";
        // line 8
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 8)->display($context);
        // line 9
        echo "        </div>
        <div id=\"sidebar-contact\" class=\"col-lg-6\">
            ";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </div>
    </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"contact-page\">
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
</div>
{% endblock %}", "form.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\form.html.twig");
    }
}
