<style>
.card-footer{
    -webkit-box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
  -moz-box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
  box-shadow:0 -0.5rem 1.10rem rgba(0,0,0,.075)!important;
}
.border-dotted{
 border-style: dashed!important;
 border-top:2px rgb(0 0 0 / 50%);
 border-bottom:0;
 border-left:0;
 border-right:0;
}
@media (max-width: 1068px) {
    .col-lg-4{
        position:relative!important;
        bottom:0!important;
        right:0!important;
    }
}


</style>

<div class="container mt-5">
<?php if(!empty($items)): ?>
	<div class="row mb-5 ">
		<div class="col-lg-8">
			<div class="card rounded-0 shadow-sm mt-5">
            <div class="card-header bg-white h5">My Cart (<?= count($items); ?>)</div>
				<div class="card-body p-0 pb-0 px-3">
                <?php foreach($items as $item): ?>
                    <div class="row  mt-4 border-bottom">
                        <div class="col-lg-3 ">
                            <div class="h-50 w-100 mb-4">
                                <img src="<?= base_url('assets/upload/'.$item->image); ?>" class="img-fluid  w-100 " alt="">
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <h4 class="text-truncate h6" title="<?= $item->title; ?>"><?= $item->title; ?></h4>
                                <p class="text-muted small">black</p>
                                    <h4 class="h6">₹ <?= $item->discount_price; ?>/- <span class="small font-weight-light ml-3 text-muted"><del>₹ <?= $item->price; ?>/-</del></span></h4>                                 
                        </div>
                        <div class="col-lg-3">
                        <div class="box btn-group">
                            <a href="<?= base_url('user/minus/'.$item->item_id); ?>" class="btn border-0 btn-secondary rounded-0">-</a>
                            <a href="" class="btn btn-light  text-dark border disabled rounded-0"><?= $item->qty; ?></a>
                            <a href="<?= base_url('user/addToCart/'.$item->item_id); ?>" class="btn border-0 btn-secondary rounded-0">+</a>
                            </div>
                            <div class="box mt-3">
                                    <a href="<?= base_url('user/remove_item/'.$item->id); ?>" class="text-muted small"> <i class="fa fa-trash"></i>  Remove</a>
                                </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                
                <div class="clearfix"></div>
			</div>
		</div>
		<div class="col-lg-4" style="position:fixed; right:50px;z-index:-1;">
            <div class="card mt-5 rounded-0 shadow-sm ">
                <div class="card-header h5 bg-white text-muted">Order Summary</div>
                <div class="card-body">
                    <table class="table-md table table-borderless">
                        <tr>
                <td>Subtotal (<?php if(count($items) == 1 ): ?><?= count($items); ?> item) <?php else: ?><?= count($items); ?> items )<?php endif; ?></td>
                            <td>₹ <?php $sum= 0;   foreach($items as $i):   $sum+= $i->discount_price*$i->qty;  endforeach; echo $sum; ?></td>
                        </tr>
                        <tr class="">
                        <td class="pb-5">Shipping</td>
                        <td class="text-success pb-5">Free</td>
                        </tr>
                        <tr class="border-dotted">
                            <th >Total amount</th>
                            <th>₹<?php $sum= 0;   foreach($items as $i):   $sum+= $i->discount_price*$i->qty;  endforeach; echo $sum; ?></th>
                        </tr>
                    </table>
                </div>            
            </div>
        </div>
	</div>
    <?php else: ?>
        <div class="container pt-5">
<div class="row mt-5">
    <div class="col-lg-5 mx-auto">
    <h5 class="text-center">Your cart is empty</h5>
    </div>
</div>
</div>
<?php endif; ?>

</div>
                







