<?php

/* base.html.twig */
class __TwigTemplate_f2afcef90b38c0839b8f79f088a512fa2d45899ff41a8613621ffd53619bdd05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df2170fa92772ea39eedfc1bb30003a51b22e03a85fbbd3f9e17d511703e685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df2170fa92772ea39eedfc1bb30003a51b22e03a85fbbd3f9e17d511703e685->enter($__internal_9df2170fa92772ea39eedfc1bb30003a51b22e03a85fbbd3f9e17d511703e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9df2170fa92772ea39eedfc1bb30003a51b22e03a85fbbd3f9e17d511703e685->leave($__internal_9df2170fa92772ea39eedfc1bb30003a51b22e03a85fbbd3f9e17d511703e685_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0018c100d9c59be144d4fcdfc3fef0e4d6e56c4e5f29184f9c3b7092d678cab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0018c100d9c59be144d4fcdfc3fef0e4d6e56c4e5f29184f9c3b7092d678cab7->enter($__internal_0018c100d9c59be144d4fcdfc3fef0e4d6e56c4e5f29184f9c3b7092d678cab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_0018c100d9c59be144d4fcdfc3fef0e4d6e56c4e5f29184f9c3b7092d678cab7->leave($__internal_0018c100d9c59be144d4fcdfc3fef0e4d6e56c4e5f29184f9c3b7092d678cab7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de8a3855d9d62203aa83877137306bbac897d13db4f72f96314c29019fdd026b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8a3855d9d62203aa83877137306bbac897d13db4f72f96314c29019fdd026b->enter($__internal_de8a3855d9d62203aa83877137306bbac897d13db4f72f96314c29019fdd026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_de8a3855d9d62203aa83877137306bbac897d13db4f72f96314c29019fdd026b->leave($__internal_de8a3855d9d62203aa83877137306bbac897d13db4f72f96314c29019fdd026b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5033ddb3bf40b1f92cb80acf89556f9f4d0a0ed5e71417b6b909b0457bc6bd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5033ddb3bf40b1f92cb80acf89556f9f4d0a0ed5e71417b6b909b0457bc6bd5a->enter($__internal_5033ddb3bf40b1f92cb80acf89556f9f4d0a0ed5e71417b6b909b0457bc6bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_5033ddb3bf40b1f92cb80acf89556f9f4d0a0ed5e71417b6b909b0457bc6bd5a->leave($__internal_5033ddb3bf40b1f92cb80acf89556f9f4d0a0ed5e71417b6b909b0457bc6bd5a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4d9fb546dd5daf45875a3e3f1befbe0e57482b62a2854502cdcc7519cff1845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d9fb546dd5daf45875a3e3f1befbe0e57482b62a2854502cdcc7519cff1845->enter($__internal_f4d9fb546dd5daf45875a3e3f1befbe0e57482b62a2854502cdcc7519cff1845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f4d9fb546dd5daf45875a3e3f1befbe0e57482b62a2854502cdcc7519cff1845->leave($__internal_f4d9fb546dd5daf45875a3e3f1befbe0e57482b62a2854502cdcc7519cff1845_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/app/Resources/views/base.html.twig");
    }
}
