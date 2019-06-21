<div class="col-md-8">

    <div class="leave-comment mr0"><!--leave comment-->

        <h3 class="text-uppercase">Register</h3>
        <br>
        <form class="form-horizontal contact-form" role="form" method="post" action="">
            <div class="form-group"<?php if (!empty($error['name'])) {
                echo "has-error";
            }
            ?>>
                <div class="col-md-12">

                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Name"
                    value="<?= (!empty($_POST['name'])) ? $_POST['name'] : "" ?>">
                    <?php if (!empty($error['name'])) {
                        ?>
                        <p class="alert alert-danger" role="alert"><?= $error['name'] ?></p>
                        <?php


                    }
                    ?>

                </div>
            </div>

            <div class="form-group" <?php if (!empty($error['email'])) {
                echo "has-error";
            }
            ?>>
                <div class="col-md-12">
                    <input type="email" class="form-control" id="email" name="email"
                           placeholder="Email"
                    value="<?= (!empty($_POST['email'])) ? $_POST['email'] : "" ?>"
                    >
                    <?php if (!empty($error['email'])) {
                        ?>
                        <p class="alert alert-danger" role="alert"><?= $error['email'] ?></p>
                        <?php


                    }
                    ?>

                </div>

            </div>
            <div class="form-group" <?php if (!empty($error['password'])) {
                echo "has-error";
            }
            ?>>
                <div class="col-md-12">
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="password"
                           >
                    <?php if (!empty($error['password'])) {
                        ?>
                        <p class="alert alert-danger" role="alert"><?= $error['password'] ?></p>
                        <?php


                    }
                    ?>
                </div>

            </div>
            <button type="submit" name="submit" class="btn send-btn">Register</button>

        </form>
    </div><!--end leave comment-->
</div>