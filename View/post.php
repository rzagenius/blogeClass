
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPost)): ?>
    <div class="alert alert-danger">No se puede encontrar la publicación!!!</div>
<?php else: ?>
  <h1 class="page-header">
        Proyecto Blog eClass
  </h1>

    <article>
        <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>

        <h1><?=htmlspecialchars($this->oPost->title)?></h1>
        <p><?=nl2br(htmlspecialchars($this->oPost->body))?></p>
        <p class="left small italic"><span class="glyphicon glyphicon-time"></span> Publicado en <?=$this->oPost->createdDate?></p>
        <p class="left small italic"><span class="glyphicon glyphicon-user"></span> Publicado por <?=ucfirst($this->oPost->creadaPor)?></p>
        <div class="botones">
            <?php
                $oPost = $this->oPost;
                require 'inc/control_buttons.php';
            ?>
       </div>
    </article>

<?php endif ?>

    <ul class="pager">
      <li><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$_GET['id'] - 1?>">Anterior</a></li>
      <li><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$_GET['id'] + 1?>">Siguiente</a></li>
    </ul>

<?php require 'inc/footer.php' ?>
