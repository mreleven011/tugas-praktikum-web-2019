<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>H071181306</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="contact-clean">
        <form method="get" id="post">
            <h2 class="text-center">form get pos</h2>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Nama" value="<?=isset($_POST['name']) ? $_POST['name'] : ''?>">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="nim" placeholder="H0711xxxxx" maxlength="10" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method" id="formCheck-1" value="GET" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method" id="formCheck-2" value="POST"> POST
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="submit" type="submit" value="submit">Submit</button>
            </div>
            <div>
                <label for="">
                    <?php
                    if (isset($_POST['submit'])) {
                        echo '<div>Metode: ' . $_POST['method'] . '</div>';
                        echo '<div>Nama: ' . $_POST['name'] . '</div>';
                        echo '<div>NIM: ' . $_POST['nim'] . '</div>';
                    }
                    ?>
                    <?php
                    if (isset($_GET['submit'])) {
                        echo '<div>Metode: ' . $_GET['method'] . '</div>';
                        echo '<div>Nama: ' . $_GET['name'] . '</div>';
                        echo '<div>NIM: ' . $_GET['nim'] . '</div>';
                    }
                    ?>
                </label>
            </div>
        </form>
    </div>
</body>
</html>