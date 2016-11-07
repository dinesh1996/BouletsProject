<?php

/* BackBundle:Salle:deleteSalle.html.twig */
class __TwigTemplate_0887da727445eeef5f665b61911a007dba2ac98c8afcb881916f0f08516ecf0f extends Twig_Template
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
        $__internal_cb06f12c615251f6fc020c939b63af6a949a849c0ada015c8f2836667835a45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb06f12c615251f6fc020c939b63af6a949a849c0ada015c8f2836667835a45d->enter($__internal_cb06f12c615251f6fc020c939b63af6a949a849c0ada015c8f2836667835a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Salle:deleteSalle.html.twig"));

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


<h1>Page de suppression de salles </h1>

<div id=\"container\" class=\"col\">


    <form method=\"POST\" action=\"deleteSalle\">
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <br><br>
        <input type=\"submit\">
    </form>
</div>

</body>
</html>
";
        
        $__internal_cb06f12c615251f6fc020c939b63af6a949a849c0ada015c8f2836667835a45d->leave($__internal_cb06f12c615251f6fc020c939b63af6a949a849c0ada015c8f2836667835a45d_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Salle:deleteSalle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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


<h1>Page de suppression de salles </h1>

<div id=\"container\" class=\"col\">


    <form method=\"POST\" action=\"deleteSalle\">
        <input type=\"text\" name=\"id\" placeholder=\"id\">
        <br><br>
        <input type=\"submit\">
    </form>
</div>

</body>
</html>
", "BackBundle:Salle:deleteSalle.html.twig", "/var/www/html/Project/BouletsProject/src/Boulets/BackBundle/Resources/views/Salle/deleteSalle.html.twig");
    }
}
