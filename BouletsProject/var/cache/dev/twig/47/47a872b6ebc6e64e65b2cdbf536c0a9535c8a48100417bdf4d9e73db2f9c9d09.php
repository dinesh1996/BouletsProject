<?php

/* BackBundle:Administrateur:profil.html.twig */
class __TwigTemplate_b02bf48d441c2ac70e0ad42060e9d8fa23cdad47a1dfbd78f359d7848e8375f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Administrateur:profil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4c9ca3e13a317bf1d645a132d2e6fe8e8c6b740d412e1ddf130d5d22d98f683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c9ca3e13a317bf1d645a132d2e6fe8e8c6b740d412e1ddf130d5d22d98f683->enter($__internal_c4c9ca3e13a317bf1d645a132d2e6fe8e8c6b740d412e1ddf130d5d22d98f683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c9ca3e13a317bf1d645a132d2e6fe8e8c6b740d412e1ddf130d5d22d98f683->leave($__internal_c4c9ca3e13a317bf1d645a132d2e6fe8e8c6b740d412e1ddf130d5d22d98f683_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_373f2b24d377ebcdbaf1cdce5a2ade3bc9e98f2aa83d891001782e18f0e727cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373f2b24d377ebcdbaf1cdce5a2ade3bc9e98f2aa83d891001782e18f0e727cd->enter($__internal_373f2b24d377ebcdbaf1cdce5a2ade3bc9e98f2aa83d891001782e18f0e727cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:profil.html.twig"));

        // line 4
        echo "    Profil
";
        
        $__internal_373f2b24d377ebcdbaf1cdce5a2ade3bc9e98f2aa83d891001782e18f0e727cd->leave($__internal_373f2b24d377ebcdbaf1cdce5a2ade3bc9e98f2aa83d891001782e18f0e727cd_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_99e5f0ea3ff7cae23c859673213ab61e0e2a0da38abf87592720baca817af77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e5f0ea3ff7cae23c859673213ab61e0e2a0da38abf87592720baca817af77a->enter($__internal_99e5f0ea3ff7cae23c859673213ab61e0e2a0da38abf87592720baca817af77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:profil.html.twig"));

        // line 8
        echo "    <div class=\"container\">


        ";
        // line 11
        if ((array_key_exists("nom", $context) && array_key_exists("mail", $context))) {
            // line 12
            echo "        <h1>Nom</h1>
        ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
            echo "
        <h1>Mail</h1>
            ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
            echo "
            <form action=\"logout\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
            </form>

            <form action=\"update\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier votre profil \" />
            </form>

        ";
        }
        // line 25
        echo "
    </div>
";
        
        $__internal_99e5f0ea3ff7cae23c859673213ab61e0e2a0da38abf87592720baca817af77a->leave($__internal_99e5f0ea3ff7cae23c859673213ab61e0e2a0da38abf87592720baca817af77a_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Administrateur:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  70 => 15,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"BackBundle::layout.html.twig\"%}

{%block title%}
    Profil
{%endblock%}

{% block content %}
    <div class=\"container\">


        {% if nom is defined and mail is defined %}
        <h1>Nom</h1>
        {{nom}}
        <h1>Mail</h1>
            {{ mail }}
            <form action=\"logout\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
            </form>

            <form action=\"update\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier votre profil \" />
            </form>

        {%  endif%}

    </div>
{%endblock%}
", "BackBundle:Administrateur:profil.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/profil.html.twig");
    }
}
