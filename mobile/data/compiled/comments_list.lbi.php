<style>
.loadmore{
  padding: 15px 0;
}
.loadmore a{
  display: inline-table;
  width: 50%;
  text-align: center;
}
</style>
<div class="container-fluid">
  <div class="wrapper comment" style="margin-bottom: 60px;">
    <h1 class="center">最新评论</h1>

    <?php if ($this->_var['comments']): ?>
    <div class="container">
      <!--div class="menu">
        <span class="active"><i class="icon icon-checked"></i>所有</span>
        <span><i class="icon icon-checked"></i>只查看晒单</span>
      </div-->

      <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>
      <div class="commentlist">
        <p>
          <?php if ($this->_var['comment']['avatar']): ?><img src="./style/images/chart.png" alt="" /><?php endif; ?>
          <?php if ($this->_var['comment']['username']): ?><font><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?></font><?php endif; ?>
        </p>
        <p><?php echo $this->_var['comment']['content']; ?></p>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>

    <?php if (count ( $this->_var['comments'] ) > 2): ?>
    <div class="loadmore">
      
      <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
      <?php if ($this->_var['pager']['styleid'] == 0): ?>
        <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?>
        <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a>  </span>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_73893700_1503856431');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_73893700_1503856431']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_73893700_1503856431']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php else: ?>


      <?php endif; ?>
      </form>
    </div>
    <?php endif; ?>

    <script type="text/javascript">
    <!--
    
    function selectPage(sel)
    {
    sel.form.submit();
    }
    
    //-->
    </script>
    </div>
    <?php else: ?>
    <p style="margin: 20px;">暂无数据</p>
    <?php endif; ?>
  </div>
</div>

<div class="blank2"></div>

<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_73893700_1503856431');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_73893700_1503856431']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_73893700_1503856431']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>