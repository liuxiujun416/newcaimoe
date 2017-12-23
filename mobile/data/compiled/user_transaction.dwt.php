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
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js')); ?>

  <script src="http://www.caimoeye.com/themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
  <link href="./themes/miqinew/css/style/css/profile.css" rel="stylesheet" media="screen" />
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

 
<?php if ($this->_var['action'] == 'profile'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />

<style>
  body,html{
    background-color: #f5f5f5;
  }
  .address{
    margin: 15px 0;
    width: 100%;
    overflow: hidden;
    background-color: #fff;
  }
  .address .line{
    width: 100%;
    margin-bottom: 0;
    overflow: hidden;
    padding: 15px;
  }
  .address .line input{
    display: block;
    width: 100%;
    height: 40px;
    line-height: 40px;
    margin: 0;
    color: #bbb;
    font-size: 14px;
  }
  .address .line span{
    display: inline-block;
    width: 100%;
    text-align: right;
    padding-right: 15px;
    color: #999;
  }
  .address .line span label{
    float: left;
    width: auto;
    color: #333;
  }
  .address .line img{
    width: 30px;
    height: 30px;
    border-radius: 50%;
  }
  .address .line span.icon-right{
    background: url('./themes/miqinew/css/style/css/image/icon-right.png') right no-repeat;
    background-size: 8px;
  }
  .line a{color: #999;}
</style>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>

<div class="container-fluid">
  <div class="wrapper">
    <div class="register address">
      <?php if ($this->_var['info']['avatar']): ?>
      <div class="line">
        <span><label>头像</label><img src="<?php echo $this->_var['info']['avatar']; ?>" alt="" /></span>
      </div>
      <?php endif; ?>
      <div class="line">
        <span><label>昵称</label><?php echo $this->_var['profile']['user_name']; ?></span>
      </div>
      <div class="line">
        <span><label>手机号</label><?php echo $this->_var['profile']['mobile_phone']; ?></span>
      </div>
      <div class="line">
        <span><label>注册门店</label>彩眸网</span>
      </div>
      <div class="line">
        <span class="icon-right"><label>地址管理</label><a href="user.php?act=address_list">修改、新建收货地址</a></span>
      </div>
      <div class="line">
        <span class="icon-right" onclick="javascript: location.href='user.php?act=reset_password'"><label>密码修改</label></span>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid block"></div>
<div class="container-fluid">
  <div class="wrapper">
    <div class="navbar">
      <div class="line"></div>
      <a class="home"><span>首页</span>
      <a class="type"><span>分类</span>
      <a class="cart"><span></span>
      <a class="my"><span>我的</span>
      <a class="help"><span>客服</span></a>
    </div>
  </div>
</div>
<?php endif; ?>


 
<?php if ($this->_var['action'] == 'reset_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<style type="text/css">
  body,html{background-color: #fff;}
</style>
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />
<div class="container-fluid">
  <div class="wrapper">
    <form name="formPassword" action="user.php" method="post" onSubmit="return editPassword()" id="setPwdForm">
      <div class="register">
        <div class="line">
          <label><?php echo $this->_var['lang']['old_password']; ?></label>
          <span><input placeholder="<?php echo $this->_var['lang']['old_password']; ?>" name="old_password" type="password"/></span>
        </div>
        <div class="line">
          <label><?php echo $this->_var['lang']['new_password']; ?></label>
          <span><input placeholder="<?php echo $this->_var['lang']['new_password']; ?>" name="new_password" type="password"/></span>
        </div>
        <div class="line">
          <label><?php echo $this->_var['lang']['confirm_password']; ?></label>
          <span><input placeholder="<?php echo $this->_var['lang']['confirm_password']; ?>" name="comfirm_password" type="password"/></span>
        </div>
        <div class="line noline">
          <input name="act" type="hidden" value="act_edit_password" />
          <a class="btn" onclick="javascript:$('#setPwdForm').submit();">确定</a>
        </div>
      </div>
    </form>

  </div>
</div>
<?php endif; ?>

 
<?php if ($this->_var['action'] == 'address_list'): ?>
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />

<style>
body,html{
  background-color: #f5f5f5;
}
.address{
  width: 100%;
  overflow: hidden;
  background-color: #fff;
}
.address .line{
  margin-bottom: 0;
  border: none;
}
.address .line span{
  display: block;
  padding: 0;
  padding-left: 2px;
  width: 100%;
  overflow: hidden;
  text-align: right;
  margin: 5px 0;
  position: relative;
}
.address .line label{
  float: left;
  width: auto;
}
.address .line a.btn{
  width: 60px;
  height: 30px;
  line-height: 16px;
  display: inline-block;
  border-radius: 0;
  background: none;
  color: #333;
  border: 1px solid #bbb;
  margin-left: 10px;
}
.address .line span:last-child{
  padding-left: 30px;
  border-top: 1px dashed #bbb;
  padding-top: 15px;
}

.address .line span i{
  position: absolute;
  left: 0;
  top: 15px;
  width: 25px;
  height: 25px;
  border: 1px solid #bbb;
  border-radius: 50%;
}
.address .line span.active i.icon-checked{
  background: url('./themes/miqinew/css/style/css/image/icon-checked.png') center no-repeat;
  background-size: 25px;
}
</style>
<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
<div class="container-fluid">
  <div class="wrapper">
    <div class="register address">
      <div class="line">
        <span><label><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></label><?php echo $this->_var['consignee']['tel']; ?></span>
        <span><label><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> 
            <?php if ($this->_var['consignee']['zipcode']): ?> 
            [<?php echo $this->_var['lang']['postalcode']; ?>: <?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>] 
            <?php endif; ?>
            </label></span>
        <span class="<?php if ($this->_var['address'] == $this->_var['consignee']['address_id']): ?>active<?php endif; ?>">
          <label><i class="icon-checked setdefault" data-id=<?php echo $this->_var['consignee']['address_id']; ?>></i>设为默认地址</label>
          <a class="btn" href="user.php?act=act_edit_address&id=<?php echo $this->_var['consignee']['address_id']; ?>&flag=display">编辑</a>
          <a class="btn" href="user.php?act=drop_consignee&id=<?php echo $this->_var['consignee']['address_id']; ?>" onClick="return confirm('您真的要删除该地址吗？');">删除</a>
        </span>
      </div>
    </div>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<script type="text/javascript">
  $(function(){
    $('.setdefault').on('click',function(){
      $('span').each(function(){
        $(this).removeClass('active');
      })
      $(this).parent().parent().addClass('active');
      var address_id = $(this).data('id');
      $.post('user.php?act=set_address',{address_id:address_id},function(json){
        console.log(json)
      });
    });
  })
</script>
<?php endif; ?>


 
<?php if ($this->_var['action'] == 'act_edit_address'): ?>
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />

<style>
body,html{
  background-color: #f5f5f5;
}
.address{
  margin: 15px 0;
  width: 100%;
  overflow: hidden;
  background-color: #fff;
  color: #666;
}
.address .line{
  width: 100%;
  margin-bottom: 0;
  overflow: hidden;
  padding: 10px 15px;
}
.address .line input{
  display: block;
  width: 100%;
  height: 40px;
  line-height: 40px;
  margin: 0;
  color: #666;
  font-size: 14px;
}
.address .line label{
  width: 20%;
  font-size: 14px;
  color: #bbb;
}
.address .line input{
  display: inline-block;
  width: 75%;
}
.address .line select{
  border: none;
  color: #666;
  font-size: 14px;
}
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js,region.js,shopping_flow.js')); ?> 
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
<div class="container-fluid">
  <div class="wrapper">  
    <form action="user.php" method="post" name="theForm" id="addressForm" onsubmit="return checkConsignee(this)">
      <div class="register address">
        <div class="line">
          <span>
            <label>收货人姓名</label>
            <input name="consignee" placeholder="" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
          </span>
        </div>
        <div class="line">
          <span>
              <label>电话号码</label>
              <input placeholder="<?php echo $this->_var['lang']['phone']; ?><?php echo $this->_var['lang']['require_field']; ?>" name="tel" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
          </span>
        </div>
        <div class="line">
          <span>
              <label>省、市、区</label>
              <!--<select name="country" onchange="region.changed(this, 1, 'selProvinces')">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>-->
              <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <select name="district" id="selDistricts" <?php if (! $this->_var['district_list']): ?>style="display:none"<?php endif; ?>>
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
          </span>
        </div>
        <div class="line">
          <span>
              <label>详细地址</label><input name="address" placeholder="<?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" /></span>
        </div>
        <div class="line">
          <span>
              <label>邮政编码</label><input placeholder="<?php echo $this->_var['lang']['postalcode']; ?>" name="zipcode" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></span>
        </div>
      </div>
      <div class="register">
        <div class="line noline">
          <?php if ($this->_var['consignee']['consignee']): ?>
            <a class="btn" onclick="$('#addressForm').submit();">修改</a>
          <?php else: ?>
            <a class="btn" onclick="$('#addressForm').submit();">保存</a>
          <?php endif; ?>
          <input type="hidden" name="act" value="act_edit_address" />
          <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
        </div>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>

 
<?php if ($this->_var['action'] == 'order_list'): ?>
<style type="text/css">
  .order_box{
    margin: 10px 0;
  }
  .order_list table tr td{
    padding: 10px;
  }
  .order_status{
    height: 32px;
    width: 100%;
    background-color: #fff;
  }
  .order_status font{
    color: #fe0001;
  }
  .order_content{
    border-bottom: 1px solid #ddd;
  }
  .order_content img{
    width: 70px;
    height: 70px;
  }
  .order_content font{
    font-size: 12px;
    color: #666;
  }
  .order_handler{
    background-color: #fff;
    text-align: right;
  }
  .order_handler a{
    display: inline-block;
    margin-left: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 5px 10px;
  }
</style>
<section class="wrap order_list">
  <section class="order_box padd1 radius10 single_item">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
      <td class="order_status"></td>
    </tr>
    <tr>
      <td class="order_content"></td>
    </tr>
    <tr>
      <td class="order_handler"></td>
    </tr>
    <tr>
        <td class="order_tracking"></td>
    </tr>
  </table>
</section>
<a href="javascript:;" style="text-align:center" class="get_more"></a>
</section>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery.more.js"></script>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
jQuery(function($){
  $('.order_list').more({'address': 'user.php?act=async_order_list', amount: 3, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/loader.gif" /></div>'})
$(window).scroll(function () {
  if ($(window).scrollTop() == $(document).height() - $(window).height()) {
    $('.get_more').click();
  }
});
});
</script>
<?php endif; ?>


<?php if ($this->_var['action'] == 'bonus'): ?>
<link href="./themes/miqinew/css/style/css/order.css" rel="stylesheet" media="screen" />
<style type="text/css">
  body,html{background-color: #f5f5f5;}
  .cartlist{padding-bottom: 0;}
  .container-fluid{margin-bottom: 15px;}
  .bounslist{
    width: 100%;
    padding: 10px;
  }
  .bounslist >div{
    width: 100%;
    background-color: #fff;
    overflow: hidden;
    border-radius: 3px;
  }
  .bounsnum{
    padding: 15px;
    background-position: center;
    position: relative;
  }
  .bounsnum i{
    display: block;
    position: absolute;
    left: -10px;
    top: 40%;
    width: 20px;
    height: 20px;
    background-color: #fff;
    border-radius: 50%;
  }
  .bounsnum span{
    display: block;
    line-height: 34px;
    text-align: center;
    color: #fff;
    font-size: 100%;
  }
  .bounsnum span.price{
    font-weight: bold;
    font-size: 18px;
  }
  .new .bounsnum{
    background-image: url('./themes/miqinew/css/style/css/image/bouns01.png');
  }
  .used .bounsnum{
    background-image: url('./themes/miqinew/css/style/css/image/bouns02.png');
  }
  .old .bounsnum{
    background-image: url('./themes/miqinew/css/style/css/image/bouns00.png');
  }
  .bounsdetail p{
    line-height: 32px;
    color: #666;
  }
</style>
<div class="container-fluid">
  <div class="wrapper">
    <div class="container cartlist">
      <a href="flow.php?step=cart">商品(<em>0</em>)
      </a><a class="active" href="">优惠券(<em><?php echo count($this->_var['bonus']); ?></em>)</a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="wrapper">
  <?php if ($this->_var['bonus']): ?>
  <?php $_from = $this->_var['bonus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <div class="bounslist">
      <div class="<?php if ($this->_var['item']['status'] == '未使用'): ?>new<?php elseif ($this->_var['item']['status'] == '已使用'): ?>used<?php elseif ($this->_var['item']['status'] == '已过期'): ?><?php endif; ?>">
          <div class="col-xs-4 bounsnum">
            <span>满<?php echo $this->_var['item']['min_goods_amount']; ?>立减</span>
            <span class="price">￥<?php echo $this->_var['item']['type_money']; ?></span>
            <i></i>
          </div>
          <div class="col-xs-8 bounsdetail">
            <p>优惠编码：<?php echo $this->_var['item']['bonus_sn']; ?></p>
            <p>使用平台：全场可用</p>
            <p>使用期限：<?php echo $this->_var['item']['use_startdate']; ?>-<?php echo $this->_var['item']['use_enddate']; ?></p>
          </div>
      </div>
    </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
   <!--  <div class="bounslist">
      <div class="used">
          <div class="col-xs-4 bounsnum">
            <span>满100立减</span>
            <span class="price">￥50</span>
            <i></i>
          </div>
          <div class="col-xs-8 bounsdetail"></div>
      </div>
    </div>
    <div class="bounslist">
      <div class="old">
          <div class="col-xs-4 bounsnum">
            <span>满100立减</span>
            <span class="price">￥50</span>
            <i></i>
          </div>
          <div class="col-xs-8 bounsdetail"></div>
      </div>
    </div> -->

  </div>
</div>

<?php endif; ?>

 
<?php if ($this->_var['action'] == 'order_tracking'): ?>
<div class="fullscreen">
<div class="blank"></div>
<div data-role="content" class="smart-result">
  <div class="content-primary">
    <table id="queryResult" cellpadding="0" cellspacing="0"></table>
  </div>
</div>
<script type="text/javascript">
jQuery(function($){
  var resultJson = eval('(<?php echo $this->_var['trackinfo']; ?>)');
  var resultTable = $("#queryResult");
  resultTable.empty();
  if(resultJson.status == 200) { //成功
    var resultData = resultJson.data;
    for (var i = resultData.length - 1; i >= 0; i--) {
      var className = "";
      if(i%2 == 0){
        className = "even";
      }else{
        className="odd";
      }
      if(resultData.length == 1){
        if(resultJson.ischeck == 1){
          className += " checked";
        }else{
          className += " wait";
        }
      }else if(i == resultData.length - 1){
        className += " first-line";
      }else if(i == 0){
        className += " last-line";
      if(resultJson.ischeck == 1){
        className += " checked";
      }else{
        className += " wait";
      }
    }

    var index = resultData[i].ftime.indexOf(" ");
    var result_date = resultData[i].ftime.substring(0,index);
    var result_time = resultData[i].ftime.substring(index+1);

    var s_index = result_time.lastIndexOf(":");
    result_time = result_time.substring(0,s_index);

    resultTable.append("<tr class='" + className + "'><td class='col1'><span class='result-date'>" + result_date + "</span><span class='result-time'>" + result_time + "</span></td><td class='colstatus'></td><td class='col2'><span>" + resultData[i].context + "</span></td></tr>");
    }
    $("body").animate({scrollTop: "1000px"}, 1000);
  }else if(resultJson.status == 400){
    resultTable.append("<tr><td>订单暂未发货，请稍后再来查询</td></tr>");       
  }else{
    resultTable.append("<tr><td>"+ resultJson.message +"</td></tr>");       
  }
})
</script>
</div>
<?php endif; ?> 
 