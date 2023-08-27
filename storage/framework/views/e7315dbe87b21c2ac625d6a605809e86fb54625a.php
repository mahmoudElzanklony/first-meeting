</div>
<footer>
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-6">
            <p>الصفحات الاساسية</p>
            <p><a href="/home">الرئيسيه</a></p>
            <p><a href="/policy">سياسه الخصوصيه</a></p>
            <p><a href="/whous">من نحن</a></p>
            <p><a href="/articles/all">اخبارنا</a></p>
        </div>
        <div class="col-md-4 col-xs-6">
            <p>احدث المقالات</p>
            <?php $__currentLoopData = \App\articles::orderBy('id','DESC')->limit(4)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><a href="/articles/article/<?php echo e($article->id); ?>"><?php echo e($article->name); ?></a></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <a href="https://www.facebook.com/Frist-Meeting-108310177733757/"><img src='<?php echo e(asset("images/icons/facebook.png")); ?>'></a>
            <a><img src='<?php echo e(asset("images/icons/instegram.png")); ?>'></a>
            <a><img src='<?php echo e(asset("images/icons/linkin.png")); ?>'></a>
        </div>
    </div>
    </div>
    <p>حقوق الملكيه محفوظه لدي موقع اللقاء الاول</p>
</footer>
 <audio controls src="/alerts/quite-impressed.mp3">
           
    </audio>
    <div class="delete-area">
        <div class="delete-box text-center">
            <p>هل انت متأكد من عمليه الحذف</p>
            <button class="btn btn-primary">نعم</button>
            <button class="btn btn-danger">لا</button>
        </div>
    </div>
<?php if(auth()->check()): ?>
    <?php if(auth()->user()->activation_phone_status == 0): ?>
        <div class="bk-layout showing">
            <div class="verify_number">
                <img src="<?php echo e(asset('images/gif/verify.gif')); ?>">
                <form method="post">
                    <?php echo e(csrf_field()); ?>

                    
                    <div class="form-group">
                        <label>لكي يتم تفعيل الحساب الخاص بك واستخدام مزايا اللقاء الاول يرجي ادخال الرمز الذي تم ارساله لك علي الهاتف المحمول هنا</label>
                        <input class="form-control" type="number" name="phone_activation" placeholder="ضع الرمز هنا" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="ارسال">
                    </div>
                </form>

            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>
</body>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4803ND672W"></script>


  <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/lightslider.js')); ?>"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo e(asset('js/plugin.js')); ?>"></script>
  
</html><?php /**PATH E:\first-meeting.com\resources\views/endbody.blade.php ENDPATH**/ ?>