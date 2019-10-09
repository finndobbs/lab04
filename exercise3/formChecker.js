function validate(){
	let email = document.getElementById('email').value;
	let pw = document.getElementById('pw').value;
	let item1 = document.getElementById('item1').value;
	let item2 = document.getElementById('item2').value;
	let item3 = document.getElementById('item3').value;

	/* This is a simple email regex found on stackoverflow. url: 
	 * https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
	 */
	email_regex = /\S+@\S+\.\S+/;

	if ( !(email_regex.test(email)) ){
		alert('Not a valid Email Address');
		return false;
	}
	if ( !(pw) ){
		alert('Please enter a passowrd');
		return false;
	}
	if( !(item1) ){
		alert('please enter a quantity of watches (0 is acceptable)');
		return false;
	}
	if( !(item2) ){
		alert('please enter a quantity of pencils (0 is acceptable)');
		return false;
	}
	if( !(item3) ){
		alert('please enter a quantity of toy cars (0 is acceptable)');
		return false;
	}
}
