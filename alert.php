<html>
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <?php if((isset($_SESSION['text']))&& ($_SESSION['text']!='')){ ?>
            <script>
                swal({
                title: "<?php echo $_SESSION['title']; ?>",
                text: "<?php echo $_SESSION['text']; ?>",
                icon: "<?php echo $_SESSION['icon']; ?>",
                button: "OK",
                });
            </script>
            <?php
                unset($_SESSION['text']);
            }
            ?>
    </body>
</html>