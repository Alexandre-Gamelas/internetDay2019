


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
  }
};