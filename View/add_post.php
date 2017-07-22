
<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<form action="" method="post">

    <p><label for="title">Titulo:</label><br />
        <input type="text" name="title" id="title" required="required" class="form-control" />
    </p>

    <p><label for="body">Contenido:</label><br />
        <textarea name="body" id="body" rows="5" cols="35" required="required" class="form-control"></textarea>
    </p>

    <p> <button type="submit" name="add_submit" value="Submit" class="btn btn-success btn-lg">Agregar</button></p>
</form>

<?php require 'inc/footer.php' ?>
