<?php
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function site_config(){static $c;if($c)return $c;$f=__DIR__.'/../config.php';$c=file_exists($f)?require $f:require __DIR__.'/../config.example.php';return $c;}
function wa_link($m='Hello Tanzania Wildlife Epic, I would like to plan a trip to Tanzania.'){$n=site_config()['site']['whatsapp'];return 'https://wa.me/'.$n.'?text='.rawurlencode($m);}
function current_url(){ $s=(!empty($_SERVER['HTTPS'])&&$_SERVER['HTTPS']!=='off')?'https':'http';return $s.'://'.($_SERVER['HTTP_HOST']??'localhost').($_SERVER['REQUEST_URI']??'/');}
function package_by_slug($slug){foreach(packages() as $p){if($p['slug']===$slug)return $p;}return null;}
function meta($title,$description){$site=site_config()['site'];$full=$title.' | '.$site['name'];return '<title>'.e($full).'</title><meta name="description" content="'.e($description).'"><link rel="canonical" href="'.e(current_url()).'"><meta property="og:title" content="'.e($full).'"><meta property="og:description" content="'.e($description).'">';}
