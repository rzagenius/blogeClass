
<?php if (!empty($this->sErrMsg)): ?>
  <div class="alert alert-danger"><?=$this->sErrMsg?></div>
<?php endif ?>

<?php if (!empty($this->sSuccMsg)): ?>
  <div class="alert alert-success"><?=$this->sSuccMsg?></div>
<?php endif ?>
