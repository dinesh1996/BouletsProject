<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d447c1692ab8b4d0f580bc2e0b5d651fc3edd9460f7531d7ec041948aa43588 extends Twig_Template
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
        $__internal_c3ab17178f55dbc64cc63cc114d7b7d0e88f95b21b954a4d833d0c42a5f0cc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ab17178f55dbc64cc63cc114d7b7d0e88f95b21b954a4d833d0c42a5f0cc63->enter($__internal_c3ab17178f55dbc64cc63cc114d7b7d0e88f95b21b954a4d833d0c42a5f0cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ab17178f55dbc64cc63cc114d7b7d0e88f95b21b954a4d833d0c42a5f0cc63->leave($__internal_c3ab17178f55dbc64cc63cc114d7b7d0e88f95b21b954a4d833d0c42a5f0cc63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d6056183752e8806f48bcb2e45c9776385b2f4fd83843bf0bfc79dd2a0ecc5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6056183752e8806f48bcb2e45c9776385b2f4fd83843bf0bfc79dd2a0ecc5e3->enter($__internal_d6056183752e8806f48bcb2e45c9776385b2f4fd83843bf0bfc79dd2a0ecc5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d6056183752e8806f48bcb2e45c9776385b2f4fd83843bf0bfc79dd2a0ecc5e3->leave($__internal_d6056183752e8806f48bcb2e45c9776385b2f4fd83843bf0bfc79dd2a0ecc5e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1155f1210fd86d496799e5363c52a371acb76d46e6c22a6328fc308854b95794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1155f1210fd86d496799e5363c52a371acb76d46e6c22a6328fc308854b95794->enter($__internal_1155f1210fd86d496799e5363c52a371acb76d46e6c22a6328fc308854b95794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1155f1210fd86d496799e5363c52a371acb76d46e6c22a6328fc308854b95794->leave($__internal_1155f1210fd86d496799e5363c52a371acb76d46e6c22a6328fc308854b95794_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64d37faa9894b369225ff797b6a966e57abf1d25e37ccdec476d0d3e0aa5b136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d37faa9894b369225ff797b6a966e57abf1d25e37ccdec476d0d3e0aa5b136->enter($__internal_64d37faa9894b369225ff797b6a966e57abf1d25e37ccdec476d0d3e0aa5b136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64d37faa9894b369225ff797b6a966e57abf1d25e37ccdec476d0d3e0aa5b136->leave($__internal_64d37faa9894b369225ff797b6a966e57abf1d25e37ccdec476d0d3e0aa5b136_prof);

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
