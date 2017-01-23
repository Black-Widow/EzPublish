<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_footer_script.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_footer_script.tpl
// Timestamp: 1485119709 (Sun Jan 22 22:15:09 CET 2017)
$oldSetArray_baccc922218f2f17bf0110f0773c15f9 = isset( $setArray ) ? $setArray : array();
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

$text .= '
';

$setArray = $oldSetArray_baccc922218f2f17bf0110f0773c15f9;
$tpl->Level--;
?>
