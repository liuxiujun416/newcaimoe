<style>
.logo{width: auto;}
.nav .container{
	overflow: inherit;
}
.nav a{
	position: relative;

}
.nav a span{
	position: absolute;
	right: -20px;
	top: 42px;
	display: block;
	padding: 10px 30px;
	background-color: #fff;
	border: 1px solid #ccc;
	z-index: 2;
	color: #666;
	text-align: center;
	box-shadow: 5px 5px 5px #888888;
	opacity: 0;
	display: none;
	overflow: hidden;
}
.nav a span label{
	font-weight: normal;
	font-size: 14px;
	margin: 0 auto;
	cursor: pointer;
	display: block;
	min-width: 120px;
}
.nav a span.morebrand label{
	min-width: 200px;
}
.nav a span label:hover{
	color: #000;
}
</style>
<div class="header" style="border-bottom:1px solid #bbb;">
	<div class="container">
		<div class="topmenu"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
		</div>
	</div>
</div>
<div class="container">
	<div class="wrapper header">
		<form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchText(this);">
		<div class="logomenu">
			<div class="col-xs-6 col-md-3"><a href="/"><img class="logo" src="themes/new/style/css/image/logo2.png" alt="www.caimoe.com" /></a></div>
			<div class="col-xs-12 col-md-9 search">
				<span class="hotsearch">热门搜索：NEO自然 棕色 灰色</span>
				<span class="searchform"><input type="text" name="" placeholder="请输入搜索内容" 
					onfocus="if (this.value.indexOf('商品名称/关键词')!=-1) this.style.color='#000000'; this.value=''" onmouseover="this.focus();"/> | 
					<a id="search" href="javascript:;" onclick="document.getElementById('searchForm').submit();"></a></span>
			</div>
		</div>
		</form>
	</div>
</div>

<div class="nav clearfix">
	<div class="container">
		<div class="col-xs-12 col-md-12">
			<a href="/" target="">首页</a>
			<a target="">美瞳效果
				<span>		
				<?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
				<?php if ($this->_var['list']['attr_id'] == '257'): ?>
				<?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<label data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></label>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</span>
			</a>
			<a target="">颜色风格
				<span>		
				<?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
				<?php if ($this->_var['list']['attr_id'] == '256'): ?>
				<?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<label data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></label>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</span>
			</a>
			<a target="">抛弃类型
				<span>		
				<?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
				<?php if ($this->_var['list']['attr_id'] == '221'): ?>
				<?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<label data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></label>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</span>
			</a>
			<a target="">护理用品</a>
			<a target="">跨境淘淘</a>
			<a target="">美瞳攻略</a>
			<a target="">实体店</a>
			<a target="">更多品牌
				<span class="morebrand">
					<?php $_from = $this->_var['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['category']):
?>
					<?php if ($this->_var['category']['sort_order'] < 13): ?>
					<label data-url="<?php echo $this->_var['category']['url']; ?>"><?php echo $this->_var['category']['name']; ?></label>
					<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</span>
			</a>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function() {
  $('.nav a').hover(function(){
  		$(this).find('span').show().css({'opacity': 1})
  	},function(){
  		$(this).find('span').hide().css({'opacity': 0})
  	})

  	$('.nav label').on('click',function(){
  		var href = 'http://www.caimoe.com/' + $(this).data('url');
  		window.location.href = href;
  	});
});
</script>