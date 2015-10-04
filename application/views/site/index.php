<?php $this->view("header"); ?>

<div class="row">

  <?php if ($query->num_rows()): foreach ($query->result() as $row): ?>

    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="thumbnail">
        <?php
          $thumbnail = empty($row->thumbnail) ? $row->filename : $row->thumbnail;
        ?>

        <a href="<?php echo site_url("site/detail/" . $row->id) ?>"><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $thumbnail; ?>" alt="<?php echo $row->title ?>"></a>
        <div class="thumbnail-caption">
          <h4><a href="<?php echo site_url("site/detail/" . $row->id) ?>"><?php echo $row->title; ?></a></h4>
        </div>
      </div>
    </div><!-- /.col-lg-3.col-md-4.col-sm-6 -->

  <?php endforeach; endif; ?>

</div><!-- ./row -->

<nav class='text-center'>
	<ul class="pagination">
		<li>
			<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li>
			<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo</span>
			</a>
		</li>
	</ul>
</nav>

<?php $this->view("footer"); ?>