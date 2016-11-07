<?php

/* BackBundle:Incidents:allincidents.html.twig */
class __TwigTemplate_a84388f9278b037f7beb2bedf1e6f37cb556408dee6513603f0315c52ff2f05c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Incidents:allincidents.html.twig", 1);
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
        $__internal_5c6d9c463c0e728399af46f6fe86fc0e5db45023fab097433f3b623c8524feb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6d9c463c0e728399af46f6fe86fc0e5db45023fab097433f3b623c8524feb8->enter($__internal_5c6d9c463c0e728399af46f6fe86fc0e5db45023fab097433f3b623c8524feb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Incidents:allincidents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6d9c463c0e728399af46f6fe86fc0e5db45023fab097433f3b623c8524feb8->leave($__internal_5c6d9c463c0e728399af46f6fe86fc0e5db45023fab097433f3b623c8524feb8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bf01dc2972a462bc4f9179e350b63e93330f0917445bf908f43016a75923074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf01dc2972a462bc4f9179e350b63e93330f0917445bf908f43016a75923074->enter($__internal_9bf01dc2972a462bc4f9179e350b63e93330f0917445bf908f43016a75923074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:allincidents.html.twig"));

        // line 7
        echo "    Historique des incidents
";
        
        $__internal_9bf01dc2972a462bc4f9179e350b63e93330f0917445bf908f43016a75923074->leave($__internal_9bf01dc2972a462bc4f9179e350b63e93330f0917445bf908f43016a75923074_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf28aecb360254f973739964eea6f88daf11aa4cbafab950f086cd93dcc1d5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf28aecb360254f973739964eea6f88daf11aa4cbafab950f086cd93dcc1d5d8->enter($__internal_cf28aecb360254f973739964eea6f88daf11aa4cbafab950f086cd93dcc1d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Incidents:allincidents.html.twig"));

        // line 12
        echo "
    <div class=\"container\">
        <h1>Historique des incidents </h1>
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Id</th><th>Nom</th><th>Type</th><th>Machine</th><th>Commencer le </th><th>Terminer le </th><th><form action=\"createincident\"><input class=\"btn \" type=\"submit\" value=\"Nouvel incident\" /></form></th>


                    </tr>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incidents"]) ? $context["incidents"] : $this->getContext($context, "incidents")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "


                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "machine", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "datedebut", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                            ";
            // line 35
            if (($this->getAttribute($context["i"], "datefin", array()) == null)) {
                // line 36
                echo "
                                <td>Non défini</td>


                            ";
            } else {
                // line 41
                echo "
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "datefin", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            ";
            }
            // line 44
            echo "                            <td><form action=\"incident/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\"><input type=\"submit\"  class=\"btn \" value=\"Détails\" /></form></td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_cf28aecb360254f973739964eea6f88daf11aa4cbafab950f086cd93dcc1d5d8->leave($__internal_cf28aecb360254f973739964eea6f88daf11aa4cbafab950f086cd93dcc1d5d8_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Incidents:allincidents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  117 => 44,  112 => 42,  109 => 41,  102 => 36,  100 => 35,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  73 => 25,  69 => 24,  55 => 12,  49 => 11,  41 => 7,  35 => 6,  11 => 1,);
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
    Historique des incidents
{%endblock%}


{% block content %}

    <div class=\"container\">
        <h1>Historique des incidents </h1>
        <div class=\"row\">
            <div class=\"col-lg-6\">

                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Id</th><th>Nom</th><th>Type</th><th>Machine</th><th>Commencer le </th><th>Terminer le </th><th><form action=\"createincident\"><input class=\"btn \" type=\"submit\" value=\"Nouvel incident\" /></form></th>


                    </tr>
                    {%  for i in incidents %}



                        <tr>
                            <td>{{ i.id }}</td>
                            <td>{{ i.nom }}</td>
                            <td>{{ i.type }}</td>
                            <td>{{ i.machine }}</td>
                            <td>{{ i.datedebut|date('d/m/Y') }}</td>

                            {%  if i.datefin == null %}

                                <td>Non défini</td>


                            {%  else   %}

                                <td>{{ i.datefin|date('d/m/Y') }}</td>
                            {% endif %}
                            <td><form action=\"incident/{{ i.id }}\"><input type=\"submit\"  class=\"btn \" value=\"Détails\" /></form></td>
                        </tr>

                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{%endblock%}




", "BackBundle:Incidents:allincidents.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Incidents/allincidents.html.twig");
    }
}
