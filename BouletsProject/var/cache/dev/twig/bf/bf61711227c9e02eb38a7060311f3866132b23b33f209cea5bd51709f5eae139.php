<?php

/* BackBundle:Default:allincidents.html.twig */
class __TwigTemplate_ebfcbe25b9a25c0f123c8721ce565fe6ecdc2acf65687297daff402bc829a446 extends Twig_Template
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
        $__internal_a9030efc5420193826ad57d30e824d22452248befe1368bb0a2dfc271d7064ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9030efc5420193826ad57d30e824d22452248befe1368bb0a2dfc271d7064ce->enter($__internal_a9030efc5420193826ad57d30e824d22452248befe1368bb0a2dfc271d7064ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:allincidents.html.twig"));

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


    <h1>Historique des incidents </h1>
    <div class=\"row\">
        <div class=\"col-lg-6\">

            <table class=\"table table-bordered table-striped table-hover\">
                <tr>
                    <th>Id</th><th>Nom</th><th>Type</th><th>Machine</th><th>Commencer le </th><th>Terminer le </th><th><form action=\"createincident\"><input type=\"submit\" value=\"Nouvel incident\" /></form></th>


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
                        <td>";
                // line 37
                echo "Non défini";
                echo "</td>


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
            echo "                        <td><form action=\"incident/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\"><input type=\"submit\" value=\"Détailes\" /></form></td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </table>
        </div>
    </div>
</div>



</body>
</html>

";
        
        $__internal_a9030efc5420193826ad57d30e824d22452248befe1368bb0a2dfc271d7064ce->leave($__internal_a9030efc5420193826ad57d30e824d22452248befe1368bb0a2dfc271d7064ce_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:allincidents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 48,  98 => 44,  93 => 42,  90 => 41,  83 => 37,  80 => 36,  78 => 35,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  51 => 25,  47 => 24,  22 => 1,);
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


    <h1>Historique des incidents </h1>
    <div class=\"row\">
        <div class=\"col-lg-6\">

            <table class=\"table table-bordered table-striped table-hover\">
                <tr>
                    <th>Id</th><th>Nom</th><th>Type</th><th>Machine</th><th>Commencer le </th><th>Terminer le </th><th><form action=\"createincident\"><input type=\"submit\" value=\"Nouvel incident\" /></form></th>


                </tr>
                {%  for i in incidents %}



                <tr>
                        <td>{{ i.id }}</td>
                        <td>{{ i.nom }}</td>
                        <td>{{ i.type }}</td>
                        <td>{{ i.machine }}</td>
                        <td>{{ i.datedebut|date('d/m/Y') }}</td>

                    {%  if i.datefin == null %}

                        <td>{{ 'Non défini' }}</td>


                    {%  else   %}

                    <td>{{ i.datefin|date('d/m/Y') }}</td>
                    {% endif %}
                        <td><form action=\"incident/{{ i.id }}\"><input type=\"submit\" value=\"Détailes\" /></form></td>
                    </tr>

                {% endfor %}
            </table>
        </div>
    </div>
</div>



</body>
</html>

", "BackBundle:Default:allincidents.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Default/allincidents.html.twig");
    }
}
