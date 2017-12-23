<div id="append_parent"></div>
<style>
.header .container{overflow: inherit;}
.hovershow{position: relative;}
.hovershow span{position: absolute;left: -35px; top:32px;z-index: 1;opacity: 0;width:100px;height:100px;display:block;overflow:hidden;border:1px solid #333;}
.hovershow span img{width: 100%;}
</style>
<?php if ($this->_var['user_info']): ?>
	<span class="col-xs-12 col-md-4">您好,
		<a href="/user.php"><?php echo $this->_var['username']; ?></a> , [<a href="/user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>]
	</span>
	<span class="topmenu-list col-xs-12 col-md-8">
		<a href="/flows.php"><i class="iconcart"></i>购物车CART</a>
		<a href="/article.php"><i class="iconhelp"></i>帮助中心Q&A</a>
	</span>
<?php else: ?>
	<span class="col-xs-12 col-md-4">彩眸欢迎您！ <a href="/user.php?act=login">登录</a> |  <a href="/user.php?act=register">免费注册</a></span>
	<!--span class="topmenu-list col-xs-12 col-md-8">
		<a href="/user.php?act=register"><i class="iconregister"></i>注册REGISTER</a>
		<a href="/user.php?act=login"><i class="iconlogin"></i>登录LOGIN</a>
		<a href="/flows.php"><i class="iconcart"></i>购物车CART</a>
		<a href="/article.php"><i class="iconhelp"></i>帮助中心Q&A</a>
	</span-->
	<span class="topmenu-list col-xs-12 col-md-8">
		<a href="/user.php?act=register">会员中心</a>
		<a href="/user.php?act=login">我的订单</a>
		<a href="/article.php">帮助中心</a>
		<a href="/flows.php">购物车</a>
		<a class="hovershow">手机版
			<span><img src="themes/new/style/images/mobilecode.png" alt="" /></span>
		</a>
		<a class="hovershow">微信客服（9:00-23:50）
			<span style="left: 10px;border:none;"><img src="themes/new/style/images/weixincode.png" alt="" /></span>
		</a>
	</span>
	<script>
		$('.hovershow').hover(function(){
			$(this).find('span').css('opacity',1);
		},function(){
			$(this).find('span').css('opacity',0);
		});
	</script>
<?php endif; ?>

