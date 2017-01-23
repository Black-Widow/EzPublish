<?php
// URI:       design/admin/templates/page_header.tpl
// Filename:  design/admin/templates/page_header.tpl
// Timestamp: 1416144919 (Sun Nov 16 14:35:19 CET 2014)
$oldSetArray_7a03992d74fa337ec2a64e3b3cb75113 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezdemo_site/cache/template/compiled/common.php' );

$text .= '<div id="header-logo">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <span title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">&nbsp;</span>';
}
else
{
$text .= '    <a href="/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/content/dashboard" title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
    </a>';
}
unset( $if_cond );
// if ends

$text .= '</div>

<div id="header-search">';
$oldRestoreIncludeArray_ca0737c7360ec03653dd52a4935ab889 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_search-89ea4d954045f919d5bdef423875a6b5.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_search.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_search-89ea4d954045f919d5bdef423875a6b5.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin/templates/page_search.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ca0737c7360ec03653dd52a4935ab889;

$text .= '</div>

<div id="header-usermenu">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <span title="Quitter." id="header-usermenu-logout" class="disabled">Fermeture de session</span>';
}
else
{
$text .= '    <a href="/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/user/logout" title="Quitter." id="header-usermenu-logout">Fermeture de session</a>';
}
unset( $if_cond );
// if ends

$text .= '</div>

';

$setArray = $oldSetArray_7a03992d74fa337ec2a64e3b3cb75113;
$tpl->Level--;
?>
