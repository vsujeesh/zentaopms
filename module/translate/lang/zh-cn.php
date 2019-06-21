<?php
/**
 * The translate module zh-cn file of ZenTaoCMS.
 *
 * @copyright   Copyright 2009-2012 QingDao Nature Easy Soft Network Technology Co,LTD (www.cnezsoft.com)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     translate
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$lang->translate->common  = '翻译';
$lang->translate->index   = '首页';
$lang->translate->addLang = '新增语言';
$lang->translate->chooseModule = '选择翻译模块';

$lang->translate->name        = '语言名称';
$lang->translate->code        = '代号';
$lang->translate->key         = '键';
$lang->translate->reference   = '参考语言';
$lang->translate->status      = '状态';
$lang->translate->refreshPage = '刷新';

$lang->translate->builtIn  = '内置语言';
$lang->translate->finished = '翻译完成';
$lang->translate->progress = '完成 %s';

$lang->translate->finishedLang    = '已经完成的语言';
$lang->translate->translatingLang = '正在翻译的语言';
$lang->translate->allItems        = '所有的语言条目数：%s条';

$lang->translate->statusList['waiting']    = '未翻译';
$lang->translate->statusList['translated'] = '已翻译';
$lang->translate->statusList['reviewed']   = '已评审';
$lang->translate->statusList['rejected']   = '已拒绝';
$lang->translate->statusList['changed']    = '已改变';

$lang->translate->notice = new stdclass();
$lang->translate->notice->failDirPriv  = "目录没有写入权限，请修改权限。<br /><code>%s</code>";
$lang->translate->notice->failCopyFile = "复制文件%s到%s失败，请检查权限！";
