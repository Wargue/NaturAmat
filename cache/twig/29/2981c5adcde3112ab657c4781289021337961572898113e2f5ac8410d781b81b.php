<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_aa8865a690c2cb8717b9d0994bb9e05a0b9f7dc3332f9549affc8fb8d176cd19 extends Twig_Template
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
        echo "<article class=\"box post post-excerpt\">

    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array()))) {
            // line 4
            echo "        <script type=\"text/javascript\">
            ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array())) {
                // line 6
                echo "            jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "/&callback=?', function (data) {
                jQuery('#so-url-shares";
                // line 7
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "').text(data.count);
            });
            ";
            }
            // line 10
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array())) {
                // line 11
                echo "            jQuery.getJSON('http://graph.facebook.com/?id=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "', function (data) {
                jQuery('#so-fburl-shares";
                // line 12
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "').text(data.shares);
            });
            ";
            }
            // line 15
            echo "        </script>
    ";
        }
        // line 17
        echo "    <header>
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 19
            echo "            <h2>
                ";
            // line 20
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 21
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"></a>

                ";
            }
            // line 24
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h2>
        ";
        } else {
            // line 27
            echo "            <h2><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 29
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array())) {
            // line 30
            echo "            <p>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
            echo "</p>
        ";
        }
        // line 32
        echo "    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">";
        // line 36
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</span>
            <span class=\"day\">";
        // line 37
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
        </span>
        ";
        // line 39
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array()))) {
            // line 40
            echo "            <ul class=\"stats\">
                ";
            // line 41
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array())) {
                // line 42
                echo "                    <li><a href=\"https://twitter.com/share\" data-url=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "\" data-text=\"";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "\" class=\"icon fa-twitter\"><span id=\"so-url-shares";
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                ";
            }
            // line 44
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array())) {
                // line 45
                echo "                    <li><a href=\"http://www.facebook.com/sharer.php?u=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares";
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "\">0</span></a></li>
                ";
            }
            // line 47
            echo "            </ul>
        ";
        }
        // line 49
        echo "    </div>

    ";
        // line 51
        if (($context["big_header"] ?? null)) {
            // line 52
            echo "        ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropResize", array(0 => 920, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image blog"), "method");
            echo "
    ";
        } else {
            // line 54
            echo "        ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 920, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image featured"), "method");
            echo "
    ";
        }
        // line 56
        echo "
    <div class=\"blog_content_header\">
    ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array())) {
            // line 59
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 61
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array());
            echo "
        </span>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 66
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 69
                echo "                <li><a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </ul>
    ";
        }
        // line 73
        echo "    </div>


    ";
        // line 76
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 77
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 78
            if ( !($context["truncate"] ?? null)) {
                // line 79
                echo "            ";
                $context["show_prev_next"] = true;
                // line 80
                echo "        ";
            }
            // line 81
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 82
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "</p>
        <p><a class=\"button btn btn-default\" href=\"";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">En Savoir plus...</a></p>
    ";
        } elseif (        // line 84
($context["truncate"] ?? null)) {
            // line 85
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
            echo "</p>
        <p><a class=\"button btn btn-default\" href=\"";
            // line 86
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">En Savoir plus...</a></p>
    ";
        } else {
            // line 88
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 89
            $context["show_prev_next"] = true;
            // line 90
            echo "    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if (($context["show_prev_next"] ?? null)) {
            // line 93
            echo "
        <p class=\"prev-next\">
            ";
            // line 95
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 96
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Article précédent </a>
            ";
            }
            // line 98
            echo "
            ";
            // line 99
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 100
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">Article Suivant <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 102
            echo "        </p>
    ";
        }
        // line 104
        echo "
</article>";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 104,  296 => 102,  290 => 100,  288 => 99,  285 => 98,  279 => 96,  277 => 95,  273 => 93,  271 => 92,  268 => 91,  265 => 90,  263 => 89,  258 => 88,  253 => 86,  248 => 85,  246 => 84,  242 => 83,  237 => 82,  234 => 81,  231 => 80,  228 => 79,  226 => 78,  221 => 77,  219 => 76,  214 => 73,  210 => 71,  196 => 69,  192 => 68,  188 => 66,  186 => 65,  183 => 64,  177 => 61,  173 => 59,  171 => 58,  167 => 56,  161 => 54,  155 => 52,  153 => 51,  149 => 49,  145 => 47,  137 => 45,  134 => 44,  124 => 42,  122 => 41,  119 => 40,  117 => 39,  112 => 37,  108 => 36,  102 => 32,  96 => 30,  93 => 29,  85 => 27,  76 => 24,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  55 => 15,  49 => 12,  44 => 11,  41 => 10,  35 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"box post post-excerpt\">

    {% if site.share.facebook or site.share.twitter %}
        <script type=\"text/javascript\">
            {% if site.share.twitter %}
            jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url={{ page.url(true) }}/&callback=?', function (data) {
                jQuery('#so-url-shares{{ loop.index }}').text(data.count);
            });
            {% endif %}
            {% if site.share.facebook %}
            jQuery.getJSON('http://graph.facebook.com/?id={{ page.url(true) }}', function (data) {
                jQuery('#so-fburl-shares{{ loop.index }}').text(data.shares);
            });
            {% endif %}
        </script>
    {% endif %}
    <header>
        {% if page.header.link %}
            <h2>
                {% if page.header.continue_link is not sameas(false) %}
                    <a href=\"{{ page.url }}\"></a>

                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h2>
        {% else %}
            <h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {% endif %}
        {% if page.header.description %}
            <p>{{ page.header.description }}</p>
        {% endif %}
    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">{{ page.date|date(\"M\") }}</span>
            <span class=\"day\">{{ page.date|date(\"d\") }}</span>
        </span>
        {% if site.share.facebook or site.share.twitter %}
            <ul class=\"stats\">
                {% if site.share.twitter %}
                    <li><a href=\"https://twitter.com/share\" data-url=\"{{ page.url(true) }}\" data-text=\"{{ page.title }}\" class=\"icon fa-twitter\"><span id=\"so-url-shares{{ loop.index }}\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                {% endif %}
                {% if site.share.facebook %}
                    <li><a href=\"http://www.facebook.com/sharer.php?u={{ page.url(true) }}\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares{{ loop.index }}\">0</span></a></li>
                {% endif %}
            </ul>
        {% endif %}
    </div>

    {% if big_header %}
        {{ page.media.images|first.cropResize(920,437).html(page.title, page.title, 'image blog') }}
    {% else %}
        {{ page.media.images|first.cropZoom(920,437).html(page.title, page.title, 'image featured') }}
    {% endif %}

    <div class=\"blog_content_header\">
    {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
    {% endif %}

    {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
                <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
    {% endif %}
    </div>


    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
            {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a class=\"button btn btn-default\" href=\"{{ page.url }}\">En Savoir plus...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550) }}</p>
        <p><a class=\"button btn btn-default\" href=\"{{ page.url }}\">En Savoir plus...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Article précédent </a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Article Suivant <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

</article>", "partials/blog_item.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\partials\\blog_item.html.twig");
    }
}
