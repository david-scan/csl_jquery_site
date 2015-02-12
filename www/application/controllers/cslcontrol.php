<?php
//extending the existing standard controller class supplied by CodeIgniter.
//Controllers manage input and output of other files in the MVC framework. 
class cslcontrol extends CI_Controller{
//The first function used to grab Database details regarding DART Travel
	function titleWin()
	{
//Using Codeigniters load instance & calling the model class thats in the model php file.
	$this->load->model('csl_model');
/*accessing the function in the model class and storing it into an array
with a single key*/
	$data['swim'] = $this->csl_model->champs();
/*Setting up a standard warning 404 display if anything goes wrong when accessing
the database from the Model class*/
	if (!$data['swim']) show_404();
//Loading the view file and passing the data variable created above
    $this->load->view('csl_view', $data);
	}
/*Repeats what was done to the function above except accessing another function 
	from the model class*/
	function senCup()
	{
//Using Codeigniters load instance & calling the model class thats in the model php file.
	$this->load->model('csl_model');
/*accessing the function in the model class and storing it into an array
with a single key*/
	$data['swim'] = $this->csl_model->seniorCup();
/*Setting up a standard warning 404 display if anything goes wrong when accessing
the database from the Model class*/
	if (!$data['swim']) show_404();
//Loading the view file and passing the data variable created above
    $this->load->view('csl_view', $data);
	}
	function getClub()
	{
//Using Codeigniters load instance & calling the model class thats in the model php file.
	$this->load->model('csl_model');
/*accessing the function in the model class and storing it into an array
with a single key*/
	$data['swim'] = $this->csl_model->teams();
/*Setting up a standard warning 404 display if anything goes wrong when accessing
the database from the Model class*/
	if (!$data['swim']) show_404();
//Loading the view file and passing the data variable created above
    $this->load->view('csl_view', $data);
	}
	function getHonours()
	{
		$tester=$_GET['name'];
//$tester='Mervue United';
//Using Codeigniters load instance & calling the model class thats in the model php file.
	$this->load->model('csl_model');
/*accessing the function in the model class and storing it into an array
with a single key*/
	$data['swim'] = $this->csl_model->honours($tester);
/*Setting up a standard warning 404 display if anything goes wrong when accessing
the database from the Model class*/
	if (!$data['swim']) show_404();
//Loading the view file and passing the data variable created above
    $this->load->view('csl_view', $data);
	}
	}
/*references for function content:
PHP CodeIgniter Tutorial 2 - Models / Database by Creativitytuts https://www.youtube.com/watch?v=IOZqRgOgSu4
&
Return JSON with CodeIgniter by Mike Robbins http://rogue-systems.com/2013/01/return-json-with-codeigniter/
*/
?>