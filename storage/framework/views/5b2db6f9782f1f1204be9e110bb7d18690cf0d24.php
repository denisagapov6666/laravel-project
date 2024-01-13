<div class="mb-2">
    <div class="checkbox-input" data-required="<?php if($question->required=="1"): ?> 1 <?php else: ?> 0 <?php endif; ?>">
        <?php
            $temp_val =1;
            $content = json_decode($question->content);

if ($content !== null) {
    foreach ($content as $key => $c) {
        if (isset($c->col)) {
            $col = $c->col;
        }
    }
}

            
            
        ?>
        <div class="row check_content">
        <?php if($content !== null): ?>
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($c->label)): ?>
                <div class="<?php echo e($col); ?>">
                    <div class="form-check">
                        <div class="square-check gradient-bg" >
                            <input class="form-check-input <?php echo e(' checkbox_'.$key); ?>" name="checkbox-radio" type="radio" data-qid="<?php echo e($question->id); ?>" data-key="<?php echo e($key+1); ?>" value="<?php echo e($c->score); ?>" <?php echo e((isset($identy[$question->id]))?($identy[$question->id]==$c->score)?'data-opendiv='.$ids[$question->id]:'':''); ?> name="flexRadioDefault"  id="<?php echo e($question->id); ?>">
                            <?php echo e($c->label); ?>

                            <div class="square-check--content"></div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php
                    $temp_val++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <span class="message mt-2"></span>
</div><?php /**PATH D:\04_01_24\resources\views/backend/orders/components/questions/checkbox.blade.php ENDPATH**/ ?>