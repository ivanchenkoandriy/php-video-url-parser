<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Fiorani
 * Date: 29/08/2015
 * Time: 14:15
 */

namespace RicardoFiorani\Adapter;


use RicardoFiorani\Renderer\EmbedRendererInterface;

interface VideoAdapterInterface
{
    /**
     * @param string $url
     * @param string $pattern
     * @param EmbedRendererInterface $renderer
     */
    public function __construct($url, $pattern, EmbedRendererInterface $renderer);

    /**
     * Returns the service name (ie: "Youtube" or "Vimeo")
     * @return string
     */
    public function getServiceName();

    /**
     * Returns the input URL
     * @return string
     */
    public function getRawUrl();

    /**
     * Returns if the service has a thumbnail image
     * @return bool
     */
    public function hasThumbnail();

    /**
     * Returns all thumbnails available sizes
     * @return array
     */
    public function getThumbNailSizes();

    /**
     * @param string $size
     * @return string
     */
    public function getThumbnail($size);

    /**
     * Returns the small thumbnail's url
     * @return string
     */
    public function getSmallThumbnail();

    /**
     * Returns the medium thumbnail's url
     * @return string
     */
    public function getMediumThumbnail();

    /**
     * Returns the large thumbnail's url
     * @return string
     */
    public function getLargeThumbnail();

    /**
     * Returns the largest thumnbnaail's url
     * @return string
     */
    public function getLargestThumbnail();

    /**
     * @param bool $autoplay
     * @return string
     */
    public function getEmbedUrl($autoplay = false);

    /**
     * @param integer $width
     * @param integer $height
     * @return string
     */
    public function getEmbedCode($width, $height);

    /**
     * @return bool
     */
    public function isEmbedable();

}
