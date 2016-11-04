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
        $__internal_deec5cda8926c2a563dbf7d2d2954cb9c73f1974ec1f2897c5b3ba29297deec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deec5cda8926c2a563dbf7d2d2954cb9c73f1974ec1f2897c5b3ba29297deec8->enter($__internal_deec5cda8926c2a563dbf7d2d2954cb9c73f1974ec1f2897c5b3ba29297deec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::layout.html.twig"));

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
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('scripts', $context, $blocks);
        // line 21
        echo "</body>

</html>";
        
        $__internal_deec5cda8926c2a563dbf7d2d2954cb9c73f1974ec1f2897c5b3ba29297deec8->leave($__internal_deec5cda8926c2a563dbf7d2d2954cb9c73f1974ec1f2897c5b3ba29297deec8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f34ea37e688465fcc92f37e1f8d4ff2bdcd99ff6592ae166d601f2a3beba480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f34ea37e688465fcc92f37e1f8d4ff2bdcd99ff6592ae166d601f2a3beba480->enter($__internal_2f34ea37e688465fcc92f37e1f8d4ff2bdcd99ff6592ae166d601f2a3beba480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        echo "Back";
        
        $__internal_2f34ea37e688465fcc92f37e1f8d4ff2bdcd99ff6592ae166d601f2a3beba480->leave($__internal_2f34ea37e688465fcc92f37e1f8d4ff2bdcd99ff6592ae166d601f2a3beba480_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_9168a3e8f988adbe6088acbb9e9580d68621f9ba2c924376d7cc80c0726aabab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9168a3e8f988adbe6088acbb9e9580d68621f9ba2c924376d7cc80c0726aabab->enter($__internal_9168a3e8f988adbe6088acbb9e9580d68621f9ba2c924376d7cc80c0726aabab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        
        $__internal_9168a3e8f988adbe6088acbb9e9580d68621f9ba2c924376d7cc80c0726aabab->leave($__internal_9168a3e8f988adbe6088acbb9e9580d68621f9ba2c924376d7cc80c0726aabab_prof);

    }

    // line 19
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_b9348d50a68badf6c0fe6807d72d251086f5d6e4060fe5cf071e6833826b1073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9348d50a68badf6c0fe6807d72d251086f5d6e4060fe5cf071e6833826b1073->enter($__internal_b9348d50a68badf6c0fe6807d72d251086f5d6e4060fe5cf071e6833826b1073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        
        $__internal_b9348d50a68badf6c0fe6807d72d251086f5d6e4060fe5cf071e6833826b1073->leave($__internal_b9348d50a68badf6c0fe6807d72d251086f5d6e4060fe5cf071e6833826b1073_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  73 => 15,  61 => 7,  52 => 21,  50 => 19,  46 => 17,  44 => 15,  33 => 7,  25 => 1,);
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
