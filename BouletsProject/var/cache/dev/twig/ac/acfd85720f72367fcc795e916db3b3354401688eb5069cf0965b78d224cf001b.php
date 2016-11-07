<?php

/* FrontBundle:Administrateur:create.html.twig */
class __TwigTemplate_9c527990c8f827dfdd76860f6257be4d8d7a333b672f658d10be4209bf62e45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Administrateur:create.html.twig", 1);
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
        $__internal_1c0d879ea3b6a47754f98c24d22c39548e6ae633d36cd5bb7b438d42a239a2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0d879ea3b6a47754f98c24d22c39548e6ae633d36cd5bb7b438d42a239a2b4->enter($__internal_1c0d879ea3b6a47754f98c24d22c39548e6ae633d36cd5bb7b438d42a239a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c0d879ea3b6a47754f98c24d22c39548e6ae633d36cd5bb7b438d42a239a2b4->leave($__internal_1c0d879ea3b6a47754f98c24d22c39548e6ae633d36cd5bb7b438d42a239a2b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9854774a83c5d79cc7df21fec139e2e5c13e3c236ee663e7a44e9a58db9df04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9854774a83c5d79cc7df21fec139e2e5c13e3c236ee663e7a44e9a58db9df04c->enter($__internal_9854774a83c5d79cc7df21fec139e2e5c13e3c236ee663e7a44e9a58db9df04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:create.html.twig"));

        // line 4
        echo "    Inscription
";
        
        $__internal_9854774a83c5d79cc7df21fec139e2e5c13e3c236ee663e7a44e9a58db9df04c->leave($__internal_9854774a83c5d79cc7df21fec139e2e5c13e3c236ee663e7a44e9a58db9df04c_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d51e17a6cf0181e70b3316670000ce3ddb04f9297a752db7a15ade654ca40195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51e17a6cf0181e70b3316670000ce3ddb04f9297a752db7a15ade654ca40195->enter($__internal_d51e17a6cf0181e70b3316670000ce3ddb04f9297a752db7a15ade654ca40195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:create.html.twig"));

        // line 8
        echo "    <div class=\"container\">
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
    </div>
    ";
        // line 26
        if (array_key_exists("error", $context)) {
            // line 27
            echo "      <p style=\"color: red; \"> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </p>
    ";
        }
        
        $__internal_d51e17a6cf0181e70b3316670000ce3ddb04f9297a752db7a15ade654ca40195->leave($__internal_d51e17a6cf0181e70b3316670000ce3ddb04f9297a752db7a15ade654ca40195_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Administrateur:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  75 => 26,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    </div>
    {% if error is defined%}
      <p style=\"color: red; \"> {{ error }} </p>
    {% endif  %}
{%endblock%}
", "FrontBundle:Administrateur:create.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/create.html.twig");
    }
}
