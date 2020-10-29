
    <div class="toast ml-auto rounded-0 border-0" role="alert" data-delay="2000" data-autohide="false" style="position: absolute; top: 130px; right: 20px; min-width:300px;min-heigth:100px;">
        <div class="toast-body" style='background:#00c851c4;'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light">Hey, there! This is a Bootstrap 4 toast. </p>
         </div>
    </div>


    <div class="toast ml-auto rounded-0 border-0 alert-success" role="alert" data-delay="2000" data-autohide="true" style="position: absolute; top: 200px; right: 20px; min-width:300px;">
        <div class="toast-body alert-success" style='background:#cc00009e;'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light">Hey, there! This is a Bootstrap 4 toast. </p>
         </div>
    </div>


<script>
// initialize and show Bootstrap 4 toast
$('.toast').toast('show');
</script>
