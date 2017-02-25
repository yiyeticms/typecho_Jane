<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main class="content" role="main">
  <article class="post"> <span class="post-meta">
    <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y m d'); ?></time>
    |
    <?php $this->category(','); ?>
      |
<?php $this->tags(', ', true, 'none'); ?>
    </span>
    <h1 class="post-title">
      <?php $this->title() ?>
    </h1>
    <section class="post-content">
      <?php $this->content(); ?>
    </section>
    <footer class="post-footer">
      <section class="author">
        <h4>个人简介</h4>
        <p>
          <?php $this->options->jianjie() ?>
        </p>
      </section>
      <section class="share">
        <h4>联系我</h4>
        <a class="icon-sina-weibo" href="<?php $this->options->wlink() ?>" target="_blank"> <span class="hidden">weibo</span> </a> <a class="icon-twitter" href="<?php $this->options->tlink() ?>"
       onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"> <span class="hidden">Twitter</span> </a> <a class="icon-facebook" href="<?php $this->options->flink() ?>"
       onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"> <span class="hidden">Facebook</span> </a> </section>
    </footer>
  </article>
  <nav class="pagination" role="pagination">
    <li class="newer-posts">←
      <?php $this->thePrev(); ?>
    </li>
    <span>∴</span>
    <li class="older-posts">
      <?php $this->theNext(); ?>
      →</li>
  </nav>
  <div id="comment" class="comments-area">
    <h4 class="title"><a href="<?php $this->permalink() ?>#comments">评论</a></h4>
    <div id="duoshuo">
      <?php $this->need('comments.php'); ?>
    </div>
  </div>
<?php $this->need('footer.php'); ?>