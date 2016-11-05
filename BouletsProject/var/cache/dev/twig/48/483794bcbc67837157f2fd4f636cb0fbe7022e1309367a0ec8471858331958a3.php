<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5bd2001693847196b1472491c0233576022c9bb38c67807162b238fbf115e226 extends Twig_Template
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
        $__internal_5e39e7f81e776c6133a80ed9ca21133e311b23b0ff90087cca9e290106c6012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e39e7f81e776c6133a80ed9ca21133e311b23b0ff90087cca9e290106c6012b->enter($__internal_5e39e7f81e776c6133a80ed9ca21133e311b23b0ff90087cca9e290106c6012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e39e7f81e776c6133a80ed9ca21133e311b23b0ff90087cca9e290106c6012b->leave($__internal_5e39e7f81e776c6133a80ed9ca21133e311b23b0ff90087cca9e290106c6012b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0b74b489c0023f45812f4c9dc829806826e4e58ff6b54a28e7d9ccaf964d8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b74b489c0023f45812f4c9dc829806826e4e58ff6b54a28e7d9ccaf964d8a2->enter($__internal_b0b74b489c0023f45812f4c9dc829806826e4e58ff6b54a28e7d9ccaf964d8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_b0b74b489c0023f45812f4c9dc829806826e4e58ff6b54a28e7d9ccaf964d8a2->leave($__internal_b0b74b489c0023f45812f4c9dc829806826e4e58ff6b54a28e7d9ccaf964d8a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4ac1970a1e3f52abfdc740664fc2c91a2e8042e3c29c64bc63b86f8ea859add1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac1970a1e3f52abfdc740664fc2c91a2e8042e3c29c64bc63b86f8ea859add1->enter($__internal_4ac1970a1e3f52abfdc740664fc2c91a2e8042e3c29c64bc63b86f8ea859add1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4ac1970a1e3f52abfdc740664fc2c91a2e8042e3c29c64bc63b86f8ea859add1->leave($__internal_4ac1970a1e3f52abfdc740664fc2c91a2e8042e3c29c64bc63b86f8ea859add1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba219105093d86f1c0415a4b1494937d97337943d3b0647d12fa6071df75eace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba219105093d86f1c0415a4b1494937d97337943d3b0647d12fa6071df75eace->enter($__internal_ba219105093d86f1c0415a4b1494937d97337943d3b0647d12fa6071df75eace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ba219105093d86f1c0415a4b1494937d97337943d3b0647d12fa6071df75eace->leave($__internal_ba219105093d86f1c0415a4b1494937d97337943d3b0647d12fa6071df75eace_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/BouletsProject/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
