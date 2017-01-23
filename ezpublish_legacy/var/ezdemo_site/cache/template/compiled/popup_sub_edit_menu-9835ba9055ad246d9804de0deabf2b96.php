<?php
// URI:       design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1416144919 (Sun Nov 16 14:35:19 CET 2014)
$oldSetArray_ff4c8c7c4e760b2f536bdf7b718d3bb0 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit menu -->
<script type="text/javascript">
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/content/edit/%objectID%/a" };
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">Nouvelle traduction</a>
</div>';

$setArray = $oldSetArray_ff4c8c7c4e760b2f536bdf7b718d3bb0;
$tpl->Level--;
?>
