<?php

/* modular/slider.html.twig */
class __TwigTemplate_a6a4a149affb8b75179908febffe779255b92ebcb08242b1a22f35bc4b743ecb extends Twig_Template
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
        echo "<div class=\"modular-row slider\">
    <div class=\"camera_wrap\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "             <div data-src=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        echo ($context["content"] ?? null);
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modular/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row slider\">
    <div class=\"camera_wrap\">
        {% for item in page.media.images %}
             <div data-src=\"{{ item.url }}\"></div>
        {% endfor %}
        {{ content }}
    </div>
</div>

", "modular/slider.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\slider.html.twig");
    }
}
