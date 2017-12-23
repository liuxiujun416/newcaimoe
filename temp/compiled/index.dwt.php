<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />

<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" src="themes/new/js/site.js"></script>
<script type="text/javascript" src="themes/new/js/scrollpic.js"></script>
<?php 
    require_once("themes/".$GLOBALS['_CFG']['template']."/diyfile.php");
    $this->assign('TemplatePath','themes/'.$GLOBALS['_CFG']['template']);
?>

<script src="themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="themes/new/style/css/common.css" rel="stylesheet" media="screen" />
<link href="themes/new/style/css/home.css" rel="stylesheet" media="screen" />

<style type="text/css">
</style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<?php echo $this->fetch('library/index_ad.lbi'); ?>

<?php if ($this->_var['top_goods']): ?>
<div class="bestseller clearfix">
	<div class="container">
		<div class="xolxs-12 col-md-12">
			<div class="protitle"><h1>BEST SELLER</h1><span>畅销商品</span></div>
			<span class="probtm"></span>
		</div>
	</div>
</div>

<div class="product">
	<div class="container">
		<?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'topgoods');if (count($_from)):
    foreach ($_from AS $this->_var['topgoods']):
?>
		<div class="prorow">
			<?php $_from = $this->_var['topgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<div class="productlist clearfix col-md-3">
				<div class="prothumb">
					<a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['item']['thumb']; ?>" alt="" /></a>
				</div>
				<div class="prodesc">
					<span><a class="producttitle" href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['goods_name']; ?>"><?php echo $this->_var['item']['short_name']; ?></a></span>
					<span class="produshu">度数 ： 0~~800度 副本 4</span>
					<span class="proprice">售价：<?php echo $this->_var['item']['price']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endif; ?>


<?php if ($this->_var['new_goods']): ?>
<div class="bestseller clearfix">
	<div class="container">
		<div class="xolxs-12 col-md-12">
			<div class="protitle"><h1>NEW PRODUCT</h1><span>新款商品</span></div>
			<span class="probtm"></span>
		</div>
	</div>
</div>

<div class="product">
	<div class="container">
		<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'newgoods');if (count($_from)):
    foreach ($_from AS $this->_var['newgoods']):
?>
		<div class="prorow">
			<?php $_from = $this->_var['newgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<div class="productlist clearfix col-md-3">
				<div class="prothumb">
					<a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['item']['thumb']; ?>" alt="" /></a>
				</div>
				<div class="prodesc">
					<span><a class="producttitle" href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['goods_name']; ?>"><?php echo $this->_var['item']['short_name']; ?></a></span>
					<span class="produshu">度数 ： 0~~800度 副本 4</span>
					<span class="proprice">售价：<?php echo $this->_var['item']['price']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endif; ?>



<?php if ($this->_var['best_goods']): ?>
<div class="bestseller clearfix">
	<div class="container">
		<div class="xolxs-12 col-md-12">
			<div class="protitle"><h1>NEW PRODUCT</h1><span>精选商品</span></div>
			<span class="probtm"></span>
		</div>
	</div>
</div>

<div class="product">
	<div class="container">
		<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'newgoods');if (count($_from)):
    foreach ($_from AS $this->_var['newgoods']):
?>
		<div class="prorow">
			<?php $_from = $this->_var['newgoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<div class="productlist clearfix col-md-3">
				<div class="prothumb">
					<a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['item']['thumb']; ?>" alt="" /></a>
				</div>
				<div class="prodesc">
					<span><a class="producttitle" href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['item']['goods_name']; ?>"><?php echo $this->_var['item']['short_name']; ?></a></span>
					<span class="produshu">度数 ： 0~~800度 副本 4</span>
					<span class="proprice">售价：<?php echo $this->_var['item']['price']; ?></span>
				</div>
			</div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
</div>
<?php endif; ?>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>