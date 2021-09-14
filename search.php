<?php include ("includes.php"); ?>
<?php
function shorten($postbody, $maxLength) {
    return substr($postbody, 0, $maxLength);
}
if (empty($_GET['q'])) {
    header ("Location: blogs");
}
?>
<title>Results for <?php echo htmlspecialchars($_GET['q']); ?> - <?php echo $sitename; ?></title>
<div class="container">
<div class="main-body p-0">
    <div class="inner-wrapper">
        <div class="inner-sidebar">
            <div class="inner-sidebar-header justify-content-center">
                <a type="button" href="post" class="btn btn-primary has-icon btn-block" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    NEW POST
                </a>
            </div>
        </div>
        <br>
        <br>
        <h2>Results for "<?php echo htmlspecialchars($_GET['q']); ?>"...</h2>
        <div class="inner-main">
            <div class="inner-main-header">
                <form action="" method="get">
                    <select class="custom-select custom-select-sm w-auto mr-1" name="d">
                        <option selected="" value="l">Latest</option>
                        <option value="o">Oldest</option>
                        <option value="p">Popular</option>
                    </select>
                    <input type="hidden" name="q" value="<?php echo $_GET['q']; ?>">
                    <input type="submit" value="Go">
                </form>
                <form action="search" method="get">
                <span class="input-icon input-icon-sm ml-auto w-auto">
                    <input type="text" name="q" class="form-control form-control-sm bg-gray-200 border-gray-200 shadow-none mb-4 mt-4" placeholder="Search" />
                </span>
                </form>
            </div>
            <?php
            if ($_GET["d"] == 'p') {
                $sort = "ORDER BY views DESC";
            } else {
                if ($_GET["d"] == 'l') {
                    $sort = "ORDER BY id DESC";
                } else {
                    if ($_GET["d"] == 'o') {
                        $sort = "ORDER BY id ASC";
                    } else {
                        $sort = "ORDER BY id DESC";
                    }
                }
            }
            $search = ("%{$_GET['q']}%");
            $stmt  = $pdo->prepare("SELECT * FROM blogs WHERE title LIKE ? " . $sort . " LIMIT 500");
            $stmt->execute([$search]);
            foreach ($stmt as $row)
            {
                $postbody = $row['body'];

                echo ('
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <div class="media-body">
                                <h6><a href="blog?id=' . $row["id"] . '" data-toggle="collapse" data-target=".forum-content" class="text-body">' . $row["title"] . '</a></h6>
                                <p class="text-secondary">
                                    ' . shorten($postbody, 60) . '... <a href="blog?id=' . $row["id"] . '" style="text-decoration:none;"><span class="text-secondary font-weight-bold">View more</span></a>
                                </p>
                                <p class="text-muted"><span class="text-secondary font-weight-bold">' . $row["views"] . ' views</span> - <span class="text-secondary font-weight-bold">' . $row["post_date"] . '</span></p>
                            </div>
                            <div class="text-muted small text-center align-self-center">
                                <span class="d-none d-sm-inline-block"><i class="far fa-eye"></i>' . $row["id"] . '</span>
                            </div>
                        </div>
                    </div>
                </div>
                ');
            }

            ?>
            </div>
        </div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>