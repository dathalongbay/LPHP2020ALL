<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <?php
    if (isset($_POST['keyword']) && $_POST['keyword'])  {
        if (isset($_COOKIE['search']) && $_COOKIE['search']) {
            $searchHistory = json_decode($_COOKIE['search']);
        } else {
            $searchHistory = [];
        }

        $searchHistory[] = $_POST['keyword'];
        $searchHistoryStr = json_encode($searchHistory);

        setcookie("search", $searchHistoryStr, time() + (24*60*60*30), '/');
    }

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    ?>

    <div class="container">
        <div class="row">
            <form name="search" action="" method="post">
                <input name="keyword" value="" type="text">
                <input type="submit" name="Search" value="Search">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            Các từ khóa bạn vừa tìm kiếm
            <?php
            if (isset($_COOKIE['search']) && $_COOKIE['search']) {
                $searchHistory = json_decode($_COOKIE['search']);
                foreach($searchHistory as $searchItem) {
                    echo "<p>$searchItem</p>";
                }
                ?>
            <?php
            }
            ?></div>
        </div>
    </div>

</body>
</html>