function validate() {
    if(document.finvite.username.value=="") {
        alert("Please provide your Username! ");
        document.finvite.username.focus();
        return false; }
    if(document.finvite.firstname.value=="") {
        alert("Please provide your First Name! ");
        document.finvite.firstname.focus();
        return false; }
    if(document.finvite.lastname.value=="") {
        alert("Please provide your Last Name! ");
        document.finvite.lastname.focus();
        return false; }
    var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(!document.finvite.pass.value.match(passw)) {
        alert("Please provide password between 6 to 20 characters which contain at least one numeric digit, one uppercase, and one lowercase letter! ");
        document.finvite.pass.focus();
        return false;
    }
    var password=document.getElementById("password").value;
    var cpassword=document.getElementById("confirm_password").value;
    if(password!=cpassword){
        alert("Passwords Do Not Match!");
        document.finvite.cpass.focus();
        return false;
    }
    var email=document.finvite.useremail.value;
    if(!(/([a-z0-9_.])+(@)(gla.ac.in)$/.test(email))){
        alert("Please Enter a Valid GLA Email Address!");
        document.finvite.useremail.focus();
        return false;
    }
    if(document.finvite.gender.value==""){
        alert("Please Select Your Gender!");
        document.finvite.gender.focus();
        return false;
    }
    return true;
    }