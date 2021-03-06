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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
<script src="http://www.caimoe.com/themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?php if ($this->_var['action'] == "login"): ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>
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
      alert(username_empty);
      return false;
    }
    if (Utils.isEmpty(frm.elements['password'].value)) {
      alert(password_empty);
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
    <form action="flow.php?step=login" method="post" name="loginForm" class="theForm" id="loginForm" onsubmit="return checkLoginForm(this)" autocomplete="off">
      <div class="login">
        <div class="line">
          <span>
            <i class="icon icon-user"></i>
            <input placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>" name="username" type="text"  class="inputBg" id="username" />
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
          <a class="fr" href="user.php?act=qpassword_name">忘记密码?</a>
        </div>
        <div class="line noline">

          <input name="act" type="hidden" value="signin" />

          <a class="btn" onclick="$('#loginForm').submit();">登录</a>
          <div><a class="fr" style="margin-top: 10px;" href="user.php?act=register">手机快速注册>></a></div>
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
<?php endif; ?>

<?php if ($this->_var['action'] == "register"): ?>
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />
<style type="text/css">
  .register .line label{width: 56px; font-size: 14px;}
  .register .line input.btn {
    width: 100%;
    height: 40px;
    line-height: 27px;
    text-align: center;
    display: block;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
  }
  .register .line input.getcode {
    width: 100px;
    position: absolute;
    right: 20px;
    top: 0;
  }
</style>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="container-fluid">
  <div class="wrapper">  
    <form action="user.php" method="post" class="formUser" name="formUser" onsubmit="return register2();" autocomplete="off">
      <input type="hidden" name="flag" id="flag" value="register" />
      <div class="register">
        <!-- <div class="line">
          <label>用户名</label>
          <span><input type="text" name="username" id="username" value="" placeholder="" /></span>
        </div> -->
        <div class="line">
          <label>手机号</label>
          <span><input type="text" name="mobile" id="mobile_phone" value="" placeholder="" /></span>
        </div>
        <div class="line">
          <label>密码</label>
          <span><input type="password" name="password" id="mobile_pwd" value="" placeholder="" /></span>
        </div>

        <div class="line">
          <label>验证码</label>
          <span><input type="text" name="mobile_code" id="mobile_code" value="" placeholder="" /></span>
          <input type="button" class="btn getcode" id="zphone" name="sendsms" onClick="sendSms();" value="获取验证码" />
        </div>
        <div class="line noline">
          <input name="act" type="hidden" value="act_register" />
          <input name="enabled_sms" type="hidden" value="1" />
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <a class="btn" onclick="$('.formUser').submit()">提交注册申请</a>
        </div>
        <div class="line noline">
          <span><input id="agreement" name="agreement" type="checkbox" value="1"> 我已看过并接受<a href="article.php?type=2">《用户协议》</a></span>
          <span><a class="fr" href="user.php?act=login">已有账号，登录>> </a></span>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/sms.js"></script>
<?php endif; ?>

<?php if ($this->_var['action'] == "qpassword_name"): ?>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />
<style type="text/css">
  .register h1{text-align: center; font-size: 18px; padding: 15px;}
  .register .line label{width: 56px; font-size: 14px;}
  .register .line input{font-size: 14px;color: #666;}
  .register .line input.btn {
    width: 100%;
    height: 40px;
    line-height: 27px;
    text-align: center;
    display: block;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
  }
  .register .line input.getcode {
    width: 100px;
    position: absolute;
    right: 20px;
    top: 0;
  }
  .register .line .notice{line-height: 27px; color: #fd4565;}
  .register{display: none; opacity: 0;}
  .register.active{display: block; opacity: 1;}
</style>


<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?>
<div class="container-fluid">
  <div class="wrapper">
    <form method="POST" autocomplete="off" class="registerform">
      <div class="register step1 active">
        <h1>找回密码</h1>
        <div class="line">
          <label>手机号</label>
          <span><input name="mobile_phone" type="text" placeholder="请输入注册的手机号" id="mobile_phone" onblur="checkMobileExist(this.value);" size="30"/></span>
          <p class="notice" id="mobile_notice"></p>
        </div>
        <div class="line">
          <label>验证码</label>
          <span><input type="text" name="smscode" id="smscode" placeholder="请输入短信验证码" /></span>
          <input type="button" class="btn getcode" id="zphone" onclick="sendSms();" value="获取验证码">
          <p class="notice" id="mobile_code_notice"></p>
        </div>
        <div class="line noline">
          <input type="button" class="btn regsubmit" id="step2" onclick="findPwd(2);" value="下一步" />
        </div>
      </div>

      <div class="register step2">
        <h1>重置密码</h1>
        <div class="line">
          <label>新密码</label>
          <span><input type="password" name="new_password" id="new_password" placeholder="请输入新密码" /></span>
        </div>
        <div class="line">
          <label>确认密码</label>
          <span><input type="password" name="confirm_password" id="confirm_password" placeholder="确认新密码" /></span>
        </div>
        <div class="line noline">
          <p class="notice" id="password_notice"></p>
          <input type="hidden" name="" id="sms_mobile_phone" value="" />
          <input type="hidden" name="" id="uid" value="" />
          <input type="button" class="btn regsubmit" id="step3" onclick="findPwd(3);" value="下一步" />
        </div>
      </div>

      <div class="register resetpwd step3">
        <span id="stepsuccess">
          <label>密码修改成功!</label>
          <font style="display:block;font-size: 14px;margin: 0;">下次登录时请使用新密码登录</font>
        </span>
        <div class="line noline">
          <a class="btn" href="user.php?act=login">完成</a>
        </div>
      </div>

    </form>
  </div>
</div>

<script type="text/javascript">
  function sendSms(){
    var mobile = $('#mobile_phone').val();
    var reg = /^[\d|\-|\s]+$/;
      
    if(mobile.length > 0 && reg.test(mobile)){
      RemainTime();
      $.post("/user.php?act=send", {"mobile": mobile},function(result){
        if (result.code==2){
          //alert('手机验证码已经成功发送到您的手机');
        }else{
          if(result.msg){
            alert(result.msg);
          }else{
            alert('手机验证码发送失败');
          }
        }
      }, "json");
    }else{
      document.getElementById('mobile_notice').innerHTML = '*请填写手机号码';
      return false;
    }
  }

  var iTime = 59;
  var Account;
  function RemainTime(){
    document.getElementById('zphone').disabled = true;
    var iSecond,sSecond="",sTime="";
    if (iTime >= 0){
      iSecond = parseInt(iTime%60);
      if (iSecond >= 0){
        sSecond = iSecond + "秒";
      }
      sTime=sSecond;
      if(iTime==0){
        clearTimeout(Account);
        sTime='获取验证码';
        iTime = 59;
        document.getElementById('zphone').disabled = false;
      }else{
        Account = setTimeout("RemainTime()",1000);
        iTime=iTime-1;
      }
    }else{
      sTime='没有倒计时';
    }
    document.getElementById('zphone').value = sTime;
  }

  //
  function checkMobileExist(mobile){
    var mobile_phone = $('#mobile_phone').val();
    var reg = /^[\d|\-|\s]+$/;
      if (reg.test(mobile_phone))
      {
        Ajax.call( '/user.php?act=check_mobile', 'mobile=' + mobile, function(result){

          if(result == 'false'){
              document.getElementById('mobile_notice').innerHTML = '';
          }else{
              document.getElementById('mobile_notice').innerHTML = '* 手机号不存在';
          }
        } , 'GET', 'TEXT', true, true );
    }else{
          document.getElementById('mobile_notice').innerHTML = '* 手机号格式不正确';
    }
  }
  function findPwd(step){
    msg = '';
    if(step == 2){
      var smscode = $('#smscode').val();
      if(smscode == ''){
        $('#mobile_code_notice').html('* 验证码不能为空');
        return false;
      }
      document.getElementById('step'+step).disabled = 'disabled';
      Ajax.call( '/user.php?act=checkSmsCode', 'smscode=' + smscode, function(result){
          result = eval('('+result+')');
          if(result.code == 2){
          nextStep(step);
          $('#sms_mobile_phone').val(result.data.mobile_phone);
          $('#uid').val(result.data.user_id);
          }else{
            $('#mobile_code_notice').html(result.msg);
            document.getElementById('step'+step).disabled = '';
            return false;
          }
        } , 'GET', 'TEXT', true, true );
    }else if(step == 3){

      var password = document.getElementById('new_password').value;
      var confirm_password = document.getElementById('confirm_password').value;
      var sms_mobile_phone = document.getElementById('sms_mobile_phone').value;
      var uid = document.getElementById('uid').value;

      var errorMsg = '';
      if (password.length == 0)
      {
        errorMsg += password_empty + '\n';
      }

      if (confirm_password.length == 0)
      {
        errorMsg += confirm_password_invalid  + '\n';
      }

      if (confirm_password != password)
      {
        errorMsg += confirm_password_invalid  + '\n';
      }

      if (errorMsg.length > 0){
        //alert(errorMsg);
        $('#password_notice').html(errorMsg);
        return false;
      }else{
        document.getElementById('step'+step).disabled = 'disabled';
        $.post( '/user.php?act=resetPwd', 
            {"new_password": password,"confirm_password": confirm_password, "sms_mobile_phone": sms_mobile_phone, "uid": uid}, 
            function(result){

                if(result.code == 2){
                nextStep(step);
                }else{
                  alert(result.msg);
                  document.getElementById('step'+step).disabled = '';
                  return false;
                }
          } , 'json' );

      }
    }
  }
  function nextStep(step){
      $('.step' + step).addClass('active').siblings().removeClass('active');
  }
</script>
<?php endif; ?>

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>