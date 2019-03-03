var formRef = firebase.database().ref().child("contact_form");
  document.getElementById('newform').addEventListener('submit',submitForm);
  function submitForm(e)
  {
	e.preventDefault();
	var name = getInputVal('name');
	var email = getInputVal('email');
	var msg = getInputVal('msg');
	
	saveForm(name,email,msg);
	
	document.getElementById('newform').reset();
	
  }
  function getInputVal(id)
  {
	return document.getElementById(id).value;
  }
  function saveForm(name,email,msg)
  {
	var newFormRef = formRef.push();
	newFormRef.set({
		name : name,
		email : email,
		msg : msg
	});
  }
  