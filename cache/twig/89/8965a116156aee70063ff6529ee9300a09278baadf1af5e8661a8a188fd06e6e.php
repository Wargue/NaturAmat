<?php

/* partials/portfolio_items.html.twig */
class __TwigTemplate_4df8c1b14e8c58c9c75cbb8645c977c2822c461d2779b273cece83f8e03c5313 extends Twig_Template
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
        echo "
<div>
";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/portfolio_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div>
{{ page.media.images }}
</div>
", "partials/portfolio_items.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\portfolio_items.html.twig");
    }
}
