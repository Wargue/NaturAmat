<?php

/* modular/categories.html.twig */
class __TwigTemplate_d1b7ee502ac6e331d6af1d97847a97fe5a4ad7373c21d6f082374896e069783d extends Twig_Template
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
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"last-news-item\">
                ";
        // line 8
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 9
        echo "
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "                    ";
            $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
            // line 12
            echo "
                    ";
            // line 13
            $this->loadTemplate("partials/lastnews.html.twig", "modular/categories.html.twig", 13)->display(array_merge($context, array("categories" => ($context["page"] ?? null), "page" => $context["child"], "img" => ($context["image"] ?? null), "truncate" => true)));
            // line 14
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modular/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  61 => 14,  59 => 13,  56 => 12,  53 => 11,  36 => 10,  33 => 9,  31 => 8,  23 => 3,  19 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"last-news-item\">
                {% set collection = page.collection() %}

                {% for child in collection %}
                    {% set image = page.media.images|first %}

                    {% include 'partials/lastnews.html.twig' with  {'categories':page, 'page': child,'img': image, 'truncate':true} %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>

", "modular/categories.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\categories.html.twig");
    }
}
