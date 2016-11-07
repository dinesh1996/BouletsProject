<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b600dd7bf05cc9c4170310a81f76cc714251a85cb0ab209f1814c8e4cc9f6149 extends Twig_Template
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
        $__internal_14837e7235087901c12d2ed0e3828433f0e5e81c6092d229305c2ebd13362ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14837e7235087901c12d2ed0e3828433f0e5e81c6092d229305c2ebd13362ddd->enter($__internal_14837e7235087901c12d2ed0e3828433f0e5e81c6092d229305c2ebd13362ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14837e7235087901c12d2ed0e3828433f0e5e81c6092d229305c2ebd13362ddd->leave($__internal_14837e7235087901c12d2ed0e3828433f0e5e81c6092d229305c2ebd13362ddd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2023fbcf96684f40ae880f1656a308b9545c975e8c4bbb9391ef051f8d6cd2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2023fbcf96684f40ae880f1656a308b9545c975e8c4bbb9391ef051f8d6cd2ed->enter($__internal_2023fbcf96684f40ae880f1656a308b9545c975e8c4bbb9391ef051f8d6cd2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2023fbcf96684f40ae880f1656a308b9545c975e8c4bbb9391ef051f8d6cd2ed->leave($__internal_2023fbcf96684f40ae880f1656a308b9545c975e8c4bbb9391ef051f8d6cd2ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fcf2dbdfbfa191f16b36bc95ae13b2b0bbcbf93fd208de64c5d5a42dade2351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcf2dbdfbfa191f16b36bc95ae13b2b0bbcbf93fd208de64c5d5a42dade2351->enter($__internal_9fcf2dbdfbfa191f16b36bc95ae13b2b0bbcbf93fd208de64c5d5a42dade2351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9fcf2dbdfbfa191f16b36bc95ae13b2b0bbcbf93fd208de64c5d5a42dade2351->leave($__internal_9fcf2dbdfbfa191f16b36bc95ae13b2b0bbcbf93fd208de64c5d5a42dade2351_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b567976f2050b4f81483a7856d913d6b4a8ad3ef2fbc4e12725477a886d87ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b567976f2050b4f81483a7856d913d6b4a8ad3ef2fbc4e12725477a886d87ab6->enter($__internal_b567976f2050b4f81483a7856d913d6b4a8ad3ef2fbc4e12725477a886d87ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b567976f2050b4f81483a7856d913d6b4a8ad3ef2fbc4e12725477a886d87ab6->leave($__internal_b567976f2050b4f81483a7856d913d6b4a8ad3ef2fbc4e12725477a886d87ab6_prof);

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
