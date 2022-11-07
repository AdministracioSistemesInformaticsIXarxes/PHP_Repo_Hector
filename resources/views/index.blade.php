<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: beige;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1><?=$greeting;?></h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Completes</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
            <tr>
                <td>1<?=$task->id;?></td>
                <td>1<?=$task->tittle;?></td>
                <td>1<?=$task->description;?></td>
               <td>1<?=$task->completed;?></td>
            </tr>
        <?php endforeach; ?>
        </table>

    </header>
    </body>
</html>