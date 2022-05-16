

function Form_Validation()
{


		if(document.getElementById("receiving_location").value.trim()=="")
		{
      		alert("Please Provide Receiving Location");
      		document.getElementById("receiving_location").focus();
      		return false;
		}
		// else if(document.getElementById("received_by").value=="select")
		// {
      	// 	alert("Please Select Received By");
      	// 	document.getElementById("received_by").focus();
      	// 	return false;
		// }
		// else if(document.getElementById("date_of_receipt").value.trim()=="")
		// {
      	// 	alert("Please Provide Date Of Receipt");
      	// 	document.getElementById("date_of_receipt").focus();
      	// 	return false;
		// }


		if(document.getElementById("roll_no").value.trim()=="")
		{
      		alert("Please Provide Roll No");
      		document.getElementById("roll_no").focus();
      		return false;
		}
		else if(document.getElementById("pp_number").value.trim()=="")
		{
      		alert("Please Provide Pp Number");
      		document.getElementById("pp_number").focus();
      		return false;
		}
		else if(document.getElementById("work_order_number").value.trim()=="")
		{
      		alert("Please Provide Work Order Number");
      		document.getElementById("work_order_number").focus();
      		return false;
		}
		else if(document.getElementById("customer_name").value.trim()=="")
		{
      		alert("Please Provide Customer Name");
      		document.getElementById("customer_name").focus();
      		return false;
		}
		else if(document.getElementById("shade").value.trim()=="")
		{
      		alert("Please Provide Shade");
      		document.getElementById("shade").focus();
      		return false;
		}
		else if(document.getElementById("construction").value.trim()=="")
		{
      		alert("Please Provide Construction");
      		document.getElementById("construction").focus();
      		return false;
		}
		else if(document.getElementById("composition").value.trim()=="")
		{
      		alert("Please Provide Composition");
      		document.getElementById("composition").focus();
      		return false;
		}
		else if(document.getElementById("weave").value.trim()=="")
		{
      		alert("Please Provide Weave");
      		document.getElementById("weave").focus();
      		return false;
		}
		else if(document.getElementById("length").value.trim()=="")
		{
      		alert("Please Provide Length");
      		document.getElementById("length").focus();
      		return false;
		}
		else if(isNaN(document.getElementById("length").value.trim()))
		{
      		alert("Length should be Numeric");
			document.getElementById("length").value="";
      		document.getElementById("length").focus();
      		return false;
		}
		else if(document.getElementById("finished_width").value.trim()=="")
		{
      		alert("Please Provide Finished Width");
      		document.getElementById("finished_width").focus();
      		return false;
		}
		// else if(isNaN(document.getElementById("finished_width").value.trim()))
		// {
  //     		alert("Finished Width should be Numeric");
		// 	document.getElementById("finished_width").value="";
  //     		document.getElementById("finished_width").focus();
  //     		return false;
		// }
		else if(document.getElementById("finished_type").value.trim()=="")
		{
      		alert("Please Provide Finished Type");
      		document.getElementById("finished_type").focus();
      		return false;
		}
		// else if(document.getElementById("row_number").value.trim()=="")
		// {
  //     		alert("Please Provide Row Number");
  //     		document.getElementById("row_number").focus();
  //     		return false;
		// }
		// else if(isNaN(document.getElementById("row_number").value.trim()))
		// {
  //     		alert("Row Number should be Numeric");
		// 	document.getElementById("row_number").value="";
  //     		document.getElementById("row_number").focus();
  //     		return false;
		// }
		else if(document.getElementById("rack_number").value.trim()=="")
		{
      		alert("Please Provide Rack Number");
      		document.getElementById("rack_number").focus();
      		return false;
		}
		// else if(isNaN(document.getElementById("rack_number").value.trim()))
		// {
  //     		alert("Rack Number should be Numeric");
		// 	document.getElementById("rack_number").value="";
  //     		document.getElementById("rack_number").focus();
  //     		return false;
		// }
		else if(document.getElementById("cubic_number").value.trim()=="")
		{
      		alert("Please Provide Cubic Number");
      		document.getElementById("cubic_number").focus();
      		return false;
		}
		// else if(isNaN(document.getElementById("rack_hole_number").value.trim()))
		// {
  //     		alert("Rack Hole Number should be Numeric");
		// 	document.getElementById("rack_hole_number").value="";
  //     		document.getElementById("rack_hole_number").focus();
  //     		return false;
		// }
		
		// else if(document.getElementById("bin_card_number").value.trim()=="")
		// {
  //     		alert("Please Provide Bin Card Number");
  //     		document.getElementById("bin_card_number").focus();
  //     		return false;
		// }

		else if(document.getElementById("quantiy").value.trim()=="")
		{
      		alert("Please Provide Quantiy");
      		document.getElementById("quantiy").focus();
      		return false;
		}
		else if(isNaN(document.getElementById("quantiy").value.trim()))
		{
      		alert("Quantiy should be Numeric");
			document.getElementById("quantiy").value="";
      		document.getElementById("quantiy").focus();
      		return false;
		}
		else if(document.getElementById("uom").value.trim()=="")
		{
      		alert("Please Provide Uom");
      		document.getElementById("uom").focus();
      		return false;
		}

}

