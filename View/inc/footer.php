
                            <footer>
                                <?php if (!empty($_SESSION['is_logged'])): ?>
                                    Estas conectado como Admin - &nbsp; | &nbsp;
                                    <a href="<?=ROOT_URL?>?p=blog&amp;a=all">Ver todos los posts del blog</a>
                                <?php endif ?>
                                </p>
                            </footer>
                      </div>
                  </div>
             </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?=ROOT_URL?>static/js/bootstrap.min.js"></script>
    </body>
</html>
