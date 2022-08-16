<?php

class __MyTemplates_ae0e38cc6a3c1e6801bba5ef8941f577 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h1>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h1>
';
        $buffer .= $indent . '<p>';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</p>';

        return $buffer;
    }
}
