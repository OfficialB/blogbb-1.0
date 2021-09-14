<?php
include ("config.php");
function getErrorMessage() {
    if ($_GET['e'] == '400') {
        echo ("400 Bad Request");
    } else {

        if ($_GET['e'] == '401') {
            echo ("401 Unauthorization (Client-Side)");
        } else {

            if ($_GET['e'] == '402') {
                echo ("402 Payment Required");
            } else {
                if ($_GET['e'] == '403') {
                echo ("403 Unauthorization (Server-Side)");

                } else {
                if ($_GET['e'] == '404') {
                    echo ("404 Page Not Found");

                } else {

                if ($_GET['e'] == '503') {
                    echo ("503 Server Unavailable");

                } else {
                    echo ("Unknown Error");
                }
            }
        }
    }
}
}
}
?>
<title>Oops!</title>
<h1>Oops!</h1>
<h4>It seems that we've ran into an error</h4>
<h5>Error: <?php getErrorMessage(); ?></h5>
<a href="<?php echo ($siteurl); ?>">Return Home</a>