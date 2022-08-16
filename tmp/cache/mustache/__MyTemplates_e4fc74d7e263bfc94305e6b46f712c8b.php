<?php

class __MyTemplates_e4fc74d7e263bfc94305e6b46f712c8b extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <meta charset="UTF-8">
';
        $buffer .= $indent . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '    <link rel="stylesheet" href="assets/css/style.css">
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->find('page_title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</title>
';
        $buffer .= $indent . '</head>
';
        $buffer .= $indent . '<body>';

        return $buffer;
    }
}
