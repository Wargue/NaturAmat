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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1342579554")->display($context);
        // line 31
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
        return array (  21 => 31,  19 => 1,);
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
class __TwigTemplate_a41cbc018645dd72d1b6ea00018ca97ed2a327bf0979cf4915511fa64b313ca7_1342579554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 4
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 5
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 6
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 8
        if ((($context["base_url"] ?? null) == "/")) {
            // line 9
            $context["base_url"] = "";
        }
        // line 12
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 13
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 18
            echo "      ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 18)->display($context);
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
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
            // line 22
            echo "      ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 22)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 23
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
        // line 24
        echo "
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 26
            echo "      ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 26)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 27
            echo "    ";
        }
        // line 28
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
        return array (  190 => 28,  187 => 27,  184 => 26,  182 => 25,  179 => 24,  165 => 23,  162 => 22,  145 => 21,  142 => 20,  139 => 19,  136 => 18,  133 => 17,  130 => 16,  126 => 1,  123 => 13,  121 => 12,  118 => 9,  116 => 8,  114 => 6,  112 => 5,  110 => 4,  96 => 1,  21 => 31,  19 => 1,);
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
