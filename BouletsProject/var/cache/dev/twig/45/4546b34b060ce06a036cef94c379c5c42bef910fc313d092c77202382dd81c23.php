<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b427f2b9c4d73c27d871983bcab8a222d29c737e3ac0e0b62de65e2a1181691 extends Twig_Template
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
        $__internal_9fbc3de00a358203f3fea43c46743244d925015eedb599629266756d5f204e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbc3de00a358203f3fea43c46743244d925015eedb599629266756d5f204e89->enter($__internal_9fbc3de00a358203f3fea43c46743244d925015eedb599629266756d5f204e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbc3de00a358203f3fea43c46743244d925015eedb599629266756d5f204e89->leave($__internal_9fbc3de00a358203f3fea43c46743244d925015eedb599629266756d5f204e89_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ada95f236ccad551fdf47f076de1b704fcdaaf9e2c26d7bd63a88c36d02b3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ada95f236ccad551fdf47f076de1b704fcdaaf9e2c26d7bd63a88c36d02b3e3->enter($__internal_1ada95f236ccad551fdf47f076de1b704fcdaaf9e2c26d7bd63a88c36d02b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_1ada95f236ccad551fdf47f076de1b704fcdaaf9e2c26d7bd63a88c36d02b3e3->leave($__internal_1ada95f236ccad551fdf47f076de1b704fcdaaf9e2c26d7bd63a88c36d02b3e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f47f1ac01988cf2848d8a3502f9d29e003a4854f1651ca30661ddfd2851f9c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47f1ac01988cf2848d8a3502f9d29e003a4854f1651ca30661ddfd2851f9c93->enter($__internal_f47f1ac01988cf2848d8a3502f9d29e003a4854f1651ca30661ddfd2851f9c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f47f1ac01988cf2848d8a3502f9d29e003a4854f1651ca30661ddfd2851f9c93->leave($__internal_f47f1ac01988cf2848d8a3502f9d29e003a4854f1651ca30661ddfd2851f9c93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b108d89c2600470108cc4fefa3680e7124e2321a4324dccc8a5df3880bce7e57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b108d89c2600470108cc4fefa3680e7124e2321a4324dccc8a5df3880bce7e57->enter($__internal_b108d89c2600470108cc4fefa3680e7124e2321a4324dccc8a5df3880bce7e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b108d89c2600470108cc4fefa3680e7124e2321a4324dccc8a5df3880bce7e57->leave($__internal_b108d89c2600470108cc4fefa3680e7124e2321a4324dccc8a5df3880bce7e57_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
