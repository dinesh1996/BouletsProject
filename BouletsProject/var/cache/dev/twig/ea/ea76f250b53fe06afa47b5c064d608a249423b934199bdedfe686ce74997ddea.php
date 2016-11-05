<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a02cc4d4012960ab59bc420a004d534affdf4610f2ab5ef250ec2df5093cedb1 extends Twig_Template
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
        $__internal_94fd3cfbd3e6275b5076796c7654a922a872948d974624776b12240b2bd2b79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fd3cfbd3e6275b5076796c7654a922a872948d974624776b12240b2bd2b79d->enter($__internal_94fd3cfbd3e6275b5076796c7654a922a872948d974624776b12240b2bd2b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94fd3cfbd3e6275b5076796c7654a922a872948d974624776b12240b2bd2b79d->leave($__internal_94fd3cfbd3e6275b5076796c7654a922a872948d974624776b12240b2bd2b79d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70e99bdf97b48c01376ae7c0e83c7443e98cd355d7d4b63924cf9cfde27eca2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e99bdf97b48c01376ae7c0e83c7443e98cd355d7d4b63924cf9cfde27eca2f->enter($__internal_70e99bdf97b48c01376ae7c0e83c7443e98cd355d7d4b63924cf9cfde27eca2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_70e99bdf97b48c01376ae7c0e83c7443e98cd355d7d4b63924cf9cfde27eca2f->leave($__internal_70e99bdf97b48c01376ae7c0e83c7443e98cd355d7d4b63924cf9cfde27eca2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_610bc804bc8e39ee3ff9067def9eed00fc76e28e20d31cc339dd847ed27b6c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610bc804bc8e39ee3ff9067def9eed00fc76e28e20d31cc339dd847ed27b6c2c->enter($__internal_610bc804bc8e39ee3ff9067def9eed00fc76e28e20d31cc339dd847ed27b6c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_610bc804bc8e39ee3ff9067def9eed00fc76e28e20d31cc339dd847ed27b6c2c->leave($__internal_610bc804bc8e39ee3ff9067def9eed00fc76e28e20d31cc339dd847ed27b6c2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_480e101568e2b31cdd2846f33f1484bbc955caa1e79a365ef0fca73f899361ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480e101568e2b31cdd2846f33f1484bbc955caa1e79a365ef0fca73f899361ef->enter($__internal_480e101568e2b31cdd2846f33f1484bbc955caa1e79a365ef0fca73f899361ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_480e101568e2b31cdd2846f33f1484bbc955caa1e79a365ef0fca73f899361ef->leave($__internal_480e101568e2b31cdd2846f33f1484bbc955caa1e79a365ef0fca73f899361ef_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
