<div class="container-fluid">
  <form method="GET" class="sort" name="listform">
    <div class="typebar">
      <div class="col-xs-4 col-sm-4">
        <a class="<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>active<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=DESC&keywords=<?php echo $this->_var['keywords']; ?>#goods_list&"><span>默认</span><i class="down"></i></a>
      </div>
      <div class="col-xs-4 col-sm-4">
        <a class="line <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>active<?php else: ?>default<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><span>价格</span>
          <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?><i class="arrow"></i>
          <?php elseif ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?><i class="down"></i>
          <?php else: ?><i class="arrow"></i><i class="down"></i><?php endif; ?>
        </a>
      </div>
      <div class="col-xs-4 col-sm-4">
        <a class="<?php if ($this->_var['pager']['sort'] == 'sales_count' && $this->_var['pager']['order'] == 'DESC'): ?>active<?php endif; ?>" href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_count&order=DESC&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><span>销量</span><i class="arrow"></i></a>
      </div>
    </div>
    <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
    <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
    <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
    <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
    <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
    <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
    <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
    <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
    <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
</div>

<?php if ($this->_var['goods_list']): ?>
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
  <div class="container-fluid">
      <div class="wrapper">
        <div class="tehui">
          <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['item']['iteration']++;
?>
          <div class="col-xs-6 col-sm-6">
            <div class="prolist">
              <div class="prothumb">
                <a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['item']['goods_thumb']; ?>g" alt=""></a>
              </div>
              <div class="prodesc">
                <a class="producttitle" href="<?php echo $this->_var['item']['url']; ?>" title=""><?php echo $this->_var['item']['goods_name']; ?></a>
                <p class="proprice">
                  <span>
                    <?php if ($this->_var['item']['promote_price'] != ""): ?> 
                    <?php echo $this->_var['item']['promote_price']; ?>
                    <?php else: ?> 
                    <?php echo $this->_var['item']['shop_price']; ?>
                    <?php endif; ?> 
                    <em><?php echo $this->_var['item']['market_price']; ?></em>
                  </span>
                  <a href="<?php echo $this->_var['item']['url']; ?>"></a>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
      </div>
    </div>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php else: ?>
<div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
  <p style="text-align:center;font-size: 16px;">找不到匹配条件的商品哦~ ~</p>
</div>
<?php endif; ?>