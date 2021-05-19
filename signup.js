console.log("js include success");
const name= document.getElementById('fname');
const email= document.getElementById('email');
const username= document.getElementById('username');
const password= document.getElementById('password');
const cpassword= document.getElementById('cpassword');
const city= document.getElementById('city');
var temp =0;
name.addEventListener('blur',()=>{
    console.log("name is blurred")

    let regex=/^[a-z ,.'-]+$/;
    let str= name.value;
    console.log(regex,str);
    if(regex.test(str)){
        console.log('ok name');
        document.getElementById("fname").classList.remove("mystyle");
        temp++;
    }
    else{
        console.log('no match');
        document.getElementById("fname").classList.add("mystyle");
    }
})




email.addEventListener('blur',()=>{
    console.log("name is blurred");
    let regex = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
    let mail = email.value;
    console.log(regex,mail);
    if(regex.test(mail)){
        console.log('matched');
        document.getElementById("email").classList.remove("mystyle");
        temp++;
    }
    else{
        console.log('no match');
        document.getElementById("email").classList.add("mystyle");

    }
})
username.addEventListener('blur',()=>{
    console.log("username is blurred")
    let regex=/^[a-z ,.'-]+$/;
    let ph= username.value;
    console.log(regex,ph);
    if(regex.test(ph)){
        console.log('matched');
        document.getElementById("username").classList.remove("mystyle");
        temp++;
    }
    else{
        console.log('no match');
        document.getElementById("username").classList.add("mystyle");
    }
    
})



//age.addEventListener('blur',()=>{
  //  console.log("name is blurred");
    ///let regex =  (/^[0-9]+$/);
    //let ag = age.value;
    //if(regex.test(ag)){
    //    console.log('matched');
      //  document.getElementById("age").classList.remove("mystyle");
        //temp++;
    //}
   // else{
     //   document.getElementById("age").classList.add("mystyle");
    //}
    
//})




//city.addEventListener('blur',()=>{
//    console.log("name is blurred")
//})


var pass ;
password.addEventListener('blur',()=>{
    console.log("password is blurred")
    let regex=/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
     pass= password.value;
    console.log(regex,pass);
    if(regex.test(pass)){
        console.log('matched');
        document.getElementById("password").classList.remove("mystyle");
        temp++;
    }
    else{
        console.log('no match');
        document.getElementById("password").classList.add("mystyle");
        alert("minimum : 1lowercase, 1 upper case, 1 special character, total 8 characters")
    }
})

cpassword.addEventListener('blur',()=>{
    console.log("cpassword is blurred")
    let regex=/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    let cpass=cpassword.value;
    console.log(regex,cpass);
    if(regex.test(cpass)){
        console.log('matched');
        document.getElementById("cpassword").classList.remove("mystyle");
        if(cpass==pass){
            console.log('password matched');
            temp++;
        }
    }
    else{
        console.log('no match');
        document.getElementById("cpassword").classList.add("mystyle");
    }
})
console.log(temp);
function submit(){
    if( temp==5 )
    {
        alert("success")
    }
    else {
        alert("fill all the columns correctly")
    }
}