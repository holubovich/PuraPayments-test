var currentStep, nextStep, currentInput, processingResponse, currentDot, nextDot;
var showHideIterator = 1;
var boxclick = document.getElementsByClassName('js-click-choice');
var proc = document.getElementsByClassName('js-processingStep');

for (var i = 0; i < boxclick.length; i++) {
  boxclick[i].addEventListener('click', function () {
    addHiddenField(this);
    stepThroughFlow();
  });
}

function stepThroughFlow(){
  currentStep = document.querySelector('.step'+showHideIterator);
  nextStep = document.querySelector('.step'+(showHideIterator+1));
  showThisHideThat(nextStep, currentStep, 'block');
  currentDot = document.querySelector('.dot'+showHideIterator);
  nextDot = document.querySelector('.dot'+(showHideIterator+1));
  if(showHideIterator == 3) {
    document.querySelector('.dots').style.display = 'none';
  } else {
    removeClass(currentDot, 'active');
    addClass(nextDot, 'active');
  }
  showHideIterator++;
  if(showHideIterator == 4) {
    let spin = 1;
    processing(spin);
    processingStep();
  }
}
function appendProcAnswer(answer) {
  if(document.getElementById('answer_'+showHideIterator)) {
    document.getElementById('answer_'+showHideIterator).setAttribute('data-response', answer) 
  }
}

function processingStep() {
  var currentElement = 1;
  let header = document.querySelector('.js-header');
  setTimeout(function(){
    let element = document.getElementById('answer_'+currentElement);
    element.innerText = element.dataset.response;
    element.parentElement.parentElement.classList.add('processing__checklist-item--found');
  }, 1000)
  setTimeout(function(){
    let element = document.getElementById('answer_'+(currentElement+1));
    element.innerText = element.dataset.response;  
    element.parentElement.parentElement.classList.add('processing__checklist-item--found');  }, 2700)
  setTimeout(function(){
    let element = document.getElementById('answer_'+(currentElement+2));
    element.innerText = element.dataset.response;
    element.parentElement.parentElement.classList.add('processing__checklist-item--found');  }, 3400),
  setTimeout( function() {
    var step4 = document.querySelector('.step4')
    step4.style.display = 'none';
    document.querySelector('.step5').style.display = 'block';
    showHideIterator++;
    if(showHideIterator == 5) {
      let header = document.querySelector('.js-header');
      header.innerText = "ALMOST DONE";
    }
  }, 4000);
}

function showThis(showEl, displayType) {
  var scopeEl = showEl;
  scopeEl.style.display = displayType;
}

function showThisHideThat(showEl, hideEl, displayType) {
  var scopeShowEl = showEl;
  var scopeHideEl = hideEl;
  scopeHideEl.style.display = 'none';
  scopeShowEl.style.display = displayType;
}

function addHiddenField(clickedChoice) {
  currentInput = document.querySelector('#js-input'+showHideIterator);
  currentInput.value = clickedChoice.id;
  appendProcAnswer(currentInput.value);
}

function processing(time) {
  var elem = document.getElementById("bar");
  var width = 1;
  var id = setInterval(frame, 4);
  function frame() {
      if (width >= 100) {
          clearInterval(id);
      } else {
          width = width + .1;
          elem.style.width = width + '%';
      }
  }
}

function hasClass(el, className)
{
    if (el.classList)
        return el.classList.contains(className);
    return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
}

function addClass(el, className)
{
    if (el.classList)
        el.classList.add(className);
    else if (!hasClass(el, className))
        el.className += " " + className;
}

function removeClass(el, className)
{
    if (el.classList)
        el.classList.remove(className);
    else if (hasClass(el, className))
    {
        var reg = new RegExp('(\\s|^)' + className + '(\\s|$)');
        el.className = el.className.replace(reg, ' ');
    }
}