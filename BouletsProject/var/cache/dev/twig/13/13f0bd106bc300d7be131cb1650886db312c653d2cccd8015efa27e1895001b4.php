<?php

/* BackBundle:Administrateur:update.html.twig */
class __TwigTemplate_946885dac025b821fc1cb42eee18b231e78ddd103656cf486c2bb8d999684a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Administrateur:update.html.twig", 1);
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
        $__internal_533b5d515888b5c1b25064dae856dc8e0d5e7f6e502d22a505f94e3be0cf7caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b5d515888b5c1b25064dae856dc8e0d5e7f6e502d22a505f94e3be0cf7caf->enter($__internal_533b5d515888b5c1b25064dae856dc8e0d5e7f6e502d22a505f94e3be0cf7caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533b5d515888b5c1b25064dae856dc8e0d5e7f6e502d22a505f94e3be0cf7caf->leave($__internal_533b5d515888b5c1b25064dae856dc8e0d5e7f6e502d22a505f94e3be0cf7caf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a4c5be31d7269b14001b0d64c3d751df5a09ca5bee99d23cd041538971ca5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4c5be31d7269b14001b0d64c3d751df5a09ca5bee99d23cd041538971ca5ff->enter($__internal_8a4c5be31d7269b14001b0d64c3d751df5a09ca5bee99d23cd041538971ca5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:update.html.twig"));

        // line 4
        echo "    Modification données du profil
";
        
        $__internal_8a4c5be31d7269b14001b0d64c3d751df5a09ca5bee99d23cd041538971ca5ff->leave($__internal_8a4c5be31d7269b14001b0d64c3d751df5a09ca5bee99d23cd041538971ca5ff_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d35fd1fe6914741db2891dcec30e295c79ea4209bbf97fdd513f97b1330241d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35fd1fe6914741db2891dcec30e295c79ea4209bbf97fdd513f97b1330241d2->enter($__internal_d35fd1fe6914741db2891dcec30e295c79ea4209bbf97fdd513f97b1330241d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:update.html.twig"));

        // line 8
        echo "    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1> Modification données du profil</h1>
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
        
        $__internal_d35fd1fe6914741db2891dcec30e295c79ea4209bbf97fdd513f97b1330241d2->leave($__internal_d35fd1fe6914741db2891dcec30e295c79ea4209bbf97fdd513f97b1330241d2_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Administrateur:update.html.twig";
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
        return new Twig_Source("{%extends \"BackBundle::layout.html.twig\"%}

{%block title%}
    Modification données du profil
{%endblock%}

{% block content %}
    <div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1> Modification données du profil</h1>
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
", "BackBundle:Administrateur:update.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/update.html.twig");
    }
}
