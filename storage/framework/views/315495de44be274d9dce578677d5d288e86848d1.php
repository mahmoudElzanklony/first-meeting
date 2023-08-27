    <?php $__env->startSection('content'); ?>
    <div class="home articles">
        <div class="header">
         <div class="container">

             <div class="row">
                 <div class="col-xs-6">
                     <div class="mockup-header" itemscope itemtype="https://schema.org/Property">
                         <img itemprop="image" src="<?php echo e(asset('images/home/home-part2-design-mockup.png')); ?>">
                     </div>
                 </div>
                 <div class="col-xs-6">
                     <div class="logo" itemscope itemtype="https://schema.org/Organization">
                         <meta itemprop="url" content="http://www.first-meeting.com">
                         <img itemprop="logo" src="<?php echo e(asset('images/icons/logo.png')); ?>">
                         <h2 itemprop="name">first meeting</h2>
                     </div>
                 </div>
                 <div class="clear"></div>
                 
                 <?php if(session('status')): ?>
                     <div class="alert alert-success">
                         <?php echo e(session('status')); ?>

                     </div>
                 <?php endif; ?>
             </div>
         </div>
     </div>
    <div class="all_articles">
        <div class="container" style="width:90%;">
            
            <div class="area-ad">
            <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <?php for($i = 0; $i< sizeof($most_read); $i++): ?>
                    <?php 
                        $type = \App\article_type::find($most_read[$i]->article_type_id);
                        $category_name = \App\categories::find($type->category_id)->name;
                        ?>
                    <?php if($i == 0): ?>
                    <div class="item active">
                        <a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($most_read[$i]->name)); ?>"><img src="<?php echo e(asset('images/articles')); ?>/<?php echo e($most_read[$i]->image); ?>" alt="<?php echo e($most_read[$i]->name); ?>"></a>
                        <div class="carousel-caption">
                            <h2><?php echo e($most_read[$i]->name); ?></h2>
                        </div>
                    </div>
                    <?php else: ?> 
                    <div class="item">
                        
                        <a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($most_read[$i]->name)); ?>"><img src="<?php echo e(asset('images/articles')); ?>/<?php echo e($most_read[$i]->image); ?>" alt="<?php echo e($most_read[$i]->name); ?>"></a>
                        <div class="carousel-caption">
                            <h2><?php echo e($most_read[$i]->name); ?></h2>
                        </div>
                    </div>
                    
                    <?php endif; ?>
                  <?php endfor; ?>
                 

                </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="fa fa-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="fa fa-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
        </div>
            <h1 class="text-center bold">احدث المقالات</h1>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <?php $__currentLoopData = $articles_types_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="special-heading"><?php echo e($type->name); ?></p>
                        <?php 
                         $articles = \App\articles::where('article_type_id','=',$type->id)->get();
                         $category_name = \App\categories::find($type->category_id)->name;

                        ?>
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-xs-12">
                            <div class="article-info">
                                <a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($article->name)); ?>"><img src="<?php echo e(asset('images/articles')); ?>/<?php echo e($article->image); ?>"></a>
                                <p><a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($article->name)); ?>"><?php echo e($article->name); ?></a></p>
                                <p>
                                    <span><?php echo e($article->description); ?></span>
                                    <span><?php echo e($article->created_at); ?></span>
                                </p>
                                <div class="tags">
                                    <?php
                                      $tags = explode('-', $article->tags);
                                      for($i=0; $i<count($tags); $i++){
                                          echo '<span>'.$tags[$i].'</span>';
                                      }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="clear"></div><br><br><br>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-3 col-sm-12">
                    <p class="special-heading">الاكثر مشاهده</p>
                    <?php $__currentLoopData = $most_read; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php
                         $type = \App\article_type::find($article->article_type_id);
                         $category_name = \App\categories::find($type->category_id)->name;
                       ?>
                        <div class="col-xs-12">
                            <div class="article-info">
                                <a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($article->name)); ?>"><img src="<?php echo e(asset('images/articles')); ?>/<?php echo e($article->image); ?>"></a>
                                <p><a href="/articles/<?php echo e(urlencode($category_name)); ?>/<?php echo e(urlencode($type->name)); ?>/<?php echo e(urlencode($article->name)); ?>"><?php echo e($article->name); ?></a></p>
                                <p>
                                    <span><?php echo e($article->description); ?></span>
                                    <span><?php echo e($article->created_at); ?></span>
                                </p>
                                <div class="tags">
                                    <?php
                                      $tags = explode('-', $article->tags);
                                      for($i=0; $i<count($tags); $i++){
                                          echo '<span>'.$tags[$i].'</span>';
                                      }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\first-meeting.com\resources\views/articles/all.blade.php ENDPATH**/ ?>