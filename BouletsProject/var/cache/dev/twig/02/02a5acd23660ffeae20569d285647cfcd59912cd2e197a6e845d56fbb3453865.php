<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_e81b6c353b5df6f328f9b67b68785fb7f1bbdbe6521882d271eb8420cbe30209 extends Twig_Template
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
        $__internal_441d98b87d392d7f3700d0842c53f930fd7a56182cd9f3ed088e06d566ed2ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441d98b87d392d7f3700d0842c53f930fd7a56182cd9f3ed088e06d566ed2ccf->enter($__internal_441d98b87d392d7f3700d0842c53f930fd7a56182cd9f3ed088e06d566ed2ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_441d98b87d392d7f3700d0842c53f930fd7a56182cd9f3ed088e06d566ed2ccf->leave($__internal_441d98b87d392d7f3700d0842c53f930fd7a56182cd9f3ed088e06d566ed2ccf_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
