<?php
require_once(WEBROOT.'/libs/Smarty.class.php');
class smarty_web extends Smarty {

function __construct() {

parent::__construct ();
$this->setTemplateDir ( WEBROOT . "/template" );
$this->setCompileDir ( WEBROOT . '/template_c' );
$this->setCacheDir ( WEBROOT . '/cache' );
$this->setConfigDir ( WEBROOT . '/config' );

$this->caching = FALSE;
$this ->debugging = true;
$this->left_delimiter = "{#";
$this->right_delimiter = "#}";
}
}
?>
