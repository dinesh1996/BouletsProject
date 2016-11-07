<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7e44535d2dd0929348f59fb7ff9d7396ad7f9a3430936e6c528ca6fcebeb57ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f9ecfc2b4f992f0bf9669281909b0bc0347c25ad1edbdf018424bf260f7ee18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9ecfc2b4f992f0bf9669281909b0bc0347c25ad1edbdf018424bf260f7ee18->enter($__internal_8f9ecfc2b4f992f0bf9669281909b0bc0347c25ad1edbdf018424bf260f7ee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f9ecfc2b4f992f0bf9669281909b0bc0347c25ad1edbdf018424bf260f7ee18->leave($__internal_8f9ecfc2b4f992f0bf9669281909b0bc0347c25ad1edbdf018424bf260f7ee18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4248c9878456062899ad18b8db7e0c0883d3e5bca2a5f32fd68ea6b4a293489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4248c9878456062899ad18b8db7e0c0883d3e5bca2a5f32fd68ea6b4a293489->enter($__internal_e4248c9878456062899ad18b8db7e0c0883d3e5bca2a5f32fd68ea6b4a293489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e4248c9878456062899ad18b8db7e0c0883d3e5bca2a5f32fd68ea6b4a293489->leave($__internal_e4248c9878456062899ad18b8db7e0c0883d3e5bca2a5f32fd68ea6b4a293489_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea617c7288873e203bfec4fd76d329fdc2febfdcecfee50a87c153d7a8763f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea617c7288873e203bfec4fd76d329fdc2febfdcecfee50a87c153d7a8763f88->enter($__internal_ea617c7288873e203bfec4fd76d329fdc2febfdcecfee50a87c153d7a8763f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea617c7288873e203bfec4fd76d329fdc2febfdcecfee50a87c153d7a8763f88->leave($__internal_ea617c7288873e203bfec4fd76d329fdc2febfdcecfee50a87c153d7a8763f88_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed086c48b7562c69740c51c008e21f319b85da998781a8d29e451d45c6ccbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed086c48b7562c69740c51c008e21f319b85da998781a8d29e451d45c6ccbb5->enter($__internal_0ed086c48b7562c69740c51c008e21f319b85da998781a8d29e451d45c6ccbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ed086c48b7562c69740c51c008e21f319b85da998781a8d29e451d45c6ccbb5->leave($__internal_0ed086c48b7562c69740c51c008e21f319b85da998781a8d29e451d45c6ccbb5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Project/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
