<?php

/* BackBundle:Incidents:incidentend.html.twig */
class __TwigTemplate_67aea27cfa6d6ada00d9c49a29050b55703b67ff05401a72bc5b7aa6e607198a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Incidents:incidentend.html.twig", 1);
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
        $__internal_ba732f99597839c1d4ac3f24c7fed3ec9c11a37463eca11adc6c4152ed4dae76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba732f99597839c1d4ac3f24c7fed3ec9c11a37463eca11adc6c4152ed4dae76->enter($__internal_ba732f99597839c1d4ac3f24c7fed3ec9c11a37463eca11adc6c4152ed4dae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Incidents:incidentend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba732f99597839c1d4ac3f24c7fed3ec9c11a37463eca11adc6c4152ed4dae76->leave($__internal_ba732f99597839c1d4ac3f24c7fed3ec9c11a37463eca11adc6c4152ed4dae76_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_780650c66b5c7c37c432b0c58582e3c73a663123660507bd7be15f28f7bcb4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780650c66b5c7c37c432b0c58582e3c73a663123660507bd7be15f28f7bcb4a9->enter($__internal_780650c66b5c7c37c432b0c58582e3c73a663123660507bd7be15f28f7bcb4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:incidentend.html.twig"));

        // line 8
        echo "    Ajoute de la date de fin d'incident
";
        
        $__internal_780650c66b5c7c37c432b0c58582e3c73a663123660507bd7be15f28f7bcb4a9->leave($__internal_780650c66b5c7c37c432b0c58582e3c73a663123660507bd7be15f28f7bcb4a9_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_1610ece578efe6a28448abf19b9aa1b922be32902262d1ee64725550775b8e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1610ece578efe6a28448abf19b9aa1b922be32902262d1ee64725550775b8e02->enter($__internal_1610ece578efe6a28448abf19b9aa1b922be32902262d1ee64725550775b8e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:incidentend.html.twig"));

        // line 14
        echo "
    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            Date de la fin de l'incidents<br>


            <input type=\"date\" name=\"dateend\" placeholder=\"Titre\"><br><br>
            <input type=\"submit\">

        </form>
    </div>



";
        
        $__internal_1610ece578efe6a28448abf19b9aa1b922be32902262d1ee64725550775b8e02->leave($__internal_1610ece578efe6a28448abf19b9aa1b922be32902262d1ee64725550775b8e02_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Incidents:incidentend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  49 => 13,  41 => 8,  35 => 7,  11 => 1,);
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
    Ajoute de la date de fin d'incident
{%endblock%}



{% block content %}

    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            Date de la fin de l'incidents<br>


            <input type=\"date\" name=\"dateend\" placeholder=\"Titre\"><br><br>
            <input type=\"submit\">

        </form>
    </div>



{%endblock%}", "BackBundle:Incidents:incidentend.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Incidents/incidentend.html.twig");
    }
}
