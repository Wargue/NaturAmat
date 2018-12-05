<?php

/* partials/lastpicture_item.html.twig */
class __TwigTemplate_ddd52b809c4b543ff69eb2064467c4379b6bc6e2c3cf698283985e1cb5ea5691 extends Twig_Template
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
        echo "<div class=\"news col-lg-3 col-md-6 col-sm-6\">
    <div class=\"blog-card spring-fever\">
        <div class=\"bg-card\">
            <div class=\"img_lastpicture\">";
        // line 4
        echo twig_last($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        echo "</div>
            <div class=\"title-content\">
                <h3>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
                <hr />
                <div class=\"intro\"></div>
            </div><!-- /.title-content -->
            <div class=\"card-info\">
                <p>";
        // line 11
        echo twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), 0, 200);
        echo "</p>
                <br>
                <a class=\"btn btn-default\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">Voir la galerie</a>
            </div><!-- /.card-info -->
            <div class=\"utility-info\">
                <ul class=\"utility-list\">
                    <li class=\"img_author\"></li>
                    <li class=\"date\">";
        // line 18
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
        echo "</li>
                </ul>
            </div><!-- /.utility-info -->
            <!-- overlays -->
            <div class=\"gradient-overlay\"></div>
            <div class=\"color-overlay\"></div>
        </div>
    </div><!-- /.blog-card -->
</div>";
    }

    public function getTemplateName()
    {
        return "partials/lastpicture_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  42 => 13,  37 => 11,  29 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"news col-lg-3 col-md-6 col-sm-6\">
    <div class=\"blog-card spring-fever\">
        <div class=\"bg-card\">
            <div class=\"img_lastpicture\">{{ page.media.images|last }}</div>
            <div class=\"title-content\">
                <h3>{{ page.title }}</h3>
                <hr />
                <div class=\"intro\"></div>
            </div><!-- /.title-content -->
            <div class=\"card-info\">
                <p>{{ page.content|slice(0,200)}}</p>
                <br>
                <a class=\"btn btn-default\" href=\"{{ page.url }}\">Voir la galerie</a>
            </div><!-- /.card-info -->
            <div class=\"utility-info\">
                <ul class=\"utility-list\">
                    <li class=\"img_author\"></li>
                    <li class=\"date\">{{ page.date|date(\"d/m/Y\") }}</li>
                </ul>
            </div><!-- /.utility-info -->
            <!-- overlays -->
            <div class=\"gradient-overlay\"></div>
            <div class=\"color-overlay\"></div>
        </div>
    </div><!-- /.blog-card -->
</div>", "partials/lastpicture_item.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\lastpicture_item.html.twig");
    }
}
