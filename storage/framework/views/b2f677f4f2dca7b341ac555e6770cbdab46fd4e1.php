

<?php $__env->startSection('title','E-SHOP || Rastrear pedido'); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>">Inicio<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Rastrear pedido</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Para rastrear su pedido, ingrese su ID de pedido en el cuadro a continuación y presione el botón "Seguir". Esto se le proporcionó en su recibo y en el correo electrónico de confirmación que debería haber recibido.</p>
            <form class="row tracking_form my-4" action="<?php echo e(route('product.track.order')); ?>" method="post" novalidate="novalidate">
              <?php echo csrf_field(); ?>
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your order number">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Rastrear pedido</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\websites\laravel\Advance-Ecommerce-in-laravel-7\resources\views/frontend/pages/order-track.blade.php ENDPATH**/ ?>