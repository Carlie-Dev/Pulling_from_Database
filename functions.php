<?php
// functions.php
function buildSqlList(): string
{
    return "SELECT game_id, title FROM games ORDER BY title";
}

function buildSqlMain(int $id): string
{
    if ($id > 0) {

        return "SELECT game_id, title, price FROM games WHERE game_id = $id";
    }
    return "SELECT game_id, title, price FROM games ORDER BY title";
}