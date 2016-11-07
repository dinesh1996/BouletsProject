<?php

/* BackBundle:Administrateur:logIn.html.twig */
class __TwigTemplate_7a1532bd30eeb181038ea0da9ce50d4a3db24d14b249a70382d7ac5cd93aafa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Administrateur:logIn.html.twig", 1);
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
        $__internal_b7e117bf4631aaacef8b51a3dd2911b93fa1f732c38dced4d9e5a22bee38f724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e117bf4631aaacef8b51a3dd2911b93fa1f732c38dced4d9e5a22bee38f724->enter($__internal_b7e117bf4631aaacef8b51a3dd2911b93fa1f732c38dced4d9e5a22bee38f724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:logIn.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e117bf4631aaacef8b51a3dd2911b93fa1f732c38dced4d9e5a22bee38f724->leave($__internal_b7e117bf4631aaacef8b51a3dd2911b93fa1f732c38dced4d9e5a22bee38f724_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3da5241db73967760d329f3fa76bba26f4546659eb40ac3ebc3794a512f04081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da5241db73967760d329f3fa76bba26f4546659eb40ac3ebc3794a512f04081->enter($__internal_3da5241db73967760d329f3fa76bba26f4546659eb40ac3ebc3794a512f04081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:logIn.html.twig"));

        // line 4
        echo "    Login
";
        
        $__internal_3da5241db73967760d329f3fa76bba26f4546659eb40ac3ebc3794a512f04081->leave($__internal_3da5241db73967760d329f3fa76bba26f4546659eb40ac3ebc3794a512f04081_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9ac14923f2caa385a333624248e6e9eb8e141d9738f4969c84581deb9568390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ac14923f2caa385a333624248e6e9eb8e141d9738f4969c84581deb9568390->enter($__internal_f9ac14923f2caa385a333624248e6e9eb8e141d9738f4969c84581deb9568390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:logIn.html.twig"));

        // line 8
        echo "    <div class=\"container\">
        <form method=\"POST\" action=\"login\">
            <h1>Connexion</h1>
            <h2>Login</h2>
            <input type=\"email\" class=\"form-control\" name=\"mail\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" class=\"form-control\" name=\"mdp\"/>
            <br>
            <button class=\"btn btn-primary\">Valider</button>
        </form>
        ";
        // line 19
        if (array_key_exists("error", $context)) {
            // line 20
            echo "            <p style=\"color: red; \"> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo " </p>
        ";
        }
        // line 22
        echo "        ";
        if (array_key_exists("success", $context)) {
            // line 23
            echo "            <p style=\"color: green; \"> ";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " </p>
        ";
        }
        // line 25
        echo "    </div>

";
        
        $__internal_f9ac14923f2caa385a333624248e6e9eb8e141d9738f4969c84581deb9568390->leave($__internal_f9ac14923f2caa385a333624248e6e9eb8e141d9738f4969c84581deb9568390_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Administrateur:logIn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  79 => 23,  76 => 22,  70 => 20,  68 => 19,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    Login
{%endblock%}

{% block content %}
    <div class=\"container\">
        <form method=\"POST\" action=\"login\">
            <h1>Connexion</h1>
            <h2>Login</h2>
            <input type=\"email\" class=\"form-control\" name=\"mail\"/>
            <br>
            <h2>Mot de passe</h2>
            <input type=\"password\" class=\"form-control\" name=\"mdp\"/>
            <br>
            <button class=\"btn btn-primary\">Valider</button>
        </form>
        {% if error is defined%}
            <p style=\"color: red; \"> {{ error }} </p>
        {% endif  %}
        {% if success is defined%}
            <p style=\"color: green; \"> {{ success }} </p>
        {% endif  %}
    </div>

{%endblock%}
", "BackBundle:Administrateur:logIn.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/logIn.html.twig");
    }
}
