<?php
// URI:       design:node/ezflcontextsubmenu.tpl
// Filename:  extension/ezflow/design/standard/templates/node/ezflcontextsubmenu.tpl
// Timestamp: 1485119705 (Sun Jan 22 22:15:05 CET 2017)
$oldSetArray_78a5c6412ea81d3db83e280a865101a3 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="popupmenu" id="eZFlow">
    <a id="push-to-block" href="#" onmouseover="ezpopmenu_mouseOver( \'eZFlow\' )">Ajouter au bloc de la page d\'accueil</a>
</div>
';

$setArray = $oldSetArray_78a5c6412ea81d3db83e280a865101a3;
$tpl->Level--;
?>
