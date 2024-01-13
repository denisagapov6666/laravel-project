<?php
    if(isset($content)){
        $content = json_decode($question->content);
    }
    $width = $height = '';
    isset($content[0]->width) ? $width = $content[0]->width : '';
    isset($content[0]->height) ? $height = $content[0]->height : '';
?>
<div class="euroinput">
  <div class="row">
    <div class="col">
      <div class="input-group">
        <span class="input-group-addon" style="background-color: <?php echo e($question->color1 == NULL ? $lesson->color1 : $question->color1); ?>;text-align:center;<?php echo $fontstyle2?>">
          €
        </span>
        <input type="number" name="number" class="form-control" value="4.99" id="<?php echo e($question->id); ?>" <?php if($question->required): ?> required <?php endif; ?> style="width:<?php echo e($width); ?>px;height:<?php echo e($height); ?>px ">
      </div>
    </div>
  </div>
</div><?php /**PATH D:\04_01_24\resources\views/backend/orders/components/questions/euro.blade.php ENDPATH**/ ?>