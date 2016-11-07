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
        $__internal_2b5f4af303d13399442896179f7faee9c3ccdbfa5e8722761aaf3c50389ad8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5f4af303d13399442896179f7faee9c3ccdbfa5e8722761aaf3c50389ad8b6->enter($__internal_2b5f4af303d13399442896179f7faee9c3ccdbfa5e8722761aaf3c50389ad8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5f4af303d13399442896179f7faee9c3ccdbfa5e8722761aaf3c50389ad8b6->leave($__internal_2b5f4af303d13399442896179f7faee9c3ccdbfa5e8722761aaf3c50389ad8b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_168b395184571b3a87ad571c2abfa68bbba990d7f4d8a2172e9de9b24b785da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168b395184571b3a87ad571c2abfa68bbba990d7f4d8a2172e9de9b24b785da7->enter($__internal_168b395184571b3a87ad571c2abfa68bbba990d7f4d8a2172e9de9b24b785da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:profil.html.twig"));

        // line 4
        echo "    Profil
";
        
        $__internal_168b395184571b3a87ad571c2abfa68bbba990d7f4d8a2172e9de9b24b785da7->leave($__internal_168b395184571b3a87ad571c2abfa68bbba990d7f4d8a2172e9de9b24b785da7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_1dc5c68b232230d54b816c3dc2a64d506f403c0c85adb1462d821038807f9439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc5c68b232230d54b816c3dc2a64d506f403c0c85adb1462d821038807f9439->enter($__internal_1dc5c68b232230d54b816c3dc2a64d506f403c0c85adb1462d821038807f9439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:profil.html.twig"));

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
         ";
        } else {
            // line 20
            echo "            <p>Il n'a rien. Vous n'êtes pas connecté.</p>
             <form action=\"/web/app_dev.php/login\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
             </form>
             <form action=\"/web/app_dev.php/logout\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se deconnecter\" />
             </form>
        ";
        }
        // line 28
        echo "
    </div>
";
        
        $__internal_1dc5c68b232230d54b816c3dc2a64d506f403c0c85adb1462d821038807f9439->leave($__internal_1dc5c68b232230d54b816c3dc2a64d506f403c0c85adb1462d821038807f9439_prof);

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
        return array (  88 => 28,  78 => 20,  70 => 15,  65 => 13,  62 => 12,  60 => 11,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
", "BackBundle:Administrateur:profil.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/profil.html.twig");
    }
}
