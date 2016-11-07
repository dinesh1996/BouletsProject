<?php

/* BackBundle:Default:index.html.twig */
class __TwigTemplate_99e4e346c19cf8d7e595c82e0bfed4d870ea125eb10bbae59b4e36d09a13040a extends Twig_Template
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
        $__internal_0d3a2bc82afa90aeb5be4d83de98b6f6da619e05f714b347f890e8a00fdabd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3a2bc82afa90aeb5be4d83de98b6f6da619e05f714b347f890e8a00fdabd4a->enter($__internal_0d3a2bc82afa90aeb5be4d83de98b6f6da619e05f714b347f890e8a00fdabd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0d3a2bc82afa90aeb5be4d83de98b6f6da619e05f714b347f890e8a00fdabd4a->leave($__internal_0d3a2bc82afa90aeb5be4d83de98b6f6da619e05f714b347f890e8a00fdabd4a_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:index.html.twig";
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
", "BackBundle:Default:index.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/Default/index.html.twig");
    }
}
