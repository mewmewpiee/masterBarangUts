<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-black">
        <div class="container">
            <a href="/" class="navbar-brand mb-0 h1">
                <img class="img-fluid me-2" src="<?php echo e(Vite::asset('resources/images/logo-white.svg')); ?>" alt="logo" style="width: 40px;"> Binchilin
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('items.index')); ?>" class="nav-link active">Items List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>

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



</body>
</html>
<?php /**PATH E:\framework-uts\project-uts\resources\views/item/index.blade.php ENDPATH**/ ?>