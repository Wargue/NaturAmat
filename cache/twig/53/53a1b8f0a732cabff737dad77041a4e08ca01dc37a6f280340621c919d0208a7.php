<?php

/* blog.html.twig */
class __TwigTemplate_a41cbc018645dd72d1b6ea00018ca97ed2a327bf0979cf4915511fa64b313ca7 extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "531898567")->display($context);
        // line 36
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block javascripts %}
    {% do assets.addJs('theme://assets/js/skel.min.js') %}
    {% do assets.addJs('theme://assets/js/util.js') %}
    {% do assets.addJs('theme://assets/js/main.js') %}
    {% endblock %}


  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    {% for child in collection %}
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
    {% endfor %}

    {% if config.plugins.pagination.enabled and collection.params.pagination %}
      {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
    {% endif %}
  {% endblock %}

{% endembed %}


", "blog.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_a41cbc018645dd72d1b6ea00018ca97ed2a327bf0979cf4915511fa64b313ca7_531898567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 10
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 11
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 13
        if ((($context["base_url"] ?? null) == "/")) {
            // line 14
            $context["base_url"] = "";
        }
        // line 17
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 18
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 4
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 5
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 6
        echo "    ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 23
            echo "      ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 23)->display($context);
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
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
            // line 27
            echo "      ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 27)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 28
            echo "    ";
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
        // line 29
        echo "
    ";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 31
            echo "      ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 31)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 32
            echo "    ";
        }
        // line 33
        echo "  ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 33,  209 => 32,  206 => 31,  204 => 30,  201 => 29,  187 => 28,  184 => 27,  167 => 26,  164 => 25,  161 => 24,  158 => 23,  155 => 22,  152 => 21,  148 => 6,  145 => 5,  142 => 4,  139 => 3,  136 => 2,  132 => 1,  129 => 18,  127 => 17,  124 => 14,  122 => 13,  120 => 11,  118 => 10,  116 => 9,  101 => 1,  21 => 36,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
    {% block javascripts %}
    {% do assets.addJs('theme://assets/js/skel.min.js') %}
    {% do assets.addJs('theme://assets/js/util.js') %}
    {% do assets.addJs('theme://assets/js/main.js') %}
    {% endblock %}


  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    {% if config.plugins.breadcrumbs.enabled %}
      {% include 'partials/breadcrumbs.html.twig' %}
    {% endif %}

    {% for child in collection %}
      {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
    {% endfor %}

    {% if config.plugins.pagination.enabled and collection.params.pagination %}
      {% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
    {% endif %}
  {% endblock %}

{% endembed %}


", "blog.html.twig", "C:\\wamp\\www\\Naturamat\\user\\themes\\customtheme\\templates\\blog.html.twig");
    }
}
