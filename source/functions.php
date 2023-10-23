<?php
function validateFormData($formData)
{
    if (isset($_POST[$formData]) && !empty($_POST[$formData])) {
        $filter = trim($_POST[$formData]);
        $filter = htmlspecialchars($filter);
        $filter = stripslashes($filter);
        print_r($filter);
        return $filter;
    } else {
        echo "error";
    }
}