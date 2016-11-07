<?php

/* BackBundle:Default:index.html.twig */
class __TwigTemplate_153f789bcddf351663174649d284c2742266643318f7b08c224bb1efec15dacc extends Twig_Template
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
        $__internal_bfb419b12de1ebbc407758804c95d0d7149b2e7cb0c01cb67e230df20646a96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb419b12de1ebbc407758804c95d0d7149b2e7cb0c01cb67e230df20646a96d->enter($__internal_bfb419b12de1ebbc407758804c95d0d7149b2e7cb0c01cb67e230df20646a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bfb419b12de1ebbc407758804c95d0d7149b2e7cb0c01cb67e230df20646a96d->leave($__internal_bfb419b12de1ebbc407758804c95d0d7149b2e7cb0c01cb67e230df20646a96d_prof);

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
", "BackBundle:Default:index.html.twig", "/var/www/html/Project/BouletsProject/src/Boulets/BackBundle/Resources/views/Default/index.html.twig");
    }
}
