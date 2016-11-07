<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_a8e988b750029e4bfc252d6a6b7c2d022afff746a4e8f9d1d80374d37f4d549d extends Twig_Template
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
        $__internal_27e354db3dbec9cc39d2330791ef4c431f82dab934d03a5a2091f7e3a95f6cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e354db3dbec9cc39d2330791ef4c431f82dab934d03a5a2091f7e3a95f6cb6->enter($__internal_27e354db3dbec9cc39d2330791ef4c431f82dab934d03a5a2091f7e3a95f6cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_27e354db3dbec9cc39d2330791ef4c431f82dab934d03a5a2091f7e3a95f6cb6->leave($__internal_27e354db3dbec9cc39d2330791ef4c431f82dab934d03a5a2091f7e3a95f6cb6_prof);

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
", "FrontBundle:Default:index.html.twig", "/var/www/html/Project/BouletsProject/src/Boulets/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
