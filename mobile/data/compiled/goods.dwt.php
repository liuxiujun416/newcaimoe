<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->_var['page_title']; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="format-detection" content="telephone=no" />
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
  <link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
  <script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
  <script type="text/javascript">
  // 筛选商品属性
  jQuery(function($) {
    $(".info").click(function(){
      $('.goodsBuy .fields').slideToggle("fast");
    });
  })

  function changenum(diff) {
    var num = parseInt(document.getElementById('goods_number').value);
    var goods_number = num + Number(diff);
    if( goods_number >= 1){
      document.getElementById('goods_number').value = goods_number;//更新数量
      changePrice();
    }
  }
  </script>
  <script src="http://www.caimoe.com/themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
  <link href="./themes/miqinew/css/style/css/detail.css" rel="stylesheet" media="screen" />
  <link href="/themes/new/style/css/amazeui.swiper.min.css" rel="stylesheet" />
   
    <style>
    .banner{overflow: hidden;}
    .swiper-container {
        width: 100%;
        height: 100%;
        height: 300px;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .swiper-pagination{
      text-align: center;
    }
    .swiper-pagination-bullet{
      width: 12px;
      height: 12px;
      background-color: #fff;
      border: 1px solid #000;
    }
    .swiper-pagination-bullet-active{
      background-color: #000;
    }
    .swiper-slide img{width: 100%;height: 100%;}
    .productdesc{margin-bottom: 15px;}
    .productdesc img{
      width: 100%;
      height: auto;
    }
    .shuxing span{display: inline-block; width: 48%; margin-bottom: 10px;}
    </style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="container-fluid">
  <div class="banner">
    
      <div class="swiper-container">
          <div class="swiper-wrapper">
              <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
              <div class="swiper-slide"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['item']['thumb_url']; ?>" alt="" /></div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          
          <?php if (count ( $this->_var['pictures'] ) > 1): ?>
          <div class="swiper-pagination"></div>
          <?php endif; ?>
      </div>
  </div>
</div>
<script type="text/javascript" src="/themes/new/style/js/amazeui.swiper.min.js"></script>

  <script>
  var swiper = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      paginationClickable: true
  });
  </script>

<div class="container-fluid">
  <div class="wrapper">
    <div class="product">
      <h1><?php echo $this->_var['goods']['goods_name']; ?></h1>
      <p class="price"><?php echo $this->_var['goods']['shop_price_f']; ?></p>
      <?php if ($this->_var['goods']['market_price']): ?>
      <p class="oldprice">原价：<font><?php echo $this->_var['goods']['market_price_f']; ?></font></p>
      <?php endif; ?>

      <p class="yunfei shuxing">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <span class=""><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </p>


      <?php if ($this->_var['goods']['js_price']): ?>
      <p class="youhui">
        <span>优惠</span>
        <font><?php echo $this->_var['goods']['js_price']; ?></font>
      </p>
      <?php endif; ?>
    </div>
  </div>
</div>

