<?php

/* partials/lastnews_item.html.twig */
class __TwigTemplate_9c33047c97b56b68fb77a11f86729dbe1c87b5da810917b08d3bd78d7e97c844 extends Twig_Template
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
        echo "<div class=\"news col-lg-3\">
    <div class=\"blog-card spring-fever\" style=\"background-image: ";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), "url", array());
        echo "\">
        <div class=\"title-content\">
            <h3>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
            <hr />
            <div class=\"intro\">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
        </div><!-- /.title-content -->
        <div class=\"card-info\">
            <p>";
        // line 9
        echo twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), 0, 200);
        echo "</p>
            <a class=\"btn btn-default\" href=\"";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">Read more</a>
        </div><!-- /.card-info -->
        <div class=\"utility-info\">
            <ul class=\"utility-list\">
                <li class=\"comments\">12</li>
                <li class=\"date\">";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
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

    public function getTemplateName()
    {
        return "partials/lastnews_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  39 => 10,  35 => 9,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"news col-lg-3\">
    <div class=\"blog-card spring-fever\" style=\"background-image: {{ page.media.images.url }}\">
        <div class=\"title-content\">
            <h3>{{ page.title }}</h3>
            <hr />
            <div class=\"intro\">Yllamco laboris nisi ut aliquip ex ea commodo.</div>
        </div><!-- /.title-content -->
        <div class=\"card-info\">
            <p>{{ page.content|slice(0,200)}}</p>
            <a class=\"btn btn-default\" href=\"{{ page.url }}\">Read more</a>
        </div><!-- /.card-info -->
        <div class=\"utility-info\">
            <ul class=\"utility-list\">
                <li class=\"comments\">12</li>
                <li class=\"date\">{{ page.date|date(\"d/m/Y\") }}</li>
            </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class=\"gradient-overlay\"></div>
        <div class=\"color-overlay\"></div>
    </div><!-- /.blog-card -->
</div>
", "partials/lastnews_item.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\lastnews_item.html.twig");
    }
}
