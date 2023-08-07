<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make('admin.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .list-group-item.active {
            background-color: black;

        }
    </style>
</head>

<body>


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?php echo e(route('product.home')); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-profile dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('dashboard')); ?>" class="dropdown-item">
                        <i class="fa fa-user" aria-hidden="true"></i> MyProfile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">
                        <i class='fas fa-sign-out-alt'></i> Logout

                    </a>

            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- /.navbar -->

    <div class="container-fluid" style="min-height: 74vh;">
        <?php echo $__env->yieldContent('body'); ?>
    </div>
    <footer style="height: 100px;background: rgb(1, 1, 1);">

    </footer>
    <script type="text/javascript">
        window.baseUrl = "<?php echo e(URL::to('/')); ?>";
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', 'Success', {
                timeOut: 5000
            });
        <?php endif; ?>

        <?php if(session('error')): ?>
            toastr.error('<?php echo e(session('error')); ?>', 'Error', {
                timeOut: 5000
            });
        <?php endif; ?>
    </script>
    <?php echo $__env->make('admin.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/auth.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/profile.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Shoptoys\resources\views/layout/main-layout.blade.php ENDPATH**/ ?>