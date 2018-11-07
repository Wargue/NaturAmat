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
        echo "    <footer id='footer' role='contentinfo'>
        <div class='container'>
            <a class='logo' href='https://codepen.io/collection/XRoxGR' rel='home'>Calibration theme</a>
            <a class='copy' href='https://mobilemarkup.com' target='_blank'>&copy; mobileMarkup.com</a>
        </div>
    </footer>
    <script>
        (function() {
            (function() {
                let logo, logo_css;
                logo = '<svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\"><title>codepen-logo</title><path d=\"M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zM7.139 21.651l1.35-1.35a.387.387 0 0 0 0-.54l-3.49-3.49a.387.387 0 0 0-.54 0l-1.35 1.35a.39.39 0 0 0 0 .54l3.49 3.49a.38.38 0 0 0 .54 0zm6.922.153l2.544-2.543a.722.722 0 0 0 0-1.018l-6.582-6.58a.722.722 0 0 0-1.018 0l-2.543 2.544a.719.719 0 0 0 0 1.018l6.58 6.579c.281.28.737.28 1.019 0zm14.779-5.85l-7.786-7.79a.554.554 0 0 0-.788 0l-5.235 5.23a.558.558 0 0 0 0 .789l7.79 7.789c.216.216.568.216.785 0l5.236-5.236a.566.566 0 0 0 0-.786l-.002.003zm-3.89 2.806a.813.813 0 1 1 0-1.626.813.813 0 0 1 0 1.626z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>';
                logo_css = '.mM{display:block;border-radius:50%;box-shadow:0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);position:fixed;bottom:1em;right:1em;-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:all 240ms ease-in-out;transition:all 240ms ease-in-out;z-index:9999;opacity:0.75}.mM svg{display:block}.mM:hover{opacity:1;-webkit-transform:scale(1.125);transform:scale(1.125)}';
                document.head.insertAdjacentHTML('beforeend', '<style>' + logo_css + '</style>');
                document.body.insertAdjacentHTML('beforeend', '<a href=\"https://codepen.io/mican/\" target=\"_blank\" class=\"mM\">' + logo + '</a>');
            })();

            \$('.gallery-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.find('figcaption').text() || item.el.attr('title');
                    }
                },
                zoom: {
                    enabled: true
                },
                // duration: 300
                gallery: {
                    enabled: true,
                    navigateByImgClick: false,
                    tCounter: ''
                },
                disableOn: function() {
                    if (\$(window).width() < 640) {
                        return false;
                    }
                    return true;
                }
            });

        }).call(this);
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
    <footer id='footer' role='contentinfo'>
        <div class='container'>
            <a class='logo' href='https://codepen.io/collection/XRoxGR' rel='home'>Calibration theme</a>
            <a class='copy' href='https://mobilemarkup.com' target='_blank'>&copy; mobileMarkup.com</a>
        </div>
    </footer>
    <script>
        (function() {
            (function() {
                let logo, logo_css;
                logo = '<svg width=\"32\" height=\"32\" viewBox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\"><title>codepen-logo</title><path d=\"M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zM7.139 21.651l1.35-1.35a.387.387 0 0 0 0-.54l-3.49-3.49a.387.387 0 0 0-.54 0l-1.35 1.35a.39.39 0 0 0 0 .54l3.49 3.49a.38.38 0 0 0 .54 0zm6.922.153l2.544-2.543a.722.722 0 0 0 0-1.018l-6.582-6.58a.722.722 0 0 0-1.018 0l-2.543 2.544a.719.719 0 0 0 0 1.018l6.58 6.579c.281.28.737.28 1.019 0zm14.779-5.85l-7.786-7.79a.554.554 0 0 0-.788 0l-5.235 5.23a.558.558 0 0 0 0 .789l7.79 7.789c.216.216.568.216.785 0l5.236-5.236a.566.566 0 0 0 0-.786l-.002.003zm-3.89 2.806a.813.813 0 1 1 0-1.626.813.813 0 0 1 0 1.626z\" fill=\"#FFF\" fill-rule=\"evenodd\"/></svg>';
                logo_css = '.mM{display:block;border-radius:50%;box-shadow:0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);position:fixed;bottom:1em;right:1em;-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-transition:all 240ms ease-in-out;transition:all 240ms ease-in-out;z-index:9999;opacity:0.75}.mM svg{display:block}.mM:hover{opacity:1;-webkit-transform:scale(1.125);transform:scale(1.125)}';
                document.head.insertAdjacentHTML('beforeend', '<style>' + logo_css + '</style>');
                document.body.insertAdjacentHTML('beforeend', '<a href=\"https://codepen.io/mican/\" target=\"_blank\" class=\"mM\">' + logo + '</a>');
            })();

            \$('.gallery-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.find('figcaption').text() || item.el.attr('title');
                    }
                },
                zoom: {
                    enabled: true
                },
                // duration: 300
                gallery: {
                    enabled: true,
                    navigateByImgClick: false,
                    tCounter: ''
                },
                disableOn: function() {
                    if (\$(window).width() < 640) {
                        return false;
                    }
                    return true;
                }
            });

        }).call(this);
    </script>
{% endblock %}


", "portfolio.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\portfolio.html.twig");
    }
}
