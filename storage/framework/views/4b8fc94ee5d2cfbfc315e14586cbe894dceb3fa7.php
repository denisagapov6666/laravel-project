<?php if(!empty($content)): ?>
<style>
    .change-img-bg-color{
        background: rgba(20,6,62,1);
    }
</style>
<div class="row image_content">
    <?php if(isset($content) && !empty($content[0]->image)): ?>
        <?php $__currentLoopData = $content[0]->image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="<?php echo e(isset($content[(sizeof($content)-1)]->col)?$content[(sizeof($content)-1)]->col:''); ?> mt-2">
            <img id="preview" src="" width="100%">
                <div class="form-group">
                    <img src="<?php echo e(asset('uploads/image/')); ?><?php echo e('/'.$c); ?>" class="img-thumbnail" alt="image<?php echo e($key); ?>" onclick="clickimg(this)" srcset="">
                    <input class="form-check-input <?php echo e(' imagebox_'.$key); ?>" type="radio" style="display:none" name="imgradiogroup"  id="<?php echo e($question->id); ?>" data-key="<?php echo e($key+1); ?>" value="<?php echo e($content[0]->score[$key]); ?>" data-score="<?php echo e($content[0]->score[$key]); ?>">
                </div>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php $__env->startPush('after-scripts'); ?>
    <script>
        function clickimg(ele){
            if($('#percent').val() == 1000  && $('#reported').val() == 10){
                alert('You can not edit your answers!');
            }else {
                $('.change-img-bg-color').each(function(){
                    $(this).removeClass('change-img-bg-color');
                });
                $(ele).addClass('change-img-bg-color');
                $(ele).next().prop("checked", true);
            }
        }
    </script>
<?php $__env->stopPush(); ?><?php /**PATH D:\04_01_24\resources\views/backend/orders/components/questions/image.blade.php ENDPATH**/ ?>