<?php
if($extView = $this->getExtViewFile(__FILE__)){include $extView; return helper::cd();}
include 'm.header.lite.html.php';
?>
<div data-role="header" data-position='fixed'>
  <h1 style='margin-left:0px;text-align:left'><?php echo $app->company->name?></h1>
  <?php echo html::a($this->createLink('user', 'logout'), $lang->logout, '', "data-icon='delete' class='ui-btn-right'")?>
  <div data-role="navbar" id='mainMenu'>
    <?php commonModel::printMainmenu($this->moduleName, $this->methodName)?>
    </ul>
  </div>
