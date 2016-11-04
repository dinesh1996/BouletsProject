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
        $__internal_a6f426b50311c32911feb5d4e7dcab087f70192d6a93a0e268194ab2c05473e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f426b50311c32911feb5d4e7dcab087f70192d6a93a0e268194ab2c05473e0->enter($__internal_a6f426b50311c32911feb5d4e7dcab087f70192d6a93a0e268194ab2c05473e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6f426b50311c32911feb5d4e7dcab087f70192d6a93a0e268194ab2c05473e0->leave($__internal_a6f426b50311c32911feb5d4e7dcab087f70192d6a93a0e268194ab2c05473e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cf897c0ae275d53f2c8d4ffdde1c317103a35c4202398d7d6f1b06bfbbfbefdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf897c0ae275d53f2c8d4ffdde1c317103a35c4202398d7d6f1b06bfbbfbefdd->enter($__internal_cf897c0ae275d53f2c8d4ffdde1c317103a35c4202398d7d6f1b06bfbbfbefdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_cf897c0ae275d53f2c8d4ffdde1c317103a35c4202398d7d6f1b06bfbbfbefdd->leave($__internal_cf897c0ae275d53f2c8d4ffdde1c317103a35c4202398d7d6f1b06bfbbfbefdd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f448141fccd584481104c8ec17187396632413e40d32c0270ba1b2f8a24171e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f448141fccd584481104c8ec17187396632413e40d32c0270ba1b2f8a24171e1->enter($__internal_f448141fccd584481104c8ec17187396632413e40d32c0270ba1b2f8a24171e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f448141fccd584481104c8ec17187396632413e40d32c0270ba1b2f8a24171e1->leave($__internal_f448141fccd584481104c8ec17187396632413e40d32c0270ba1b2f8a24171e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19e552cf182c0db33942c5759f81ca79afecd23faeb63b31ad64a1a2c17efa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e552cf182c0db33942c5759f81ca79afecd23faeb63b31ad64a1a2c17efa73->enter($__internal_19e552cf182c0db33942c5759f81ca79afecd23faeb63b31ad64a1a2c17efa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19e552cf182c0db33942c5759f81ca79afecd23faeb63b31ad64a1a2c17efa73->leave($__internal_19e552cf182c0db33942c5759f81ca79afecd23faeb63b31ad64a1a2c17efa73_prof);

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
