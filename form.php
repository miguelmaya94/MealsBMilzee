<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'mealsbymilzee.com' // Put you mail domain here
	,
	'Meals By Milzee' // Put your site name / form name here
	,
	'miguel.maya88@yahoo.com' // Where will the form notification be sent?
	,
	'forms@mealsbymilzee.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
