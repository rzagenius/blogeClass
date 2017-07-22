
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPost)): ?>
    <p class="error">No se puede encontrar la publicación!!!</p>
<?php else: ?>

    <article>
        <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>

        <h1><?=htmlspecialchars($this->oPost->title)?></h1>
        <p><?=nl2br(htmlspecialchars($this->oPost->body))?></p>
        <p class="left small italic">Publicado en <?=$this->oPost->createdDate?></p>
        <div class="botones">
            <?php
                $oPost = $this->oPost;
                require 'inc/control_buttons.php';
            ?>
       </div>
    </article>

<?php endif ?>

<?php require 'inc/footer.php' ?>
