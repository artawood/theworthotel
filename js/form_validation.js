function validateForm() {
  var valid = 1;
  var firstname = document.getElementById('firstname');
  var firstname_validation = document.getElementById("firstname_validation");
  var lastname = document.getElementById('lastname');
  var lastname_validation = document.getElementById("lastname_validation");
  var email = document.getElementById('email');
  var email_validation = document.getElementById("email_validation");
  var message_validation = document.getElementById("message_validation");
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
  if (firstname.value === "") {
    valid = 0;
    firstname_validation.innerHTML = "Field Required";
    firstname_validation.style.display = "block";
    firstname_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    firstname_validation.style.display = "none";
    firstname_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (lastname.value === "") {
    valid = 0;
    lastname_validation.innerHTML = "Field Required";
    lastname_validation.style.display = "block";
    lastname_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    lastname_validation.style.display = "none";
    lastname_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (email.value === "") {
    valid = 0;
    email_validation.innerHTML = "Field Required";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    email_validation.style.display = "none";
    email_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if(!filter.test(email.value)) {
    valid = 0;
    email_validation.innerHTML = "Invalid email address";
    email_validation.style.display = "block";
    email_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    email_validation.style.display = "none";
    email_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (message.value === "") {
    valid = 0;
    message_validation.innerHTML = "Field Required";
    message_validation.style.display = "block";
    message_validation.parentNode.style.backgroundColor = "#FFDFDF";
  } else {
    message_validation.style.display = "none";
    message_validation.parentNode.style.backgroundColor = "transparent";
  }
  
  if (!valid)
    return false;
}