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
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "photographer", array()), "dropdown", array()), "enabled", array())) {
            // line 21
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
        ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", array())) {
                    // line 25
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                    // line 26
                    echo "                    <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                        <a href=\"";
                    // line 27
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
                            ";
                    // line 28
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
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
        return array (  123 => 16,  119 => 14,  113 => 11,  110 => 10,  108 => 9,  103 => 7,  99 => 6,  94 => 5,  91 => 4,  88 => 3,  83 => 2,  71 => 1,  67 => 34,  64 => 33,  58 => 32,  51 => 28,  47 => 27,  42 => 26,  39 => 25,  36 => 24,  31 => 23,  25 => 21,  23 => 20,  19 => 18,);
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
    {% if config.themes.photographer.dropdown.enabled %}
        {{ _self.loop(pages) }}
        {% else %}
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {{ page.menu }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
        {% endif %}
</ul>", "partials/navigation.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\navigation.html.twig");
    }
}
