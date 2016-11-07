<?php

/* BackBundle:Machine:updatemachine.html.twig */
class __TwigTemplate_4c649b86a0ed03e6cc28fba8ca2e46fbc623a22ad65754036b493610d3646e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Machine:updatemachine.html.twig", 1);
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
        $__internal_a1045d02ac135f23eb718b92d13ca5c19d598798149f77cc7abb0b4d64467008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1045d02ac135f23eb718b92d13ca5c19d598798149f77cc7abb0b4d64467008->enter($__internal_a1045d02ac135f23eb718b92d13ca5c19d598798149f77cc7abb0b4d64467008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Machine:updatemachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1045d02ac135f23eb718b92d13ca5c19d598798149f77cc7abb0b4d64467008->leave($__internal_a1045d02ac135f23eb718b92d13ca5c19d598798149f77cc7abb0b4d64467008_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05c8a09512e0703532f569ff705662994a701b0389b140c5a92b5f6e32b788f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c8a09512e0703532f569ff705662994a701b0389b140c5a92b5f6e32b788f5->enter($__internal_05c8a09512e0703532f569ff705662994a701b0389b140c5a92b5f6e32b788f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:updatemachine.html.twig"));

        // line 6
        echo "    Mise à jour des machine
";
        
        $__internal_05c8a09512e0703532f569ff705662994a701b0389b140c5a92b5f6e32b788f5->leave($__internal_05c8a09512e0703532f569ff705662994a701b0389b140c5a92b5f6e32b788f5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d929324d044cdb4143a70868dc700b291d81695dfecee02b5918bae562273070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d929324d044cdb4143a70868dc700b291d81695dfecee02b5918bae562273070->enter($__internal_d929324d044cdb4143a70868dc700b291d81695dfecee02b5918bae562273070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:updatemachine.html.twig"));

        // line 12
        echo "    <div class=\"container\">
        <h1>Page de Mise a jour des machines </h1>

        <div id=\"container\" class=\"col\">

            <h1>Mise à jour des machines</h1>

            <form method=\"POST\" action=\"\">
                Ip de la machine a modifié :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"ip\"><br><br><br><br>

                Modification :<br>
                Nom:<br>
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\"><br><br>
                Type: <br>
                <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
                Ram: <br>
                <input type=\"text\" name=\"ram\" placeholder=\"Rame\"><br><br>
                Disque: <br>
                <input type=\"text\" name=\"disque\" placeholder=\"Disque\"><br><br>
                Statut: <br>
                <input type=\"text\" name=\"statut\" placeholder=\"Statut\"><br><br>
                Salle affecté: <br>
                <input type=\"text\" name=\"id_salle\" placeholder=\"Salle\"><br><br>

                <input type=\"submit\">

            </form>

            ";
        // line 41
        if (array_key_exists("alerte", $context)) {
            // line 42
            echo "                <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
            ";
        }
        // line 44
        echo "
        </div>

    </div>
";
        
        $__internal_d929324d044cdb4143a70868dc700b291d81695dfecee02b5918bae562273070->leave($__internal_d929324d044cdb4143a70868dc700b291d81695dfecee02b5918bae562273070_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Machine:updatemachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  88 => 42,  86 => 41,  55 => 12,  49 => 11,  41 => 6,  35 => 5,  11 => 1,);
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
    Mise à jour des machine
{%endblock%}



{% block content %}
    <div class=\"container\">
        <h1>Page de Mise a jour des machines </h1>

        <div id=\"container\" class=\"col\">

            <h1>Mise à jour des machines</h1>

            <form method=\"POST\" action=\"\">
                Ip de la machine a modifié :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"ip\"><br><br><br><br>

                Modification :<br>
                Nom:<br>
                <input type=\"text\" name=\"nom\" placeholder=\"Nom\"><br><br>
                Type: <br>
                <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
                Ram: <br>
                <input type=\"text\" name=\"ram\" placeholder=\"Rame\"><br><br>
                Disque: <br>
                <input type=\"text\" name=\"disque\" placeholder=\"Disque\"><br><br>
                Statut: <br>
                <input type=\"text\" name=\"statut\" placeholder=\"Statut\"><br><br>
                Salle affecté: <br>
                <input type=\"text\" name=\"id_salle\" placeholder=\"Salle\"><br><br>

                <input type=\"submit\">

            </form>

            {% if alerte is defined %}
                <p>{{ alerte }}</p>
            {% endif %}

        </div>

    </div>
{%endblock%}", "BackBundle:Machine:updatemachine.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/Machine/updatemachine.html.twig");
    }
}
