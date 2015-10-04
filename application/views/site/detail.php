<?php $this->view("header"); ?>

<div class="page-header">
	<h1><?php echo $row->title; ?></h1>
</div>

<div class="row">
	<div class="col-md-8 col-xs-12">
		<div class="thumbnail">
	      <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $row->filename; ?>" alt="<?php echo $row->title; ?>">			      
	    </div>
	    <div class="row">
	    	<div class="col-md-3">
	    		<div class="thumbnail">
	    			<?php $thumbnail = $left_image->thumbnail ? $left_image->thumbnail : $left_image->filename ?>
			      <a href="<?php echo site_url("site/detail/" . $left_image->id) ?>"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $thumbnail; ?>" alt="Image 2"></a>
			    </div>
	    	</div>
	    	<div class="col-md-3 col-md-offset-6">
	    		<div class="thumbnail">
			      <?php $thumbnail = $right_image->thumbnail ? $right_image->thumbnail : $right_image->filename ?>
			      <a href="<?php echo site_url("site/detail/" . $right_image->id) ?>"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $thumbnail; ?>" alt="Image 2"></a>
			    </div>
	    	</div>
	    </div>
	</div>
	<div class="col-md-4 col-xs-12">
		<ul class="list-group">
		  <li class="list-group-item">
		    <i class="glyphicon glyphicon-eye-open"></i> 120 View
		  </li>
		  <li class="list-group-item">
		    <i class="glyphicon glyphicon-download"></i> 100 Download
		  </li>
		</ul>

		<a href='#' class="btn btn-lg btn-block btn-primary">Download</a>
	</div>
</div>

<?php $this->view("footer"); ?>