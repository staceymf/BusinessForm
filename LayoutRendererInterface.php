<?php

namespace src\ContentEngine\LayoutRendererInterface;

interface LayoutRendererInterface
{
    /**
     * @param $contentVariables
     * @param string $contentFile
     * @return mixed
     */
    public function render($contentVariables, $contentFile = 'content.twig');
}
