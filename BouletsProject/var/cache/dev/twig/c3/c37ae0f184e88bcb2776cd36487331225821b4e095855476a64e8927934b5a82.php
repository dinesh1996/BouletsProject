<?php

/* FrontBundle:Administrateur:update.html.twig */
class __TwigTemplate_98b7a16d396f2541b3a7bcaf04d2d1dd696d4cf99e7265f98d9de774e3097f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Administrateur:update.html.twig", 1);
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
        $__internal_e7a02e82d1270b0f96a4a1511c01ac8a55b774596eed2889e29f37e5e6cd63ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a02e82d1270b0f96a4a1511c01ac8a55b774596eed2889e29f37e5e6cd63ab->enter($__internal_e7a02e82d1270b0f96a4a1511c01ac8a55b774596eed2889e29f37e5e6cd63ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7a02e82d1270b0f96a4a1511c01ac8a55b774596eed2889e29f37e5e6cd63ab->leave($__internal_e7a02e82d1270b0f96a4a1511c01ac8a55b774596eed2889e29f37e5e6cd63ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79b39a3735964a70520f4a4eb30fcd87d057537c79c67d13cf9b7393ef39a762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b39a3735964a70520f4a4eb30fcd87d057537c79c67d13cf9b7393ef39a762->enter($__internal_79b39a3735964a70520f4a4eb30fcd87d057537c79c67d13cf9b7393ef39a762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:update.html.twig"));

        // line 4
        echo "    Modification données du profil
";
        
        $__internal_79b39a3735964a70520f4a4eb30fcd87d057537c79c67d13cf9b7393ef39a762->leave($__internal_79b39a3735964a70520f4a4eb30fcd87d057537c79c67d13cf9b7393ef39a762_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc544065dd9fc29afa2752a2b42c96a85385b3b07459d960aedadcad2d768113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc544065dd9fc29afa2752a2b42c96a85385b3b07459d960aedadcad2d768113->enter($__internal_fc544065dd9fc29afa2752a2b42c96a85385b3b07459d960aedadcad2d768113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:update.html.twig"));

        // line 8
        echo "    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1>Modification</h1>
            <h2>Nom</h2>
            <input type=\"text\" placeholder=\"Entrez votre nom\" class=\"form-control\" name=\"nom\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"form-control\" name=\"mdp\"/>
            </br>
            <h2>Confirmation Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez à nouveau votre mot de passe\" class=\"form-control\" name=\"confmdp\"/>
            </br>
            <button class=\"btn btn-primary\">Modifier</button>
        </form>
    </div>
    ";
        // line 23
        if (array_key_exists("error", $context)) {
            // line 24
            echo "        <p style=\"color: red; \"> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </p>
    ";
        }
        
        $__internal_fc544065dd9fc29afa2752a2b42c96a85385b3b07459d960aedadcad2d768113->leave($__internal_fc544065dd9fc29afa2752a2b42c96a85385b3b07459d960aedadcad2d768113_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Administrateur:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  72 => 23,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Modification données du profil
{%endblock%}

{% block content %}
    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1>Modification</h1>
            <h2>Nom</h2>
            <input type=\"text\" placeholder=\"Entrez votre nom\" class=\"form-control\" name=\"nom\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"form-control\" name=\"mdp\"/>
            </br>
            <h2>Confirmation Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez à nouveau votre mot de passe\" class=\"form-control\" name=\"confmdp\"/>
            </br>
            <button class=\"btn btn-primary\">Modifier</button>
        </form>
    </div>
    {% if error is defined%}
        <p style=\"color: red; \"> {{ error }} </p>
    {% endif  %}
{%endblock%}
", "FrontBundle:Administrateur:update.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/update.html.twig");
    }
}
