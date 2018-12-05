<?php

/* @Page:C:/wamp/www/Naturamat/user/pages/01.accueil */
class __TwigTemplate_2d51d1a3224ce1554f7ae7b04c255cad25a90b3b338e81651605fb30ad292b55 extends Twig_Template
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
        echo "<p>s</p>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp/www/Naturamat/user/pages/01.accueil";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>s</p>", "@Page:C:/wamp/www/Naturamat/user/pages/01.accueil", "");
    }
}
