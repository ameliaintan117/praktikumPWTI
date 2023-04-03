<?php

$emails = ['admin@filkom.ub.ac.id', 'admin@ub.ac.id'];
foreach ($emails as $email) {
echo "Mengirim email ke $email";
}
// Output:
//Mengirim email ke admin@filkom.ub.ac.id
//Mengirim email ke admin@ub.ac.id

$arr = ['name' => 'Joko', 'age' => 56];
foreach ($arr as $key => $value) {
echo "$key is $value";
}
// Output
//name is Joko
//age is 56

?>