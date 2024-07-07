function validateForm() {
    var sid = document.getElementById('sid').value;
    var name = document.getElementById('name').value;
    var fname = document.getElementById('fname').value;
    var mname = document.getElementById('mname').value;
    var dob = document.getElementById('dob').value;
    var gender = document.querySelector('gender').value;
    var email = document.getElementById('email').value;
    var pincode = document.getElementById('pincode').value;
    var mobileno = document.getElementById('mobileno').value;
    var address = document.getElementById('address').value;
    
    // Regular expressions for validation
    var emailRegex = /^\S+@\S+\.\S+$/;
    var pincodeRegex = /^[1-9][0-9]{5}$/; // Indian pincode format (6 digits)
    var mobilenoRegex = /^[6-9]\d{9}$/; // Indian mobile number format (10 digits starting with 6, 7, 8, or 9)
    

    // Validate each field
    if (sid.trim() === '') {
        setErrorMsg('Student ID cannot be blank.');
        return false;
    }
    if (name.trim() === '') {
        setErrorMsg('Name cannot be blank.');
        return false;
    }
    if (fname.trim() === '') {
        setErrorMsg("Father's Name cannot be blank.");
        return false;
    }
    if (mname.trim() === '') {
        setErrorMsg("Mother's Name cannot be blank.");
        return false;
    }
    if (dob === '') {
        setErrorMsg('Date of Birth cannot be blank.');
        return false;
    }
    if (!gender) {
        setErrorMsg("gender cannot be blank.");
        return false;
       
    }
    if (!emailRegex.test(email)) {
        setErrorMsg('Enter a valid Email Address.');
        return false;
    }
    if (!pincodeRegex.test(pincode)) {
        setErrorMsg('Enter a valid Pincode (6 digits).');
        return false;
    }
    if (!mobilenoRegex.test(mobileno)) {
        setErrorMsg('Enter a valid Mobile Number (10 digits starting with 6, 7, 8, or 9).');
        return false;
    }
    if (address.trim() === '') {
        setErrorMsg('Address cannot be blank.');
        return false;
    }

    // If all validations pass, form is submitted
    return true;
}

function setErrorMsg(msg) {
    var error = document.getElementById('error');
    error.innerHTML = msg;
}

// Function to clear error message when focus is on the input fields
document.addEventListener('input', function(event) {
    if (event.target.tagName.toLowerCase() === 'input' || event.target.tagName.toLowerCase() === 'select' || event.target.tagName.toLowerCase() === 'textarea') {
        setErrorMsg('');
    }
});