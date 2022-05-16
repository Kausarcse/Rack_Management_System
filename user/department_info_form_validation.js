

function Department_Form_Validation()
{


		if(document.getElementById("department_name").value.trim()=="")
		{
      		alert("Please Provide Department Name");
      		document.getElementById("department_name").focus();
      		return false;
		}
		

}

