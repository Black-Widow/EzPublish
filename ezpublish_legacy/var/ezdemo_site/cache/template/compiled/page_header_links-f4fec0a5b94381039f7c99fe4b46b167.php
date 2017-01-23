<?php
// URI:       extension/ezdemo/design/ezdemo/templates/page_header_links.tpl
// Filename:  extension/ezdemo/design/ezdemo/templates/page_header_links.tpl
// Timestamp: 1485119709 (Sun Jan 22 22:15:09 CET 2017)
$oldSetArray_c3454397fcfa599e7b5da256accd4422 = isset( $setArray ) ? $setArray : array();
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

$text .= '<ul class="nav">
    <li id="tagcloud"><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var4 = compiledFetchAttribute( $var3, 'root_node' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/view/tagcloud/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="Tag cloud">Tag cloud</a></li>
    <li id="sitemap"><a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var4 = compiledFetchAttribute( $var3, 'root_node' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/content/view/sitemap/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' title="Plan du site">Plan du site</a></li>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'basket_is_empty', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['basket_is_empty'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li id="shoppingbasket"><a href="/Lab/eZ/ezpublish_legacy/index.php/fre/shop/basket" title="Panier d\'achats">Panier d\'achats</a></li>
   ';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'is_logged_in' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li id="myprofile"><a href="/Lab/eZ/ezpublish_legacy/index.php/fre/user/edit" title="My profile">My profile</a></li>
    <li id="logout"><a href="/Lab/eZ/ezpublish_legacy/index.php/fre/user/logout" title="Logout">Logout ( ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= ' )</a></li>';
}
else
{
$text .= '    ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezmodule',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'user/register',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li id="registeruser"><a href="/Lab/eZ/ezpublish_legacy/index.php/fre/user/register" title="S\'inscrire">S\'inscrire</a></li>
    ';
}
unset( $if_cond );
// if ends

$text .= '    <li id="login" class="transition-showed">
        <a href="#login" title="show login form" class="show-login-form">Login</a>
        <a href="#" title="hide login form" class="hide-login-form">Login</a>
        <form class="login-form span3" action="/Lab/eZ/ezpublish_legacy/index.php/fre/user/login" method="post">
            <fieldset>
                <label>
                    <span class="hidden">Nom de l\'utilisateur</span>
                    <input type="text" name="Login" id="login-username" placeholder="Username">
                </label>
                <label>
                    <span class="hidden">Mot de passe</span>
                    <input type="password" name="Password" id="login-password" placeholder="Password">
                </label>
                <div class="clearfix">
                    <a href="/Lab/eZ/ezpublish_legacy/index.php/fre/user/forgotpassword" class="forgot-password">Mot de passe oublié ?</a>
                    <button class="btn btn-warning pull-right" type="submit">
                        Login
                    </button>
                </div>
            </fieldset>
            <input type="hidden" name="RedirectURI" value="" />
        </form>
    </li>';
}
unset( $if_cond );
// if ends

$text .= '</ul>
';

$setArray = $oldSetArray_c3454397fcfa599e7b5da256accd4422;
$tpl->Level--;
?>
