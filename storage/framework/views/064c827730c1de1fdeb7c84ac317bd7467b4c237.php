<div class='rating-box rating_content'  data-required="<?php if($question->required=="1"): ?> 1 <?php else: ?> 0 <?php endif; ?>" >
    <ul id='rating-list<?php echo e($question->id); ?>'>
        <div class="row">
            <?php
                $i=1;
                $color = "#fcb103";
                foreach($content as $c){
                    if(isset($c->col)) $col = $c->col;
                }
            ?>
            <?php if($content != ''): ?>

                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($c->label)): ?>
                        <div class="<?php echo e(isset($col)?$col:''); ?> mt-1">
                            <li class='rate rate-<?php echo e($i); ?>' data-q_id="<?php echo e($question->id); ?>" name="rating" title="<?php echo e($c->score); ?>" data-value='<?php echo e($i); ?>' data-score="<?php echo e($c->score); ?>">
                                <?php echo e($c->label); ?>

                            </li>
                        </div>
                    <?php elseif(isset($c->color)): ?>
                        <?php
                            $color = $c->color;
                        ?>
                    <?php endif; ?>
                    <?php
                        $i++;
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        
    </ul>
    <input type="hidden" name="star_color" class="star_color" value="<?php echo e($color); ?>">
    <input type="hidden" class="ratinginput" name="b_rating" id="scoreNow<?php echo e($question->id); ?>" data-qid="<?php echo e($question->id); ?>" value="0" data-selected="false">
    <span class="message mt-2"></span>
</div>
<?php /**PATH D:\04_01_24\resources\views/backend/orders/components/questions/rating.blade.php ENDPATH**/ ?>