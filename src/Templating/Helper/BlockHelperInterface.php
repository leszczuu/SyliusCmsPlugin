<?php

/**
 * This file was created by the developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kontakt@bitbag.pl.
 */

namespace BitBag\CmsPlugin\Templating\Helper;

use BitBag\CmsPlugin\Exception\BlockNotFoundException;
use BitBag\CmsPlugin\Exception\TemplateTypeNotFound;

/**
 * @author Patryk Drapik <patryk.drapik@bitbag.pl>
 */
interface BlockHelperInterface
{
    /**
     * @param string $code
     * @return string|TemplateTypeNotFound|BlockNotFoundException
     */
    public function renderBlock($code);
}