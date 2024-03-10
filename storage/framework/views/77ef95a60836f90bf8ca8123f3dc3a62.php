<h4> Share yours ideas </h4>
<div class="row">
    <form action="<?php echo e(route('ichat.create')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <textarea name="context" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <?php $__errorArgs = ['context'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class=" d-block fs-6 text-danger mt-1"> <?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
<?php /**PATH C:\Users\m2364\OneDrive\Bureau\Laravel\iChat\resources\views/shared/submit-ichat.blade.php ENDPATH**/ ?>