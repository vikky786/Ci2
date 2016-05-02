function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=1000, height=700, left=10, top=10"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
//   docprint.document.write('<html><head><title> UPPSC Allahabad </title>');
   docprint.document.write('<link href="../mm_health_nutr.css" rel="stylesheet" type="text/css" />') 
   docprint.document.write('</head><body onLoad="self.print()"><center>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</center></body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   
 
}

function Clickheretoprint_Slip()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=500, left=10, top=10"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
//   docprint.document.write('<html><head><title> UPPSC Allahabad </title>');
   docprint.document.write('<link href="../mm_health_nutr.css" rel="stylesheet" type="text/css" />') 
   docprint.document.write('</head><body onLoad="self.print()"><center>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</center></body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   
 
}

function Clickheretoprint_DocRefNo()
{ 
  var disp_setting="toolbar=no,location=no,directories=no,menubar=no,"; 
      disp_setting+="scrollbars=yes,width=700, height=100, left=1, top=1"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
//   docprint.document.write('<html><head><title> UPPSC Allahabad </title>');
   docprint.document.write('<link href="../../mm_health_nutr.css" rel="stylesheet" type="text/css" />') 
   docprint.document.write('</head><body onLoad="self.print()"><center>');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</center></body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   
 
}
 


