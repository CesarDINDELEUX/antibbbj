<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2bbc37753fda3822b059fb9bfd6d99e0967cba032afc6e6bcfd27dabde58dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8f0858fd8634375e67a762f5db84995ffc70c1d45740052e456cbb2bec3e0e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0858fd8634375e67a762f5db84995ffc70c1d45740052e456cbb2bec3e0e65->enter($__internal_8f0858fd8634375e67a762f5db84995ffc70c1d45740052e456cbb2bec3e0e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7edfdafe2351f10f8f9776e7d8ff735f97f48c4d7af5c6e0f6750a19c4799d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edfdafe2351f10f8f9776e7d8ff735f97f48c4d7af5c6e0f6750a19c4799d65->enter($__internal_7edfdafe2351f10f8f9776e7d8ff735f97f48c4d7af5c6e0f6750a19c4799d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0858fd8634375e67a762f5db84995ffc70c1d45740052e456cbb2bec3e0e65->leave($__internal_8f0858fd8634375e67a762f5db84995ffc70c1d45740052e456cbb2bec3e0e65_prof);

        
        $__internal_7edfdafe2351f10f8f9776e7d8ff735f97f48c4d7af5c6e0f6750a19c4799d65->leave($__internal_7edfdafe2351f10f8f9776e7d8ff735f97f48c4d7af5c6e0f6750a19c4799d65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0966b754759866437f3a49cb81f7a7d2bcec109f293547399376cc0729201197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0966b754759866437f3a49cb81f7a7d2bcec109f293547399376cc0729201197->enter($__internal_0966b754759866437f3a49cb81f7a7d2bcec109f293547399376cc0729201197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_296b6d74905f34e3e427fa0d125b4da8ec2ceb6901e9d4b1fd18692b039508a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b6d74905f34e3e427fa0d125b4da8ec2ceb6901e9d4b1fd18692b039508a8->enter($__internal_296b6d74905f34e3e427fa0d125b4da8ec2ceb6901e9d4b1fd18692b039508a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_296b6d74905f34e3e427fa0d125b4da8ec2ceb6901e9d4b1fd18692b039508a8->leave($__internal_296b6d74905f34e3e427fa0d125b4da8ec2ceb6901e9d4b1fd18692b039508a8_prof);

        
        $__internal_0966b754759866437f3a49cb81f7a7d2bcec109f293547399376cc0729201197->leave($__internal_0966b754759866437f3a49cb81f7a7d2bcec109f293547399376cc0729201197_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9a20013b50643be78b77c76d9b12184935552e4343a7225cf9198d5e6ebc6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a20013b50643be78b77c76d9b12184935552e4343a7225cf9198d5e6ebc6e0->enter($__internal_e9a20013b50643be78b77c76d9b12184935552e4343a7225cf9198d5e6ebc6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f35a65f376cd14d1888d74030c08b39548cf3fe4994ab6965a43cea3afc064b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35a65f376cd14d1888d74030c08b39548cf3fe4994ab6965a43cea3afc064b9->enter($__internal_f35a65f376cd14d1888d74030c08b39548cf3fe4994ab6965a43cea3afc064b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f35a65f376cd14d1888d74030c08b39548cf3fe4994ab6965a43cea3afc064b9->leave($__internal_f35a65f376cd14d1888d74030c08b39548cf3fe4994ab6965a43cea3afc064b9_prof);

        
        $__internal_e9a20013b50643be78b77c76d9b12184935552e4343a7225cf9198d5e6ebc6e0->leave($__internal_e9a20013b50643be78b77c76d9b12184935552e4343a7225cf9198d5e6ebc6e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_098803c88459ce6f8fb6499b5ba7669b6cf07fcf6acc7de500b0ce16aeb6dcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098803c88459ce6f8fb6499b5ba7669b6cf07fcf6acc7de500b0ce16aeb6dcf3->enter($__internal_098803c88459ce6f8fb6499b5ba7669b6cf07fcf6acc7de500b0ce16aeb6dcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bee492ea26a13f1d1c1270897a41a01cf0abea01a7ff74e60a03a693e212f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bee492ea26a13f1d1c1270897a41a01cf0abea01a7ff74e60a03a693e212f82->enter($__internal_0bee492ea26a13f1d1c1270897a41a01cf0abea01a7ff74e60a03a693e212f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0bee492ea26a13f1d1c1270897a41a01cf0abea01a7ff74e60a03a693e212f82->leave($__internal_0bee492ea26a13f1d1c1270897a41a01cf0abea01a7ff74e60a03a693e212f82_prof);

        
        $__internal_098803c88459ce6f8fb6499b5ba7669b6cf07fcf6acc7de500b0ce16aeb6dcf3->leave($__internal_098803c88459ce6f8fb6499b5ba7669b6cf07fcf6acc7de500b0ce16aeb6dcf3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/AntibioPlusTEST/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
