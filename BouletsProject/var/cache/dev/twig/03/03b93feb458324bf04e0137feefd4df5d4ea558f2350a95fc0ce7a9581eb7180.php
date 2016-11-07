<?php

/* BackBundle:Administrateur:create.html.twig */
class __TwigTemplate_1ccb48ffbf0a2150190eebed6b4c64b8f4bdb6df913a7a6c50c258f734456889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Administrateur:create.html.twig", 1);
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
        $__internal_785e789039bc246b69310d51cd349e72ba372c2bb346d072a0df26822c716e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785e789039bc246b69310d51cd349e72ba372c2bb346d072a0df26822c716e63->enter($__internal_785e789039bc246b69310d51cd349e72ba372c2bb346d072a0df26822c716e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785e789039bc246b69310d51cd349e72ba372c2bb346d072a0df26822c716e63->leave($__internal_785e789039bc246b69310d51cd349e72ba372c2bb346d072a0df26822c716e63_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7c276a6f33780d939de0d0c31521c1996b24988a1062d0ed230d906bc7b174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c276a6f33780d939de0d0c31521c1996b24988a1062d0ed230d906bc7b174b->enter($__internal_a7c276a6f33780d939de0d0c31521c1996b24988a1062d0ed230d906bc7b174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:create.html.twig"));

        // line 4
        echo "    Inscription
";
        
        $__internal_a7c276a6f33780d939de0d0c31521c1996b24988a1062d0ed230d906bc7b174b->leave($__internal_a7c276a6f33780d939de0d0c31521c1996b24988a1062d0ed230d906bc7b174b_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f35c05c40b3c51c8988c7e16ba422fa5c5c607c08e482b991d21dc63013b8390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35c05c40b3c51c8988c7e16ba422fa5c5c607c08e482b991d21dc63013b8390->enter($__internal_f35c05c40b3c51c8988c7e16ba422fa5c5c607c08e482b991d21dc63013b8390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:create.html.twig"));

        // line 8
        echo "<div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1>Inscription</h1>
            <h2>Nom</h2>
            <input type=\"text\" placeholder=\"Entrez votre nom\" class=\"form-control\" name=\"nom\"/>
            <br>
            <h2>Email</h2>
            <input type=\"email\" placeholder=\"Entrez votre email\" class=\"form-control\" name=\"mail\"/>
            </br>
            <h2>Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"form-control\" name=\"mdp\"/>
            </br>
            <h2>Confirmation Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez à nouveau votre mot de passe\" class=\"form-control\" name=\"confmdp\"/>
            </br>
            <button class=\"btn btn-primary\">S'inscrire</button>
        </form>
        ";
        // line 25
        if (array_key_exists("error", $context)) {
            // line 26
            echo "            <p style=\"color: red; \"> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </p>
        ";
        }
        // line 28
        echo "</div>

";
        
        $__internal_f35c05c40b3c51c8988c7e16ba422fa5c5c607c08e482b991d21dc63013b8390->leave($__internal_f35c05c40b3c51c8988c7e16ba422fa5c5c607c08e482b991d21dc63013b8390_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Administrateur:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 26,  74 => 25,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Inscription
{%endblock%}

{% block content %}
<div class=\"container\">
        <form method=\"POST\" action=\"\">
            <h1>Inscription</h1>
            <h2>Nom</h2>
            <input type=\"text\" placeholder=\"Entrez votre nom\" class=\"form-control\" name=\"nom\"/>
            <br>
            <h2>Email</h2>
            <input type=\"email\" placeholder=\"Entrez votre email\" class=\"form-control\" name=\"mail\"/>
            </br>
            <h2>Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez votre mot de passe\" class=\"form-control\" name=\"mdp\"/>
            </br>
            <h2>Confirmation Mot de passe</h2>
            <input type=\"password\" placeholder=\"Entrez à nouveau votre mot de passe\" class=\"form-control\" name=\"confmdp\"/>
            </br>
            <button class=\"btn btn-primary\">S'inscrire</button>
        </form>
        {% if error is defined%}
            <p style=\"color: red; \"> {{ error }} </p>
        {% endif  %}
</div>

{%endblock%}
", "BackBundle:Administrateur:create.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/create.html.twig");
    }
}
