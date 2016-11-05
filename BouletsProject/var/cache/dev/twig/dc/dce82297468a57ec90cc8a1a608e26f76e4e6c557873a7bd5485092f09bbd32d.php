<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9fbe296c4e8998d44bd2f5f7b3cbaebae15de6245687fbdde89b7062074ca1c5 extends Twig_Template
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
        $__internal_0651324e0069c8fdcab1e95e1e2b79b0c05dd4e7179ffd71a5885bfe0763eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0651324e0069c8fdcab1e95e1e2b79b0c05dd4e7179ffd71a5885bfe0763eda9->enter($__internal_0651324e0069c8fdcab1e95e1e2b79b0c05dd4e7179ffd71a5885bfe0763eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0651324e0069c8fdcab1e95e1e2b79b0c05dd4e7179ffd71a5885bfe0763eda9->leave($__internal_0651324e0069c8fdcab1e95e1e2b79b0c05dd4e7179ffd71a5885bfe0763eda9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/html/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
