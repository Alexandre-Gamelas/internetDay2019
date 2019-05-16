var timer= setInterval(verify_pass,1000);


window.onload=function () {

    document.getElementById("form_estudante").style.display="none";
    document.getElementById("form_scout").style.display="none";

  document.getElementById("role_estudante").onclick=function(){
      console.log("ola");
      document.getElementById("form_estudante").style.display="flex";
      document.getElementById("form_scout").style.display="none";
  };
  document.getElementById("role_scout").onclick=function(){
      document.getElementById("form_scout").style.display="flex";
      document.getElementById("form_estudante").style.display="none";
      console.log("yo");
  };




};


function verify_pass(){
    var pass1=document.getElementById("pass").value;
    var pass2=document.getElementById("ver_pass").value;


    if(pass1==pass2){
        document.getElementById("ver_pass").style.background="linear-gradient(to right, #ffeba4 0%,#ffdb58 100%)"
    }else{
        document.getElementById("ver_pass").style.background="linear-gradient(to right, #FFA5A1 0%,#FF4D2E 100%)"
    }
}