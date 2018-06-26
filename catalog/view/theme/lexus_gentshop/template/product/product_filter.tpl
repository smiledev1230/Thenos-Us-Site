<?php $olang = $this->registry->get('language'); ?>
<div class="product-filter clearfix">
  <div class="display pull-left">
    <a id="grid-view" class="switcher active" data-toggle="tooltip" title="<?php echo $button_grid; ?>"><i class="fa fa-th"></i></a>
    <a id="list-view" class="switcher" data-toggle="tooltip" title="<?php echo $button_list; ?>"><i class="fa fa-th-list"></i></a>    
  </div>    
  <div class="filter-right clearfix pull-right">
     <div class="product-compare pull-right"><a href="<?php echo $compare; ?>" class="btn btn-default" id="compare-total"><?php echo $text_compare; ?></a></div>
      <div class="sort pull-right">
        <span  for="input-sort"><?php echo $text_sort; ?></span>
        <select class="form-control" id="input-sort" onchange="location = this.value;">
          <?php foreach ($sorts as $sorts) { ?>
          <?php if ($sorts['value'] == $sort . '-' . $order) { ?>
          <option value="<?php echo $sorts['href']; ?>" selected="selected"><?php echo $sorts['text']; ?></option>
          <?php } else { ?>
          <option value="<?php echo $sorts['href']; ?>"><?php echo $sorts['text']; ?></option>
          <?php } ?>
          <?php } ?>
        </select>
      </div>
     
      <div class="limit pull-right">
        <span  for="input-limit"><?php echo $text_limit; ?></span>
        <select id="input-limit" class="form-control" onchange="location = this.value;">
          <?php foreach ($limits as $limits) { ?>
          <?php if ($limits['value'] == $limit) { ?>
          <option value="<?php echo $limits['href']; ?>" selected="selected"><?php echo $limits['text']; ?></option>
          <?php } else { ?>
          <option value="<?php echo $limits['href']; ?>"><?php echo $limits['text']; ?></option>
          <?php } ?>
          <?php } ?>
        </select>
      </div>
     </div> 
   
</div> 
 
