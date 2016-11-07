<?php

/* BackBundle:Default:incidentview.html.twig */
class __TwigTemplate_4f03f66c2240a0bed47f889bab535fe27589d80adf508ed38e9c4730349fb79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4c2b74b4995e7b4fff71ed8d7cc35663a0de4752b3578b8ffcd9c8231bec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4c2b74b4995e7b4fff71ed8d7cc35663a0de4752b3578b8ffcd9c8231bec85->enter($__internal_ea4c2b74b4995e7b4fff71ed8d7cc35663a0de4752b3578b8ffcd9c8231bec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:incidentview.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<div class=\"container\">

<h1>Incident Détails</h1>



    <p> Id: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()), "html", null, true);
        echo " </p>
    <p> Nom: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "nom", array()), "html", null, true);
        echo "</p>
    <p> Type: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "type", array()), "html", null, true);
        echo "</p>
    <p> Machine: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "machine", array()), "html", null, true);
        echo "</p>
    <p> Explication: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "text", array()), "html", null, true);
        echo "</p>
    <p> Commencer le : ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo "</p>





    ";
        // line 28
        if (($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datefin", array()) == null)) {
            // line 29
            echo "    <p>Fin le: ";
            echo "Non défini";
            echo "</p>
    ";
        } else {
            // line 31
            echo "        <p> Fin le: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datefin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
    ";
        }
        // line 33
        echo "

    <form action=\"../incidentend/";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()), "html", null, true);
        echo "\"><input type=\"submit\" value=\"Finaliser la fin de cette incident \" /></form>
    <form action=\"../allincidents\"><input type=\"submit\" value=\"retour\" /></form>





</div>



</body>
</html>

";
        
        $__internal_ea4c2b74b4995e7b4fff71ed8d7cc35663a0de4752b3578b8ffcd9c8231bec85->leave($__internal_ea4c2b74b4995e7b4fff71ed8d7cc35663a0de4752b3578b8ffcd9c8231bec85_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:incidentview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  83 => 33,  77 => 31,  71 => 29,  69 => 28,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  40 => 17,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<div class=\"container\">

<h1>Incident Détails</h1>



    <p> Id: {{ incident.id }} </p>
    <p> Nom: {{ incident.nom }}</p>
    <p> Type: {{ incident.type }}</p>
    <p> Machine: {{ incident.machine }}</p>
    <p> Explication: {{ incident.text }}</p>
    <p> Commencer le : {{ incident.datedebut|date('d/m/Y') }}</p>





    {%  if incident.datefin == null %}
    <p>Fin le: {{ 'Non défini' }}</p>
    {%  else   %}
        <p> Fin le: {{ incident.datefin|date('d/m/Y') }}</p>
    {% endif %}


    <form action=\"../incidentend/{{ incident.id }}\"><input type=\"submit\" value=\"Finaliser la fin de cette incident \" /></form>
    <form action=\"../allincidents\"><input type=\"submit\" value=\"retour\" /></form>





</div>



</body>
</html>

", "BackBundle:Default:incidentview.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Default/incidentview.html.twig");
    }
}
