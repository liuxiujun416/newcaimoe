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

  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
  <link href="./themes/miqinew/css/style/css/order.css" rel="stylesheet" media="screen" />
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
  <script src="http://www.caimoe.com/themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style type="text/css">
    .goods{padding: 5px 10px 10px 10px;}
  </style>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php if ($this->_var['step'] == "cart"): ?>
<style type="text/css">
  .goods .icon-del{    
    position: absolute;
    right: 0;
    top: 0;
  }
</style>
<div class="container-fluid">
  <div class="wrapper">
    <div class="container cartlist">
      <a class="active">商品(<em><?php if ($this->_var['goods_list']): ?><?php echo count($this->_var['goods_list']); ?><?php else: ?>0<?php endif; ?></em>)
      <a href="user.php?act=bonus">优惠券(<em>0</em>)</a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="wrapper">
    <?php if ($this->_var['goods_list']): ?>
    <form id="formCart" name="formCart" method="post" action="flow.php">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goods">
<!--             <a class="checkbox"></a> -->
          <div class="col-xs-3">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?> 
                <a class="goodsthumb" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" alt=""></a>

                <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
                <?php endif; ?> 
                <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
                <?php endif; ?> 
              <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
                <a href="javascript:void(0)" onClick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
                  <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
                  <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
              <?php else: ?> 
              <?php echo $this->_var['goods']['goods_name']; ?> 
              <?php endif; ?> 
          </div>
          <div class="col-xs-9 goodsdesc">
              <h1 class="title"><?php echo $this->_var['goods']['goods_name']; ?><a class="icon icon-del fr" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>';"></a></h1>
              <?php if ($this->_var['show_goods_attribute'] == 1): ?>
              <p class="attr" style="height: auto;overflow: hidden;"> <?php echo nl2br($this->_var['goods']['goods_attr']); ?> </p>
              <?php endif; ?>
              <p class="cartnumber">
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                  <a onclick="change(-1, <?php echo $this->_var['goods']['rec_id']; ?>)">-</a><input class="inputBg" type="number" min="1" max="1000" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" onkeyup="value=this.value.replace(/\D+/g,'')" onblur="changenum(<?php echo $this->_var['goods']['rec_id']; ?>)"/>
                  <a onclick="change(1, <?php echo $this->_var['goods']['rec_id']; ?>)">+</a>
                  <script>
                    function change(type, obj){
                      var rec_id = <?php echo $this->_var['goods']['rec_id']; ?>;
                      var number = $('#goods_number_'+obj).val();
                      $('#goods_number_'+obj).val(number*1 + type);
                      changenum(rec_id);
                    }
                    function changenum(rec_id){
                      var goods_number = parseInt(document.getElementById('goods_number_'+rec_id).value);              
                      change_goods_number(rec_id,goods_number);
                    }

                    function change_goods_number(rec_id, goods_number){
                      Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, change_goods_number_response, 'POST','JSON');  
                    } 

                    function change_goods_number_response(result){
                      console.log(result)
                      if (result.error == 0){
                        var rec_id = result.rec_id;
                        document.getElementById('total_number').innerHTML = result.total_number;//更新数量
                        document.getElementById('goods_subtotal').innerHTML = result.total_desc;//更新小计
                        if (document.getElementById('ECS_CARTINFO')){//更新购物车数量
                          document.getElementById('ECS_CARTINFO').innerHTML = result.cart_info;
                        }
                      }
                      else if (result.message != ''){
                        alert(result.message);
                      }                
                    }
                  </script> 
                  <?php else: ?> 
                  <?php echo $this->_var['goods']['goods_number']; ?> 
                  <?php endif; ?>
                <span class="fr"><em class="price"><?php echo $this->_var['goods']['goods_price']; ?></em><em class="oldprice"><?php echo $this->_var['goods']['market_price']; ?></em></span>
              </p>
          </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </form>
    <?php endif; ?>
  </div>
</div>
<script type="text/javascript">
</script>

