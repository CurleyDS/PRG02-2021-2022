<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($lesson_id == "") {
    $errors['lesson_id'] = 'Lesson must be chosen';
}
if ($name == "") {
    $errors['name'] = 'Name cannot be empty';
}
if (!is_numeric(preg_replace('/[\s]+/', '', $phone))) {
    $errors['phone'] = 'Phone cannot contain letters';
}
// this error message wil overwrite the previous error when phone is empty
if ($phone == "") {
    $errors['phone'] = 'Phone cannot be empty';
}
if (preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $email)) {
    $errors['email'] = 'Email invalid';
}
// this error message wil overwrite the previous error when email is empty
if ($email == "") {
    $errors['email'] = 'Email cannot be empty';
}
