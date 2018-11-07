<?php

/* portfolio.html.twig */
class __TwigTemplate_3e980e46dcdafb849f3cb2ffe334f90a3c0f8f4f3a510c2718c818cb32ea3aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "<article class='gallery'>
    <a class='gallery-link' href='";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["image"], "thumbnail", array()), array(), "array"), "url", array());
            echo "'>
        <figure class='gallery-image'>
            <img height='1200' src='";
            // line 9
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["image"], "thumbnail", array()), array(), "array"), "url", array());
            echo "' width='1400'>
            <figcaption>";
            // line 10
            echo $this->getAttribute($context["image"], "description", array());
            echo "</figcaption>
        </figure>
    </a>
</article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <script>
        var elem = document.querySelector('.m-p-g');

        document.addEventListener('DOMContentLoaded', function() {
            var gallery = new MaterialPhotoGallery(elem);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  50 => 10,  46 => 9,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}

    {% for image in page.header.images %}
<article class='gallery'>
    <a class='gallery-link' href='{{ page.media[image.thumbnail].url }}'>
        <figure class='gallery-image'>
            <img height='1200' src='{{ page.media[image.thumbnail].url }}' width='1400'>
            <figcaption>{{ image.description }}</figcaption>
        </figure>
    </a>
</article>
    {% endfor %}
    <script>
        var elem = document.querySelector('.m-p-g');

        document.addEventListener('DOMContentLoaded', function() {
            var gallery = new MaterialPhotoGallery(elem);
        });
    </script>
{% endblock %}


", "portfolio.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\portfolio.html.twig");
    }
}
