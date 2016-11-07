<?php

/* base.html.twig */
class __TwigTemplate_f9a94e62e26de6d409417fb3bd10cda538d1fcaeef2e333f57428f23c95f1947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc8aedc066452698b383d01b3be51b1ca751746349a285ca08bef3ef7195360c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8aedc066452698b383d01b3be51b1ca751746349a285ca08bef3ef7195360c->enter($__internal_fc8aedc066452698b383d01b3be51b1ca751746349a285ca08bef3ef7195360c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fc8aedc066452698b383d01b3be51b1ca751746349a285ca08bef3ef7195360c->leave($__internal_fc8aedc066452698b383d01b3be51b1ca751746349a285ca08bef3ef7195360c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4893bf4a10035daf93e8857b68c35cb312d6ee46d78a55f1de2c135429b27e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4893bf4a10035daf93e8857b68c35cb312d6ee46d78a55f1de2c135429b27e9->enter($__internal_a4893bf4a10035daf93e8857b68c35cb312d6ee46d78a55f1de2c135429b27e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_a4893bf4a10035daf93e8857b68c35cb312d6ee46d78a55f1de2c135429b27e9->leave($__internal_a4893bf4a10035daf93e8857b68c35cb312d6ee46d78a55f1de2c135429b27e9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a29ad6ed78f61be0db8b6dc697c02ea1fbe8a74a20b6b2becd4cdc5a9d515fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29ad6ed78f61be0db8b6dc697c02ea1fbe8a74a20b6b2becd4cdc5a9d515fb6->enter($__internal_a29ad6ed78f61be0db8b6dc697c02ea1fbe8a74a20b6b2becd4cdc5a9d515fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a29ad6ed78f61be0db8b6dc697c02ea1fbe8a74a20b6b2becd4cdc5a9d515fb6->leave($__internal_a29ad6ed78f61be0db8b6dc697c02ea1fbe8a74a20b6b2becd4cdc5a9d515fb6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a1e90a6b4a849db1d203b202768d34341aacb31d5b9d5f954886ee439bd9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a1e90a6b4a849db1d203b202768d34341aacb31d5b9d5f954886ee439bd9d6->enter($__internal_65a1e90a6b4a849db1d203b202768d34341aacb31d5b9d5f954886ee439bd9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_65a1e90a6b4a849db1d203b202768d34341aacb31d5b9d5f954886ee439bd9d6->leave($__internal_65a1e90a6b4a849db1d203b202768d34341aacb31d5b9d5f954886ee439bd9d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c825809ae983216815f1b122b6963287227ef65d3c126165d9d4d3f9fdd7c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c825809ae983216815f1b122b6963287227ef65d3c126165d9d4d3f9fdd7c29->enter($__internal_7c825809ae983216815f1b122b6963287227ef65d3c126165d9d4d3f9fdd7c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7c825809ae983216815f1b122b6963287227ef65d3c126165d9d4d3f9fdd7c29->leave($__internal_7c825809ae983216815f1b122b6963287227ef65d3c126165d9d4d3f9fdd7c29_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/app/Resources/views/base.html.twig");
    }
}
