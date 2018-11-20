<?php

/* partials/lastnews_item.html.twig */
class __TwigTemplate_a9caed0abc4ee4a2f1e00140d53625ffb305e52248e3457d9c4c9a76777221e1 extends Twig_Template
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
    <div class=\"blog-card spring-fever\">
        <div class=\"bg-card\">";
        // line 3
        echo twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        echo "
        <div class=\"title-content\">
            <h3>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
            <hr />
            <div class=\"intro\"></div>
        </div><!-- /.title-content -->
        <div class=\"card-info\">
            <p>";
        // line 10
        echo twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), 0, 200);
        echo "</p>
            </br>
            <a class=\"btn btn-default\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\">Lire plus</a>
        </div><!-- /.card-info -->
        <div class=\"utility-info\">
            <ul class=\"utility-list\">
                <li class=\"comments\"><a href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "#disqus_thread\">e</a></li>
                <li class=\"date\">";
        // line 17
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
        echo "</li>
            </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class=\"gradient-overlay\"></div>
        <div class=\"color-overlay\"></div>
        </div>
    </div><!-- /.blog-card -->
</div>
<script>          window.DISQUSWIDGETS = undefined;
    \$.getScript(\"http://\" + ";
        // line 27
        echo twig_escape_filter($this->env, ($context["shortname"] ?? null), "js");
        echo " + \".disqus.com/count.js\");</script>";
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
        return array (  65 => 27,  52 => 17,  48 => 16,  41 => 12,  36 => 10,  28 => 5,  23 => 3,  19 => 1,);
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
    <div class=\"blog-card spring-fever\">
        <div class=\"bg-card\">{{ page.media.images|first }}
        <div class=\"title-content\">
            <h3>{{ page.title }}</h3>
            <hr />
            <div class=\"intro\"></div>
        </div><!-- /.title-content -->
        <div class=\"card-info\">
            <p>{{ page.content|slice(0,200)}}</p>
            </br>
            <a class=\"btn btn-default\" href=\"{{ page.url }}\">Lire plus</a>
        </div><!-- /.card-info -->
        <div class=\"utility-info\">
            <ul class=\"utility-list\">
                <li class=\"comments\"><a href=\"{{ page.url }}#disqus_thread\">e</a></li>
                <li class=\"date\">{{ page.date|date(\"d/m/Y\") }}</li>
            </ul>
        </div><!-- /.utility-info -->
        <!-- overlays -->
        <div class=\"gradient-overlay\"></div>
        <div class=\"color-overlay\"></div>
        </div>
    </div><!-- /.blog-card -->
</div>
<script>          window.DISQUSWIDGETS = undefined;
    \$.getScript(\"http://\" + {{ shortname|e('js') }} + \".disqus.com/count.js\");</script>", "partials/lastnews_item.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\lastnews_item.html.twig");
    }
}
