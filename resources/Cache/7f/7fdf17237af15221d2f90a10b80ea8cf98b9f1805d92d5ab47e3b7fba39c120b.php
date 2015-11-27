<?php

/* test2.php */
class __TwigTemplate_ce31fbcf5b7340fcdf781db71491502c81dbcf7f3a8357a25fc010006bcb9df8 extends Twig_Template
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
