<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c37bc0ce2640154a5a1e59c95058a029698e5e57c6e105d1879cf715d24d6e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7254116aa31f0dddbfbccf9677faf932761010147b925b9faf343022f4b9dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7254116aa31f0dddbfbccf9677faf932761010147b925b9faf343022f4b9dca->enter($__internal_c7254116aa31f0dddbfbccf9677faf932761010147b925b9faf343022f4b9dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_86cd8ae7e812a7087a8bdbcabe4a54646ff16dcd1f390815229fa3541189b243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86cd8ae7e812a7087a8bdbcabe4a54646ff16dcd1f390815229fa3541189b243->enter($__internal_86cd8ae7e812a7087a8bdbcabe4a54646ff16dcd1f390815229fa3541189b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7254116aa31f0dddbfbccf9677faf932761010147b925b9faf343022f4b9dca->leave($__internal_c7254116aa31f0dddbfbccf9677faf932761010147b925b9faf343022f4b9dca_prof);

        
        $__internal_86cd8ae7e812a7087a8bdbcabe4a54646ff16dcd1f390815229fa3541189b243->leave($__internal_86cd8ae7e812a7087a8bdbcabe4a54646ff16dcd1f390815229fa3541189b243_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7292d6e861b114d44c1174e3ca93d2d7476a3a43257d8f42a520382c998c38e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7292d6e861b114d44c1174e3ca93d2d7476a3a43257d8f42a520382c998c38e3->enter($__internal_7292d6e861b114d44c1174e3ca93d2d7476a3a43257d8f42a520382c998c38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79b00586ce8f5c2273382af349e9b299d46d41f1f34559d666b1b92d5419f09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b00586ce8f5c2273382af349e9b299d46d41f1f34559d666b1b92d5419f09c->enter($__internal_79b00586ce8f5c2273382af349e9b299d46d41f1f34559d666b1b92d5419f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_79b00586ce8f5c2273382af349e9b299d46d41f1f34559d666b1b92d5419f09c->leave($__internal_79b00586ce8f5c2273382af349e9b299d46d41f1f34559d666b1b92d5419f09c_prof);

        
        $__internal_7292d6e861b114d44c1174e3ca93d2d7476a3a43257d8f42a520382c998c38e3->leave($__internal_7292d6e861b114d44c1174e3ca93d2d7476a3a43257d8f42a520382c998c38e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/AntibioPlusTEST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
