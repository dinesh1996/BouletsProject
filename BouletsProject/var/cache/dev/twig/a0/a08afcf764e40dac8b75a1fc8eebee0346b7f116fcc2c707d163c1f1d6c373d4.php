<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_cd5bd43167943936f452e8c436473f3344cf715b6817baf8f3941e46168aaa25 extends Twig_Template
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
        $__internal_06c9be71edc994ece91a232b5609e40e434d47a7cf6b57acc258771b40e238e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c9be71edc994ece91a232b5609e40e434d47a7cf6b57acc258771b40e238e1->enter($__internal_06c9be71edc994ece91a232b5609e40e434d47a7cf6b57acc258771b40e238e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

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
";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e017c7d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d_jquery-1.9.1.min_1.js");
            // line 28
            echo "

<script type=\"text/javascript\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
            // asset "e017c7d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d_bootstrap-alert_2.js");
            // line 28
            echo "

<script type=\"text/javascript\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
        } else {
            // asset "e017c7d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e017c7d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e017c7d.js");
            // line 28
            echo "

<script type=\"text/javascript\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>

";
        }
        unset($context["asset_url"]);
        // line 33
        $this->displayBlock('scripts', $context, $blocks);
        // line 35
        echo "</body>

</html>
";
        
        $__internal_06c9be71edc994ece91a232b5609e40e434d47a7cf6b57acc258771b40e238e1->leave($__internal_06c9be71edc994ece91a232b5609e40e434d47a7cf6b57acc258771b40e238e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b03edb05b71a1c53abdcf9495efc6148013e84caccb93e76f7a659fd6a0854e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03edb05b71a1c53abdcf9495efc6148013e84caccb93e76f7a659fd6a0854e4->enter($__internal_b03edb05b71a1c53abdcf9495efc6148013e84caccb93e76f7a659fd6a0854e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle::layout.html.twig"));

        echo "Boulets-Project";
        
        $__internal_b03edb05b71a1c53abdcf9495efc6148013e84caccb93e76f7a659fd6a0854e4->leave($__internal_b03edb05b71a1c53abdcf9495efc6148013e84caccb93e76f7a659fd6a0854e4_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_d06242b4d5bbd1b205c182f99d07bf6e64b1c686b3039a1cea2041896d70115b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06242b4d5bbd1b205c182f99d07bf6e64b1c686b3039a1cea2041896d70115b->enter($__internal_d06242b4d5bbd1b205c182f99d07bf6e64b1c686b3039a1cea2041896d70115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle::layout.html.twig"));

        
        $__internal_d06242b4d5bbd1b205c182f99d07bf6e64b1c686b3039a1cea2041896d70115b->leave($__internal_d06242b4d5bbd1b205c182f99d07bf6e64b1c686b3039a1cea2041896d70115b_prof);

    }

    // line 33
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_128ca1827991aa779ebbc900c6399254d8020fd9b09d9311624dd4a35d53ead6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128ca1827991aa779ebbc900c6399254d8020fd9b09d9311624dd4a35d53ead6->enter($__internal_128ca1827991aa779ebbc900c6399254d8020fd9b09d9311624dd4a35d53ead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle::layout.html.twig"));

        
        $__internal_128ca1827991aa779ebbc900c6399254d8020fd9b09d9311624dd4a35d53ead6->leave($__internal_128ca1827991aa779ebbc900c6399254d8020fd9b09d9311624dd4a35d53ead6_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  136 => 21,  124 => 7,  114 => 35,  112 => 33,  105 => 30,  101 => 28,  93 => 30,  89 => 28,  82 => 30,  78 => 28,  74 => 24,  71 => 23,  69 => 21,  64 => 18,  44 => 16,  40 => 11,  33 => 7,  25 => 1,);
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
{%block content%}
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
", "FrontBundle::layout.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/layout.html.twig");
    }
}
