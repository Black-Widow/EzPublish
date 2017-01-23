<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_header_logo.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_header_logo.tpl
// Timestamp: 1485119709 (Sun Jan 22 22:15:09 CET 2017)
$oldSetArray_cee44b585765888266d6356a341fb773 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="span8">
    <a href="/Lab/eZ/ezpublish_legacy/index.php/fre" title="';
unset( $var );
$var = 'eZ Publish Demo Site' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" class="logo"><img src="/Lab/eZ/ezpublish_legacy/extension/ezdemo/design/ezdemo/images/logo-ez.png" alt="';
unset( $var );
$var = 'eZ Publish Demo Site' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /></a>
</div>
';

$setArray = $oldSetArray_cee44b585765888266d6356a341fb773;
$tpl->Level--;
?>
