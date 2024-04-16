<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>


<div class="container">
    <form action="/user/store" method="post" class="row g-3" style="margin: 2% 5%">
        <?php echo csrf_field(); ?>
        <div class="col-md-4">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="col-md-2">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name">
        </div>
        <div class="col-md-4">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class="col-md-2">
            <label for="suffix_name" class="form-label">Suffix Name</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name">
        </div>
        <div class="col-md-6 col-lg-2">
          <label for="birth_date" class="form-label">Birth Date</label>
          <input type="date" class="form-control" id="birth_date" name="birth_date">
      </div>
      <div class="col-md-6 col-lg-2">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id">
                <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gender->gender_id); ?>"><?php echo e($gender->gender); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>  
    
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="col-md-6">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number">
        </div>
        <div class="col-md-6">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-outline-success">Submit</button>
            <a href="/users" class="btn btn-outline-danger">Cancel</a>
        </div>
    </form>
</div>


  <div class="progress mt-3" style="margin: 10% 10%;">
    <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
        const formInputs = document.querySelectorAll('input, select');
        const progressBar = document.getElementById('progress-bar');
        
        formInputs.forEach(input => {
            input.addEventListener('input', function () {
                let filledInputs = 0;
                formInputs.forEach(input => {
                    if (input.value !== '') {
                        filledInputs++;
                    }
                });

                const progress = (filledInputs / formInputs.length) * 100;
                progressBar.style.width = progress + '%';
                progressBar.textContent = Math.round(progress) + '%'; 
                progressBar.setAttribute('aria-valuenow', progress);
            });
        });
    });
</script>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/user/create.blade.php ENDPATH**/ ?>