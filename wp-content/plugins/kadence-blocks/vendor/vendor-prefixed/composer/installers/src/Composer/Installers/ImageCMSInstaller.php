<?php
/**
 * @license MIT
 *
 * Modified by kadencewp on 10-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Composer\Installers;

class ImageCMSInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'template'    => 'templates/{$name}/',
        'module'      => 'application/modules/{$name}/',
        'library'     => 'application/libraries/{$name}/',
    );
}
