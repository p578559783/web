<div class="block">
<div class="blank"></div><div class="blank"></div> 

<div style="text-align:center">    <a href="index.php"><img src="themes/default/images/bottom_home.gif" style="margin-right:15px;"></a> <a href="#top"><img src="themes/default/images/bottom_top2.gif"></a>       </div> 







<table width="960" border="0" cellpadding="0" cellspacing="0" id="bottom3">
  <tbody>

  <tr>
    <td height="20" colspan="4"></td>
  </tr>
  <tr>
    <td height="1" colspan="4" bgcolor="#e2e2e2"></td>
  </tr>
  <tr>
    <td width="269" height="111"><img src="themes/shishangqiyi/img/bottom_logo.gif" width="303" height="78" style="margin-bottom:10px;"></td>
    <td width="520" align="center"><img src="themes/shishangqiyi/img/bottom_time.gif" width="458" height="60"></td>
    
    <td width="170" align="center">
      <table width="148" border="0" cellspacing="0" cellpadding="0" style="background-image:url('themes/shishangqiyi/img/goods_bg.gif');
background-repeat:no-repeat;">
        <tbody><tr>
          <td width="284" height="41"><table width="123" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="123" align="right" style="padding-right:20px;"><font color="#fc2e17"><strong>508</strong></font></td>
            </tr>
            <tr>
              <td align="right" style="padding-right:12px;" ><font color="#fc2e17"><strong>6789</strong></font></td>
            </tr>
          </tbody></table></td>
        </tr>
    </tbody></table></td>
  </tr>

</tbody></table>



<div class="helpTitBg">

<?php if ($this->_var['helps']): ?>
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat_0_25979900_1418444003');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat_0_25979900_1418444003']):
?>
<dl>
  <dt><a href='<?php echo $this->_var['help_cat_0_25979900_1418444003']['cat_id']; ?>' title="<?php echo $this->_var['help_cat_0_25979900_1418444003']['cat_name']; ?>"><?php echo $this->_var['help_cat_0_25979900_1418444003']['cat_name']; ?></a></dt>
  <?php $_from = $this->_var['help_cat_0_25979900_1418444003']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_25979900_1418444003');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_25979900_1418444003']):
?>
  <dd><a href="<?php echo $this->_var['item_0_25979900_1418444003']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item_0_25979900_1418444003']['title']); ?>"><?php echo $this->_var['item_0_25979900_1418444003']['short_title']; ?></a></dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
</div>




<div class="blank"></div>



<div id="footer">
<div class="blank"></div>
<div class="blank"></div>



<div style="background-color:#000000; height:28px; padding-top:5px; color:#FFFFFF">
<?php echo $this->_var['shop_address']; ?>  &nbsp;   <?php if ($this->_var['icp_number']): ?>
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><span style="color:#FFFFFF"><?php echo $this->_var['icp_number']; ?></span></a>
  <?php endif; ?>   &nbsp<?php echo $this->_var['copyright']; ?>
</div>
  <?php echo $this->_var['shop_postcode']; ?>
 <?php if ($this->_var['service_phone']): ?>
      Tel: <?php echo $this->_var['service_phone']; ?>
 <?php endif; ?>
 <?php if ($this->_var['service_email']): ?>
      E-mail: <?php echo $this->_var['service_email']; ?><br />
 <?php endif; ?>
 <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/default/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="themes/default/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><br />
    <?php if ($this->_var['stats_code']): ?>
    <div align="left"><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
       <div class="blank"></div>
<div class="blank"></div>


       
 </div>
 
 

 
</div>
</div>
