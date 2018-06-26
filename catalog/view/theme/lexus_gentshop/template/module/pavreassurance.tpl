<?php

if (!empty($pavreassurances)) { ?>
		<div class="box-module-pavreassurances <?php echo $prefix_class ?>">
				<div class="row box-outer">
						<?php $i=1?>
						<?php foreach ($pavreassurances as $reassurance) { ?>
							<div class="col-md-4 col-sm-4 col-xs-12 column">
								<div class="reassurances-center <?php echo isset($reassurance['reassurance_prefixclass'])?$reassurance['reassurance_prefixclass']:""?>">
									<span class="icon-name <?php echo $reassurance['select_icon'] ?> hidden"></span>
									<div class="description">
										<h4><?php echo $reassurance['title']; ?></h4>
										<?php echo htmlspecialchars_decode($reassurance['caption']); ?>
										<!-- Button trigger modal -->
										<button type="button" class="icon-read-more" data-toggle="modal" data-target="#myModal<?php echo $i;?>"><i class="fa fa-plus"></i></button>
										<div class="mask" style="display:none;">
											<?php echo htmlspecialchars_decode($reassurance['detail']); ?>
										</div>
									</div>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="myModal<?php echo $i;?>" tabindex="-1" role="dialog" aria-hidden="true">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">							        
								        <span class="icon-name fa <?php echo $reassurance['select_icon'] ?>"></span>
								        <div class="description">
									        <h4><?php echo $reassurance['title']; ?></h4>
									        <?php echo htmlspecialchars_decode($reassurance['caption']); ?>
									    </div>
								      </div>
								      <div class="modal-body">
								       		<?php echo htmlspecialchars_decode($reassurance['detail']); ?>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
							
							<?php $i++;?>
						<?php } ?>
				</div>
		</div>
	<?php } ?>
