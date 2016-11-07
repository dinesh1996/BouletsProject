<?php

/* BackBundle:Machine:createmachine.html.twig */
class __TwigTemplate_adab22a0e3937245ca1cbe3757b010cab23ed2c965eaec5968d940274829308f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Machine:createmachine.html.twig", 1);
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
        $__internal_a05d3fd56a032d666edd860964cc7eeea52656ad103c0d0bfdc52ebc21570187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05d3fd56a032d666edd860964cc7eeea52656ad103c0d0bfdc52ebc21570187->enter($__internal_a05d3fd56a032d666edd860964cc7eeea52656ad103c0d0bfdc52ebc21570187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Machine:createmachine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a05d3fd56a032d666edd860964cc7eeea52656ad103c0d0bfdc52ebc21570187->leave($__internal_a05d3fd56a032d666edd860964cc7eeea52656ad103c0d0bfdc52ebc21570187_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc56b1ae00d08c448cbe268498752fe53038f6ab7d782e18a4e06f1d4f2ce00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc56b1ae00d08c448cbe268498752fe53038f6ab7d782e18a4e06f1d4f2ce00e->enter($__internal_cc56b1ae00d08c448cbe268498752fe53038f6ab7d782e18a4e06f1d4f2ce00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:createmachine.html.twig"));

        // line 6
        echo "    Page de creation de machine
";
        
        $__internal_cc56b1ae00d08c448cbe268498752fe53038f6ab7d782e18a4e06f1d4f2ce00e->leave($__internal_cc56b1ae00d08c448cbe268498752fe53038f6ab7d782e18a4e06f1d4f2ce00e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_972a2a24c7fb0095f924ba54a26514748403994c682ebb629355ef3ea2ad9e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972a2a24c7fb0095f924ba54a26514748403994c682ebb629355ef3ea2ad9e03->enter($__internal_972a2a24c7fb0095f924ba54a26514748403994c682ebb629355ef3ea2ad9e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Machine:createmachine.html.twig"));

        // line 12
        echo "    <div class=\"container\">
        <h1>Page de creation de machine </h1>

        <div id=\"container\" class=\"col\">

            <h1>Cretion d'incident</h1>

            <form method=\"POST\" action=\"\">
                Ip :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"Titre\"><br><br>
                Nom:<br>
                <input type=\"text\" name=\"nom\" placeholder=\"Machine\"><br><br>
                Type: <br>
                <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
                Ram: <br>
                <input type=\"text\" name=\"ram\" placeholder=\"Type\"><br><br>
                Disque: <br>
                <input type=\"text\" name=\"disque\" placeholder=\"Type\"><br><br>
                Statut: <br>
                <input type=\"text\" name=\"statut\" placeholder=\"Type\"><br><br>
                Salle affecté: <br>
                <input type=\"text\" name=\"id_salle\" placeholder=\"Type\"><br><br>


                </textarea>

                <input type=\"submit\">

            </form>

            ";
        // line 42
        if (array_key_exists("alerte", $context)) {
            // line 43
            echo "                <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
            ";
        }
        // line 45
        echo "
        </div>

    </div>
";
        
        $__internal_972a2a24c7fb0095f924ba54a26514748403994c682ebb629355ef3ea2ad9e03->leave($__internal_972a2a24c7fb0095f924ba54a26514748403994c682ebb629355ef3ea2ad9e03_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Machine:createmachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 45,  89 => 43,  87 => 42,  55 => 12,  49 => 11,  41 => 6,  35 => 5,  11 => 1,);
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
    Page de creation de machine
{%endblock%}



{% block content %}
    <div class=\"container\">
        <h1>Page de creation de machine </h1>

        <div id=\"container\" class=\"col\">

            <h1>Cretion d'incident</h1>

            <form method=\"POST\" action=\"\">
                Ip :<br>
                <input type=\"text\" name=\"ip\" placeholder=\"Titre\"><br><br>
                Nom:<br>
                <input type=\"text\" name=\"nom\" placeholder=\"Machine\"><br><br>
                Type: <br>
                <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
                Ram: <br>
                <input type=\"text\" name=\"ram\" placeholder=\"Type\"><br><br>
                Disque: <br>
                <input type=\"text\" name=\"disque\" placeholder=\"Type\"><br><br>
                Statut: <br>
                <input type=\"text\" name=\"statut\" placeholder=\"Type\"><br><br>
                Salle affecté: <br>
                <input type=\"text\" name=\"id_salle\" placeholder=\"Type\"><br><br>


                </textarea>

                <input type=\"submit\">

            </form>

            {% if alerte is defined %}
                <p>{{ alerte }}</p>
            {% endif %}

        </div>

    </div>
{%endblock%}", "BackBundle:Machine:createmachine.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/Machine/createmachine.html.twig");
    }
}
