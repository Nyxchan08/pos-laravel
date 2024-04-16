
<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <form action="/user/update/<?php echo e($user->user_id); ?>" method="post" class="row g-3" style="margin: 2% 5%">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="col-md-4">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo e($user->first_name); ?>">
        </div>
        <div class="col-md-2">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?php echo e($user->middle_name); ?>">
        </div>
        <div class="col-md-4">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo e($user->last_name); ?>">
        </div>
        <div class="col-md-2">
            <label for="suffix_name" class="form-label">Suffix Name</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="<?php echo e($user->suffix_name); ?>">
        </div>
        <div class="col-md-6 col-lg-2">
          <label for="birth_date" class="form-label">Birth Date</label>
          <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo e($user->birth_date); ?>">
      </div>
      <div class="col-md-6 col-lg-2">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id">
                <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gender->gender_id); ?>" <?php if($user->gender_id == $gender->gender_id): ?> selected <?php endif; ?>><?php echo e($gender->gender); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>  
    
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo e($user->address); ?>">
        </div>
        <div class="col-md-6">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo e($user->contact_number); ?>">
        </div>
        <div class="col-md-6">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address" value="<?php echo e($user->email_address); ?>">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo e($user->username); ?>">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/users" class="btn btn-outline-danger">Cancel</a>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/user/edit.blade.php ENDPATH**/ ?>