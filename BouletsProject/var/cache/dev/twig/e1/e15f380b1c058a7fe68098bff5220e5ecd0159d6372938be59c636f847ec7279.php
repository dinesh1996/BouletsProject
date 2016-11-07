<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9a7d1deb72b2468ca663dbcb762f0e1ae4eb16fb50397e954b21167f9561a08f extends Twig_Template
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
        $__internal_9d894ace038fb376f2a114d9bc2862a2a9730f510843cf4b362da552e1f292cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d894ace038fb376f2a114d9bc2862a2a9730f510843cf4b362da552e1f292cf->enter($__internal_9d894ace038fb376f2a114d9bc2862a2a9730f510843cf4b362da552e1f292cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d894ace038fb376f2a114d9bc2862a2a9730f510843cf4b362da552e1f292cf->leave($__internal_9d894ace038fb376f2a114d9bc2862a2a9730f510843cf4b362da552e1f292cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d49e9a66b73bb542c24977fe947896815fe867a5979106eb73dd66038c3d172f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49e9a66b73bb542c24977fe947896815fe867a5979106eb73dd66038c3d172f->enter($__internal_d49e9a66b73bb542c24977fe947896815fe867a5979106eb73dd66038c3d172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d49e9a66b73bb542c24977fe947896815fe867a5979106eb73dd66038c3d172f->leave($__internal_d49e9a66b73bb542c24977fe947896815fe867a5979106eb73dd66038c3d172f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44dbba35835c540d4d0c357b06b4746eab49e7070c05df8f2eef0938db9c511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dbba35835c540d4d0c357b06b4746eab49e7070c05df8f2eef0938db9c511d->enter($__internal_44dbba35835c540d4d0c357b06b4746eab49e7070c05df8f2eef0938db9c511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44dbba35835c540d4d0c357b06b4746eab49e7070c05df8f2eef0938db9c511d->leave($__internal_44dbba35835c540d4d0c357b06b4746eab49e7070c05df8f2eef0938db9c511d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ec5a6cab9f737552039c31ec7c526bb55f0990aaac3056085936b40734ad784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec5a6cab9f737552039c31ec7c526bb55f0990aaac3056085936b40734ad784->enter($__internal_4ec5a6cab9f737552039c31ec7c526bb55f0990aaac3056085936b40734ad784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ec5a6cab9f737552039c31ec7c526bb55f0990aaac3056085936b40734ad784->leave($__internal_4ec5a6cab9f737552039c31ec7c526bb55f0990aaac3056085936b40734ad784_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Project/BouletsProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
