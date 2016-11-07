<?php

/* FrontBundle:Administrateur:list.html.twig */
class __TwigTemplate_4803ce50d346e6f9166a7a5e2c22d75026cfe60375317c35f44eb05e052589f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Administrateur:list.html.twig", 1);
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
        $__internal_016e76bb6fe899eef8b943a34c9c27a7b8f7011f3a272e1732d0c780432e0bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016e76bb6fe899eef8b943a34c9c27a7b8f7011f3a272e1732d0c780432e0bf0->enter($__internal_016e76bb6fe899eef8b943a34c9c27a7b8f7011f3a272e1732d0c780432e0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Administrateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016e76bb6fe899eef8b943a34c9c27a7b8f7011f3a272e1732d0c780432e0bf0->leave($__internal_016e76bb6fe899eef8b943a34c9c27a7b8f7011f3a272e1732d0c780432e0bf0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7cbcf7e70b984b0e50f9b49deec9459430f7954ff668b730573fbe17ccb58f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cbcf7e70b984b0e50f9b49deec9459430f7954ff668b730573fbe17ccb58f9->enter($__internal_b7cbcf7e70b984b0e50f9b49deec9459430f7954ff668b730573fbe17ccb58f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:list.html.twig"));

        // line 4
        echo "
";
        
        $__internal_b7cbcf7e70b984b0e50f9b49deec9459430f7954ff668b730573fbe17ccb58f9->leave($__internal_b7cbcf7e70b984b0e50f9b49deec9459430f7954ff668b730573fbe17ccb58f9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6444e93884cf671d50fcb39a01049b26c7f40afae86df2f98341766a10f8bd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6444e93884cf671d50fcb39a01049b26c7f40afae86df2f98341766a10f8bd66->enter($__internal_6444e93884cf671d50fcb39a01049b26c7f40afae86df2f98341766a10f8bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBundle:Administrateur:list.html.twig"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Nom</th><th>Prénom</th><th>Mail</th><th>Création</th>
                    </tr>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 16
            echo "                        <tr>
                            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>toto</td>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "mail", array()), "html", null, true);
            echo "</td>
                            <td>Taratata</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </table>
            </div>
        </div>
    </div>
    <form action=\"/web/app_dev.php/profil\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Retourner sur le profil\" />
    </form>
";
        
        $__internal_6444e93884cf671d50fcb39a01049b26c7f40afae86df2f98341766a10f8bd66->leave($__internal_6444e93884cf671d50fcb39a01049b26c7f40afae86df2f98341766a10f8bd66_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Administrateur:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  76 => 19,  71 => 17,  68 => 16,  64 => 15,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{%endblock%}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Nom</th><th>Prénom</th><th>Mail</th><th>Création</th>
                    </tr>
                    {%for u in utilisateurs%}
                        <tr>
                            <td>{{u.nom}}</td>
                            <td>toto</td>
                            <td>{{u.mail}}</td>
                            <td>Taratata</td>
                        </tr>
                    {%endfor%}
                </table>
            </div>
        </div>
    </div>
    <form action=\"/web/app_dev.php/profil\">
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Retourner sur le profil\" />
    </form>
{%endblock%}
", "FrontBundle:Administrateur:list.html.twig", "/var/www/html/BouletsProject/BouletsProject/src/Boulets/FrontBundle/Resources/views/Administrateur/list.html.twig");
    }
}
