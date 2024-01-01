function fun(){
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
  
    if(username=="santosh"&& password=="santosh"){
      alert("login successful");
      return true;
    }

    else if(username=="" && password==""){
      alert("both are mandetory");
      return false;
    }

    else if(username!="santosh"){
      alert("username is not correct");
      return false;
    }

    else if(password!="santosh"){
      alert("password is not correct");
      return false;
    }
  
 }
 
 // defining the for newaddmission_page.html logics
 function news(){
 var name=document.getElementById("name").value;
 var phone=document.getElementById("phone").value;
 var grade=document.getElementById("class").value;
 
 if(name===""||phone===""||grade===""){
    alert("all the field are mandetory");
    return false;
 }
 else{
    alert("successfully added the new student");    
    return true;
  }
 }



//  update define
function update(){
  alert("updated success");
  return true;
}
 
 
 
 