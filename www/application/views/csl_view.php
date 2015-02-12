<?php
/*this is the view used to simply turn MySql database results into readable JSON
The first line sets the server header function through the output class
so that standard JSON is displayed with the correct character encoding enforced*/
$this->output->set_header('Content-Type: application/json; charset=utf-8');
/*Here is the standard function used to turn other data to JSON. The variable parameter
inside the function is created automatically from the key set in the $data arrays used
in the 2 functions on the Controller file.
*/ 
echo json_encode($swim);

/* reference for this view:
Return JSON with CodeIgniter by Mike Robbins http://rogue-systems.com/2013/01/return-json-with-codeigniter/
*/
?>