<?php

/* partials/navigation.html.twig */
class __TwigTemplate_9d128264a8d9891ab78ee615faaf6ee8a0d663d784b4d2b7fcb544becfa85b32 extends Twig_Template
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
        // line 18
        echo "
<ul class=\"nav navbar-nav\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "            ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 22
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 23
                echo "                    <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        <a href=\"";
                // line 24
                echo $this->getAttribute($context["page"], "url", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "header", array()), "media", array()), "images", array()), ($context["image"] ?? null), array(), "array"), "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a>
                    </li>
                ";
            }
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 4
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                    // line 5
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                ";
                    // line 9
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                        // line 10
                        echo "                    <ul>
                        ";
                        // line 11
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 14
                    echo "            </li>
        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 16,  106 => 14,  100 => 11,  97 => 10,  95 => 9,  90 => 7,  86 => 6,  81 => 5,  78 => 4,  75 => 3,  70 => 2,  58 => 1,  54 => 28,  48 => 27,  38 => 24,  33 => 23,  30 => 22,  27 => 21,  23 => 20,  19 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page) %}
    {% for p in page.children %}
        {% if p.visible %}
            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {{ p.menu }}
                </a>
                {% if p.children.count > 0 %}
                    <ul>
                        {{ _self.loop(p) }}
                    </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"nav navbar-nav\">
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\"><img src=\"{{ page.header.media.images[image].url }}\">{{ page.menu }}</a>
                    </li>
                {% endif %}
            {% endfor %}
</ul>", "partials/navigation.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\navigation.html.twig");
    }
}
