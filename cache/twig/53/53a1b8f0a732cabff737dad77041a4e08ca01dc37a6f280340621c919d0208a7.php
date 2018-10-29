<?php

/* blog.html.twig */
class __TwigTemplate_a41cbc018645dd72d1b6ea00018ca97ed2a327bf0979cf4915511fa64b313ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"content\">
        <div class=\"row_9\">
            <div class=\"container\">
                <div class=\"row ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
                    ";
        // line 7
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
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
    <div id=\"content\">
        <div class=\"row_9\">
            <div class=\"container\">
                <div class=\"row {{ page.header.class }}\">
                    {{ page.content }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "blog.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\blog.html.twig");
    }
}
