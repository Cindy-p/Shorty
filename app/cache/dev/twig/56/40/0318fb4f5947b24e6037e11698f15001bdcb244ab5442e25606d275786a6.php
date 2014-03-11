<?php

/* ShortyFirstBundle:Default:urlSuccess.html.twig */
class __TwigTemplate_56400318fb4f5947b24e6037e11698f15001bdcb244ab5442e25606d275786a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Bonjour !";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<p>C'est bon !</p>
";
    }

    public function getTemplateName()
    {
        return "ShortyFirstBundle:Default:urlSuccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
