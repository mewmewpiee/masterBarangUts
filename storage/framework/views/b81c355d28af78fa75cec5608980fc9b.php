<?php $__env->startSection('content'); ?>

    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-lg-6">
                <h3>Items List</h3>
            </div>
            <div class="col-lg-6">
                <a href="<?php echo e(route('items.create')); ?>" class="btn btn-secondary float-end">Input Items</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Item Description</th>
                            <th>Unit Items</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->item_code); ?></td>
                            <td><?php echo e($item->item_name); ?></td>
                            <td><?php echo e($item->item_price); ?></td>
                            <td><?php echo e($item->item_description); ?></td>
                            <td><?php echo e($item->unit->unit_name); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('items.edit', ['item' => $item->id])); ?>" class="btn btn-outline-warning btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                    <form action="<?php echo e(route('items.destroy', ['item' => $item->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-danger btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\framework-uts\masterBarangUts\resources\views/item/index.blade.php ENDPATH**/ ?>