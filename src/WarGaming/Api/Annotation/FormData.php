<?php

/**
 * This file is part of the WarGaming API package
 *
 * (c) Vitaliy Zhuk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace WarGaming\Api\Annotation;

/**
 * Indicate of form data
 *
 * @Annotation
 * @Target("PROPERTY")
 *
 * @author Vitaliy Zhuk <zhuk2205@gmail.com>
 */
class FormData
{
    /** @var string */
    public $name;
    /** @var string */
    public $type;
    /** @var bool */
    public $collectionLoad = false;
}
