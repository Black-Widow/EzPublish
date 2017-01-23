<?php
/**
 * File containing the UserGroup class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 */

namespace eZ\Publish\Core\REST\Client\Values\User;

use eZ\Publish\API\Repository\Values\User\UserGroup as APIUserGroup;

/**
 * Implementation of the {@link \eZ\Publish\API\Repository\Values\User\UserGroup}
 * class.
 *
 * @see \eZ\Publish\API\Repository\Values\User\UserGroup
 */
class UserGroup extends APIUserGroup
{
    /**
     * @var \eZ\Publish\API\Repository\Values\Content\Content
     */
    protected $content;

    /**
     * Returns the VersionInfo for this version
     *
     * @return VersionInfo
     */
    public function getVersionInfo()
    {
        return $this->content->getVersionInfo();
    }

    /**
     * Returns a field value for the given value
     * $version->fields[$fieldDefId][$languageCode] is an equivalent call
     * if no language is given on a translatable field this method returns
     * the value of the initial language of the version if present, otherwise null.
     * On non translatable fields this method ignores the languageCode parameter.
     *
     * @param string $fieldDefIdentifier
     * @param string $languageCode
     *
     * @return mixed a primitive type or a field type Value object depending on the field type.
     */
    public function getFieldValue( $fieldDefIdentifier, $languageCode = null )
    {
        return $this->content->getFieldValue( $fieldDefIdentifier, $languageCode );
    }

    /**
     * This method returns the complete fields collection
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Field[]
     */
    public function getFields()
    {
        return $this->content->getFields();
    }

    /**
     * This method returns the fields for a given language and non translatable fields
     *
     * If note set the initialLanguage of the content version is used.
     *
     * @param string $languageCode
     *
     * @return \eZ\Publish\API\Repository\Values\Content\Field[] With field identifier as keys
     */
    public function getFieldsByLanguage( $languageCode = null )
    {
        return $this->content->getFieldsByLanguage( $languageCode );
    }

    public function __get( $property )
    {
        switch ( $property )
        {
            case 'contentInfo':
                return $this->content->contentInfo;

            case 'id':
                return $this->content->id;

            case 'versionInfo':
                return $this->getVersionInfo();

            case 'fields':
                return $this->getFields();
        }

        return parent::__get( $property );
    }
}
