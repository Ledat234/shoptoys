<?php echo $__env->make('listproduct.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('listproduct.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <h1>Use Bootstrap 3's carousel to show multiple items per slide.</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?perth,australia"
                                    class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?fremantle,australia"
                                    class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?west-australia"
                                    class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img src="https://source.unsplash.com/300x300/?perth"
                                    class="img-responsive"></a></div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?quokka,perth" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?margaretriver,australia"
                                    class="img-responsive"></a></div>
                    </div>
                    <!-- add  more items here -->
                    <!-- Example item start:  -->

                    <div class="item">
                        <div class="col-xs-4"><a href="#1"><img
                                    src="https://source.unsplash.com/300x300/?perth,australia&r=7"
                                    class="img-responsive"></a></div>
                    </div>

                    <!--  Example item end -->
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i
                        class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i
                        class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\ShopGame\resources\views/listproduct/index.blade.php ENDPATH**/ ?>