<div class="container-fluid block"></div>

  <div class="container-fluid">
      <div class="wrapper">
          <div class="orderbar">
              <span class="price">总计：<font id="goods_subtotal"><?php echo $this->_var['total']['goods_price']; ?></font></span>
              <span class="step"><!--font><i></i>距订单过期，还剩下11时57分14秒</font--><a href="flow.php?step=checkout" style="width: auto;padding: 0 15px;">结算(<em class="num" id="total_number" style="font-style: normal;"><?php echo $this->_var['total']['total_number']; ?></em>)</a></span>
          </div>
      </div>
  </div>
<?php endif; ?>


<?php if ($this->_var['step'] == "login"): ?>
<link href="./themes/miqinew/css/style/css/login.css" rel="stylesheet" media="screen" />
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  function checkLoginForm(frm) {
    if (Utils.isEmpty(frm.elements['username'].value)) {
      alert(username_not_null);
      return false;
    }
    if (Utils.isEmpty(frm.elements['password'].value)) {
      alert(password_not_null);
      return false;
    }
    return true;
  }
  
</script> 

<div class="container-fluid">
  <div class="login-header">
    <div class="logo">
      <img src="./themes/miqinew/css/style/images/logobg.png" alt="" />
      <span>彩眸网，欢迎您！</span>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="wrapper">  
    <form action="flow.php?step=login" method="post" name="loginForm" class="theForm" id="loginForm" onsubmit="return checkLoginForm(this)">
      <div class="login">
        <div class="line">
          <span>
            <i class="icon icon-user"></i>
            <input placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>/<?php echo $this->_var['lang']['email']; ?>" name="username" type="text"  class="inputBg" id="username" />
          </span>
        </div>
        <div class="line">
          <span>
            <i class="icon icon-pwd"></i>
            <input placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  name="password" type="password" class="inputBg" />
          </span>
        </div>
        <div class="line noline">
          <input type="checkbox" value="1" name="remember" id="remember" /> 自动登录
          <a class="fr" href="user.php?act=get_password">忘记密码?</a>
        </div>
        <div class="line noline">

          <input name="act" type="hidden" value="signin" />

          <a class="btn" onclick="$('#loginForm').submit();">登录</a>
          <div><a class="fr" style="margin-top: 10px;">手机快速注册>></a></div>
        </div>

        <div class="other">
          <span><em class="otherline"></em> 使用第三方合作平台登录 <em class="otherline"></em></span>
          <div class="otherstyle">
            <a href="user.php?act=oath&type=qq"><i class="iconqq"></i></a>
            <a href="user.php?act=oath&type=weibo"><i class="iconweibo"></i></a>
            <a href="user.php?act=oath&type=alipay"><i class="iconzfb"></i></a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  
</script>
<?php endif; ?>


<?php if ($this->_var['step'] == "checkout"): ?>
<link href="./themes/miqinew/css/style/css/checkorder.css" rel="stylesheet" media="screen" />
<style type="text/css">
  .radio{
    position: absolute;
    left: 20px;
    top: 10px;
    z-index: 0;
  }
  #ECS_ORDERTOTAL dl dd{
    font-size: 14px;
    line-height: 23px;
    padding: 10px;
  }
</style>
<script>
  onload = function() {  

    var sp = document.getElementsByName('shipping');

    for (i=0;i<sp.length;i++){
       if (sp[i].checked){
          oRadioValue = sp[i];
         }
    }
    selectShipping(oRadioValue );      

    var py = document.getElementsByName('payment');
    for (i=0;i<py.length;i++){
      if (py[i].checked){
       oRadioValue = py[i];
      }
    }
    selectPayment(oRadioValue );   

    // var pack = document.getElementsByName('pack');
    // for (i=0;i<pack.length;i++){
    //   if (pack[i].checked){
    //     oRadioValue = pack[i];
    //   }
    // }
    // selectPack(oRadioValue );   
    // var bonus = document.getElementsByName('bonus');
    // for (i=0;i<bonus.length;i++){
    //   if (bonus[i].checked){
    //     oRadioValue = bonus[i];
    //   }
    // }
    // changeBonus(oRadioValue ); 

    // var card = document.getElementsByName('card');
    // for (i=0;i<card.length;i++){
    //   if (card[i].checked){
    //    oRadioValue = card[i];
    //   }
    // }
    // selectCard(oRadioValue ); 

  }
