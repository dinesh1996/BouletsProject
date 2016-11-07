<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5f5f0d526897ecbfe39605e2e47fcac638d79ceb43aca7b5bbf376ab4824c376 extends Twig_Template
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
        $__internal_fc2b848a67cf3866719f246b7f07571c17ddf1757810b93c96c116e15fed41e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2b848a67cf3866719f246b7f07571c17ddf1757810b93c96c116e15fed41e8->enter($__internal_fc2b848a67cf3866719f246b7f07571c17ddf1757810b93c96c116e15fed41e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2b848a67cf3866719f246b7f07571c17ddf1757810b93c96c116e15fed41e8->leave($__internal_fc2b848a67cf3866719f246b7f07571c17ddf1757810b93c96c116e15fed41e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f3b80fd7400ff709c4c47ba174699264a76b5da7f4d5e6f04a031c40840a568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3b80fd7400ff709c4c47ba174699264a76b5da7f4d5e6f04a031c40840a568->enter($__internal_9f3b80fd7400ff709c4c47ba174699264a76b5da7f4d5e6f04a031c40840a568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f3b80fd7400ff709c4c47ba174699264a76b5da7f4d5e6f04a031c40840a568->leave($__internal_9f3b80fd7400ff709c4c47ba174699264a76b5da7f4d5e6f04a031c40840a568_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e161e1e1ede469661955500c40f3ba78779fb8f4190a8a722d81e93cc06db0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e161e1e1ede469661955500c40f3ba78779fb8f4190a8a722d81e93cc06db0f8->enter($__internal_e161e1e1ede469661955500c40f3ba78779fb8f4190a8a722d81e93cc06db0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e161e1e1ede469661955500c40f3ba78779fb8f4190a8a722d81e93cc06db0f8->leave($__internal_e161e1e1ede469661955500c40f3ba78779fb8f4190a8a722d81e93cc06db0f8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8487d31199437e0942f4e25c942cc173a6f89e21e9456992f1e6b239c1d4e39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8487d31199437e0942f4e25c942cc173a6f89e21e9456992f1e6b239c1d4e39b->enter($__internal_8487d31199437e0942f4e25c942cc173a6f89e21e9456992f1e6b239c1d4e39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8487d31199437e0942f4e25c942cc173a6f89e21e9456992f1e6b239c1d4e39b->leave($__internal_8487d31199437e0942f4e25c942cc173a6f89e21e9456992f1e6b239c1d4e39b_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
