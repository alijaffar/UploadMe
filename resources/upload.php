<?php
include './resources/head-mainpage.php';
?>
<body>
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <?php include './resources/navbar.php';                getNavBar("home"); ?>
                <div class="inner go">
                    <h1>UpLoadMe, Uploading made simple</h1>
                    <p class="lead">
                        With UpLoadMe you can share your personal files<br>with friends without needing FTP to a server.<br>
                        Simply Drop the file in the green area and click Upload
                    </p>

                    <form action="./upload_file.php" method="post" enctype="multipart/form-data">
                        <center>
                            <input class="btn btn-success" style="width: 500px; height: 100px"  data-filename-placement="inside" id="file" name="file" type="file" /><br>
                            <br>

                            <input type="submit" name="submit" value="Upload" id="submit" class="btn btn-lg btn-default" disabled>

                        </center>
                    </form>
                </div>
                <?php include './resources/footer.php'; ?>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    <script src="./js/disable.js"></script>
</body>
</html>