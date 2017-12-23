<!DOCTYPE html>
<html>
    <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $this->_var['page_title']; ?>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection" content="telephone=no" />

    <script src="http://www.caimoe.com/themes/new/style/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="./themes/miqinew/css/style/css/common.css" rel="stylesheet" media="screen" />
    <link href="./themes/miqinew/css/style/css/index.css" rel="stylesheet" media="screen" />
    <link href="./themes/miqinew/css/style/css/swiper.min.css" rel="stylesheet" />
     
    <style>
    .swiper-container {
        width: 100%;
        height: 100%;
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
        text-align: right;
        padding-right: 20px;
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
    .swiper-slide img{width: 100%;}
    .titlebar{
        width: 100%;
        margin: 15px 0;
        height: 50px;
        overflow: hidden;
    }
    .titlebar img{
        width: 100%;
    }
    .tehui .prothumb img{
        height: 240px;
        overflow: hidden;
    }
    </style>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="container-fluid">
    <div class="banner">
        
        <div class="swiper-container">
            <div class="swiper-wrapper"><?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
            
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="./themes/miqinew/css/style/js/swiper.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true
});
</script>

<div class="container-fluid">
    <div class="usetype">
        <a class="used"><span>日抛</span></a>
        <a class="usem"><span>月抛</span></a>
        <a class="usey"><span>半年抛</span></a>
        <a class="usefy"><span>年抛</span></a>
    </div>
</div>

<div class="container-fluid">
    <div class="wrapper">
        
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '4',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '7',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="tehui"><?php 
$k = array (
  'name' => 'ads',
  'id' => '10',
  'num' => '6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $.get('/mobile/index.php?act=cat_rec','',function(data){
            data = eval('('+data+')');
            console.log(data.content)
        });
    })
</script>

<div class="container-fluid">
    <div class="wrapper">
        <!-- <h1 class="title">限时特惠</h1> -->
        
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '5',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '8',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="tehui"><?php 
$k = array (
  'name' => 'ads',
  'id' => '11',
  'num' => '6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
</div>

<div class="container-fluid">
    <div class="wrapper">
        <!--<h1 class="title">新款商品</h1> -->
        
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '6',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <?php 
$k = array (
  'name' => 'ads',
  'id' => '9',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
        <div class="tehui"><?php 
$k = array (
  'name' => 'ads',
  'id' => '12',
  'num' => '6',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    </div>
</div>

<div class="container-fluid">
    <div class="wrapper">
        <div class="footer-logo">
            <span><img src="./themes/miqinew/css/style/images/logo.png" alt="" /></span>
            <span>彩眸（Cai Moe）</span>
        </div>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>