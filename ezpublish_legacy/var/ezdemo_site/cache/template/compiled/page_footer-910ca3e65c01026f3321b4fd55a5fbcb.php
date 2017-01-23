<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_footer.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_footer.tpl
// Timestamp: 1485119709 (Sun Jan 22 22:15:09 CET 2017)
$oldSetArray_c020b8c7c23a82981af53e0edc14dbe1 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Footer area: START -->';
// def $footer_node
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => "60",
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'footer_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'footer_node' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 29,
  ),
  1 => 
  array (
    0 => 2,
    1 => 116,
    2 => 145,
  ),
  2 => 'extension/ezdemo/design/ezdemo/templates/page_footer.tpl',
) );
    $tpl->setVariable( 'footer_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'footer_node', $var, $rootNamespace );
}

$text .= '<footer>
    <div class="claim-wrapper">
        <div class="container">
            <div class="nav-collapse">
                Powered by <a href="http://ez.no/ezpublish" title="eZ Publish&#8482; CMS Open Source Web Content Management">eZ Publish&#8482; CMS Open Source Web Content Management</a>.
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="span4">
                ';
$oldRestoreIncludeArray_1c9522fe80bb4ef9ae705a5844330303 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'node', $vars[$currentNamespace]['node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'footer_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['footer_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/address-0f980dc7b90421a542a96db5313eb64f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/footer/address.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/address-0f980dc7b90421a542a96db5313eb64f.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/footer/address.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1c9522fe80bb4ef9ae705a5844330303;

$text .= '            </div>
            <div class="span4 nav-collapse">
                ';
$oldRestoreIncludeArray_4629d3ad4ef88cbad64edcae7013811b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/latest_news-8fba873aa7d3f3dece7417083dfaf70a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/footer/latest_news.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/latest_news-8fba873aa7d3f3dece7417083dfaf70a.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/footer/latest_news.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_4629d3ad4ef88cbad64edcae7013811b;

$text .= '            </div>
            <div class="span4 nav-collapse">
                ';
$oldRestoreIncludeArray_7ced7f5ce3edd31f90e4a25890bf6a5d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'node', $vars[$currentNamespace]['node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'footer_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['footer_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/links-30784bd674983ed55fafb5760e0b5b58.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/footer/links.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/links-30784bd674983ed55fafb5760e0b5b58.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/footer/links.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7ced7f5ce3edd31f90e4a25890bf6a5d;

$text .= '            </div>
        </div>
    </div>
</footer>
<!-- Footer area: END -->';
// undef $footer_node
$tpl->unsetLocalVariable( 'footer_node', $rootNamespace );


$setArray = $oldSetArray_c020b8c7c23a82981af53e0edc14dbe1;
$tpl->Level--;
?>
