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
        $__internal_5e0b38cd8b4645d8912a32e108c2ad4301211b08c1051d1fa7bc5db8ee9862c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0b38cd8b4645d8912a32e108c2ad4301211b08c1051d1fa7bc5db8ee9862c5->enter($__internal_5e0b38cd8b4645d8912a32e108c2ad4301211b08c1051d1fa7bc5db8ee9862c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:logIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0b38cd8b4645d8912a32e108c2ad4301211b08c1051d1fa7bc5db8ee9862c5->leave($__internal_5e0b38cd8b4645d8912a32e108c2ad4301211b08c1051d1fa7bc5db8ee9862c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4514800358eb8674918b4472917b0e69d25948514aa7135c3558221d92cc2276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4514800358eb8674918b4472917b0e69d25948514aa7135c3558221d92cc2276->enter($__internal_4514800358eb8674918b4472917b0e69d25948514aa7135c3558221d92cc2276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

        // line 4
        echo "    Login
";
        
        $__internal_4514800358eb8674918b4472917b0e69d25948514aa7135c3558221d92cc2276->leave($__internal_4514800358eb8674918b4472917b0e69d25948514aa7135c3558221d92cc2276_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_20100ddfc4b9b48623afcb542bfb48aefc19739f3f649fa2f674aff23997b3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20100ddfc4b9b48623afcb542bfb48aefc19739f3f649fa2f674aff23997b3ed->enter($__internal_20100ddfc4b9b48623afcb542bfb48aefc19739f3f649fa2f674aff23997b3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

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
        <form action=\"/web/app_dev.php/create\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"S'inscrire\" />
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
        // line 26
        echo "    ";
        if (array_key_exists("success", $context)) {
            // line 27
            echo "        <p style=\"color: green; \"> ";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " </p>
    ";
        }
        
        $__internal_20100ddfc4b9b48623afcb542bfb48aefc19739f3f649fa2f674aff23997b3ed->leave($__internal_20100ddfc4b9b48623afcb542bfb48aefc19739f3f649fa2f674aff23997b3ed_prof);

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
        return array (  83 => 27,  80 => 26,  74 => 24,  72 => 23,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
        <form action=\"/web/app_dev.php/create\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"S'inscrire\" />
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
