<?php

/* partials/comments.html.twig */
class __TwigTemplate_e4466d4663effccfb1c46225b4eaf0d6cee1c132d4854ea8cb24050da0340cba extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "enable_comments_plugin", array())) {
            // line 2
            echo "    ";
            $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
            // line 3
            echo "<div class=\"container container-comment\" >
    <div class=\"row\">
    <h3 class=\"title-comment\">";
            // line 5
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.ADD_COMMENT");
            echo "</h3>

    <form class=\"col-lg-10\" name=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 8
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
            echo "\"
          method=\"";
            // line 9
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">

        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 12
                echo "            ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 13
                echo "            ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 14
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "authenticated", array()))) {
                    // line 17
                    echo "                ";
                    if (($this->getAttribute($context["field"], "name", array()) == "name")) {
                        // line 18
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array())));
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                        echo "\">
                ";
                    } elseif (($this->getAttribute(                    // line 19
$context["field"], "name", array()) == "email")) {
                        // line 20
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute($context["field"], "name", array())));
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                        echo "\">
                ";
                    } else {
                        // line 22
                        echo "                    <div class=\"row\">
                        ";
                        // line 23
                        $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 23)->display($context);
                        // line 24
                        echo "                    </div>
                ";
                    }
                    // line 26
                    echo "            ";
                } else {
                    // line 27
                    echo "                <div>
                    ";
                    // line 28
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 28)->display($context);
                    // line 29
                    echo "                </div>
            ";
                }
                // line 31
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/comments.html.twig", 32)->display($context);
            // line 33
            echo "
        <div class=\"buttons\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 36
                echo "            <button class=\"button\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </div>

        ";
            // line 40
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    <div class=\"alert\">";
            // line 43
            echo $this->getAttribute(($context["form"] ?? null), "message", array());
            echo "</div>

    ";
            // line 45
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()))) {
                // line 46
                echo "
        <h3>";
                // line 47
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.COMMENTS");
                echo "</h3>

        <table>
            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 51
                    echo "            <tr>
                <td>
                    ";
                    // line 53
                    echo $this->getAttribute($context["comment"], "text", array());
                    echo "
                    <br />
                    ";
                    // line 55
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo " ";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.BY");
                    echo " ";
                    echo $this->getAttribute($context["comment"], "author", array());
                    echo "
                </td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "        </table>
    ";
            }
        }
        // line 62
        echo "    </div>
</div>
<style>
    .container-comment{
        margin-top: 50px;

    }

</style>";
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 62,  210 => 59,  194 => 55,  189 => 53,  185 => 51,  181 => 50,  175 => 47,  172 => 46,  170 => 45,  165 => 43,  159 => 40,  155 => 38,  144 => 36,  140 => 35,  136 => 33,  133 => 32,  119 => 31,  115 => 29,  113 => 28,  110 => 27,  107 => 26,  103 => 24,  101 => 23,  98 => 22,  90 => 20,  88 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if grav.twig.enable_comments_plugin %}
    {% set scope = scope ?: 'data.' %}
<div class=\"container container-comment\" >
    <div class=\"row\">
    <h3 class=\"title-comment\">{{'PLUGIN_COMMENTS.ADD_COMMENT'|t}}</h3>

    <form class=\"col-lg-10\" name=\"{{ grav.config.plugins.comments.form.name }}\"
          action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
          method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">

        {% for field in grav.config.plugins.comments.form.fields %}
            {% set value = form.value(field.name) %}
            {% if field.evaluateDefault %}
                {% set value = evaluate(field.evaluateDefault) %}
            {% endif %}
            {% if config.plugins.login.enabled and grav.user.authenticated %}
                {% if field.name == 'name' %}
                    <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{grav.user.fullname}}\">
                {% elseif field.name == 'email' %}
                    <input type=\"hidden\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{grav.user.email}}\">
                {% else %}
                    <div class=\"row\">
                        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                    </div>
                {% endif %}
            {% else %}
                <div>
                    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                </div>
            {% endif %}
        {% endfor %}
        {% include \"forms/fields/formname/formname.html.twig\" %}

        <div class=\"buttons\">
        {% for button in grav.config.plugins.comments.form.buttons %}
            <button class=\"button\" type=\"{{ button.type|default('submit') }}\">{{ button.value|t|default('Submit') }}</button>
        {% endfor %}
        </div>

        {{ nonce_field('form', 'form-nonce')|raw }}
    </form>

    <div class=\"alert\">{{ form.message }}</div>

    {% if grav.twig.comments|length %}

        <h3>{{'PLUGIN_COMMENTS.COMMENTS'|t}}</h3>

        <table>
            {% for comment in grav.twig.comments|array_reverse %}
            <tr>
                <td>
                    {{comment.text}}
                    <br />
                    {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}} {{'PLUGIN_COMMENTS.BY'|t}} {{comment.author}}
                </td>
            </tr>
            {% endfor %}
        </table>
    {% endif %}
{% endif %}
    </div>
</div>
<style>
    .container-comment{
        margin-top: 50px;

    }

</style>", "partials/comments.html.twig", "C:\\wamp\\www\\Naturamat\\user\\plugins\\comments\\templates\\partials\\comments.html.twig");
    }
}
