function validateForm(myform)
{
    var alert1 =document.getElementById("alert");
    

    if(document.myform.fname.value==="")
    {
        alert1.innerHTML="Please fill in your first name";
        document.myform.fname.focus();
        return false;
    }
    if(document.myform.lname.value==="")
    {
        alert1.innerHTML="Please fill in your last name";
        document.myform.lname.focus();
        return false;
    }
    if(document.myform.city.value()==="")
    {
        alert1.innerHTML="Please fill in your city name";
        document.myform.city.focus();
        return false;
    }
    
    return true;
}