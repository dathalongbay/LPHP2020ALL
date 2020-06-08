<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

    <?php
    $students = [];
    $students[] = ['id' => 1, 'name' => 'nguyen van a', 'age' => 18, 'location' => 'ha noi'];
    $students[] = ['id' => 2, 'name' => 'nguyen van b', 'age' => 19, 'location' => 'ha tay'];
    $students[] = ['id' => 3, 'name' => 'nguyen van c', 'age' => 18, 'location' => 'ha giang'];
    $students[] = ['id' => 4, 'name' => 'nguyen van d', 'age' => 21, 'location' => 'nam dinh'];
    $students[] = ['id' => 5, 'name' => 'nguyen van e', 'age' => 22, 'location' => 'ninh binh'];

    echo '<pre>';
    print_r($students);
    echo '</pre>';
    ?>

    <pre>
        Sử dụng vòng lặp foreach
        làm theo 3 cách
    </pre>

    <div class="container">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ten</th>
                <th>Tuoi</th>
                <th>Que quan</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($students as $studentKey => $student) { ?>
                    <tr>
                        <td><?php echo $student['id'] ?></td>
                        <td><?php echo $student['name'] ?></td>
                        <td><?php echo $student['age'] ?></td>
                        <td><?php echo $student['location'] ?></td>
                    </tr>
                <?php } ?>
               <!-- <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                </tr>-->

            </tbody>
        </table>
    </div>

</body>
</html>