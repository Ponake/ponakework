<?php

function select_department($conn, $dept_default = '')
{
    $html = '<select name="dept_no">\n';

    $dept = $dept_default;

    $sql = "SELECT * FROM departments";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $selected = ($row['dept_no'] == $dept) ? "selected" : "";
            $html .= "<option value=\"{$row['dept_no']}\" $selected>{$row['dept_name']}</option>\n";
        }
    }
    $html .= "</select>";
    return $html;
}