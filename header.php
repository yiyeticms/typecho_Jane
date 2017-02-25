<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>
<?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?>
<?php $this->options->title(); ?>
</title>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom=&rss1=&rss2='); ?>
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/screen.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
</head>
<body class="home-template"  style="background:url(<?php $this->options->homeUrl(); ?>);background-attachment: fixed;background-repeat: no-repeat;background-position: 20% 0px;">
<div id="perspective" class="perspective effect-movedown">
<div class="container">
<div class="wrapper">
<header class="site-head">
  <div class="vertical">
    <div class="site-head-content inner"> <a class="blog-logo" href="<?php $this->options->siteUrl(); ?>"><img src="<?php $this->options->logoUrl(); ?>" alt="Blog Logo"/></a>
      <h1 class="blog-title">
        <?php $this->options->title() ?>
      </h1>
      <h2 class="blog-description">
        <button id="showMenu">Show Menu</button>
      </h2>
    </div>
  </div>
</header>