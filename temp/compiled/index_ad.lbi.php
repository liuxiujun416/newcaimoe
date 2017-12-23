<link rel="stylesheet" href="themes/new/style/css/amazeui.swiper.min.css"/>
<style>
.swiper-container {
    width: 100%;
    height: auto;
}
.swiper-pagination{text-align: right;padding-right: 150px;}
.swiper-pagination-bullet{width: 10px;height: 10px;}
.swiper-pagination-bullet-active{background-color: #333;}
.swiper-button-next, .swiper-button-prev{width: 30px;height: 30px;}
.swiper-button-prev{background-color: #666;border-radius: 50%;background-size: 30%;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
.swiper-button-next{background-color: #666;border-radius: 50%;background-size: 30%;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
}
.bannerlist span{
	position: absolute;
	right: 120px;
	bottom: 50px;
	display: block;
	border: 1px solid #333;
	padding: 10px 20px;
}
</style>
<script src="themes/new/style/js/amazeui.swiper.min.js" type="text/javascript"></script>
<?php if ($this->_var['index_ad'] == 'sys'): ?>
	
<?php elseif ($this->_var['index_ad'] == 'cus'): ?>

  <?php if ($this->_var['ad']['ad_type'] == 0): ?>
  
  <?php elseif ($this->_var['ad']['ad_type'] == 1): ?>
  
  <?php elseif ($this->_var['ad']['ad_type'] == 2): ?>
  
  <?php elseif ($this->_var['ad']['ad_type'] == 3): ?>
  <?php endif; ?>
  
<?php else: ?>
<?php endif; ?>

<div class="banner clearfix">
	
	<div class="swiper-container" id="mySwiper">
	    
	    <div class="swiper-wrapper">
	        
			<?php 
$k = array (
  'name' => 'ads',
  'id' => '40',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	    </div>
	    
	    <div class="swiper-pagination"></div>

	    
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
      $('#mySwiper').swiper({
	    pagination: '#mySwiper .swiper-pagination',
	    nextButton: '#mySwiper .swiper-button-next',
	    prevButton: '#mySwiper .swiper-button-prev',
	    slidesPerView: 1,
	    paginationClickable: true,
	    spaceBetween: 30,
	    loop: true
	  });
	});
</script>

<div class="ad clearfix">
	<div class="container">
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '41',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	<?php 
$k = array (
  'name' => 'ads',
  'id' => '42',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
	</div>
</div>
