<?php
/**
 * File containing the PO mappings for ezpRestToken
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version 2014.11.1
 * @package kernel
 */

// Autogenerated PersistentObject definition

$def = new ezcPersistentObjectDefinition();
$def->table = 'ezprest_authcode';
$def->class = 'ezpRestAuthcode';

$def->idProperty               = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName   = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator    = new ezcPersistentGeneratorDefinition( 'ezcPersistentManualGenerator' );
$def->idProperty->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;


$def->properties['expirytime']               = new ezcPersistentObjectProperty();
$def->properties['expirytime']->columnName   = 'expirytime';
$def->properties['expirytime']->propertyName = 'expirytime';
$def->properties['expirytime']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;


$def->properties['client_id']               = new ezcPersistentObjectProperty();
$def->properties['client_id']->columnName   = 'client_id';
$def->properties['client_id']->propertyName = 'client_id';
$def->properties['client_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['user_id']               = new ezcPersistentObjectProperty();
$def->properties['user_id']->columnName   = 'user_id';
$def->properties['user_id']->propertyName = 'user_id';
$def->properties['user_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;


$def->properties['scope']               = new ezcPersistentObjectProperty();
$def->properties['scope']->columnName   = 'scope';
$def->properties['scope']->propertyName = 'scope';
$def->properties['scope']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>
