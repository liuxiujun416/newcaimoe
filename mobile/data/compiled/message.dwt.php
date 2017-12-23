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
  <script src="./themes/miqinew/css/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
<link href="./themes/miqinew/css/style/css/register.css" rel="stylesheet" media="screen" />
 
  <style>
  body,html{background-color: #f5f5f5;}
	
  <?php if ($this->_var['step'] == 'login'): ?>
  #stepsuccess{
    font-size: 14px;
    background-position: 10%;
    background-size: 50px;
  }

  .resetpwd span{
    margin: 0;
    padding: 20px 20px 20px 25%;
    line-height: 27px;
  }
  <?php endif; ?> 
 </style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="container-fluid">
  <div class="wrapper">
    <div class="resetpwd">
      <span id="stepsuccess">
        <label><?php echo $this->_var['message']['content']; ?></label>
        <?php if ($this->_var['message']['url_info']): ?> 
        <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
        <font style="display:block;font-size: 14px;margin: 0;"><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></font>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?> 
      </span>
    </div>
    <div class="register">
      <div class="line noline">
        <a class="btn" onClick="javascript:history.back();"> 返回 </a>
      </div>
    </div>
  </div>
</div>

<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
</html>
