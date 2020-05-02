function Valid()
{
      for(var i=0;i<myform.elements.length;i++)
      {
        if(myform.elements[i].className=="req" && myform.elements[i].value.length==0)
        {
          alert('requied all fill or password not match');
      
          return false;
         
        }
       
      }
       
	      var email=document.getElementById("email1").value;
        var atpos=email.indexOf("@");
        var dpos=email.lastIndexOf(".");
      if(atpos<1 || dpos<atpos+2 || dpos+2>=X.length)
      {
       alert("email as required currect format ex-tusharkesare@gmail.com");
       return false;
      }
      
 
}
 