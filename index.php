<?php
 /**
 * Template for Joomla by javasingl
 * @author     javasingl
 * @copyright  Copyright (c) 2013, www.javasingl.ru
 * @license    GNU GPL
 */
 defined('_JEXEC') or die('Restricted access');
 ?>
<html><head>
<jdoc:include type="head" />


<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" media="screen" />

<style></style></head>
<body cellpadding="0" cellspacing="0" bgcolor="#3b3353">
<table cellpadding="0" cellspacing="0" border="0" align="center" width="1100">
<tbody><tr><td colspan="3" height="254"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/Top.jpg" alt=""/></td></tr>
<tr valign="top">
<td width="97" align="left"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/superleft.jpg" width="97" alt="" border="0" /></td>
<td class="img">
<jdoc:include type="modules" name="topmenu" style="none" />

</td>
<td width="93" align="right"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/superright.jpg" width="93" alt=""/> </td>
</tr>
<tr valign="top"><td width="97" class="left"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/left.jpg" width="97" alt="" border="0" /></td><td bgcolor="#14092c"><table cellpadding="0" cellspacing="0" border="0" align="center"><tbody><tr valign="top"><td width="700"><font color="#dad2ff"><jdoc:include type="component" />
</font>
</td></tr></tbody></table></td><td width="93" class="right"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/right.jpg" width="93"  alt="" border="0" /></td></tr>
<tr><td colspan="3" width="1100" height="150"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/Down.jpg" alt="" border="0" /></td></tr>
</tbody></table>

</body></html>