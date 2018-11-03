<?php

/* partials/galery_category.html.twig */
class __TwigTemplate_4f963778a1ea7e6ab1c22514c948c35b9e810880146d771c0cd172d5709a6391 extends Twig_Template
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
<div class=\"case-study study1\">
    <figure class=\"case-study__img\">
";
        // line 4
        echo twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        echo "
    </figure>
    <div class=\"case-study__overlay\">
        <h2 class=\"case-study__title\">";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
        <a class=\"case-study__link\" href=\"#\">En voir plus</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/galery_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
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
<div class=\"case-study study1\">
    <figure class=\"case-study__img\">
{{ page.media.images|first }}
    </figure>
    <div class=\"case-study__overlay\">
        <h2 class=\"case-study__title\">{{ page.title }}</h2>
        <a class=\"case-study__link\" href=\"#\">En voir plus</a>
    </div>
</div>", "partials/galery_category.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\galery_category.html.twig");
    }
}
