<?php


function query($data)
{
    global $db;
    $params = [];
    $query = $data['query'];

    if ($data['data'] !== '') {
        $prepareData = str_replace(',   ', ',', $data['data']);
        $prepareData = str_replace(',  ', ',', $prepareData);
        $prepareData = str_replace(', ', ',', $prepareData);
        $rules = explode(',', $prepareData);
        $rules = array_diff($rules, ['']);

        $keyParam = ':data';
        $i = 1;
        foreach ($rules as $rule) {
            $params[$keyParam . $i++] = $rule;
        }

        $keyParam = ':data';
        $countSubData = sizeof(strpos_all($query, '?'));

        for ($i = 1; $i <= $countSubData; $i++) {
            $subData = strpos($query, '?');
            $param = "$keyParam$i";
            $query = substr_replace($query, $param, $subData, 1);
        }
    }

    if (inString($query, ['SELECT', 'INSERT', 'UPDATE', 'DELETE'])) {
        $result = $db->query($query, $params);
        $execute = $db->execute(FETCH_MULTI);
        $error = $db->error();
    } else {
        $result = $db->alter($query);
        $execute = $db->alter_execute();
        $error = $db->error();
    }


    $columns = [];
    $results = [];

    if ($error === null) {
        if (inString($query, ['SELECT', 'INSERT', 'UPDATE', 'DELETE'])) {
            $error = false;
            $results = $execute->results();

            foreach ($results as $d) {
                foreach ($d as $col => $val) {
                    $columns[] = $col;
                }
                break;
            }
        }
    }

    return [$results, $columns, $error];
}

function resetDatabase()
{
    global $db;
    $dummy = new Dummy($db);
    $dummy->dump();
}


if (isset($_POST['request'])) {
    $feedback = query($_POST);

    $query = $_POST['query'];
    $results = $feedback[0];
    $columns = $feedback[1];
    $error = $feedback[2];
}


if (isset($_POST['reset_db'])) {
    $dummy = new Dummy($db);
    $dummy->dump();

    header('Location: ./');
}

