//event de click pour le menu
var btn = document.getElementById("click_img");
var menues = document.getElementById("menues");

var coeurvideclick = document.getElementById("coeurvide");
var coeurfull  = document.getElementById("coeurfull");

var coeurvideclick1 = document.getElementById("coeurvide1");
var coeurfull1 = document.getElementById("coeurfull1");

var coeurvideclick2 = document.getElementById("coeurvide2");
var coeurfull2 = document.getElementById("coeurfull2");

var coeurvideclick3 = document.getElementById("coeurvide3");
var coeurfull3 = document.getElementById("coeurfull3");


var coeurvideclick4 = document.getElementById("coeurvide4");
var coeurfull4 = document.getElementById("coeurfull4");


var coeurvideclick5 = document.getElementById("coeurvide5");
var coeurfull5 = document.getElementById("coeurfull5");





window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in your form HTML above

  var form = document.getElementById("my-form");
  // var button = document.getElementById("my-form-button");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  function success() {
    form.reset();
    status.classList.add("success");
    alert("Thanks!");
  }

  function error() {
    status.classList.add("error");
    alert("Oops! There was a problem.");
  }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
} window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in your form HTML above

  var form = document.getElementById("my-form");
  // var button = document.getElementById("my-form-button");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  // function success() {
  //   form.reset();
  //   status.classList.add("success");
  //   status.innerHTML = "Thanks!";
  // }

  // function error() {
  //   status.classList.add("error");
  //   alert("Oops! There was a problem.");
  // }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}


// form evenement

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

btn.addEventListener('click', vues);

function vues() {
  menues.classList.toggle('vue');
}





coeurvideclick.addEventListener('click',a);
function a(){
  coeurfull.classList.add('nn');
  
}
coeurfull.addEventListener('click',a1);
function a1(){
 coeurfull.classList.remove('nn')
  
}


coeurvideclick1.addEventListener('click',b);
function b(){
  coeurfull1.classList.add('nn');
  
}
coeurfull1.addEventListener('click',b1);
function b1(){
 coeurfull1.classList.remove('nn')
  
}

coeurvideclick2.addEventListener('click',c);
function c(){
  coeurfull2.classList.add('nn');
  
}
coeurfull2.addEventListener('click',c1);
function c1(){
 coeurfull2.classList.remove('nn')
  
}
coeurvideclick3.addEventListener('click',d);
function d(){
  coeurfull3.classList.add('nn');
  
}
coeurfull3.addEventListener('click',d1);
function d1(){
 coeurfull3.classList.remove('nn')
  
}

coeurvideclick4.addEventListener('click',e);
function e(){
  coeurfull4.classList.add('nn');
  
}
coeurfull4.addEventListener('click',e1);
function e1(){
 coeurfull4.classList.remove('nn')
  
}

coeurvideclick5.addEventListener('click',f);
function f(){
  coeurfull5.classList.add('nn');
  
}
coeurfull5.addEventListener('click',f1);
function f1(){
 coeurfull5.classList.remove('nn')
  
}


