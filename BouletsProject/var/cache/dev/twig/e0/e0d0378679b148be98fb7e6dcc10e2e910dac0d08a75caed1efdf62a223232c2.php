<?php

/* BackBundle:Default:createincident.html.twig */
class __TwigTemplate_5d4f6e4f93a05558142218f50badb68515ab7a873339f2a97c520dc4626bd238 extends Twig_Template
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
        $__internal_09193be4b034bc42af72ba0b928a5f054019ad25f886aa76b0e6a823bc112c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09193be4b034bc42af72ba0b928a5f054019ad25f886aa76b0e6a823bc112c8c->enter($__internal_09193be4b034bc42af72ba0b928a5f054019ad25f886aa76b0e6a823bc112c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:createincident.html.twig"));

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

    <h1>Cretion d'incident</h1>

    <form method=\"POST\" action=\"createincident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <textarea rows=\"4\" cols=\"50\" placeholder=\"Explication\" name=\"text\">

        </textarea>

        <input type=\"submit\">

    </form>

    ";
        // line 35
        if (array_key_exists("alerte", $context)) {
            // line 36
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["alerte"]) ? $context["alerte"] : $this->getContext($context, "alerte")), "html", null, true);
            echo "</p>
    ";
        }
        // line 38
        echo "
</div>


</body>
</html>

";
        
        $__internal_09193be4b034bc42af72ba0b928a5f054019ad25f886aa76b0e6a823bc112c8c->leave($__internal_09193be4b034bc42af72ba0b928a5f054019ad25f886aa76b0e6a823bc112c8c_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:createincident.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 38,  60 => 36,  58 => 35,  22 => 1,);
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

    <h1>Cretion d'incident</h1>

    <form method=\"POST\" action=\"createincident\">
        Titre :<br>
        <input type=\"text\" name=\"nom\" placeholder=\"Titre\"><br><br>
        Machine concerneé :<br>
        <input type=\"text\" name=\"machine\" placeholder=\"Machine\"><br><br>
        Type: <br>
        <input type=\"text\" name=\"type\" placeholder=\"Type\"><br><br>
        Explication :<br>
        <textarea rows=\"4\" cols=\"50\" placeholder=\"Explication\" name=\"text\">

        </textarea>

        <input type=\"submit\">

    </form>

    {% if alerte is defined %}
        <p>{{ alerte }}</p>
    {% endif %}

</div>


</body>
</html>

", "BackBundle:Default:createincident.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Default/createincident.html.twig");
    }
}
