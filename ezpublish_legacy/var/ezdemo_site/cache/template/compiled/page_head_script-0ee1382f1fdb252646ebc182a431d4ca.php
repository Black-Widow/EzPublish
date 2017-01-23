<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_head_script.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_head_script.tpl
// Timestamp: 1485119709 (Sun Jan 22 22:15:09 CET 2017)
$oldSetArray_3c3c87701139596e1f255b0f479f7858 = isset( $setArray ) ? $setArray : array();
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
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_load',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezini',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'JavaScriptSettings',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'JavaScriptList',
                  2 => false,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design.ini',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezini',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'JavaScriptSettings',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'FrontendJavaScriptList',
                  2 => false,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design.ini',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );


$setArray = $oldSetArray_3c3c87701139596e1f255b0f479f7858;
$tpl->Level--;
?>
