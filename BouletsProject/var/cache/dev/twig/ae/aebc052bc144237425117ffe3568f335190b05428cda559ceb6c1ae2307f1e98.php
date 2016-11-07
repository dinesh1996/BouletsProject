<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ff8dbb7e0dacb42f7594750313429dc99e3b455f4358d07792528a18b79c3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e786a404655b9048678a82b4f8d24c7ff7a5e14455e1c0e333aa48229cc689bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e786a404655b9048678a82b4f8d24c7ff7a5e14455e1c0e333aa48229cc689bd->enter($__internal_e786a404655b9048678a82b4f8d24c7ff7a5e14455e1c0e333aa48229cc689bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e786a404655b9048678a82b4f8d24c7ff7a5e14455e1c0e333aa48229cc689bd->leave($__internal_e786a404655b9048678a82b4f8d24c7ff7a5e14455e1c0e333aa48229cc689bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34e91236c0197846aea0b6a5fcf340d983084ea784c2db62fa2132fe180b0a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e91236c0197846aea0b6a5fcf340d983084ea784c2db62fa2132fe180b0a91->enter($__internal_34e91236c0197846aea0b6a5fcf340d983084ea784c2db62fa2132fe180b0a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_34e91236c0197846aea0b6a5fcf340d983084ea784c2db62fa2132fe180b0a91->leave($__internal_34e91236c0197846aea0b6a5fcf340d983084ea784c2db62fa2132fe180b0a91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d65119e15c81ebac14ad7b9483d79fbedd1ec2881d0f7119f16260f0ea0d0c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65119e15c81ebac14ad7b9483d79fbedd1ec2881d0f7119f16260f0ea0d0c73->enter($__internal_d65119e15c81ebac14ad7b9483d79fbedd1ec2881d0f7119f16260f0ea0d0c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d65119e15c81ebac14ad7b9483d79fbedd1ec2881d0f7119f16260f0ea0d0c73->leave($__internal_d65119e15c81ebac14ad7b9483d79fbedd1ec2881d0f7119f16260f0ea0d0c73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2df97b3694e46bec24dced6e2d42308db7f96a07c037910a7e5b8995f8acd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2df97b3694e46bec24dced6e2d42308db7f96a07c037910a7e5b8995f8acd17->enter($__internal_e2df97b3694e46bec24dced6e2d42308db7f96a07c037910a7e5b8995f8acd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e2df97b3694e46bec24dced6e2d42308db7f96a07c037910a7e5b8995f8acd17->leave($__internal_e2df97b3694e46bec24dced6e2d42308db7f96a07c037910a7e5b8995f8acd17_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
