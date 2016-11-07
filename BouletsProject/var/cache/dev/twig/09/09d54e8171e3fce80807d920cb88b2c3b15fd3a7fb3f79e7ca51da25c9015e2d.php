<?php

/* BackBundle::layout.html.twig */
class __TwigTemplate_15a75aa8884e6fca03077273005721e55ea9bd9f29bf99fe4ca0aefc278c539b extends Twig_Template
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
        $__internal_6c28fb2553c3170d9446dda411912ca159c020c99e5b217a750f50112d2ead4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c28fb2553c3170d9446dda411912ca159c020c99e5b217a750f50112d2ead4e->enter($__internal_6c28fb2553c3170d9446dda411912ca159c020c99e5b217a750f50112d2ead4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle::layout.html.twig"));

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

    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d39fe82_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d39fe82_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d39fe82_bootstrap_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "d39fe82_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d39fe82_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d39fe82_responsive_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "d39fe82"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d39fe82") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/d39fe82.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "</head>

<body>
<div class=\"container-fluid\">
";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e017c7d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d_jquery-1.9.1.min_1.js");
            // line 30
            echo "

<script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
            // asset "e017c7d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d_bootstrap-alert_2.js");
            // line 30
            echo "

<script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
        } else {
            // asset "e017c7d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d.js");
            // line 30
            echo "

<script type=\"text/javascript\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
        }
        unset($context["asset_url"]);
        // line 35
        $this->displayBlock('scripts', $context, $blocks);
        // line 37
        echo "</body>

</html>
";
        
        $__internal_6c28fb2553c3170d9446dda411912ca159c020c99e5b217a750f50112d2ead4e->leave($__internal_6c28fb2553c3170d9446dda411912ca159c020c99e5b217a750f50112d2ead4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_334788b681aee608e3acd5a725113360ef2504a9e5bc6e90f125e5e471f6c753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334788b681aee608e3acd5a725113360ef2504a9e5bc6e90f125e5e471f6c753->enter($__internal_334788b681aee608e3acd5a725113360ef2504a9e5bc6e90f125e5e471f6c753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        echo "Boulets-Project";
        
        $__internal_334788b681aee608e3acd5a725113360ef2504a9e5bc6e90f125e5e471f6c753->leave($__internal_334788b681aee608e3acd5a725113360ef2504a9e5bc6e90f125e5e471f6c753_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_729398ebb9f508e54e9934083bb24b0b4c1119ba30f5d8f4db71fa93cd9684cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729398ebb9f508e54e9934083bb24b0b4c1119ba30f5d8f4db71fa93cd9684cf->enter($__internal_729398ebb9f508e54e9934083bb24b0b4c1119ba30f5d8f4db71fa93cd9684cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        // line 23
        echo "</div>
";
        
        $__internal_729398ebb9f508e54e9934083bb24b0b4c1119ba30f5d8f4db71fa93cd9684cf->leave($__internal_729398ebb9f508e54e9934083bb24b0b4c1119ba30f5d8f4db71fa93cd9684cf_prof);

    }

    // line 35
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4f72462cd7f1cecaaa15ace285285c67032558cd9bb444207c3c555538cb1fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f72462cd7f1cecaaa15ace285285c67032558cd9bb444207c3c555538cb1fe8->enter($__internal_4f72462cd7f1cecaaa15ace285285c67032558cd9bb444207c3c555538cb1fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle::layout.html.twig"));

        
        $__internal_4f72462cd7f1cecaaa15ace285285c67032558cd9bb444207c3c555538cb1fe8->leave($__internal_4f72462cd7f1cecaaa15ace285285c67032558cd9bb444207c3c555538cb1fe8_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 35,  143 => 23,  137 => 22,  125 => 7,  115 => 37,  113 => 35,  106 => 32,  102 => 30,  94 => 32,  90 => 30,  83 => 32,  79 => 30,  75 => 26,  72 => 25,  70 => 22,  64 => 18,  44 => 16,  40 => 11,  33 => 7,  25 => 1,);
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

    <title>{%block title%}Boulets-Project{%endblock%}</title>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>

    {% stylesheets
    '../vendor/twitter/bootstrap/less/bootstrap.less'
    '../vendor/twitter/bootstrap/less/responsive.less'
    filter='lessphp,cssrewrite'
    %}
    <link rel=\"stylesheet\" href=\"{{asset_url}}\"/>
    {% endstylesheets %}
</head>

<body>
<div class=\"container-fluid\">
{%block content%}
</div>
{%endblock%}

{% javascripts
'../vendor/jquery/jquery-1.9.1.min.js'
'../vendor/twitter/bootstrap/js/bootstrap-alert.js'
%}


<script type=\"text/javascript\" src=\"{{asset_url}}\"/>

{% endjavascripts%}
{%block scripts%}
{%endblock%}
</body>

</html>
", "BackBundle::layout.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/layout.html.twig");
    }
}
