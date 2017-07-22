<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<?php if (empty($this->oPost)): ?>
    <div class="alert alert-danger">¡No se encontraron datos</div>
<?php else: ?>

    <form action="" method="post">
        <p><label for="title">Titulo:</label><br />
            <input type="text" name="title" id="title" value="<?=htmlspecialchars($this->oPost->title)?>" required="required" class="form-control"/>
        </p>

        <p><label for="body">Contenido:</label><br />
            <textarea name="body" id="body" rows="5" cols="35" required="required" class="form-control"><?=htmlspecialchars($this->oPost->body)?></textarea>
        </p>

        <p><button type="submit" name="edit_submit" value="Submit" class="btn btn-success btn-lg">Actualizar</button></p>
    </form>
<?php endif ?>

<?php require 'inc/footer.php' ?>
