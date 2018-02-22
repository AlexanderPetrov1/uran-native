<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>1. Сессии, кеши, сложные формы</title>

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="custom.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>

<body>

    <div class="container">

        <form class="form-feedback" id="form-feedback" method="post" action="">
            <?php if (count($_SESSION['fails']) > 0) { ?>
                <?php foreach ($_SESSION['fails'] as $fail) { ?>
                <p class="text-danger"><?php echo $fail; ?></p>
                <?php } ?>
            <?php } ?>

            <h2 class="form-feedback-heading">Please, write your message</h2>

            <?php if (isset($_SESSION['error'])) { ?>
            <p class="text-danger"><?php echo $_SESSION['error']; ?></p>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
            <p class="text-success"><?php echo $_SESSION['success']; ?></p>
            <?php } ?>

            <textarea class="form-control" name="message"><?php echo htmlspecialchars($message); ?></textarea>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Send message</button>
        </form>

    </div> <!-- /container -->

    <script type="text/javascript">

       $('#form-feedback').submit(function(e) {
           $("#form-feedback button:submit").prop('disabled', true);
       });

    </script>

</body>
</html>