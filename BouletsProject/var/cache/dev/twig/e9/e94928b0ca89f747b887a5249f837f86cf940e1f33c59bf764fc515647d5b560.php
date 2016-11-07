<?php

/* BackBundle::layout.html.twig */
class __TwigTemplate_28272d6f2dd5c59fa6bb89ec6f68e39f0ef580bf378603dea5b255d1136660d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b15494757e14ff874536ba4a0e2bd17fee6ccad1cd914bb9f3a66301d24acf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15494757e14ff874536ba4a0e2bd17fee6ccad1cd914bb9f3a66301d24acf75->enter($__internal_b15494757e14ff874536ba4a0e2bd17fee6ccad1cd914bb9f3a66301d24acf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::layout.html.twig"));

        // line 1
        echo "<html>
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

</head>

<body>
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('scripts', $context, $blocks);
        // line 19
        echo "</body>

</html>";
        
        $__internal_b15494757e14ff874536ba4a0e2bd17fee6ccad1cd914bb9f3a66301d24acf75->leave($__internal_b15494757e14ff874536ba4a0e2bd17fee6ccad1cd914bb9f3a66301d24acf75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_569b78fe43c3429ca0c008a95845ea47071be696a08f450d96cf98ee36304a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569b78fe43c3429ca0c008a95845ea47071be696a08f450d96cf98ee36304a58->enter($__internal_569b78fe43c3429ca0c008a95845ea47071be696a08f450d96cf98ee36304a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        echo "Back";
        
        $__internal_569b78fe43c3429ca0c008a95845ea47071be696a08f450d96cf98ee36304a58->leave($__internal_569b78fe43c3429ca0c008a95845ea47071be696a08f450d96cf98ee36304a58_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_7fe5cf6e4e7bb6cc436e234a1b0ec3385a179427de05addd38d9d1b3fcee3e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe5cf6e4e7bb6cc436e234a1b0ec3385a179427de05addd38d9d1b3fcee3e56->enter($__internal_7fe5cf6e4e7bb6cc436e234a1b0ec3385a179427de05addd38d9d1b3fcee3e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        
        $__internal_7fe5cf6e4e7bb6cc436e234a1b0ec3385a179427de05addd38d9d1b3fcee3e56->leave($__internal_7fe5cf6e4e7bb6cc436e234a1b0ec3385a179427de05addd38d9d1b3fcee3e56_prof);

    }

    // line 17
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8f2f56e77537bc5c0272a9b1dd1577352e386f5f82c5e84f61440b446984a529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2f56e77537bc5c0272a9b1dd1577352e386f5f82c5e84f61440b446984a529->enter($__internal_8f2f56e77537bc5c0272a9b1dd1577352e386f5f82c5e84f61440b446984a529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        
        $__internal_8f2f56e77537bc5c0272a9b1dd1577352e386f5f82c5e84f61440b446984a529->leave($__internal_8f2f56e77537bc5c0272a9b1dd1577352e386f5f82c5e84f61440b446984a529_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  71 => 14,  59 => 7,  50 => 19,  48 => 17,  45 => 16,  43 => 14,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{%block title%}Back{%endblock%}</title>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

</head>

<body>
{%block content%}
{%endblock%}

{%block scripts%}
{%endblock%}
</body>

</html>", "BackBundle::layout.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/layout.html.twig");
    }
}
