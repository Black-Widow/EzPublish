{* DO NOT EDIT THIS FILE! Use an override template instead. *}
{def $site_url=ezini("SiteSettings","SiteURL")}
{set-block scope=root variable=subject}{"%siteurl your password is about to expire"|i18n("mbpaex/userpaex",,hash('%siteurl',$site_url))}{/set-block}
{"Your account information"|i18n('design/standard/user/forgotpassword')}
{"Email"|i18n('design/standard/user/forgotpassword')}: {$user.email}

{"Click here to set your new password"|i18n('mbpaex/userpaex/forgotpassword')}:

http://{$site_url}{concat("userpaex/password/", $user.contentobject_id)|ezurl(no)}

{undef $site_url}
