<?php

/* test2.php */
class __TwigTemplate_8724082a13fd624964794f8abf6115f96f6b3884f5666013002c29d8731ecde7 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["val2"]) ? $context["val2"] : $this->getContext($context, "val2")), "html", null, true);
        echo "
adsad
";
    }

    public function getTemplateName()
    {
        return "test2.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ val2 }}*/
/* adsad*/
/* */
