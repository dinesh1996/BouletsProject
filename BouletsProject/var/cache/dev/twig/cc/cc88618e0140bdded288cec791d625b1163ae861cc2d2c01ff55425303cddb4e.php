<?php

/* FrontBundle:Administrateur:logIn.html.twig */
class __TwigTemplate_1b2515cd2a84a2ee3db6d4d1459c70d62c959bd761938efea7dc2a27c3ea23e8 extends Twig_Template
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
        $__internal_f2a6de83a3cf1abc79e74438d5381833fe3fccd7fb5b1a40cf8f4c2243945b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a6de83a3cf1abc79e74438d5381833fe3fccd7fb5b1a40cf8f4c2243945b9d->enter($__internal_f2a6de83a3cf1abc79e74438d5381833fe3fccd7fb5b1a40cf8f4c2243945b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:logIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2a6de83a3cf1abc79e74438d5381833fe3fccd7fb5b1a40cf8f4c2243945b9d->leave($__internal_f2a6de83a3cf1abc79e74438d5381833fe3fccd7fb5b1a40cf8f4c2243945b9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63c18137f4e781b553f0b630414095c31f733ee2ca57dee7d416960c341d7f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c18137f4e781b553f0b630414095c31f733ee2ca57dee7d416960c341d7f02->enter($__internal_63c18137f4e781b553f0b630414095c31f733ee2ca57dee7d416960c341d7f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

        // line 4
        echo "    Login
";
        
        $__internal_63c18137f4e781b553f0b630414095c31f733ee2ca57dee7d416960c341d7f02->leave($__internal_63c18137f4e781b553f0b630414095c31f733ee2ca57dee7d416960c341d7f02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1683c7c3d34d32c5d7eee172d4fd133c807e1ea670f3fced0a1dd614bcae8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1683c7c3d34d32c5d7eee172d4fd133c807e1ea670f3fced0a1dd614bcae8f2->enter($__internal_f1683c7c3d34d32c5d7eee172d4fd133c807e1ea670f3fced0a1dd614bcae8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:logIn.html.twig"));

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
        
        $__internal_f1683c7c3d34d32c5d7eee172d4fd133c807e1ea670f3fced0a1dd614bcae8f2->leave($__internal_f1683c7c3d34d32c5d7eee172d4fd133c807e1ea670f3fced0a1dd614bcae8f2_prof);

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
", "FrontBundle:Administrateur:logIn.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/logIn.html.twig");
    }
}
