<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace Swagger\Annotations;

/**
 * @Annotation
 * Shorthand for a json response.
 *
 * Use as an Schema inside a Response and the MediaType "application/json" will be generated.
 */
class JsonContent extends Schema
{
    /**
     * @var object
     */
    public $examples;

    /** @inheritdoc */
    public static $_parents = [];
}
