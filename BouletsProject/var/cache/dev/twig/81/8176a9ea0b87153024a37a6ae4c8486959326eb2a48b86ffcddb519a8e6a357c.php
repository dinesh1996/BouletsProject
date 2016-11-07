<?php

/* BackBundle:Default:board.html.twig */
class __TwigTemplate_bdb96a1d4efab1f5c2a7a39ef3082d2fd8f64a4cc0201eb6f22f8ab1edcae76a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackBundle::layout.html.twig", "BackBundle:Default:board.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bd892bff2c1f03a8fba37c51a2bdb848b5a9766b40b90f3cf1015fc6898692a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd892bff2c1f03a8fba37c51a2bdb848b5a9766b40b90f3cf1015fc6898692a->enter($__internal_4bd892bff2c1f03a8fba37c51a2bdb848b5a9766b40b90f3cf1015fc6898692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:board.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bd892bff2c1f03a8fba37c51a2bdb848b5a9766b40b90f3cf1015fc6898692a->leave($__internal_4bd892bff2c1f03a8fba37c51a2bdb848b5a9766b40b90f3cf1015fc6898692a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2bd94476f168274b72b2b24f89a4523010232c7db3937384cdaa571fd6e7908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bd94476f168274b72b2b24f89a4523010232c7db3937384cdaa571fd6e7908->enter($__internal_b2bd94476f168274b72b2b24f89a4523010232c7db3937384cdaa571fd6e7908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBundle:Default:board.html.twig"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Machine</th><th>Salle</th>
                    </tr>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 12
            echo "                        <tr>
                            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id_salle", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_b2bd94476f168274b72b2b24f89a4523010232c7db3937384cdaa571fd6e7908->leave($__internal_b2bd94476f168274b72b2b24f89a4523010232c7db3937384cdaa571fd6e7908_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  60 => 14,  56 => 13,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BackBundle::layout.html.twig\" %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table table-bordered table-striped table-hover\">
                    <tr>
                        <th>Machine</th><th>Salle</th>
                    </tr>
                    {%for m in machine %}
                        <tr>
                            <td>{{ m.nom }}</td>
                            <td>{{ m.id_salle }}</td>
                        </tr>
                    {%endfor%}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "BackBundle:Default:board.html.twig", "C:\\wamp64\\www\\Project\\BouletsProject\\BouletsProject\\src\\Boulets\\BackBundle/Resources/views/Default/board.html.twig");
    }
}
