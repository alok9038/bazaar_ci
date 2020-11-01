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

<div class="container my-5">
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
		<div class="col-lg-4 mb-5" style="position:absolute; right:50px;">
            <div class="card mt-5 rounded-0 shadow-sm ">
                <div class="card-header h5 bg-white text-muted">Order Summary</div>
                <div class="card-body">
                    <table class="table-md table table-borderless">
                        <tr>
                            <td>Subtotal (<?php if(count($items) == 1 ): ?><?= count($items); ?> item) <?php else: ?><?= count($items); ?> items )<?php endif; ?></td>
                            <td>₹ <?php $sum= 0;   foreach($items as $i):   $sum+= $i->discount_price*$i->qty;  endforeach; echo $sum; ?></td>
                        </tr>
                        <tr>
                            <?php if(!empty($order)):?>
                            <td class="">Coupon Discount</td>
                            <td class="">- ₹<?= $order[0]->amount;?></td>
                            <?php endif;?>
                        </tr>
                        <tr class="">
                            <td >Shipping</td>
                            <td class="text-success pb-5">Free</td>
                        </tr>
                        <tr class="border-dotted">
                            <th class="">Total amount</th>
                            <?php if(!empty($order)):?>
                            <th class="">₹<?php $sum= 0;   foreach($items as $i):   $sum+= $i->discount_price*$i->qty-$order[0]->amount;  endforeach; echo $sum; ?></th>
                            <?php else: ?>
                            <th class="">₹<?php $sum= 0;   foreach($items as $i):   $sum+= $i->discount_price*$i->qty;  endforeach; echo $sum; ?></th>
                            <?php endif;?>
                        </tr>
                    </table>
                    <form action="<?= base_url('user/coupon'); ?>" class="mt-3" method="post">
                        <div class="input-group">
                            <input type="search" name="code" id="" placeholder="Enter coupon code" class="form-control rounded-0">
                            <div class="input-group-append">
                                <input type="submit" value="submit" class="btn btn-info rounded-0">
                            </div>
                        </div>
                    </form>
                    <?php if(!empty($order)):?>
           
                        <h6 class="mt-3 text-success"><a href="<?= base_url('user/coupon/'.$order[0]->order_id); ?>" class="text-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                            </svg></a>  <strong><?= $order[0]->code;?></strong> <small>Applied</small>
                        </h6>
                    <?php endif;?>
                    <a href="" class="btn btn-success rounded-0  btn-block shadow mt-4">Checkout</a>
                </div>            
            </div>
        </div>
        
	</div>
    <?php else: ?>
        <div class="container pt-5">
<div class="row mt-5">
    <div class="col-lg-5 mx-auto">
    <h6 class="text-center"><img src="<?= base_url('assets/image/cart.png'); ?>" style="width:60%" alt=""></h6>
    <h5 class="text-center font-weight-light">Your cart is empty!</h5>
    <p class="text-center small">Add items to it now.</p>
    </div>
</div>
</div>
<?php endif; ?>

</div>
                







