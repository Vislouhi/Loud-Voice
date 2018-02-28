<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
   
</head>






<body>


<p class="razdel">
test
</p>
<div >

<script>



  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         var myObj = JSON.parse(this.responseText);
          //document.writeln("<p>"+JSON.stringify(myObj[1])+"</p>");
		      
 
  var i;
i=0;
document.writeln('<style type="text/css">table{width: 80%;background: #f0f0f0;font-size:120%;margin-left: auto;margin-right: auto;}</style>');
document.writeln('<style type="text/css">p{width: 80%;background: #f0f0f0;font-size:120%;}</style>');
document.writeln('<style type="text/css">th{text-align: left;width: 80%;background: #f0f0f0;font-size:120%;}</style>');
document.writeln('<style type="text/css">td{width: 20%;background: #f0f0f0;font-size:120%;}</style>');
do{


document.writeln('<table><tr><th><p >'+myObj[i].requests+"</p></th><td>уф</td></tr></table>");

i++;

}while(i<myObj.length); 





}
  };
  xmlhttp.open("GET", "http://vislouhi.000webhostapp.com/giveMeRequest.php", true);
  xmlhttp.send();
 




</script>
   </div> 
</body>
</html>
