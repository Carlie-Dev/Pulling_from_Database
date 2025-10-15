<?php

require __DIR__ . '/db.php';
require __DIR__ . '/functions.php';

$pdo = db();

// Load dropdown options

    $sqlList = buildSqlList();
    $stmtList = $pdo ->query($sqlList); 
// Load Main Table



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Games (Procedural, GET)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            color: #1f2937;
            max-width: 920px;
            margin: 24px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #e2e8f0;
            padding: 8px;
        }

        thead tr {
            background: #f1f5f9;
        }

        form {
            margin: 12px 0;
        }
    </style>
</head>

<body>
    <h2>Games — Choose a Title</h2>

    
        

    <form method="get">
        <label for="game_id">Title:</label>
        <select id="game_id" name="game_id">
            <option value="">-- All Games --</option>
            <?php while ($opt = $stmtList->fetch()){
                    $gameID = $opt['game_id'];
                    $title = $opt['title'];
                    echo ("<option value='$gameID'>$title</option>");
                }
        
            ?>
            <!-- GET GAMES from the database -->

        </select>
        <button type="submit">Filter</button>
    </form>

    <table>
        <thead>
            <tr>
                <th style="text-align:left;">ID</th>
                <th style="text-align:left;">Title</th>
                <th style="text-align:right;">Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fill main table -->
        </tbody>
    </table>

    <?php $pdo = null; ?>
</body>

</html>