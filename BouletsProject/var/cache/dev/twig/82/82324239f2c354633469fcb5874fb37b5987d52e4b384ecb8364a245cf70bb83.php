<?php

/* BackBundle:Salle:UpdateSalle.html.twig */
class __TwigTemplate_b5e577d834641135709cc8cbff5e56c05ccadf18f3d1486ded885b3f7da3413f extends Twig_Template
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
        $__internal_4d6b500e37ff9a2ccc3d1909d58b1a5f5f2e4c3fc5034d6a5b49c885f466438f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6b500e37ff9a2ccc3d1909d58b1a5f5f2e4c3fc5034d6a5b49c885f466438f->enter($__internal_4d6b500e37ff9a2ccc3d1909d58b1a5f5f2e4c3fc5034d6a5b49c885f466438f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Salle:UpdateSalle.html.twig"));

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


<h1>Page de modification de salles </h1>

<div id=\"container\" class=\"col\">

    <h1>Création de salles</h1>

    <form method=\"POST\" action=\"updateSalle\">
        Nom :<br>
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <input type=\"text\" name=\"nom\" placeholder=\"Nouveau nom\">
        <br><br>
        <input type=\"submit\">

    </form>

    ";
        // line 28
        if (array_key_exists("alerte", $context)) {
            // line 29
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
    ";
        }
        // line 31
        echo "
    <form method=\"DELETE\" action=\"\">
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <br><br>
        <input type=\"submit\">
    </form>

</div>

</body>
</html>";
        
        $__internal_4d6b500e37ff9a2ccc3d1909d58b1a5f5f2e4c3fc5034d6a5b49c885f466438f->leave($__internal_4d6b500e37ff9a2ccc3d1909d58b1a5f5f2e4c3fc5034d6a5b49c885f466438f_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Salle:UpdateSalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 31,  53 => 29,  51 => 28,  22 => 1,);
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


<h1>Page de modification de salles </h1>

<div id=\"container\" class=\"col\">

    <h1>Création de salles</h1>

    <form method=\"POST\" action=\"updateSalle\">
        Nom :<br>
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <input type=\"text\" name=\"nom\" placeholder=\"Nouveau nom\">
        <br><br>
        <input type=\"submit\">

    </form>

    {% if alerte is defined %}
        <p>{{ alerte }}</p>
    {% endif %}

    <form method=\"DELETE\" action=\"\">
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <br><br>
        <input type=\"submit\">
    </form>

</div>

</body>
</html>", "BackBundle:Salle:UpdateSalle.html.twig", "/var/www/html/Project/BouletsProject/src/Boulets/BackBundle/Resources/views/Salle/UpdateSalle.html.twig");
    }
}
