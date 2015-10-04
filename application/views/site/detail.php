<?php $this->view("header"); ?>

<div class="page-header">
	<h1>Image 1</h1>
</div>

<div class="row">
	<div class="col-md-8 col-xs-12">
		<div class="thumbnail">
	      <img src="<?php echo base_url(); ?>assets/uploads/Image+1.jpg" alt="Image 1">			      
	    </div>
	    <div class="row">
	    	<div class="col-md-3">
	    		<div class="thumbnail">
			      <a href="detail.html"><img src="<?php echo base_url(); ?>assets/uploads/Image+2.jpg" alt="Image 2"></a>
			    </div>
	    	</div>
	    	<div class="col-md-3 col-md-offset-6">
	    		<div class="thumbnail">
			      <a href="detail.html"><img src="<?php echo base_url(); ?>assets/uploads/Image+3.jpg" alt="Image 3"></a>
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