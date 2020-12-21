<html>
<head>

<script type = "text/javascript" src="/program_json_js_to_php_use_ajax_php7/include/jquery-3.3.1.js">
</script>



</head>
 


<script>
// jquery-3.2.1.min.js
//  type = "text/javascript" src="/include/jquery-3.3.1.js
// type = "text\javascript" src="\include\jquery-3.3.1.js

 var json_string = '[ { "name": "Aragorn", "race": "Human" }, { "name": "Gimli", "race": "Dwarf" } ]';
 json_object = JSON.parse(json_string);
 
 console.log(json_object[1].name);
 document.write(json_object[1].name+'<br>');
 document.write('<br>');

 for (var i = 0; i < json_object.length; i++) {
   console.log(json_object[i].name + ' is a ' + json_object[i].race + '.');
   document.write(json_object[i].name + ' is a ' + json_object[i].race + '. <br>');
 }
 
 var JSONString = JSON.stringify(json_object);
 document.write('json string : '+JSONString);
 
	// ################################################################
	// 					tranfer data js to php
	// ################################################################
	
	$.ajax({
		type: 'POST',
		//url: '/post_json_object.php',  
		url: '/program_json_js_to_php_use_ajax_php7/2_post_json_object.php',		
		
		//data: {'categories': json_string},	
	    data: {'categories': JSONString},
		
		//contentType: false,
        //cache: false,
		//processData:false,

		// the success method has different order of parameters          
		success: function(data, status, xhr) {
			alert("response was "+data);
		},
		error: function(xhr, status, errorMessage) {
			$("#debug").append("RESPONSE: "+xhr.responseText+", error: "+errorMessage);
		}		
  });
</script>

<?php 
  //  echo "hello coba js <br >"; 
?> 

<script>

 //  var coba = 5;
 //  console.log(coba);
 //  document.write(coba);
 //  document.write('<br>');
</script>


<script>
/*
  // Convert JSON String to JavaScript Object
  var JSONString = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

  var JSONObject = JSON.parse(JSONString);
  console.log(JSONObject);      // Dump all data of the Object in the console
  alert(JSONObject[0]["name"]); // Access Object data
 */ 
</script>


<script>
/*
  // Loop through Object
  var JSONObject = ...; // Replace ... with your JavaScript Object

  for (var key in JSONObject) {
    if (JSONObject.hasOwnProperty(key)) {
      console.log(JSONObject[key]["name"] + ", " + JSONObject[key]["gender"]);
    }
  }
 */ 
</script>

<script>
/*
  var JSONObject = [
    {
      "name": "Jonathan Suh",
      "gender": "male"
    },
    {
      "name": "William Philbin",
      "gender": "male"
    },
    {
      "name": "Allison McKinnery",
      "gender": "female"
    }
  ];

  var JSONString = JSON.stringify(JSONObject);
  alert(JSONString);
 */ 
</script>


</html>
