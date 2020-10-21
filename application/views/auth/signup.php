<div class="container mt-5">
    <div class="row">
        <div class="col-lg-5 mt-5 mx-auto">
            <div class="card border-0">
            <div class="card-body text-center">
                <h4>Create a noon account</h4>
                <p class="small">Already have an account?<a href="<?= base_url('auth/login'); ?>" class="text-info">sign In</a></p>
                <form action="<?= base_url('auth/signUp'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class=" form-control rounded-0  border-0 shadow-sm" placeholder="Name" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class=" form-control rounded-0  border-0 shadow-sm" placeholder="Contact" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class=" form-control rounded-0  border-0 shadow-sm" placeholder="Email id" id="">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-0  border-0 shadow-sm" placeholder="Password" id="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create an account" class="btn rounded-0 shadow-sm btn-primary btn-block">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<style>
    .btn:hover{
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .form-control:hover{
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .btn, .form-control{
        transition:all .3s linear;
    }
</style>
