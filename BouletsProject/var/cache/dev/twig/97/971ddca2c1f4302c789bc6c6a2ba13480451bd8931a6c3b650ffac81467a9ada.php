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
        $__internal_5d987dbec60997eb3e76b55db35ce5097d4ff5b7314adcec4ae8df5b33cf3659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d987dbec60997eb3e76b55db35ce5097d4ff5b7314adcec4ae8df5b33cf3659->enter($__internal_5d987dbec60997eb3e76b55db35ce5097d4ff5b7314adcec4ae8df5b33cf3659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Incidents:createincident.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d987dbec60997eb3e76b55db35ce5097d4ff5b7314adcec4ae8df5b33cf3659->leave($__internal_5d987dbec60997eb3e76b55db35ce5097d4ff5b7314adcec4ae8df5b33cf3659_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3329ae1ef0db63e08bb02042f762863e05a4202466852be19a65c9e40a4a8ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3329ae1ef0db63e08bb02042f762863e05a4202466852be19a65c9e40a4a8ce8->enter($__internal_3329ae1ef0db63e08bb02042f762863e05a4202466852be19a65c9e40a4a8ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:createincident.html.twig"));

        // line 6
        echo "    Page de creation d'incident
";
        
        $__internal_3329ae1ef0db63e08bb02042f762863e05a4202466852be19a65c9e40a4a8ce8->leave($__internal_3329ae1ef0db63e08bb02042f762863e05a4202466852be19a65c9e40a4a8ce8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b069abb86a8747da728deeb734be4e7c36cbe2e4bd9135f5982fa8212871bd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b069abb86a8747da728deeb734be4e7c36cbe2e4bd9135f5982fa8212871bd4d->enter($__internal_b069abb86a8747da728deeb734be4e7c36cbe2e4bd9135f5982fa8212871bd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:createincident.html.twig"));

        // line 12
        echo "    <div class=\"container\">
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

            ";
        // line 35
        if (array_key_exists("alerte", $context)) {
            // line 36
            echo "                <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
            ";
        }
        // line 38
        echo "
        </div>

    </div>
";
        
        $__internal_b069abb86a8747da728deeb734be4e7c36cbe2e4bd9135f5982fa8212871bd4d->leave($__internal_b069abb86a8747da728deeb734be4e7c36cbe2e4bd9135f5982fa8212871bd4d_prof);

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
        return array (  88 => 38,  82 => 36,  80 => 35,  55 => 12,  49 => 11,  41 => 6,  35 => 5,  11 => 1,);
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
    <div class=\"container\">
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

    </div>
{%endblock%}




", "BackBundle:Incidents:createincident.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Incidents/createincident.html.twig");
    }
}
