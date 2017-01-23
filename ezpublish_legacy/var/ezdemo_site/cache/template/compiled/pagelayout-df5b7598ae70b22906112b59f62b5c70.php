<?php
// URI:       design:pagelayout.tpl
// Filename:  design/admin/templates/pagelayout.tpl
// Timestamp: 1416144919 (Sun Nov 16 14:35:19 CET 2014)
$oldSetArray_0e391afc9a08ad63227ee08e3646050f = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html>
<html lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
<head>
';
// def $ui_context_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( ( $var1 ) == ( 'edit' ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'ui_context_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'ui_context_edit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'ui_context_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'ui_context_edit', $var, $rootNamespace );
}

// def $content_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( ( $var3 ) == ( 'content' ) );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( !$var1 )
    $var = false;
else if ( !$var2 )
    $var = false;
else
    $var = $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_edit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'content_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_edit', $var, $rootNamespace );
}

// def $hide_left_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "left_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_left_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_left_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_left_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_left_menu', $var, $rootNamespace );
}

// def $hide_right_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "extra_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "ui_context_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["ui_context_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_right_menu', $var, $rootNamespace );
}

// def $collapse_right_menu
unset( $var );
unset( $var1 );
$var1 = eZPreferences::value( "admin_right_menu_show" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'collapse_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'collapse_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'collapse_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'collapse_right_menu', $var, $rootNamespace );
}

// def $admin_left_size
unset( $var );
$var = eZPreferences::value( "admin_left_menu_size" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_left_size', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_left_size' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_left_size', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_left_size', $var, $rootNamespace );
}

// def $admin_theme
unset( $var );
$var = eZPreferences::value( "admin_theme" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_theme', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_theme', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme', $var, $rootNamespace );
}

// def $left_size_hash
if ( $tpl->hasVariable( 'left_size_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_size_hash' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_size_hash', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_size_hash', 0, $rootNamespace );
}

