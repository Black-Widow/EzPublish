<?php
/**
 * File containing the eZ\Publish\SPI\Search\FieldType class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */
namespace eZ\Publish\SPI\Search;

use eZ\Publish\SPI\Persistence\ValueObject;

/**
 * Base class for document field definitions
 *
 * @property-read string $type The type name of the facet
 */
abstract class FieldType extends ValueObject
{
    /**
     * Name of the document field. Will be used to query this field.
     *
     * @var string
     */
    public $name;

    /**
     * The type name of the facet. Has to be handled by the solr schema.
     *
     * @var string
     */
    protected $type;

    /**
     * Whether highlighting should be performed for this field on result documents
     *
     * @var boolean
     */
    public $highlight = false;

    /**
     * The importance of that field (boost factor)
     *
     * @var int
     */
    public $boost = 1;

    /**
     * Whether the field supports multiple values
     *
     * @var boolean
     */
    public $multiValue = false;

    /**
     * Whether the field should be a part of the resulting document
     *
     * @var boolean
     */
    public $inResult = true;
}