<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
  <?php if ($this->_var['specification'] [ 'pro' ]): ?>
  <div class="container-fluid">
    <div class="wrapper">
      <div class="product color">
        <?php $_from = $this->_var['specification']['pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <?php echo $this->_var['attr']; ?>
        <?php $_from = $this->_var['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <h1><?php echo $this->_var['item']['name']; ?></h1>
        <a class="colorselect active"><i class="icon icon-colorbalck <?php echo $this->_var['item']['label']; ?>"></i><img src="./style/images/<?php echo $this->_var['item']['label']; ?>.png" alt="" /></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($this->_var['specification']): ?>
  <div class="container-fluid">
    <div class="wrapper">
      <div class="product">
          <h1 class="icon icon-right" id="selecteye">选择：
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?><?php if ($this->_foreach['spec']['iteration'] > 1): ?> <?php endif; ?><?php echo $this->_var['spec']['name']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </h1>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <div class="container-fluid">
    <div class="wrapper">
      <h1 class="center">商品详情</h1>
    </div>
    <div class="container">
      <div class="productdesc"><?php echo $this->_var['goods']['goods_desc']; ?></div>
    </div>
  </div>

  <?php echo $this->fetch('library/comments.lbi'); ?>
  

  <div class="container-fluid">
    <div class="wrapper addorder" style="position: fixed; left: 0; bottom: 0;">
      <a onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">加入购物车
      <a class="jiesuan" onclick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">立即购买</a>
    </div>
  </div>

  
  <?php if ($this->_var['specification']): ?>
  <style type="text/css">
    .eyelist label,label{
      font-size: 14px;
      color: #666;
      padding: 10px 0;
      font-weight: normal;
    }
    .title img.absolute{
      position: absolute;
      left: 0;
      top: -60px;
    }
    .title img.fixed{
      position: fixed;
      left: 20px;
      top: 326px;
    }
    .eyeitem.active{
      background-color: #d1d1d1;
    }
    .product h1, .product p{
      font-size: 14px;
    }
  </style>
  <div class="container-fluid">
    <div class="container">
      <div class="eyeselect">
        <div class="eye">
          <span class="close" onclick="javascript:$('.eyeselect').hide();$('.mark').removeClass('markon');$(document.body).toggleClass('html-body-overflow');"><i class="icon icon-close"></i></span>
          <div class="title">
            <img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="" id="goods_thumb"/>
            <h1><?php echo $this->_var['goods']['goods_name']; ?></h1>
            <p class="price"><?php echo $this->_var['goods']['shop_price_f']; ?></p>
          </div>

           
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <label style="display: block;"><?php echo $this->_var['spec']['name']; ?></label>
          
          <?php if ($this->_var['spec']['attr_type'] == 1): ?>
            <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
              <?php if ($this->_var['spec']['name'] == '颜色'): ?>
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice(this)" />
                <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php if ($this->_var['value']['product_number'] == 0): ?><?php echo $this->_var['value']['label']; ?>-<font class="price">缺货</font><?php else: ?><?php echo $this->_var['value']['label']; ?>-<font class="price"><?php echo $this->_var['value']['product_number']; ?><?php echo $this->_var['goods']['measure_unit']; ?></font><?php endif; ?></label> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>         
              <?php else: ?>
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice(this)" />
                <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <?php endif; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />

            <?php else: ?>
              <div class="eyelist">
                <input type="radio" style="position: absolute;left: -100em;" name="spec_<?php echo $this->_var['spec_key']; ?>" id="spec_<?php echo $this->_var['spec_key']; ?>" />
                <div>
                  <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                  <a class="eyeitem" label="<?php echo $this->_var['value']['label']; ?>" data-val="<?php echo $this->_var['value']['id']; ?>" onclick="changePrice(this,<?php echo $this->_var['spec_key']; ?>)">
                    <?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?>
                  </a>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              </div>
            <?php endif; ?>
          <?php else: ?>

            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
            <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice(this,<?php echo $this->_var['spec_key']; ?>)" />
            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
            <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />

          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        


          <div class="cartnumber">
            <label>商品数量</label>
            <span class="fr">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
              <a onclick="changenum(- 1)">-</a>
              <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="number" />
              <a onclick="changenum(1)">+</a>
              <?php else: ?> 
              <?php echo $this->_var['goods']['goods_number']; ?> 
              <?php endif; ?> 

            </span>
            <input type="hidden" name="goods_number" id="goods_number" value="<?php echo $this->_var['goods']['goods_number']; ?>" />
          </div>
        </div>

<!--         <a class="btn addcart" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);$('.close').click();">加入购物车</a> -->
        <a class="btn addcart" href="javascript:addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);$('.close').click();">立即购买</a>
      </div>
    </div>
  </div>

</form>
<div class="mark"></div>
<script type="text/javascript">
  var height = $(window).height(), width = $(window).width();
  // 选择度数
  $('.eyeitem').on('click', function(){
      $(this).addClass('active').siblings().removeClass('active');
      $(this).parent().next().val();
  });

  $('#selecteye').on('click', function(){
    openSelectWindow();
    changePrice();
  });
  function openSelectWindow(){
    $('.eyeselect').show();
    $('.mark').css('height', height); 
    $('.mark').addClass('markon');
    $(document.body).toggleClass("html-body-overflow");
    setScroll();
  }
  function setScroll(){
    $('.eyeselect').scroll(function(){
      if($('.eyeselect').scrollTop() > 0){
        //$('#goods_thumb').css({'position':'absolute','left':'0','top':'-60px'});
        $('#goods_thumb').removeClass('fixed').addClass('absolute');
      }else{
        //$('#goods_thumb').css({'position':'fixed','left'});
        $('#goods_thumb').removeClass('absolute').addClass('fixed');
      }
    });
  }
</script>
<?php endif; ?>


<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(obj,id)
{
  if(obj){
    $('#spec_'+id).val($(obj).data('val')).attr('checked',true);
  }

  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  console.log(attr)
  // var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  var qty = document.getElementById('goods_number').value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    //document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    document.getElementById('goods_number').value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>

</body>
</html>