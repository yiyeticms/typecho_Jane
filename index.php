<?php
/**
 * 这是一款黑色简洁的Typecho主题。
 * 
 * @package Jane Theme 
 * @author 一夜涕
 * @version 1.1
 * @link http://yiyeti.cc
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<main class="content" role="main">
  <?php while($this->next()): ?>
  
  <article class="post">
    <header class="post-header"> <span class="post-meta">
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y m d'); ?></time>
      |
      <?php $this->category(','); ?>
      |
<?php $this->tags(', ', true, 'none'); ?>
      </span>
      <h2 class="post-title"><a href="<?php $this->permalink() ?>">
        <?php $this->title() ?>
        </a></h2>
    </header>
    <section class="post-excerpt">
      <?php $this->content('阅读全文...'); ?>
    </section>
  </article>
  <?php endwhile; ?>
  <?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
<?php $this->need('footer.php'); ?>