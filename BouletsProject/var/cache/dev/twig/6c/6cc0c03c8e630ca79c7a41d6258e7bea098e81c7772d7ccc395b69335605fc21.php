<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ee1b6276a13f92e64ab591e7e61e67a23f8e76dd80a4aab22039fc73a8e19d0c extends Twig_Template
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
<<<<<<< HEAD
        $__internal_dcd2875f9efb8616cbb410b9d60d2e424d0bb7bae0595c240c4644482bddc5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd2875f9efb8616cbb410b9d60d2e424d0bb7bae0595c240c4644482bddc5f3->enter($__internal_dcd2875f9efb8616cbb410b9d60d2e424d0bb7bae0595c240c4644482bddc5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd2875f9efb8616cbb410b9d60d2e424d0bb7bae0595c240c4644482bddc5f3->leave($__internal_dcd2875f9efb8616cbb410b9d60d2e424d0bb7bae0595c240c4644482bddc5f3_prof);
=======
        $__internal_97334b231f8e1aaa5451da09112afec258f5d1864805c28476697719a64be892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97334b231f8e1aaa5451da09112afec258f5d1864805c28476697719a64be892->enter($__internal_97334b231f8e1aaa5451da09112afec258f5d1864805c28476697719a64be892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97334b231f8e1aaa5451da09112afec258f5d1864805c28476697719a64be892->leave($__internal_97334b231f8e1aaa5451da09112afec258f5d1864805c28476697719a64be892_prof);
>>>>>>> origin/tableau_parc

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0cc51373304a3055760d47829962d6f2a2a88cd5dfe05f049229245bbafe35e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc51373304a3055760d47829962d6f2a2a88cd5dfe05f049229245bbafe35e9->enter($__internal_0cc51373304a3055760d47829962d6f2a2a88cd5dfe05f049229245bbafe35e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
=======
        $__internal_cf9c793587df5b3651e83128e0c7232c1cde6600a013aeff2909ffee8f6bac53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9c793587df5b3651e83128e0c7232c1cde6600a013aeff2909ffee8f6bac53->enter($__internal_cf9c793587df5b3651e83128e0c7232c1cde6600a013aeff2909ffee8f6bac53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
>>>>>>> origin/tableau_parc

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
<<<<<<< HEAD
        $__internal_0cc51373304a3055760d47829962d6f2a2a88cd5dfe05f049229245bbafe35e9->leave($__internal_0cc51373304a3055760d47829962d6f2a2a88cd5dfe05f049229245bbafe35e9_prof);
=======
        $__internal_cf9c793587df5b3651e83128e0c7232c1cde6600a013aeff2909ffee8f6bac53->leave($__internal_cf9c793587df5b3651e83128e0c7232c1cde6600a013aeff2909ffee8f6bac53_prof);
>>>>>>> origin/tableau_parc

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_c1602ef932ea983716648824a20445f9328699faf43f99c36b7bb143cd53d7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1602ef932ea983716648824a20445f9328699faf43f99c36b7bb143cd53d7cd->enter($__internal_c1602ef932ea983716648824a20445f9328699faf43f99c36b7bb143cd53d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
=======
        $__internal_c32a7ebbbf060830e8d76e623bf7f189caf7a80dd34c08637289bbc62c98da99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32a7ebbbf060830e8d76e623bf7f189caf7a80dd34c08637289bbc62c98da99->enter($__internal_c32a7ebbbf060830e8d76e623bf7f189caf7a80dd34c08637289bbc62c98da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
>>>>>>> origin/tableau_parc

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
<<<<<<< HEAD
        $__internal_c1602ef932ea983716648824a20445f9328699faf43f99c36b7bb143cd53d7cd->leave($__internal_c1602ef932ea983716648824a20445f9328699faf43f99c36b7bb143cd53d7cd_prof);
=======
        $__internal_c32a7ebbbf060830e8d76e623bf7f189caf7a80dd34c08637289bbc62c98da99->leave($__internal_c32a7ebbbf060830e8d76e623bf7f189caf7a80dd34c08637289bbc62c98da99_prof);
>>>>>>> origin/tableau_parc

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b35446e0818e60666d6533371048a21d7ca42b0159b11d8ceff04ce6e118cd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35446e0818e60666d6533371048a21d7ca42b0159b11d8ceff04ce6e118cd38->enter($__internal_b35446e0818e60666d6533371048a21d7ca42b0159b11d8ceff04ce6e118cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
=======
        $__internal_3fd285d1d46ec6296ea58171335a8067c4e0c4cce2ca62bef69a266fe01283f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd285d1d46ec6296ea58171335a8067c4e0c4cce2ca62bef69a266fe01283f0->enter($__internal_3fd285d1d46ec6296ea58171335a8067c4e0c4cce2ca62bef69a266fe01283f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));
>>>>>>> origin/tableau_parc

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
<<<<<<< HEAD
        $__internal_b35446e0818e60666d6533371048a21d7ca42b0159b11d8ceff04ce6e118cd38->leave($__internal_b35446e0818e60666d6533371048a21d7ca42b0159b11d8ceff04ce6e118cd38_prof);
=======
        $__internal_3fd285d1d46ec6296ea58171335a8067c4e0c4cce2ca62bef69a266fe01283f0->leave($__internal_3fd285d1d46ec6296ea58171335a8067c4e0c4cce2ca62bef69a266fe01283f0_prof);
>>>>>>> origin/tableau_parc

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
