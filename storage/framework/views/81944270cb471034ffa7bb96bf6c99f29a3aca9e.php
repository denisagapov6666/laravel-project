<div class="mb-2 dropdowninput" data-required="<?php if($question->required=="1"): ?> 1 <?php else: ?> 0 <?php endif; ?>">

    <div class="form-group">
        <label for="">Select Value</label>
        <select class="form-control dropdown" name="dropdown"  id="<?php echo e($question->id); ?>">
        
          <option value="">Select Option</option>
          
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($key != (sizeof($content)-1)): ?>
                <?php if(isset($c->label)): ?>
                    <option id="opt" data-key="<?php echo e($key+1); ?>" value="<?php echo e($c->score); ?>"><?php echo e($c->label); ?></option>
                <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
  </div>
  <span class="message mt-2"></span>
</div>
<script>
  $("body").append(`<style>#q_<?php echo $question->id ?> label{<?php echo $fontstyle2 ?>}</style>`)
</script><?php /**PATH D:\04_01_24\resources\views/backend/orders/components/questions/dropdown.blade.php ENDPATH**/ ?>