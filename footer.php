<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="site-footer">
  <div class="inner">
    <section class="copyright">All content copyright <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> &copy; 2017 &bull; All rights reserved.</section>
    <section class="poweredby">Proudly published with <a href="http://yiyeti.cc/zheteng/377.html">Jane</a></section>
  </div>
</footer>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.js"></script>
<script src="<?php $this->options->themeUrl('js/jquery.fitvids.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/index.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/menu.js'); ?>"></script>
</main>
</div>
</div>
<nav  class="outer-nav top horizontal"> <a href="<?php $this->options->siteUrl(); ?>"><span>首页</span></a>
  <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
  <?php while($pages->next()): ?>
  <a href="<?php $pages->permalink(); ?>"><span>
  <?php $pages->title(); ?>
  </span></a>
  <?php endwhile; ?>
</nav>
</div>
</body>
</html>