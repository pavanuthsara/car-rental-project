function checkPass()
{
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;

    if(pass1 != pass2)
        {
            alert("passwords do not match");
        }
}