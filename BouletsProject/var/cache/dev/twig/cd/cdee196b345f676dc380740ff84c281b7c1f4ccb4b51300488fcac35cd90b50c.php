<?php

/* FrontBundle:Administrateur:logIn.html.twig */
class __TwigTemplate_afe7f2677b14a102b87040dcb913a1ebb66a9491eb523f5abcb3cbe08a9e97b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Administrateur:logIn.html.twig", 1);
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
        $__internal_b4d6f4fd4e2108269cf0a71fd4a1a95650fd46f8f6f681311ee8a49eeef1f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d6f4fd4e2108269cf0a71fd4a1a95650fd46f8f6f681311ee8a49eeef1f514->enter($__internal_b4d6f4fd4e2108269cf0a71fd4a1a95650fd46f8f6f681311ee8a49eeef1f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:logIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d6f4fd4e2108269cf0a71fd4a1a95650fd46f8f6f681311ee8a49eeef1f514->leave($__internal_b4d6f4fd4e2108269cf0a71fd4a1a95650fd46f8f6f681311ee8a49eeef1f514_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fd3ff786eceae9603c37737da4e8c3e534e71470522cbfa98c69ae223c02c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd3ff786eceae9603c37737da4e8c3e534e71470522cbfa98c69ae223c02c28->enter($__internal_4fd3ff786eceae9603c37737da4e8c3e534e71470522cbfa98c69ae223c02c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

        // line 4
        echo "    Login
";
        
        $__internal_4fd3ff786eceae9603c37737da4e8c3e534e71470522cbfa98c69ae223c02c28->leave($__internal_4fd3ff786eceae9603c37737da4e8c3e534e71470522cbfa98c69ae223c02c28_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c201e9f0a7595ed6c5faca8336fa1d5a6c39247bb5dc8844007e2601f9ffce40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c201e9f0a7595ed6c5faca8336fa1d5a6c39247bb5dc8844007e2601f9ffce40->enter($__internal_c201e9f0a7595ed6c5faca8336fa1d5a6c39247bb5dc8844007e2601f9ffce40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

        // line 8
        echo "    <div class=\"container\">
        <form method=\"POST\" action=\"/web/app_dev.php/login\">
            <h1>Connexion</h1>
            <h2>Login</h2>
            <input type=\"email\" class=\"form-control\" name=\"mail\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" class=\"form-control\" name=\"mdp\"/>
            <br>
            <button class=\"btn btn-primary\">Valider</button>
        </form>
    </div>
    ";
        // line 20
        if (array_key_exists("error", $context)) {
            // line 21
            echo "        <p style=\"color: red; \"> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </p>
    ";
        }
        // line 23
        echo "    ";
        if (array_key_exists("success", $context)) {
            // line 24
            echo "        <p style=\"color: green; \"> ";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " </p>
    ";
        }
        
        $__internal_c201e9f0a7595ed6c5faca8336fa1d5a6c39247bb5dc8844007e2601f9ffce40->leave($__internal_c201e9f0a7595ed6c5faca8336fa1d5a6c39247bb5dc8844007e2601f9ffce40_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Administrateur:logIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  77 => 23,  71 => 21,  69 => 20,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Login
{%endblock%}

{% block content %}
    <div class=\"container\">
        <form method=\"POST\" action=\"/web/app_dev.php/login\">
            <h1>Connexion</h1>
            <h2>Login</h2>
            <input type=\"email\" class=\"form-control\" name=\"mail\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" class=\"form-control\" name=\"mdp\"/>
            <br>
            <button class=\"btn btn-primary\">Valider</button>
        </form>
    </div>
    {% if error is defined%}
        <p style=\"color: red; \"> {{ error }} </p>
    {% endif  %}
    {% if success is defined%}
        <p style=\"color: green; \"> {{ success }} </p>
    {% endif  %}
{%endblock%}
", "FrontBundle:Administrateur:logIn.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/logIn.html.twig");
    }
}
