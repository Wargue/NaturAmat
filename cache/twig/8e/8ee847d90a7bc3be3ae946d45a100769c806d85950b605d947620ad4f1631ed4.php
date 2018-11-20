<?php

/* modular/welcome.html.twig */
class __TwigTemplate_f32ba75f7066ceafcbb84ae13152a2a5b155f4f6c39f23285b046866005c4268 extends Twig_Template
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
        <p class=\"title2\">";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
        echo "</p>
        ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 7
            echo "            <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
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
        <p class=\"title2\">{{ page.header.description }}</p>
        {{ content }}
        {% for button in page.header.buttons %}
            <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
        {% endfor %}            
    </div>
</div>", "modular/welcome.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\welcome.html.twig");
    }
}
