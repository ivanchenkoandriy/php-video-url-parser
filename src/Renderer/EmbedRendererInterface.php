<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 30/08/2015
 * Time: 00:54
 */

namespace RicardoFiorani\Renderer;


interface EmbedRendererInterface
{
    /**
     * @param string $embedUrl
     * @param integer $width
     * @param integer $height
     * @return string
     */
    public function render($embedUrl, $width, $height);
}