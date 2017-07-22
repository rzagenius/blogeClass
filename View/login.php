<?php require 'inc/header.php' ?>
<?php require 'inc/msg.php' ?>

<form action="" method="post">

    <p><label for="email">Email:</label><br />
        <input type="email" name="email" id="email" required="required" class="form-control"/>
    </p>

    <p><label for="password">Password:</label><br />
        <input type="password" name="password" id="password" required="required"  class="form-control" />
    </p>

    <p><button type="submit" class="btn btn-success btn-lg">Entrar</button></p>
</form>

<?php require 'inc/footer.php' ?>
