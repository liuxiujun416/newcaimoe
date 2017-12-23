<div class="container-fluid">
    <div class="wrapper">
        <div class="navbar">
            <div class="line"></div>
            <a class="home" href="/"><span>首页</span>
            <a class="type" href="category.php?type=0"><span>分类</span>
            <a class="cart" href="flow.php?step=cart" id="Mycart"><span></span>
            <a class="my" href="user.php?act=order_list"><span>订单</span>
            <a class="help" href="user.php"><span>会员</span></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/ectouch.js"></script>
<script type="text/javascript">
$(function(){
    var window_w = $(window).width();
    
    var mycart_w = $('#Mycart').width();
    var icon_w = $('#Mycart').find('span').width();
    $('#Mycart').find('span').css({left: (mycart_w-icon_w)/2});
})
</script>