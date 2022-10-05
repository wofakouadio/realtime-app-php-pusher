<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RealTime App with PHP AJAX PUSHER</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">

            <div class="row align-items-center">
                <div class="col align-self-center p-20">
                    <div class="p-50">

                        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Content</label>
                                <textarea rows="10" cols="5" class="form-control" name="user-two-txt"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                        <div id="user-two-result"></div>

                    </div>
                </div>
            </div>

        </div>

        <?php

            require ('footer.php');

        ?>
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script src="js/pusher-script-two.js"></script>

    </body>
</html>