</script>

<form action="flow.php" method="post" name="theForm" id="theForm" onSubmit="return checkOrderForm(this)">
<script type="text/javascript">
    var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
    var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
</script>
  <div class="container-fluid">
    <div class="wrapper">
      <div class="container local">
        <span class="icon icon-local"></span>
        <span>
          <label><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </label>
          <label><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>  <?php echo $this->_var['consignee']['tel']; ?></label>
        </span>
        <span class="icon icon-right" onclick="javascript:location.href='flow.php?step=consignee'"></span>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="wrapper">    
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goods">
        <div class="col-xs-3">
          <a class="goodsthumb"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" alt=""></a>
        </div>
        <div class="col-xs-9">        
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
            <a href="javascript:void(0)" onClick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" style="height:20px;display:block;"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a> 
          <?php else: ?> 
            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" style="height:20px;display:block;"><?php echo $this->_var['goods']['goods_name']; ?></a> 
            <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
            <?php elseif ($this->_var['goods']['is_gift']): ?> 
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
            <?php endif; ?> 
          <?php endif; ?> 
          <p class="title">
          <?php if ($this->_var['show_goods_attribute'] == 1): ?>
          <?php echo nl2br($this->_var['goods']['goods_attr']); ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['goods_name']; ?>
          <?php endif; ?>
          </p>
          <p class="goodscode">商品货号： <?php echo $this->_var['goods']['goods_sn']; ?></p>
          <p class="goodsnumber">数量 X <?php echo $this->_var['goods']['goods_number']; ?><span class="price fr"><?php echo $this->_var['goods']['formated_subtotal']; ?></span></p>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

      <div class="comment payee">
        <input placeholder="选填：对本次交易的说明（限20字以内）" name="inv_payee" type="text" size="20">
      </div>

<!--       <div class="container">
          <h3>使用积分</h3>
      </div> -->

      <div class="container sendtype">
          <h3>配送方式</h3>
          <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
          <div>
              <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
              <span class="shipping_list <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>active<?php endif; ?>" >
                <input name="shipping" type="radio" class="radio" id="shipping_<?php echo $this->_var['shipping']['shipping_id']; ?>" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" style="vertical-align:middle" />
                <i class="icon icon-checked"></i> 
                <?php echo $this->_var['shipping']['shipping_name']; ?>/<font><?php echo $this->_var['shipping']['format_shipping_fee']; ?></font>
              </span>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             <!--  <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
                <?php echo $this->_var['lang']['need_insure']; ?>-->
          </div>
          <?php else: ?>
          <input name="shipping"  type="radio" value = "-1" checked="checked"  style="display:none"/>
          <?php endif; ?>
      </div>

      <div class="container paytype sendtype">
          <h3>支付方式</h3>
         <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
          <div>
              <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
              <span class="icon <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>active<?php endif; ?>">
                <input type="radio" class="radio" name="payment" id="payment_<?php echo $this->_var['payment']['pay_id']; ?>" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?> style="vertical-align:middle" />
                <i class="icon icon-checked"></i><?php echo $this->_var['payment']['pay_name']; ?> [<?php echo $this->_var['payment']['format_pay_fee']; ?>]
              </span>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php else: ?>
          <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
          <?php endif; ?> 
      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="wrapper">
    </div>
  </div>

  <script type="text/javascript">
      $(function(){
          $('.container i').on('click', function(){
              console.log(this)
              $(this).parent().addClass('active').siblings().removeClass('active');
              $(this).prev().click();
          });
      })
  </script>
  <div class="container-fluid block" id=""></div>
  <div class="container-fluid">
      <div class="wrapper">
          <div class="orderbar">
              <input type="hidden" name="step" value="done" />
              <span class="price">总计：<font id="ORDERTOTAL"><?php echo $this->_var['total']['amount_formated']; ?></font></span>
              <span class="step"><!-- <font><i></i>距订单过期，还剩下11时57分14秒</font> --><a style="width: auto;padding: 0 15px;" onclick="javascript:$('#theForm').submit();">提交订单</a></span>
          </div>
      </div>
  </div>
