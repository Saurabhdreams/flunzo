<?php $__env->startComponent('mail::message'); ?>

<p><?php echo app('translator')->get('messages.t_mail_newsletter_verify_line'); ?></p>

<?php $__env->startComponent('mail::button', ['url' => url('newsletter/verify?id=' . $token)]); ?>
<?php echo app('translator')->get('messages.t_verify_email'); ?>
<?php echo $__env->renderComponent(); ?>

<?php echo app('translator')->get('messages.t_regards'); ?>,<br>
<?php echo e(config('app.name'), false); ?><br>

<?php echo $__env->renderComponent(); ?><?php /**PATH /var/www/vhosts/flunzo.com/httpdocs/in/resources/views/mail/user/everyone/newsletter_verification.blade.php ENDPATH**/ ?>