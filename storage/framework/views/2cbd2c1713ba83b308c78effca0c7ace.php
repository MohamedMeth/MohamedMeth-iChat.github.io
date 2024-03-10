<?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\m2364\OneDrive\Bureau\Laravel\iChat\resources\views/shared/success.blade.php ENDPATH**/ ?>