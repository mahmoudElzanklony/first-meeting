<html>
   <head>
   	  <meta charset="utf-8">

	  <script data-ad-client="ca-pub-2576924732496258" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php if(isset($meta_description)): ?>
          <meta name="description" content="<?php echo e($meta_description); ?>">
          <meta name="keywords" content="<?php echo e($keywords); ?>">
          <meta property="og:title" content="<?php echo e($title); ?>" />
          <meta property="og:url" content="<?php echo e($url); ?>" />
          <meta property="og:type" content="meetings" />
          <meta property="og:description" content="<?php echo e($meta_description); ?>" />
          <meta property="og:image" content="<?php echo e($og_image); ?>" />
          <meta property="og:locale" content="ar" />
          <meta property="og:site_name" content="first meeting" />
          <meta name="twitter:title" content="<?php echo e($title); ?>" />
          <meta name="twitter:card" content="summary">
          <meta name="twitter:description" content="<?php echo e($meta_description); ?>">
          <meta name="twitter:site" content="<?php echo e($url); ?>">
          <meta name="twitter:image" content="<?php echo e($og_image); ?>">
          <?php endif; ?>
          <title><?php if(isset($title)) echo $title; else echo 'اللقاء الاول'; ?></title><?php /**PATH E:\first-meeting.com\resources\views/startheader.blade.php ENDPATH**/ ?>