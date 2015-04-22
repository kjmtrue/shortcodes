<?php
namespace Maiorano\Shortcodes\Manager;

use Maiorano\Shortcodes\Shortcode\ShortcodeInterface;

/**
 * Interface ShortcodeManagerInterface
 * @package Maiorano\Shortcodes\Manager
 */
interface ShortcodeManagerInterface
{

    /**
     * @param ShortcodeInterface $shortcode
     * @return mixed
     */
    public function register(ShortcodeInterface $shortcode);

    /**
     * @param $shortcode
     * @return mixed
     */
    public function deregister($shortcode);

    /**
     * @return mixed
     */
    public function getRegistered();

    /**
     * @param string $content
     * @param array $tags
     * @return bool
     */
    public function hasShortcode($content, $tags = []);

    /**
     * @param string $content
     * @param array $tags
     * @return string
     */
    public function doShortcode($content, $tags = []);
}