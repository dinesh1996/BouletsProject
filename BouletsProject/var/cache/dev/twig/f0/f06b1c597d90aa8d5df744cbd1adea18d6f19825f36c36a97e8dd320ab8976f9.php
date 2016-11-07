<?php

/* BackBundle:Default:createIncident.html.twig */
class __TwigTemplate_75dcb0814e0210b3f08ebf4712b5d3ff73291aea538a91315d1ccfb389c88c7b extends Twig_Template
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
        $__internal_17d7e312fecb1b92073abc706677ef9a003b13fa7fc78f60ad0c5a0e24ab3b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d7e312fecb1b92073abc706677ef9a003b13fa7fc78f60ad0c5a0e24ab3b1b->enter($__internal_17d7e312fecb1b92073abc706677ef9a003b13fa7fc78f60ad0c5a0e24ab3b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:createIncident.html.twig"));

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


<h1>Page de creation d'incident </h1>

<div id=\"container\" class=\"col\">

    <h1>Form</h1>

    <form method=\"POST\" action=\"createIncident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <input type=\"text\" name=\"text\" placeholder=\"Explication\"><br><br>
        <input type=\"submit\">

    </form>

    ";
        // line 32
        if (array_key_exists("alerte", $context)) {
            // line 33
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
    ";
        }
        // line 35
        echo "
</div>


</body>
</html>

";
        
        $__internal_17d7e312fecb1b92073abc706677ef9a003b13fa7fc78f60ad0c5a0e24ab3b1b->leave($__internal_17d7e312fecb1b92073abc706677ef9a003b13fa7fc78f60ad0c5a0e24ab3b1b_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:createIncident.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 35,  57 => 33,  55 => 32,  22 => 1,);
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


<h1>Page de creation d'incident </h1>

<div id=\"container\" class=\"col\">

    <h1>Form</h1>

    <form method=\"POST\" action=\"createIncident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <input type=\"text\" name=\"text\" placeholder=\"Explication\"><br><br>
        <input type=\"submit\">

    </form>

    {% if alerte is defined %}
        <p>{{ alerte }}</p>
    {% endif %}

</div>


</body>
</html>

", "BackBundle:Default:createIncident.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Default/createIncident.html.twig");
    }
}
