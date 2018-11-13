<?php

/* modular/lastpicture.html.twig */
class __TwigTemplate_e11a513967f869c4e69de9baa1610fdbc38ec8a6dcdfd4883cbff1d0ec98d8fb extends Twig_Template
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
        echo "<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</p>
    </div>
    <img class=\"lazyload lazypreload fadein\" src=\"";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["image"] ?? null), "thumbnail", array()), array(), "array"), "url", array());
        echo "\" data-src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["image"] ?? null), "thumbnail", array()), array(), "array"), "url", array());
        echo "\" itemprop=\"thumbnail\" alt=\"";
        echo $this->getAttribute(($context["image"] ?? null), "description", array());
        echo "\"/>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/lastpicture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row_1\">
    <div class=\"container\">
        <p class=\"title1\">{{ page.header.title }}</p>
    </div>
    <img class=\"lazyload lazypreload fadein\" src=\"{{ page.media[image.thumbnail].url }}\" data-src=\"{{ page.media[image.thumbnail].url }}\" itemprop=\"thumbnail\" alt=\"{{ image.description }}\"/>
</div>", "modular/lastpicture.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\lastpicture.html.twig");
    }
}
