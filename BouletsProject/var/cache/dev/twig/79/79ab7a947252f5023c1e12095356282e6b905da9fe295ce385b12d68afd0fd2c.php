<?php

/* BackBundle:Administrateur:list.html.twig */
class __TwigTemplate_6b8abea500929af84abfe8a8d25ad929d3077614a90ded8bb53d075fdb058b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Administrateur:list.html.twig", 1);
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
        $__internal_32885802867c6d14cf683d2ad539dcd274aba21b776fef6f80451ec287094e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32885802867c6d14cf683d2ad539dcd274aba21b776fef6f80451ec287094e3b->enter($__internal_32885802867c6d14cf683d2ad539dcd274aba21b776fef6f80451ec287094e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Administrateur:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32885802867c6d14cf683d2ad539dcd274aba21b776fef6f80451ec287094e3b->leave($__internal_32885802867c6d14cf683d2ad539dcd274aba21b776fef6f80451ec287094e3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73f18bf4e9f2e6f874f1ceb5f6126ea5ce937299deb3933efa495303ca005b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f18bf4e9f2e6f874f1ceb5f6126ea5ce937299deb3933efa495303ca005b2d->enter($__internal_73f18bf4e9f2e6f874f1ceb5f6126ea5ce937299deb3933efa495303ca005b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:list.html.twig"));

        // line 4
        echo "
";
        
        $__internal_73f18bf4e9f2e6f874f1ceb5f6126ea5ce937299deb3933efa495303ca005b2d->leave($__internal_73f18bf4e9f2e6f874f1ceb5f6126ea5ce937299deb3933efa495303ca005b2d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_96f00b3ee0ced1d0bd95d3ff4f67c3ed3fc2d9a8b217872a1ff60b9dee5b7478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f00b3ee0ced1d0bd95d3ff4f67c3ed3fc2d9a8b217872a1ff60b9dee5b7478->enter($__internal_96f00b3ee0ced1d0bd95d3ff4f67c3ed3fc2d9a8b217872a1ff60b9dee5b7478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Administrateur:list.html.twig"));

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
";
        
        $__internal_96f00b3ee0ced1d0bd95d3ff4f67c3ed3fc2d9a8b217872a1ff60b9dee5b7478->leave($__internal_96f00b3ee0ced1d0bd95d3ff4f67c3ed3fc2d9a8b217872a1ff60b9dee5b7478_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Administrateur:list.html.twig";
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
        return new Twig_Source("{%extends \"BackBundle::layout.html.twig\"%}

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
{%endblock%}
", "BackBundle:Administrateur:list.html.twig", "/Applications/MAMP/htdocs/Symfony/BouletsProject/BouletsProject/src/Boulets/BackBundle/Resources/views/Administrateur/list.html.twig");
    }
}
