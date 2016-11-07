<?php

/* BackBundle:Salle:CreateSalle.html.twig */
class __TwigTemplate_66e84d6b69eb121654744a1b8b5de0682a241fc67ed85a74620924e8a11b669f extends Twig_Template
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
        $__internal_39b2e5d1eac0958583a39ccbc91520edb4a8d252480c4e1104066ce31d97b3c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b2e5d1eac0958583a39ccbc91520edb4a8d252480c4e1104066ce31d97b3c8->enter($__internal_39b2e5d1eac0958583a39ccbc91520edb4a8d252480c4e1104066ce31d97b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Salle:CreateSalle.html.twig"));

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


<h1>Page de creation de salles </h1>

<div id=\"container\" class=\"col\">

    <h1>Création de salles</h1>

    <form method=\"POST\" action=\"createSalle\">
        Nom :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>

        <input type=\"submit\">

    </form>

    ";
        // line 27
        if (array_key_exists("alerte", $context)) {
            // line 28
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
    ";
        }
        // line 30
        echo "
</div>

</body>
</html>";
        
        $__internal_39b2e5d1eac0958583a39ccbc91520edb4a8d252480c4e1104066ce31d97b3c8->leave($__internal_39b2e5d1eac0958583a39ccbc91520edb4a8d252480c4e1104066ce31d97b3c8_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Salle:CreateSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 30,  52 => 28,  50 => 27,  22 => 1,);
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


<h1>Page de creation de salles </h1>

<div id=\"container\" class=\"col\">

    <h1>Création de salles</h1>

    <form method=\"POST\" action=\"createSalle\">
        Nom :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>

        <input type=\"submit\">

    </form>

    {% if alerte is defined %}
        <p>{{ alerte }}</p>
    {% endif %}

</div>

</body>
</html>", "BackBundle:Salle:CreateSalle.html.twig", "/var/www/html/Project/BouletsProject/src/Boulets/BackBundle/Resources/views/Salle/CreateSalle.html.twig");
    }
}
