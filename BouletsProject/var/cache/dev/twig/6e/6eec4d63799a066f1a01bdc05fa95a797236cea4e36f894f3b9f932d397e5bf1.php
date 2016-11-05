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
        $__internal_c2270a06829b54bedb09d7acf1d173bc29dd608d48f46750f48b532f342c544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2270a06829b54bedb09d7acf1d173bc29dd608d48f46750f48b532f342c544e->enter($__internal_c2270a06829b54bedb09d7acf1d173bc29dd608d48f46750f48b532f342c544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2270a06829b54bedb09d7acf1d173bc29dd608d48f46750f48b532f342c544e->leave($__internal_c2270a06829b54bedb09d7acf1d173bc29dd608d48f46750f48b532f342c544e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4bb9442b270f20f231ceef9c94045524adb6c4ddfe870ba1d28a7fbbe7090c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bb9442b270f20f231ceef9c94045524adb6c4ddfe870ba1d28a7fbbe7090c7->enter($__internal_f4bb9442b270f20f231ceef9c94045524adb6c4ddfe870ba1d28a7fbbe7090c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:profil.html.twig"));

        // line 4
        echo "    Profil
";
        
        $__internal_f4bb9442b270f20f231ceef9c94045524adb6c4ddfe870ba1d28a7fbbe7090c7->leave($__internal_f4bb9442b270f20f231ceef9c94045524adb6c4ddfe870ba1d28a7fbbe7090c7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0d7a1955d6f8e5bc4c0bd87d61f67c4fa500d73ee78014a0f0f1fd4b01623c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d7a1955d6f8e5bc4c0bd87d61f67c4fa500d73ee78014a0f0f1fd4b01623c11->enter($__internal_0d7a1955d6f8e5bc4c0bd87d61f67c4fa500d73ee78014a0f0f1fd4b01623c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:profil.html.twig"));

        // line 8
        echo "    <div class=\"container\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 11
            echo "            <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
            <br>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "mail", array()), "html", null, true);
            echo "</td>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        ";
        // line 16
        if ((array_key_exists("nom", $context) && array_key_exists("mail", $context))) {
            // line 17
            echo "        <h1>Nom</h1>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisteur"]) ? $context["utilisteur"] : $this->getContext($context, "utilisteur")), "nom", array()), "html", null, true);
            echo "
        <h1>Mail</h>
            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "mail", array()), "html", null, true);
            echo "
         ";
        } else {
            // line 22
            echo "            <p>Il n'a rien. Vous n'êtes pas connecté.</p>
             <form action=\"/web/app_dev.php/login\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
             </form>
        ";
        }
        // line 27
        echo "
    </div>
";
        
        $__internal_0d7a1955d6f8e5bc4c0bd87d61f67c4fa500d73ee78014a0f0f1fd4b01623c11->leave($__internal_0d7a1955d6f8e5bc4c0bd87d61f67c4fa500d73ee78014a0f0f1fd4b01623c11_prof);

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
        return array (  102 => 27,  95 => 22,  90 => 20,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  69 => 13,  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

        {%for u in utilisateur%}
            <td>{{u.nom}}</td>
            <br>
            <td>{{u.mail}}</td>
        {%endfor%}

        {% if nom is defined and mail is defined %}
        <h1>Nom</h1>
        {{utilisteur.nom}}
        <h1>Mail</h>
            {{ utilisateur.mail }}
         {% else %}
            <p>Il n'a rien. Vous n'êtes pas connecté.</p>
             <form action=\"/web/app_dev.php/login\">
                 <input type=\"submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
             </form>
        {%  endif%}

    </div>
{%endblock%}
", "FrontBundle:Administrateur:profil.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/profil.html.twig");
    }
}
