<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_602de76c6ea80c0e2316878336c47b01a21bdaca01a3de5c5be95e3dc23d850a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602de76c6ea80c0e2316878336c47b01a21bdaca01a3de5c5be95e3dc23d850a->enter($__internal_602de76c6ea80c0e2316878336c47b01a21bdaca01a3de5c5be95e3dc23d850a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a911fd9f0b90293bfbb341467bea5e6766c27f609ca738fe31dfbe0ef333be27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a911fd9f0b90293bfbb341467bea5e6766c27f609ca738fe31dfbe0ef333be27->enter($__internal_a911fd9f0b90293bfbb341467bea5e6766c27f609ca738fe31dfbe0ef333be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_602de76c6ea80c0e2316878336c47b01a21bdaca01a3de5c5be95e3dc23d850a->leave($__internal_602de76c6ea80c0e2316878336c47b01a21bdaca01a3de5c5be95e3dc23d850a_prof);

        
        $__internal_a911fd9f0b90293bfbb341467bea5e6766c27f609ca738fe31dfbe0ef333be27->leave($__internal_a911fd9f0b90293bfbb341467bea5e6766c27f609ca738fe31dfbe0ef333be27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f900b4cc8c9db000cbaf3fedccae6677d1c5357e1ba379c262f210b0c96a49d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f900b4cc8c9db000cbaf3fedccae6677d1c5357e1ba379c262f210b0c96a49d7->enter($__internal_f900b4cc8c9db000cbaf3fedccae6677d1c5357e1ba379c262f210b0c96a49d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_019dcbd56b147df45ad296847ece273c50a5437788186d3005a3642bc0f0cd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019dcbd56b147df45ad296847ece273c50a5437788186d3005a3642bc0f0cd5a->enter($__internal_019dcbd56b147df45ad296847ece273c50a5437788186d3005a3642bc0f0cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_019dcbd56b147df45ad296847ece273c50a5437788186d3005a3642bc0f0cd5a->leave($__internal_019dcbd56b147df45ad296847ece273c50a5437788186d3005a3642bc0f0cd5a_prof);

        
        $__internal_f900b4cc8c9db000cbaf3fedccae6677d1c5357e1ba379c262f210b0c96a49d7->leave($__internal_f900b4cc8c9db000cbaf3fedccae6677d1c5357e1ba379c262f210b0c96a49d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_413b9e1854dd3a08142c4b4988ba209313ce71ade3dc8af983bef930e2043ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413b9e1854dd3a08142c4b4988ba209313ce71ade3dc8af983bef930e2043ed4->enter($__internal_413b9e1854dd3a08142c4b4988ba209313ce71ade3dc8af983bef930e2043ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1fa4060bd28c86947555b0afa19da9b80f94a4b723b408058a9f265097ccaef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4060bd28c86947555b0afa19da9b80f94a4b723b408058a9f265097ccaef4->enter($__internal_1fa4060bd28c86947555b0afa19da9b80f94a4b723b408058a9f265097ccaef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fa4060bd28c86947555b0afa19da9b80f94a4b723b408058a9f265097ccaef4->leave($__internal_1fa4060bd28c86947555b0afa19da9b80f94a4b723b408058a9f265097ccaef4_prof);

        
        $__internal_413b9e1854dd3a08142c4b4988ba209313ce71ade3dc8af983bef930e2043ed4->leave($__internal_413b9e1854dd3a08142c4b4988ba209313ce71ade3dc8af983bef930e2043ed4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65d9064be02c07d1074130dc5e1caac5a5c19ea6d44845ee2e578538a67cf2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d9064be02c07d1074130dc5e1caac5a5c19ea6d44845ee2e578538a67cf2a5->enter($__internal_65d9064be02c07d1074130dc5e1caac5a5c19ea6d44845ee2e578538a67cf2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ef8ed3659099f335563e7c619dcbcf6f70556727c4c4a5d988cfba89d49bcbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef8ed3659099f335563e7c619dcbcf6f70556727c4c4a5d988cfba89d49bcbe->enter($__internal_6ef8ed3659099f335563e7c619dcbcf6f70556727c4c4a5d988cfba89d49bcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ef8ed3659099f335563e7c619dcbcf6f70556727c4c4a5d988cfba89d49bcbe->leave($__internal_6ef8ed3659099f335563e7c619dcbcf6f70556727c4c4a5d988cfba89d49bcbe_prof);

        
        $__internal_65d9064be02c07d1074130dc5e1caac5a5c19ea6d44845ee2e578538a67cf2a5->leave($__internal_65d9064be02c07d1074130dc5e1caac5a5c19ea6d44845ee2e578538a67cf2a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/AntibioPlusTEST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
