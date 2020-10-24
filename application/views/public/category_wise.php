<style>
	.col-lg-8 h4 a:hover {
		text-decoration: none;
	}

</style>
<div class="container mt-5 pt-5">
	<?php if(!empty($product)): ?>
		<div class="row">
			<div class="col-lg-9">
				<?php foreach($product as $item): ?>
					<div class="row mb-4 shadow-sm post">
				<div class="col-lg-4 p-4">
					<img src="<?= base_url('assets/upload/'.$item->image); ?>" class="img-fluid w-75" alt=""
						style="height:150px;">
				</div>
				<div class="col-lg-8 p-3">
					<h4 class="text-truncate h5 text-muted"><a href="<?= base_url('home/product/'.$item->id);?>"
							class="stretched-link post-link" id="post-link"><?= $item->title; ?></a></h4>
					<p class="text-muted mt-n2 small">by <?= $item->brand; ?></p>
					<span class="d-flex">
						<h4 class="text-danger">₹ <?= $item->discount_price;?>.00</h4>
						<h6 class="text-dark mt-2 ml-3"> <del>₹ <?= $item->price; ?></del></h6>
					</span>
					<p class="text-muted small"><?= substr($item->summary,0,180);?></p>
				</div>
			</div>

			<?php endforeach; ?>
			
		</div>
		<div class="col-lg-3">
			<div class="widget ">
				<div class="bg-dark text-light">
					<h5 class="font-weight-light h6 text-light  px-4 py-2">Advertisement</h5>
				</div>
			</div>
		</div>
	</div>
	<?php  else: ?>
	
<div class="">
	<div class="container  mx-auto mt-5 pt-5 text-center">
		<h1>4<i class="fas fa-sad-cry"></i>4</h1>
		<h5 class="lead text-muted">Products Not Found</h5>
		<p class="small text-muted">Please try with another category or query</p>
	</div>
</div>

<?php endif;?>
</div>

