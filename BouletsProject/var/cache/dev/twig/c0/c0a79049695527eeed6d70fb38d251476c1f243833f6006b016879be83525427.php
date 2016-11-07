<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_555d5cafaf023501bf525e8f60509501eb2f14346b34bb660817c8819ad65409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0d8e26571c8e7d8a0694c13535cf5ee1fa73d4f3053858b3742cc4dbfed62ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8e26571c8e7d8a0694c13535cf5ee1fa73d4f3053858b3742cc4dbfed62ed9->enter($__internal_0d8e26571c8e7d8a0694c13535cf5ee1fa73d4f3053858b3742cc4dbfed62ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8e26571c8e7d8a0694c13535cf5ee1fa73d4f3053858b3742cc4dbfed62ed9->leave($__internal_0d8e26571c8e7d8a0694c13535cf5ee1fa73d4f3053858b3742cc4dbfed62ed9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f56f422a9223d3667f29df51d38c0fa54cb63824e04625d6254c3b6f1a690d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56f422a9223d3667f29df51d38c0fa54cb63824e04625d6254c3b6f1a690d56->enter($__internal_f56f422a9223d3667f29df51d38c0fa54cb63824e04625d6254c3b6f1a690d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f56f422a9223d3667f29df51d38c0fa54cb63824e04625d6254c3b6f1a690d56->leave($__internal_f56f422a9223d3667f29df51d38c0fa54cb63824e04625d6254c3b6f1a690d56_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ab5f9e1aeb70041e580b11c7a02a71dfc1ae3bc81a4bec594fabd7cd2e3ba51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab5f9e1aeb70041e580b11c7a02a71dfc1ae3bc81a4bec594fabd7cd2e3ba51->enter($__internal_6ab5f9e1aeb70041e580b11c7a02a71dfc1ae3bc81a4bec594fabd7cd2e3ba51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ab5f9e1aeb70041e580b11c7a02a71dfc1ae3bc81a4bec594fabd7cd2e3ba51->leave($__internal_6ab5f9e1aeb70041e580b11c7a02a71dfc1ae3bc81a4bec594fabd7cd2e3ba51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7930bb909e41a8b30da728fe901711cff458bf07fe1cf9e8ee6328e789a9e0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7930bb909e41a8b30da728fe901711cff458bf07fe1cf9e8ee6328e789a9e0fe->enter($__internal_7930bb909e41a8b30da728fe901711cff458bf07fe1cf9e8ee6328e789a9e0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7930bb909e41a8b30da728fe901711cff458bf07fe1cf9e8ee6328e789a9e0fe->leave($__internal_7930bb909e41a8b30da728fe901711cff458bf07fe1cf9e8ee6328e789a9e0fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
