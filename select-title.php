<?php

function select_title($conn, $title_default = '')
{
    $html = '<select name="emp_no">\n';

    $title = $title_default;

    $sql = "SELECT * FROM titles";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $selected = ($row['emp_no'] == $title) ? "selected" : "";
            $html .= "<option value=\"{$row['emp_no']}\" $selected>{$row['title']}</option>\n";
        }
    }
    $html .= "</select>";
    return $html;
}