
<!-- Start Shop Newsletter  -->
<section class="shop-newsletter section">
    <div class="container">
        <div class="inner-top">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <!-- Start Newsletter Inner -->
                    <div class="inner">
                        <h4>Suscríbete</h4>
                        <p> Y obtén un descuento del <span>10%</span> en tu primera compra</p>
                        <form action="<?php echo e(route('subscribe')); ?>" method="post" class="newsletter-inner">
                            <?php echo csrf_field(); ?>
                            <input name="email" placeholder="Ingresa tu correo" required="" type="email">
                            <button class="btn" type="submit">Suscribirse</button>
                        </form>
                    </div>
                    <!-- End Newsletter Inner -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop Newsletter --><?php /**PATH C:\Users\User\Desktop\websites\laravel\Advance-Ecommerce-in-laravel-7\resources\views/frontend/layouts/newsletter.blade.php ENDPATH**/ ?>