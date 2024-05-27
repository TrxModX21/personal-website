"use strict";
var currentTab = 0;
var form = document.getElementById("msform");
var fieldsets = form.querySelectorAll(".tab");
var currentStep = 0;
var numSteps = 5;
showTab(currentTab);


function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
}

function next(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
  stepUp(n);
}

function prev(n) {
  var x = document.getElementsByClassName("tab");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
  stepBack(n);
}

function validateForm() {
  var x,
    y,
    i,
    valid = true;
  x = document.getElementsByClassName("tab");
  // y = x[currentTab].getElementsByTagName("input");
  y = x[currentTab].getElementsByClassName('inputan');

  for (i = 0; i < y.length; i++) {
    if (y[i].value == "" && y[i].hasAttribute('required')) {
      y[i].className += " invalid";
      valid = false;
      Toast.fire({
        icon: 'error',
        title: 'Semua field yang required (*) harus diisi dulu!'
      })
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}

function stepUp(n) {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    600
  );
  currentStep++;
  if (currentStep > numSteps) {
    currentStep = 1;
  }

  var stepper = document.getElementById("stepper1");
  var steps = stepper.getElementsByClassName("step");

  Array.from(steps).forEach((step, index) => {
    let stepNum = index + 1;
    let stepLength = steps.length;
    if (stepNum === currentStep && currentStep < stepLength) {
      addClass(step, "editing");
      // fieldsets[currentStep].style.display = "flex";
    } else {
      removeClass(step, "editing");
    }
    if (stepNum <= currentStep && currentStep < stepLength) {
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");
      fieldsets[currentStep - 1].style.display = "none";
    } else {
      removeClass(step, "done");
    }
    if (currentStep == stepLength - 1) {
      // document.getElementById("nextbtn").textContent = "Finish";
    }
    if (currentStep > stepLength - 1) {
      // document.getElementById("nextbtn").textContent = "Finish";
      addClass(step, "done");
      addClass(step, "active");
      removeClass(step, "editing");
      document.getElementById("nextbtn").disabled = true;
    }
  });
}

function stepBack(n) {
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    600
  );
  currentStep--;
  var stepper = document.getElementById("stepper1");
  var steps = stepper.getElementsByClassName("step");
  let stepLength = steps.length;

  if (currentStep < stepLength - 1) {
    // document.getElementById("backbtn").disabled = false;
    // fieldsets[currentStep + 1].style.display = "none";
    // fieldsets[currentStep].style.display = "flex";
    removeClass(steps[currentStep], "done");
    removeClass(steps[currentStep], "active");
    if (currentStep == 0) {
      // document.getElementById("backbtn").disabled = true;
    }
    else {
      removeClass(steps[currentStep], "done");
      removeClass(steps[currentStep], "active");
    }
  }
}


// 2. Numbering wizard
// var form = document.getElementById("msform");
// var fieldsets = form.querySelectorAll(".tab");
// var currentStep = 0;
// var numSteps = 5;

// for (var i = 1; i < fieldsets.length; i++) {
//   fieldsets[i].style.display = "none";
// }

// function nextStep() {
//   document.getElementById("backbtn").disabled = false;
//   currentStep++;
//   if (currentStep > numSteps) {
//     currentStep = 1;
//   }
//   var stepper = document.getElementById("stepper1");
//   var steps = stepper.getElementsByClassName("step");

//   Array.from(steps).forEach((step, index) => {
//     let stepNum = index + 1;
//     let stepLength = steps.length;
//     if (stepNum === currentStep && currentStep < stepLength) {
//       addClass(step, "editing");
//       fieldsets[currentStep].style.display = "flex";
//     } else {
//       removeClass(step, "editing");
//     }
//     if (stepNum <= currentStep && currentStep < stepLength) {
//       addClass(step, "done");
//       addClass(step, "active");
//       removeClass(step, "editing");
//       fieldsets[currentStep - 1].style.display = "none";
//     } else {
//       removeClass(step, "done");
//     }
//     if (currentStep == stepLength - 1) {
//       document.getElementById("nextbtn").textContent = "Finish";
//     }
//     if (currentStep > stepLength - 1) {
//       document.getElementById("nextbtn").textContent = "Finish";
//       addClass(step, "done");
//       addClass(step, "active");
//       removeClass(step, "editing");
//       document.getElementById("nextbtn").disabled = true;
//     }
//   });
// }

// function backStep() {
//   currentStep--;
//   var stepper = document.getElementById("stepper1");
//   var steps = stepper.getElementsByClassName("step");
//   let stepLength = steps.length;
//   document.getElementById("nextbtn").textContent = "Next";
//   document.getElementById("nextbtn").disabled = false;
//   if (currentStep < stepLength - 1) {
//     document.getElementById("backbtn").disabled = false;
//     fieldsets[currentStep + 1].style.display = "none";
//     fieldsets[currentStep].style.display = "flex";
//     removeClass(steps[currentStep], "done");
//     removeClass(steps[currentStep], "active");
//     if (currentStep == 0) {
//       document.getElementById("backbtn").disabled = true;
//     }
//   } else {
//     removeClass(steps[currentStep], "done");
//     removeClass(steps[currentStep], "active");
//   }
// }

// function prevStep(){
//   fieldsets[currentStep].style.display = "none";
//   currentStep--;
//   fieldsets[currentStep].style.display = "block";
// }

/* get, set class, see https://ultimatecourses.com/blog/javascript-hasclass-addclass-removeclass-toggleclass */

function hasClass(elem, className) {
  return new RegExp(" " + className + " ").test(" " + elem.className + " ");
}

function addClass(elem, className) {
  if (!hasClass(elem, className)) {
    elem.className += " " + className;
  }
}

function removeClass(elem, className) {
  // console.log("elem, className", elem, className);
  var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
  if (hasClass(elem, className)) {
    while (newClass.indexOf(" " + className + " ") >= 0) {
      newClass = newClass.replace(" " + className + " ", " ");
    }
    elem.className = newClass.replace(/^\s+|\s+$/g, "");
  }
  // console.log("elem.className", elem.className);
}