</form>
<?php endif; ?>


<?php if ($this->_var['step'] == "consignee"): ?> 
 
<?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?> 
<script type="text/javascript">
  region.isAdmin = false;
  <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function() {
    if (!document.all)
    {
      document.forms['theForm'].reset();
    }
  }
  
</script>
<style type="text/css">
  /* 订单确认页 */
  .order_box{background:#FFF; font-size:0.8rem; margin:5px auto; padding:5px;}
  .order_box .in{ display:block;
  background:url(themes/miqinew/images/order_bg1.png) repeat-x;  
  -webkit-background-size:2.4rem 0.4rem;
  -moz-background-size:2.4rem 0.4rem;
  background-size:2.4rem 0.4rem;}
  
  /* 订单确认页通用表格 */
  .order_box .table_box dl{border-bottom:1px solid #f3f3f3; padding:0.7rem 0;}
  .order_box .table_box dd{padding:0.3rem 0;}
  .order_box .line_no dl{border-bottom:none; padding:0.4rem 0}
  .order_box .table_box dl:last-child{border-bottom:none}
  .order_box .in{color:#333; font-size:0.8rem; padding:0.8rem 0 0 0}
  .order_box .in .f1{font-size:1.1rem}
  .order_box .in .ico_14{display:inline-block; width:1rem; height:1rem;-webkit-background-size:1rem 1rem;-moz-background-size:1rem 1rem;background-size:1rem 1rem;}
  
  /* 订单确认页表格_中间模块 */
  .order_box .table_box2 dl{padding:0; position:relative}
 
  .table_box2 .dd1{width:28%; vertical-align:middle;}
  .table_box2 .dd2{color:#999; font-size:0.8rem; text-align:left; width:90%; height: auto; line-height: 23px; vertical-align:middle; border:none}
  .table_box2 .dl_box p{line-height:36px;}
  .table_box2  input{color:#999;  text-align:left; width:90%; border:none; background:#fff ; padding:0; height:24px;}
  .table_box2  input.radio{width:auto;}
  .table_box2 .span1{font-size:0.8rem; background:#F472A0; color:#FFF; display:inline-block; padding:0 0.2rem}
  .table_box2 .dd3{text-align:right}
  
  .table_box2  i{ background-image: -webkit-linear-gradient(left,transparent 70%,#666 70%,#666 100%),-webkit-linear-gradient(top,transparent 70%,#666 70%,#666 100%);
    background-image: -moz-linear-gradient(left,transparent 70%,#666 70%,#666 100%),-moz-linear-gradient(top,transparent 70%,#666 70%,#666 100%);
    background-image: -o-linear-gradient(left,transparent 70%,#666 70%,#666 100%),-o-linear-gradient(top,transparent 70%,#666 70%,#666 100%);
    position: absolute;
    display: inline-block;
    width: 0.5rem;
    height: 0.5rem;
    margin-right: 0.2rem; float:right;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    top:1rem; right:0.5rem; }
    
  .table_box2 .modRadio{background-color: #B3B3B3; border-radius: 2px;color: #FFFFFF;display: inline-block;height: 19px;line-height: 19px;overflow: hidden;padding: 1px; text-align: center; width: 38px;}
  .table_box2 .modRadio .fl {margin-left: 1px;}
  .table_box2 .modRadio i {  background: none repeat scroll 0 0 #FFFFFF;border-radius: 2px;display: inline-block;height: 17px;margin: 1px 1px 0 0;width: 17px;
      -webkit-transform: none;
      -moz-transform: none;
    -o-transform: none;
    top:0; right:0;
    position: static ; 
    }
  .table_box2 .modRadio  .fl {float: left;}
  .fr {float: right;}
    
  /* 订单确认页表格_底部模块 */  
  .table_box3 .dd1{text-align:left}    
  .table_box3 .dd1 a{color:#5498db}
  .table_box3 .dd2{text-align:center}    
  .table_box3 .dd3{text-align:right} 
    .modify{background:#5498db; color:#FFF; display:inline-block; padding:0 0.5rem; float:right;} 
  .f4_b{color: #F472A0;display: inline-block;}
  
  .select_city select{}
  button{
    width: 30%;
    border: none;
    background-color: #333;
    color: #fff;
    display: inline-block;
    height: 32px;
  }
  .consignee_sub{
    text-align: center;
  }
  .consignee_sub dd{display: inline; margin-right: 30px;}
  
</style>
<div class="blank3"></div>
<div class="wrap"> 
   
  <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
  <section class="order_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
    <div class="table_box2 table_box">
      <form style="padding:8px;" action="flow.php" method="post" name="theForm" id="theForm" onSubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
      </form>
    </div>
  </section>
  <div class="blank3"></div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  
</div>
<?php endif; ?> 


<?php if ($this->_var['step'] == "done"): ?> 

<style>
body,html{background-color: #f5f5f5;}
.resetpwd{
  padding: 15px 0;
}
#stepsuccess{
  height: auto;
  background: url(./themes/miqinew/css/style/css/image/success.png) center no-repeat;
  background-position: 30%;
  background-size: 24px;
  text-align: center;
}
#stepsuccess label{
  height: 32px;
  padding: 20px 0;
}
.resetpwd span{
  width: 100%;
  height: 55px;
  display: block;
  padding-left: 0;
}
.order{
  width: 100%;
  padding: 20px;
  overflow: hidden;
}
.orderdesc{
  background-color: #f0f0f0;
  text-align: center;
  padding: 20px;
  text-align: left;
}
.orderdesc p{
line-height: 22px;
}
button, html input[type=button], input[type=reset], input[type=submit]{
  border: none;
  background-color: #000;
  color: #fff;
}
</style>
<div class="container-fluid" style="margin: 10px 0;background-color: #fff;">
  <div class="wrapper">
    <div class="resetpwd">
      <span id="stepsuccess">
        <label>订单提交成功!</label>
        <font style="display:block;font-size: 14px;margin: 0;color: #ff0101;font-size: 12px;line-height: 16px;">请您在24小时内完成订单，超时后系统会 自动取消订单...</font>
      </span>
    </div>
    <div class="order">
      <div class="orderdesc">
        <p><?php echo $this->_var['lang']['remember_order_number']; ?>: <?php echo $this->_var['order']['order_sn']; ?></p>
        <?php if ($this->_var['order']['shipping_name']): ?><p><?php echo $this->_var['lang']['select_shipping']; ?>: <?php echo $this->_var['order']['shipping_name']; ?></p><?php endif; ?>
        <p><?php echo $this->_var['lang']['select_payment']; ?>: <?php echo $this->_var['order']['pay_name']; ?></p>
        <p><?php echo $this->_var['lang']['order_amount']; ?>: <?php echo $this->_var['total']['amount_formated']; ?></p>
        <p><?php echo $this->_var['order']['pay_desc']; ?></p>

        <?php if ($this->_var['virtual_card']): ?>
        <p  style="text-align:center;overflow:hidden;border:1px solid #E2C822; background:#FFF9D7;margin:10px;padding:10px 50px 30px; margin:10px;"> 
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
          <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
          <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
          <ul style="list-style:none;padding:0;margin:0;clear:both">
            <?php if ($this->_var['card']['card_sn']): ?>
            <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
            <?php endif; ?> 
            <?php if ($this->_var['card']['card_password']): ?>
            <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
            <?php endif; ?> 
            <?php if ($this->_var['card']['end_date']): ?>
            <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
            <?php endif; ?>
          </ul>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </p>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="wrapper">
    <div class="orderbar">
      <span class="price"><?php echo $this->_var['lang']['order_amount']; ?>：<font><?php echo $this->_var['total']['amount_formated']; ?></font></span>
       <?php if ($this->_var['pay_online']): ?> 
        
        <span class="step">
          <!-- <font><i></i>距订单过期，还剩下11时57分14秒</font> -->
          <?php echo $this->_var['pay_online']; ?></span>
        <?php endif; ?>
    </div>
  </div>
</div>
<?php endif; ?> 



</body>
</html>