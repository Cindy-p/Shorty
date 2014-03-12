<?php

/* ShortyFirstBundle:Default:index.html.twig */
class __TwigTemplate_3dbde3e7ffda8ba3a549f12eab420d00ab5d975d8bf45e5cf1ffbaf7f62ee6b3 extends Twig_Template
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
        echo "        
<p>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mot"]) ? $context["mot"] : $this->getContext($context, "mot")), "html", null, true);
        echo "</p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mot2"]) ? $context["mot2"] : $this->getContext($context, "mot2")), "html", null, true);
        echo "</p>
    <div class=\"container-fluid\"></div>
        <form class=\"form\" role=\"form\">
            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ancienne_url"), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ancienne_url"), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nouvelle_url"), 'label');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nouvelle_url"), 'widget');
        echo "
            </div>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'widget');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShortyFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  71 => 19,  66 => 17,  62 => 16,  56 => 13,  52 => 12,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
