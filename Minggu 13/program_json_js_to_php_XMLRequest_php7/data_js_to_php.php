<html>

<script>

 // sumber
 // https://www.youtube.com/watch?v=mNrJDGfQGz0
 // 
 
 var json_string = '[ { "name": "Aragorn", "race": "Human" }, { "name": "Gimli", "race": "Dwarf" } ]';
 document.write(json_string+'<br>');
 document.write('<br>');
 
 json_object = JSON.parse(json_string);
 
 //console.log(json_object[1].name);
 document.write(json_object[1].name+'<br>');
 document.write('<br>');

 for (var i = 0; i < json_object.length; i++) {
   //console.log(json_object[i].name + ' is a ' + json_object[i].race + '.');
   document.write(json_object[i].name + ' is a ' + json_object[i].race + '. <br>');
 }

    // ################################################################
	// 		  tranfer data js to php with XMLHttpRequest()
	// ################################################################

  var http = new XMLHttpRequest();

  //var url = '/post_json_object.php';
  var url = '\post_json_object.php';

//var params = "lorem=ipsum&name=binny";

  http.open('POST', url, true);

//Send the proper header information along with the request
//http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  http.setRequestHeader('Content-type', 'application/json; charset=utf-8');

//http.setRequestHeader("Content-length", params.length);
//http.setRequestHeader("Content-length", json_string.length);
//http.setRequestHeader("Connection", "close");

  http.onreadystatechange = function() {//Call a function when the state changes.
	  if(http.readyState == 4 && http.status == 200) {
		  alert(http.responseText);
	  }
  }

//http.send(params);
  http.send(json_string);


 

	
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
