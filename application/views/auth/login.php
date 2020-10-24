<div class="container ">
    <div class="row">
        <div class="col-lg-5 mt-5 mx-auto">
            <div class="card border-0">
            <div class="card-body text-center">
                <h4 class="font-weight-light">Welcome back!</h4>
                <h4>Sign in to your account</h4>
                <p class="small">Don't have an account?<a href="<?= base_url('auth/signup'); ?>" class="text-info">sign up</a></p>
                <form action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="contact" class=" form-control rounded-0 shadow-sm" placeholder="Contact" id="">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control rounded-0 shadow-sm" placeholder="Password" id="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Sign in" class="btn rounded-0 shadow-sm btn-primary btn-block">
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
