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
        echo "<div class=\"case-study study1\">
    <figure class=\"case-study__img\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["first"]) {
            // line 4
            echo "            <li>";
            echo twig_first($this->env, $this->getAttribute($this->getAttribute($context["first"], "media", array()), "images", array()));
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </figure>
    <div class=\"case-study__overlay\">
        <h2 class=\"case-study__title\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
        <a class=\"case-study__link\" href=\"";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">En voir plus</a>
    </div>
</div>
";
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
        return array (  44 => 9,  40 => 8,  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"case-study study1\">
    <figure class=\"case-study__img\">
        {% for first in page.collection %}
            <li>{{ first.media.images|first }}</li>
        {% endfor %}
    </figure>
    <div class=\"case-study__overlay\">
        <h2 class=\"case-study__title\">{{ page.title }}</h2>
        <a class=\"case-study__link\" href=\"{{ page.url }}\">En voir plus</a>
    </div>
</div>
", "partials/galery_category.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\galery_category.html.twig");
    }
}
