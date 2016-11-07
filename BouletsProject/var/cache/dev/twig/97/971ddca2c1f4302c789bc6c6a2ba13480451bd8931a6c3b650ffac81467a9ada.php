<?php

/* BackBundle:Incidents:createincident.html.twig */
class __TwigTemplate_7fbec399fd8835933b3bd463bf698e5e176607c8d5ea7d6e41527d81fadff183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Incidents:createincident.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f584cc3921753335a90f85cd059e90deac8ff45a70465a5ba6f88e473b99828a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f584cc3921753335a90f85cd059e90deac8ff45a70465a5ba6f88e473b99828a->enter($__internal_f584cc3921753335a90f85cd059e90deac8ff45a70465a5ba6f88e473b99828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Incidents:createincident.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f584cc3921753335a90f85cd059e90deac8ff45a70465a5ba6f88e473b99828a->leave($__internal_f584cc3921753335a90f85cd059e90deac8ff45a70465a5ba6f88e473b99828a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35a9d00cbda2fd0a920280cd7bedc8a14376ec7dea57343367a9df04e0dde99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a9d00cbda2fd0a920280cd7bedc8a14376ec7dea57343367a9df04e0dde99c->enter($__internal_35a9d00cbda2fd0a920280cd7bedc8a14376ec7dea57343367a9df04e0dde99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:createincident.html.twig"));

        // line 6
        echo "    Page de creation d'incident
";
        
        $__internal_35a9d00cbda2fd0a920280cd7bedc8a14376ec7dea57343367a9df04e0dde99c->leave($__internal_35a9d00cbda2fd0a920280cd7bedc8a14376ec7dea57343367a9df04e0dde99c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc33514a4f9fc2d7363d79d591be709442b8e45bf60f02b7143d03e39fe55d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc33514a4f9fc2d7363d79d591be709442b8e45bf60f02b7143d03e39fe55d30->enter($__internal_bc33514a4f9fc2d7363d79d591be709442b8e45bf60f02b7143d03e39fe55d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:createincident.html.twig"));

        // line 12
        echo "<h1>Page de creation d'incident </h1>

<div id=\"container\" class=\"col\">

    <h1>Cretion d'incident</h1>

    <form method=\"POST\" action=\"createincident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <textarea rows=\"4\" cols=\"50\" placeholder=\"Explication\" name=\"text\">

        </textarea>

        <input type=\"submit\">

    </form>

    ";
        // line 34
        if (array_key_exists("alerte", $context)) {
            // line 35
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
    ";
        }
        // line 37
        echo "
</div>
";
        
        $__internal_bc33514a4f9fc2d7363d79d591be709442b8e45bf60f02b7143d03e39fe55d30->leave($__internal_bc33514a4f9fc2d7363d79d591be709442b8e45bf60f02b7143d03e39fe55d30_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Incidents:createincident.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  81 => 35,  79 => 34,  55 => 12,  49 => 11,  41 => 6,  35 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"BackBundle::layout.html.twig\"%}



{%block title%}
    Page de creation d'incident
{%endblock%}



{% block content %}
<h1>Page de creation d'incident </h1>

<div id=\"container\" class=\"col\">

    <h1>Cretion d'incident</h1>

    <form method=\"POST\" action=\"createincident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <textarea rows=\"4\" cols=\"50\" placeholder=\"Explication\" name=\"text\">

        </textarea>

        <input type=\"submit\">

    </form>

    {% if alerte is defined %}
        <p>{{ alerte }}</p>
    {% endif %}

</div>
{%endblock%}




", "BackBundle:Incidents:createincident.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Incidents/createincident.html.twig");
    }
}
