<?php

/* BackBundle:Incidents:incidentview.html.twig */
class __TwigTemplate_5afd2e3527e3836bab7e26af713d95e3d4982e2c069be93fddb126e731d04e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Incidents:incidentview.html.twig", 1);
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
        $__internal_b0ec88fc1110550f027eb613c1194357d6aa9ab3b46dc9cd10a301d0ed89ce61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ec88fc1110550f027eb613c1194357d6aa9ab3b46dc9cd10a301d0ed89ce61->enter($__internal_b0ec88fc1110550f027eb613c1194357d6aa9ab3b46dc9cd10a301d0ed89ce61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Incidents:incidentview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ec88fc1110550f027eb613c1194357d6aa9ab3b46dc9cd10a301d0ed89ce61->leave($__internal_b0ec88fc1110550f027eb613c1194357d6aa9ab3b46dc9cd10a301d0ed89ce61_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e820c9e9b20ec688de9c29e407844a551e210c185cadb5d1cd07ff312179382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e820c9e9b20ec688de9c29e407844a551e210c185cadb5d1cd07ff312179382->enter($__internal_5e820c9e9b20ec688de9c29e407844a551e210c185cadb5d1cd07ff312179382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:incidentview.html.twig"));

        // line 13
        echo "    Incident Détails
";
        
        $__internal_5e820c9e9b20ec688de9c29e407844a551e210c185cadb5d1cd07ff312179382->leave($__internal_5e820c9e9b20ec688de9c29e407844a551e210c185cadb5d1cd07ff312179382_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b0e4ea01be081c3133de7e50667882b12ad8a8a4b8ef45794044d5588706d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0e4ea01be081c3133de7e50667882b12ad8a8a4b8ef45794044d5588706d63->enter($__internal_1b0e4ea01be081c3133de7e50667882b12ad8a8a4b8ef45794044d5588706d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:incidentview.html.twig"));

        // line 19
        echo "

    <div class=\"container\">
        <h1>Incident Détails</h1>



        <p> Id: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()), "html", null, true);
        echo " </p>
        <p> Nom: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "nom", array()), "html", null, true);
        echo "</p>
        <p> Type: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "type", array()), "html", null, true);
        echo "</p>
        <p> Machine: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "machine", array()), "html", null, true);
        echo "</p>
        <p> Explication: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "text", array()), "html", null, true);
        echo "</p>
        <p> Commencer le : ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datedebut", array()), "d/m/Y"), "html", null, true);
        echo "</p>





        ";
        // line 37
        if (($this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datefin", array()) == null)) {
            // line 38
            echo "            <p>Fin le: Non défini</p>
        ";
        } else {
            // line 40
            echo "            <p> Fin le: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "datefin", array()), "d/m/Y"), "html", null, true);
            echo "</p>
        ";
        }
        // line 42
        echo "

        <form action=\"../incidentend/";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["incident"]) ? $context["incident"] : $this->getContext($context, "incident")), "id", array()), "html", null, true);
        echo " \"><input type=\"submit\" class=\"btn\" value=\"Finaliser la fin de cette incident \" /></form>
        <form action=\"../allincidents\"><input type=\"submit\" class=\"btn\" value=\"retour\" /></form>





</div>


";
        
        $__internal_1b0e4ea01be081c3133de7e50667882b12ad8a8a4b8ef45794044d5588706d63->leave($__internal_1b0e4ea01be081c3133de7e50667882b12ad8a8a4b8ef45794044d5588706d63_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Incidents:incidentview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  105 => 42,  99 => 40,  95 => 38,  93 => 37,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  55 => 19,  49 => 18,  41 => 13,  35 => 12,  11 => 1,);
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
    Incident Détails
{%endblock%}



{% block content %}


    <div class=\"container\">
        <h1>Incident Détails</h1>



        <p> Id: {{ incident.id }} </p>
        <p> Nom: {{ incident.nom }}</p>
        <p> Type: {{ incident.type }}</p>
        <p> Machine: {{ incident.machine }}</p>
        <p> Explication: {{ incident.text }}</p>
        <p> Commencer le : {{ incident.datedebut|date('d/m/Y') }}</p>





        {%  if incident.datefin == null %}
            <p>Fin le: Non défini</p>
        {%  else   %}
            <p> Fin le: {{ incident.datefin|date('d/m/Y') }}</p>
        {% endif %}


        <form action=\"../incidentend/{{ incident.id }} \"><input type=\"submit\" class=\"btn\" value=\"Finaliser la fin de cette incident \" /></form>
        <form action=\"../allincidents\"><input type=\"submit\" class=\"btn\" value=\"retour\" /></form>





</div>


{%endblock%}
", "BackBundle:Incidents:incidentview.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Incidents/incidentview.html.twig");
    }
}
