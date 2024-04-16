<?php if(session()->has('message_success')): ?>
    <div class="alert alert-success" role="alert" id="successMessage">
        <?php echo e(session('message_success')); ?>

    </div>
    <script>
        setTimeout(function () {
            document.getElementById('successMessage').style.display = 'none';
        }, 2000);
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\example-app\resources\views/include/message.blade.php ENDPATH**/ ?>