<?php echo $__env->make('include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="content-list" style="margin-top: -4px;">
    <div class="table-responsive" style="height: 590px; width:100%; overflow: auto; ">
        <table class="table table-bordered">
            <thead class="sticky-header">
                <tr>
                    <th scope="col">Gender</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Date Updated</th>
                    <th scope="col" style="width:16%; text-align:center;">Action</th>
                </tr>
            </thead>
            <?php echo $__env->make('include.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <tbody>
                
                <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                    <tr>
                        <td><?php echo e($gender->gender); ?></td>
                        <td><?php echo e($gender->created_at); ?></td>
                        <td><?php echo e($gender->updated_at); ?></td>
                        <td style="text-align: right;">
                            <div class="btn-group">
                                <a href="/gender/show/<?php echo e($gender->gender_id); ?>" class="btn btn-outline-primary">View</a>
                                <a href="/gender/edit/<?php echo e($gender->gender_id); ?>" class="btn btn-outline-warning">Edit</a>
                                <a href="#" class="btn btn-outline-danger delete-btn" data-id="<?php echo e($gender->gender_id); ?>" data-bs-toggle="modal" data-bs-target="#deleteModal-<?php echo e($gender->gender_id); ?>">Delete</a>

                            </div>
                        </td>
                    </tr>
                    <?php echo $__env->make('gender.delete', ['gender_id' => $gender->gender_id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .sticky-header th {
    position: sticky;
    top: 0;
    background-color: #ffffff;
    z-index: 1;
}

</style>


<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteForm = document.querySelectorAll('.delete-form');

    deleteForm.forEach(form => {
        form.addEventListener('submit', function (e) {
        });
    });
});

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/gender/index.blade.php ENDPATH**/ ?>