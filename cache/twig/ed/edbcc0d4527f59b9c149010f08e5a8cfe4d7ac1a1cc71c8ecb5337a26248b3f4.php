<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_76d4e8a34350bb29f06ef141b8f284848ea3ac69115a11f8c359f5b1e376df4d extends Twig_Template
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
        echo "<div class=\"row_3\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list3\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "                    <li class=\"col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"";
            // line 7
            echo $this->getAttribute($context["item"], "class", array());
            echo "\">
                            <figure>";
            // line 8
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array");
            echo "</figure>
                            <div class=\"info1 maxheight\">
                                <p class=\"list3title1\">";
            // line 10
            echo $this->getAttribute($context["item"], "title1", array());
            echo "</p>
                                <p class=\"list3title2\">";
            // line 11
            echo $this->getAttribute($context["item"], "title2", array());
            echo "</p>
                                <p class=\"list3title3\">";
            // line 12
            echo $this->getAttribute($context["item"], "title3", array());
            echo "</p>
                                <a href=\"";
            // line 13
            echo $this->getAttribute($context["item"], "linkurl", array());
            echo "\" class=\"btn-link btn-link1\">";
            echo $this->getAttribute($context["item"], "linktext", array());
            echo "<span></span></a>
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                ";
        echo ($context["content"] ?? null);
        echo "
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  36 => 8,  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row_3\">
    <div class=\"container\">
        <div class=\"row\">
            <ul class=\"list3\">
                {% for item in page.header.portfolio %}
                    <li class=\"col-lg-6 col-md-6 col-sm-6\">
                        <div class=\"{{ item.class }}\">
                            <figure>{{ page.media[item.image] }}</figure>
                            <div class=\"info1 maxheight\">
                                <p class=\"list3title1\">{{ item.title1 }}</p>
                                <p class=\"list3title2\">{{ item.title2 }}</p>
                                <p class=\"list3title3\">{{ item.title3 }}</p>
                                <a href=\"{{ item.linkurl }}\" class=\"btn-link btn-link1\">{{ item.linktext }}<span></span></a>
                            </div>
                        </div>
                    </li>
                {% endfor %}
                {{ content }}
            </ul>
        </div>
    </div>
</div>", "modular/portfolio.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\photographer\\templates\\modular\\portfolio.html.twig");
    }
}
