<?php

/* modular/lastnews_item.html.twig */
class __TwigTemplate_4187d083c82395499822dd2d1ed27b6368a7151573cb944291cd33fea8b71899 extends Twig_Template
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
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                <div class=\"news col-lg-4\">
                    <div class=\"blog-card spring-fever\" style=\"background-image: ";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "media", array()), "images", array()), "url", array());
            echo "\">
                            <div class=\"title-content\">
                            <h3>";
            // line 11
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                            <hr />
                            <div class=\"intro\">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
                        </div><!-- /.title-content -->
                        <div class=\"card-info\">
                           <p>";
            // line 16
            echo twig_slice($this->env, $this->getAttribute($context["item"], "content", array()), 0, 200);
            echo "</p>
                            <a class=\"btn btn-default\" href=\"";
            // line 17
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">Read more</a>
                        </div><!-- /.card-info -->
                        <div class=\"utility-info\">
                            <ul class=\"utility-list\">
                                <li class=\"comments\">12</li>
                                <li class=\"date\">";
            // line 22
            echo twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y");
            echo "</li>
                            </ul>
                        </div><!-- /.utility-info -->
                        <!-- overlays -->
                        <div class=\"gradient-overlay\"></div>
                        <div class=\"color-overlay\"></div>
                    </div><!-- /.blog-card -->
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modular/lastnews_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  62 => 22,  54 => 17,  50 => 16,  42 => 11,  37 => 9,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
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
            {% for item in page.collection %}
                <div class=\"news col-lg-4\">
                    <div class=\"blog-card spring-fever\" style=\"background-image: {{ item.media.images.url }}\">
                            <div class=\"title-content\">
                            <h3>{{ item.title }}</h3>
                            <hr />
                            <div class=\"intro\">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
                        </div><!-- /.title-content -->
                        <div class=\"card-info\">
                           <p>{{ item.content|slice(0,200)}}</p>
                            <a class=\"btn btn-default\" href=\"{{ item.url }}\">Read more</a>
                        </div><!-- /.card-info -->
                        <div class=\"utility-info\">
                            <ul class=\"utility-list\">
                                <li class=\"comments\">12</li>
                                <li class=\"date\">{{ item.date|date(\"d/m/Y\") }}</li>
                            </ul>
                        </div><!-- /.utility-info -->
                        <!-- overlays -->
                        <div class=\"gradient-overlay\"></div>
                        <div class=\"color-overlay\"></div>
                    </div><!-- /.blog-card -->
                </div>
            {% endfor %}
        </div>
    </div>
</div>

", "modular/lastnews_item.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\modular\\lastnews_item.html.twig");
    }
}
