<?php require 'inc/header.php' ?>

<?php if (empty($this->oPosts)): ?>
    <div class="alert alert-danger"><p class="bold">No hay ninguna publicación en el blog.</p></div>
    <p><button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="bold">Agrega un Nuevo post</button></p>
<?php else: ?>
              <h1 class="page-header">
                    Proyecto Blog eClass
              </h1>
    <?php foreach ($this->oPosts as $oPost): ?>
      <div class="blog-post">
            <h1><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a></h1>

            <p><?=nl2br(htmlspecialchars(mb_strimwidth($oPost->body, 0, 300, '...')))?></p>
            <p><a class="btn btn-primary" href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>">Ver mas <span class="glyphicon glyphicon-chevron-right"></span></a></p>


            <p class="left small italic"><span class="glyphicon glyphicon-time"></span> Publicado en <?=$oPost->createdDate?></p>
            <p class="left small italic"><span class="glyphicon glyphicon-user"></span> Publicado por <?=ucfirst($oPost->creadaPor)?></p>

            <div class="botones"><?php require 'inc/control_buttons.php' ?></div>
            <hr class="clear" /><br />
       </div>
    <?php endforeach ?>
    <ul class="pager">
      <li><a href="#">Anterior</a></li>
      <li><a href="#">Siguiente</a></li>
    </ul>
<?php endif ?>

<?php require 'inc/footer.php' ?>