// def $search_hash
unset( $var );
unset( $var1 );
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var2Data = array( 'value' => $var2 );
$tpl->processOperator( 'ezhttp_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'SectionID',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'get',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $var2Data, false, false );
$var2 = $var2Data['value'];
unset( $var2Data );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( $var2 )
{
    unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( "ezhttp",
                       array( array( array( 1,
                                            "SectionID",
                                            false ) ),
                              array( array( 1,
                                            "get",
                                            false ) ) ),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var1 = $var3;
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'search_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'search_hash' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'search_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'search_hash', $var, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1022,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'collapse_right_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['collapse_right_menu'] = false;
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if ( $if_cond3 )
    $if_cond2 = $if_cond3;
else if ( $if_cond4 )
    $if_cond2 = $if_cond4;
else if ( $if_cond5 )
    $if_cond2 = $if_cond5;
else
    $if_cond2 = false;
unset( $if_cond3, $if_cond4, $if_cond5 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<style type="text/css">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    div#page div#rightmenu  { width: 18px; }    div#page div#maincolumn { margin-right: 27px; }';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'div#maincolumn { padding-right: 20px; padding-left: 50px; }';
}
else
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $left_menu_widths
if ( $tpl->hasVariable( 'left_menu_widths', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_widths' is already defined.", array (
  0 => 
  array (
    0 => 30,
    1 => 8,
    2 => 1503,
  ),
  1 => 
  array (
    0 => 30,
    1 => 83,
    2 => 1578,
  ),
  2 => 'design/admin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'left_size_hash', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['left_size_hash'] = $var;
    unset( $var );
}
$text .= '            div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }            div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }        ';
}
else
{
$text .= '            div#page div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '; }            div#page div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '; }        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// undef $left_menu_widths
$tpl->unsetLocalVariable( 'left_menu_widths', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '</style>';
}
unset( $if_cond );
// if ends

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_hash'] : null;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5, $cacheKeys6 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5, $cacheKeys6 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "47_0_47_194_design/admin/templates/pagelayout.tpl", "ezdemo_site_admin" );

list($cacheHandler_b8ada4037065bbe6c0c8c73b8168efab, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$oldRestoreIncludeArray_1087936291d2fb49ddd4224a8d252176 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head-559473c34912d8777584194562d3aa97.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_head.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head-559473c34912d8777584194562d3aa97.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_1087936291d2fb49ddd4224a8d252176;

$oldRestoreIncludeArray_6d1f648d5e24ab0e5e3ade7df8c49eb2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head_style-fb09d1dd8c792dffd34a47660bb4a940.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_head_style.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head_style-fb09d1dd8c792dffd34a47660bb4a940.php' );
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
$tpl->processURI( 'design/admin/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6d1f648d5e24ab0e5e3ade7df8c49eb2;

$oldRestoreIncludeArray_ca15f2984424cc4a382a2babb4b240c8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_head_script-51d32061e8e0c5762930ab8c3fb0d301.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_head_script.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_head_script-51d32061e8e0c5762930ab8c3fb0d301.php' );
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
$tpl->processURI( 'design/admin/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_ca15f2984424cc4a382a2babb4b240c8;

$text .= '
</head>
<body>

<div id="page" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' section_id_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var2 = compiledFetchAttribute( $var1, "section_id" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">

<div id="header">
<div id="header-design" class="float-break">

';
$oldRestoreIncludeArray_cf5c17c3a6c831434ebe94d475e509da = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_header-60c42d121f606dfdbd54a745ae40739d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_header.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_header-60c42d121f606dfdbd54a745ae40739d.php' );
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
$tpl->processURI( 'design/admin/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_cf5c17c3a6c831434ebe94d475e509da;

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "66_0_66_174_design/admin/templates/pagelayout.tpl", "ezdemo_site_admin" );

list($cacheHandler_0403696b4f76e0b059b7d859ed67719a, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
';
$oldRestoreIncludeArray_88a1746d45cb9482eeba4de403ae555a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_topmenu-7770567a0d495acf9ab29e28ded464d1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_topmenu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_topmenu-7770567a0d495acf9ab29e28ded464d1.php' );
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
$tpl->processURI( 'design/admin/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_88a1746d45cb9482eeba4de403ae555a;

$text .= '
</div>
</div>';
$cachedText = $text;
$cacheHandler_0403696b4f76e0b059b7d859ed67719a->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_0403696b4f76e0b059b7d859ed67719a );
}

$text .= '

<hr class="hide" />';
$cachedText = $text;
$cacheHandler_b8ada4037065bbe6c0c8c73b8168efab->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_b8ada4037065bbe6c0c8c73b8168efab );
}

$text .= '

<div id="columns"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="hide-rightmenu"';
}
unset( $if_cond );
// if ends

$text .= '>


<div id="left-panels-separator">
    <div class="panels-separator-top"></div>
    <div class="panels-separator-bottom"></div>
</div>

<div id="right-panels-separator">
    <div class="panels-separator-top"></div>
    <div class="panels-separator-bottom"></div>
</div>

<div id="canvas-top"></div>

<div id="rightmenu">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Afficher / Cacher le menu de droite" href="/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/user/preferences/set/admin_right_menu_show/1"></a>
    <div id="rightmenu-design"></div>';
}
else
{
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Cacher / Afficher le menu de droite" href="/Lab/eZ/ezpublish_legacy/index.php/ezdemo_site_admin/user/preferences/set/admin_right_menu_show/0"></a>
    <div id="rightmenu-design">
        ';
$oldRestoreIncludeArray_b68d382f48bf32d061735c98d81e014d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_current_user_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/admin_current_user-5373f4c815ceb8edc3a17e63d8eaadd4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/toolbar/full/admin_current_user.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/admin_current_user-5373f4c815ceb8edc3a17e63d8eaadd4.php' );
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
$tpl->processURI( 'design/admin/templates/toolbar/full/admin_current_user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b68d382f48bf32d061735c98d81e014d;

$oldRestoreIncludeArray_9084b832543611382e970e8deb1ea6f1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_preferences_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = '';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/admin_preferences-26a66dd7a151528cb1961c5b97a46c48.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/toolbar/full/admin_preferences.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/admin_preferences-26a66dd7a151528cb1961c5b97a46c48.php' );
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
$tpl->processURI( 'design/admin/templates/toolbar/full/admin_preferences.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9084b832543611382e970e8deb1ea6f1;

$oldRestoreIncludeArray_d53a946a1676a1f8c6279266df46f2d8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_bookmarks_3';
$vars[$currentNamespace]['offset'] = 3;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/admin_bookmarks-ed25521b82526b03b631ab111a6914de.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/toolbar/full/admin_bookmarks.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/admin_bookmarks-ed25521b82526b03b631ab111a6914de.php' );
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
$tpl->processURI( 'design/admin/templates/toolbar/full/admin_bookmarks.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d53a946a1676a1f8c6279266df46f2d8;

$text .= '        ';
$oldRestoreIncludeArray_5d93b847067000e76be2f40a2ead03dd = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_clear_cache_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/admin_clear_cache-0bbdb569bc5f85bfa2eda254a519ce8c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/toolbar/full/admin_clear_cache.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/admin_clear_cache-0bbdb569bc5f85bfa2eda254a519ce8c.php' );
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
$tpl->processURI( 'design/admin/templates/toolbar/full/admin_clear_cache.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5d93b847067000e76be2f40a2ead03dd;

$oldRestoreIncludeArray_8feaf689d470b02cc07d07e1bad9ba6f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_quick_settings_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/admin_quick_settings-8d499d687d4d1d6bd7b8071230d54500.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/toolbar/full/admin_quick_settings.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/admin_quick_settings-8d499d687d4d1d6bd7b8071230d54500.php' );
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
$tpl->processURI( 'design/admin/templates/toolbar/full/admin_quick_settings.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_8feaf689d470b02cc07d07e1bad9ba6f;

$text .= '    </div>
    <script type="text/javascript">
    

    YUI(YUI3_config).use(\'ezcollapsiblemenu\', \'event\', \'io-ez\', \'node\', function (Y) {

        Y.on(\'domready\', function () {
            var rightmenu = new Y.eZ.CollapsibleMenu({
                link: \'#rightmenu-showhide\',
                content: [\'\', \'\'],
                collapsed: 0,
                elements:[{
                    selector: \'#rightmenu\',
                    duration: 0.4,
                    fullStyle: {width: \'201px\'},
                    collapsedStyle: {width: \'18px\'}
                },{
                    selector: \'#maincolumn\',
                    duration: 0.4,
                    fullStyle: {marginRight: \'210px\'},
                    collapsedStyle: {marginRight: \'27px\'}
                },{
                    selector: \'#right-panels-separator\',
                    duration: 0.4,
                    fullStyle: {right:\'181px\'},
                    collapsedStyle: {right: \'-2px\'}
                }],
                callback: function () {
                    var p = 1;
                    if ( this.conf.collapsed )
                        p = 0;
                    Y.io.ez.setPreference(\'admin_right_menu_show\', p);
                }
            });
        });
    });

    
    </script>';
}
unset( $if_cond );
// if ends

$text .= '</div>


<div id="maincolumn">

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "148_0_148_161_design/admin/templates/pagelayout.tpl", "ezdemo_site_admin" );

list($cacheHandler_1520ec03ecc02536377ed863a042e5a7, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
<hr class="hide" />

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
}
else
{
$text .= '    ';
$oldRestoreIncludeArray_acc88ff0d5fc492132659c0418bb91f8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_leftmenu-056038fd1ec6f7ac4d35347cc184b89f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_leftmenu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_leftmenu-056038fd1ec6f7ac4d35347cc184b89f.php' );
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
$tpl->processURI( 'design/admin/templates/page_leftmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_acc88ff0d5fc492132659c0418bb91f8;

}
unset( $if_cond );
// if ends

$cachedText = $text;
$cacheHandler_1520ec03ecc02536377ed863a042e5a7->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_1520ec03ecc02536377ed863a042e5a7 );
}

$text .= '

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_bb1ec5e94d5cf4fc648a12d2384443fc = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_mainarea-86f122f8cfcb2663f82df88a2df16cca.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_mainarea-86f122f8cfcb2663f82df88a2df16cca.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_bb1ec5e94d5cf4fc648a12d2384443fc;

}
else
{
$text .= '    <div id="maincontent">
    <div id="maincontent-design" class="float-break"><div id="fix">

    <div id="path">
        <div id="path-design">
            ';
$oldRestoreIncludeArray_7ddefa03d905b9de4213590215fb240d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_toppath-0331853ea25fc89b166b43fc1b0a595e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_toppath.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_toppath-0331853ea25fc89b166b43fc1b0a595e.php' );
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
$tpl->processURI( 'design/admin/templates/page_toppath.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7ddefa03d905b9de4213590215fb240d;

$text .= '        </div>
    </div>

    <!-- Maincontent START -->
    ';
$oldRestoreIncludeArray_9d4bb454dd03cbbef208332cc9c9bfd8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_mainarea-86f122f8cfcb2663f82df88a2df16cca.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_mainarea-86f122f8cfcb2663f82df88a2df16cca.php' );
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
$tpl->processURI( 'extension/ezdemo/design/ezdemo/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_9d4bb454dd03cbbef208332cc9c9bfd8;

$text .= '    <!-- Maincontent END -->
    </div>
    <div class="break"></div>
    </div></div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>


<div class="break"></div>
<div id="canvas-bottom"></div>
</div><!-- div id="columns" -->

<hr class="hide" />

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
$cacheKeys = array( $cacheKeys1 );unset( $cacheKeys1 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "191_0_191_60_design/admin/templates/pagelayout.tpl", "ezdemo_site_admin" );

list($cacheHandler_10a9c53cafe0795b1211492fad2bd169, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '<div id="footer" class="float-break">
<div id="footer-design">
    ';
$oldRestoreIncludeArray_432c2196d14d26ae4d08e68dfaf8aee9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/page_copyright-793f199d5df13d381219f76162a20593.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/page_copyright.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/page_copyright-793f199d5df13d381219f76162a20593.php' );
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
$tpl->processURI( 'design/admin/templates/page_copyright.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_432c2196d14d26ae4d08e68dfaf8aee9;

$text .= '</div>
</div>

<div class="break"></div>

';
$oldRestoreIncludeArray_05234383da1e6eed1a145da7efb39729 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezdemo_site/cache/template/compiled/popup_menu-4fd28f6f89d74647d0647deee14cd866.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin/templates/popupmenu/popup_menu.tpl' );
include( '' . 'var/ezdemo_site/cache/template/compiled/popup_menu-4fd28f6f89d74647d0647deee14cd866.php' );
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
$tpl->processURI( 'design/admin/templates/popupmenu/popup_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_05234383da1e6eed1a145da7efb39729;

$cachedText = $text;
$cacheHandler_10a9c53cafe0795b1211492fad2bd169->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_10a9c53cafe0795b1211492fad2bd169 );
}

$text .= '
<script type="text/javascript">
document.getElementById(\'header-usermenu-logout\').innerHTML += \'<span class="header-usermenu-name">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'login' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<\\/span>\';

document.getElementById(\'right-panels-separator\').style.right = (parseInt(document.getElementById(\'rightmenu\').offsetWidth,10) - 20) + \'px\';


(function( $ )
{
    var searchtext = document.getElementById(\'searchtext\');
    if ( !searchtext || searchtext.disabled )
        return;

    jQuery( searchtext ).val( searchtext.title
    ).addClass(\'passive\'
    ).focus(function(){
        if ( this.value === this.title )
        {
            jQuery( this ).removeClass(\'passive\').val(\'\');
        }
    }).blur(function(){
        if ( this.value === \'\' )
        {
            jQuery( this ).addClass(\'passive\').val( this.title );
        }
    });
})( jQuery );

</script>


</div><!-- div id="page" -->


<!--DEBUG_REPORT-->


<div id="overlay-mask" style="display:none;"></div>
<img src="/Lab/eZ/ezpublish_legacy/design/admin/images/2/loader.gif" id="ajaxuploader-loader" style="display:none;" alt="Chargement ..." />


</body>
</html>
';

$setArray = $oldSetArray_0e391afc9a08ad63227ee08e3646050f;
$tpl->Level--;
?>
