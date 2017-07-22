
<?php if(!empty($_SESSION['is_logged'])): ?>


    <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=edit&amp;id=<?=$oPost->id?>'" class="btn btn-success">Editar</button> |
    <button type="button" onclick="window.location='<?=ROOT_URL?>?p=blog&amp;a=add'" class="btn btn-primary">Nuevo </button> |
    <form action="<?=ROOT_URL?>?p=blog&amp;a=delete&amp;id=<?=$oPost->id?>" method="post" class="inline"><button type="submit" name="delete" value="1" class="btn btn-danger">Borrar</button></form>

<?php endif ?>
