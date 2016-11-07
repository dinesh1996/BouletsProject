<?php

/* FrontBundle:Administrateur:profil.html.twig */
class __TwigTemplate_73941f77469419a3d8ad2b7d91a5c812d21392ba66663c55e49d36b525b265cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Administrateur:profil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cce82c61d7308e66414b6ca09f59a8e73d2c4bae4a0e36fbc17bbe3da7356913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce82c61d7308e66414b6ca09f59a8e73d2c4bae4a0e36fbc17bbe3da7356913->enter($__internal_cce82c61d7308e66414b6ca09f59a8e73d2c4bae4a0e36fbc17bbe3da7356913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cce82c61d7308e66414b6ca09f59a8e73d2c4bae4a0e36fbc17bbe3da7356913->leave($__internal_cce82c61d7308e66414b6ca09f59a8e73d2c4bae4a0e36fbc17bbe3da7356913_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6873845eb5ea0859b0e8854775e2f93d0fa6e973acef2fd35fbcb4cc512eeae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6873845eb5ea0859b0e8854775e2f93d0fa6e973acef2fd35fbcb4cc512eeae8->enter($__internal_6873845eb5ea0859b0e8854775e2f93d0fa6e973acef2fd35fbcb4cc512eeae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:profil.html.twig"));

        // line 4
        echo "    Profil
";
        
        $__internal_6873845eb5ea0859b0e8854775e2f93d0fa6e973acef2fd35fbcb4cc512eeae8->leave($__internal_6873845eb5ea0859b0e8854775e2f93d0fa6e973acef2fd35fbcb4cc512eeae8_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3eb4736f43437834e229ec9c4f409397708dfe3a0c95198e9b8d3b2bf102af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eb4736f43437834e229ec9c4f409397708dfe3a0c95198e9b8d3b2bf102af1->enter($__internal_b3eb4736f43437834e229ec9c4f409397708dfe3a0c95198e9b8d3b2bf102af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:profil.html.twig"));

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
            <form action=\"/web/app_dev.php/logout\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
            </form>
            <form action=\"/web/app_dev.php/update\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modification du profil\" />
            </form>
            <form action=\"/web/app_dev.php/admin/list\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Voir l'ensemble des utilisateurs\" />
            </form>
         ";
        } else {
            // line 26
            echo "            <p>Il n'a rien. Vous n'êtes pas connecté.</p>
             <form action=\"/web/app_dev.php/login\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
             </form>
             <form action=\"/web/app_dev.php/logout\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
             </form>
        ";
        }
        // line 34
        echo "
    </div>
";
        
        $__internal_b3eb4736f43437834e229ec9c4f409397708dfe3a0c95198e9b8d3b2bf102af1->leave($__internal_b3eb4736f43437834e229ec9c4f409397708dfe3a0c95198e9b8d3b2bf102af1_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Administrateur:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  84 => 26,  70 => 15,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"FrontBundle::layout.html.twig\"%}

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
            <form action=\"/web/app_dev.php/logout\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
            </form>
            <form action=\"/web/app_dev.php/update\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Modification du profil\" />
            </form>
            <form action=\"/web/app_dev.php/admin/list\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Voir l'ensemble des utilisateurs\" />
            </form>
         {% else %}
            <p>Il n'a rien. Vous n'êtes pas connecté.</p>
             <form action=\"/web/app_dev.php/login\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
             </form>
             <form action=\"/web/app_dev.php/logout\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
             </form>
        {%  endif%}

    </div>
{%endblock%}
", "FrontBundle:Administrateur:profil.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/profil.html.twig");
    }
}
