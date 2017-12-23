<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $this->_var['page_title']; ?>品牌分类搜索_彩眸商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script src="./themes/miqinew/css/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
<link href="./themes/miqinew/css/style/css/swiper.min.css" rel="stylesheet" />
<style>
  .searchbar{
    padding-bottom: 10px;
    margin: 10px 0;
  }
  .searchbar form{
    position: relative;
  }
  .searchbar input{
    width: 100%;
    border: none;
    border-radius: 5px;
    background-color: #eee;
    padding: 10px 40px 10px 10px;
    color: #666;
  }
  .searchbar .icon-search{
    position: absolute;
    top: 3px;
    right: 5px;
    width: 32px;
    height: 32px;
    display: block;
    background-image: url('./themes/miqinew/css/style/images/m-search2.png');
    background-repeat: no-repeat;
    background-size: 23px;
    background-position-y: center;
    z-index: 1;
  }
  .attrlist .menutype{
    padding-left: 0;
    border-right: 1px solid #ddd;
  }
  .attrlist .menutype a{
    display: block;
    width: 100%;
    font-size: 14px;
    padding: 10px;
    margin-bottom: 15px;
  }
  .attrlist .menutype a.active{
    border-left: 2px solid red;
  }
  #menubody{border-top: 1px solid #ddd; padding-bottom: 60px; margin-bottom: 80px;}
  .attrlist .menulist{
    padding: 10px;
  }
  .attrlist .menulist div{
    display: none;
    opacity: 0;
  }
  .attrlist .menulist div.active{
    display: block;
    opacity: 1;
  }
  .attrlist .menulist a{
    display: inline-block;
    padding: 10px;
    text-align: center;
    overflow: hidden;
  }
  .attrlist .menulist a span{    
    padding: 20px;
    background-color: #f5f5f5;
    width: 100%;
    max-height: 72px;
    overflow: hidden;
    font-size: 12px;
    display: block;
    text-align: center;
  }
</style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="container-fluid">
  <div class="col-xs-12 searchbar">
    <form action="search.php" method="post" id="searchForm" name="searchForm" autocomplete="off">
      <input type="search" name="keywords" id="keywordBox" autofocus="" value="" placeholder="请输入商品名称" />
      <a class="icon icon-search" type="submit" onclick="checkSearch();"></a>
    </form>
  </div>
</div>

<div class="container-fluid" id="menubody">
  <div class="attrlist">
    <div class="col-xs-4 menutype">
      <a class="active">美瞳效果</a>
      <a target="">颜色风格</a>
      <a target="">抛弃类型</a>
      <a target="">护理用品</a>
      <a target="">跨境淘淘</a>
      <a target="">美瞳攻略</a>
      <a target="">实体店</a>
      <a target="">更多品牌</a>

    </div>

    <div class="col-xs-8 menulist">
      <div class="active">
        <?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <?php if ($this->_var['list']['attr_id'] == '257'): ?>
        <?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <a class="col-xs-6"><span data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div>
        <?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <?php if ($this->_var['list']['attr_id'] == '256'): ?>
        <?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <a class="col-xs-6"><span data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div>  
        <?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <?php if ($this->_var['list']['attr_id'] == '221'): ?>
        <?php $_from = $this->_var['list']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <a class="col-xs-6"><span data-url="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></span></a>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div>
          <?php $_from = $this->_var['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['category']):
?>
          <a class="col-xs-6"><span data-url="<?php echo $this->_var['category']['url']; ?>"><?php echo $this->_var['category']['name']; ?></span></a>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  var menuH = $('#menubody').offset().top;
  var winH = $(window).height();
  $('.menutype').height(winH - menuH);

  $(function(){
    $('.menutype a').on('click',function(){
      $(this).addClass('active').siblings().removeClass('active');
      console.log($(this).index())
      $('.menulist>div').eq($(this).index()).addClass('active').siblings().removeClass('active');
    })

    $('.menulist a').on('click', function(){
      window.location.href = $(this).find('span').data('url');
    });
  })
  function checkSearch(){
    if(check('keywordBox')){
      $('form#searchForm').submit();
    }else{
      $('#searchForm input').focus();
    }
  }
</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>