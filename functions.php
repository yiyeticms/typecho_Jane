<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('你的博客头像地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个自己的头像，ps:建议使用背景透明的图片'));
    $form->addInput($logoUrl);     

    $homeUrl = new Typecho_Widget_Helper_Form_Element_Text('homeUrl', NULL, NULL, _t('你的首页大图地址'), _t('在这里填入首页大图地址，建议尺寸为：2884*420px'));
	$form->addInput($homeUrl);

    $jianjie = new Typecho_Widget_Helper_Form_Element_Textarea('jianjie', NULL, NULL, _t('你的个人简介'), _t('在这里填入你的个人简介，用于显示在文章页面底部'));
    $form->addInput($jianjie);
		
    $wlink = new Typecho_Widget_Helper_Form_Element_Text('wlink', NULL, NULL, _t('你的联系微博'), _t('在这里填入你的微博联系地址，用于显示在文章页面底部'));
    $form->addInput($wlink);
	
    $tlink = new Typecho_Widget_Helper_Form_Element_Text('tlink', NULL, NULL, _t('你的twitter'), _t('在这里填入你的twitter地址，用于显示在文章页面底部'));
    $form->addInput($tlink);

    $flink = new Typecho_Widget_Helper_Form_Element_Text('flink', NULL, NULL, _t('你的facebook'), _t('在这里填入你的facebook地址，用于显示在文章页面底部'));
    $form->addInput($flink);
	
}