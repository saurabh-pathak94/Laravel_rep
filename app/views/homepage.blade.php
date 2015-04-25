<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT=0>
</head>
<body>

<p id="demo">0</p> 
<button onclick="ajaxFunction()">Increment Count!</button>
{{ Form::open(array('url' => 'logout')) }}
<p>{{ Form::submit('Logout') }}</p>
{{ Form::close() }}
</body>
</html>
<script type="text/Javascript">
  function ajaxFunction(){
	  var str=document.getElementById('demo').innerText;
	 // window.alert(str+" ");
	  // window.alert("hello");
      var ajaxRequest;  // The variable that makes Ajax possible!

      try{
         // Opera 8.0+, Firefox, Safari 
         ajaxRequest = new XMLHttpRequest();
		// document.getElementById('demo').innerText="lol";
      }catch (e){

         // Internet Explorer Browsers
         try{
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
         }catch (e) {
            try{
               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }catch (e){

               // Something went wrong
               alert("Your browser broke!");
               return false;
            }
         }
      }
	 // window.alert("NO");
	  ajaxRequest.onreadystatechange=function(){ //window.alert("Here");
		  if(ajaxRequest.readyState==4 && ajaxRequest.status==200){
			  document.getElementById('demo').innerText=ajaxRequest.responseText;
			 
		  }
	    }
	   ajaxRequest.open("GET","counter.php?q="+str,true);
       ajaxRequest.send();
    }
 
</script>