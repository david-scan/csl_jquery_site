<?php
//extending the existing standard model class supplied by CodeIgniter
//The Model is a Codeigniter class used to interact with Databases
class csl_model extends CI_Model
{
/*First function used to access database entries. The particular database has been clarified
in Codeigniters database.php(lines 51-65) contained in the config folder
To automatically connect with the database the word 'database' has been added to
the library array function on line 55 of the autoload.php file in the config folder.@@ 
Alternatively manual connection within the function could be used
*/
	function champs()
	{
/*creating variable that contains the access to the database(db) function 'query()'
that sends a request to the database*/
	$query = $this->db->query("SELECT * FROM champions");
//accessing database result function through the new variable
	return $query->result();	
	}
//same as above
	function seniorCup()
	{
/*creating variable that contains the access to the database(db) function 'query()'
that sends a request to the database*/
	$query = $this->db->query("SELECT * FROM senior_cup");
//accessing database result function through the new variable
	return $query->result();	
	}
	function teams()
	{
/*creating variable that contains the access to the database(db) function 'query()'
that sends a request to the database*/
	$query = $this->db->query("SELECT Club, Image FROM teams");
//accessing database result function through the new variable
	return $query->result();	
	}
	
	function honours($tester)
	{

	$query = $this->db->query("SELECT 'League Titles' as Source, Winner, 
		COUNT(*) FROM champions WHERE Winner='".mysql_real_escape_string($tester)."' 
		UNION SELECT 'Senior Cup' as Source, Winner, COUNT(*) FROM senior_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'Challenge Cup' as Source, Winner, COUNT(*) FROM challenge_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'League Cup' as Source, Winner, COUNT(*) FROM league_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'Premier Cup' as Source, Winner, COUNT(*) FROM premier_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'First Division' as Source, Winner, COUNT(*) FROM first_division WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'Millenium Cup' as Source, Winner, COUNT(*) FROM millenium_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'Incentive Cup' as Source, Winner, COUNT(*) FROM incentive_cup WHERE Winner='".mysql_real_escape_string($tester)."'
		UNION SELECT 'First Division Cup' as Source, Winner, COUNT(*) FROM first_divcup WHERE Winner='".mysql_real_escape_string($tester)."'");
	return $query->result();	
	}

}
/* lines 8-10 reference: CodeIgniter Tutorials: Introduction to CodeIgniter - MySQL Database - Connecting (Part 7/11) 
   https://www.youtube.com/watch?v=SSE9mTLWmKs
*/
?>

