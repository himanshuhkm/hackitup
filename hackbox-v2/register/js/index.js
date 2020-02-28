var icon = document.getElementById("icon");
var icon1 = document.getElementById("a");
var icon2 = document.getElementById("b");
var icon3 = document.getElementById("c");
var nav = document.getElementById('nav');
var blue = document.getElementById("blue");
$(".hamburger-icon").on('click', function() {
  $("nav ul").toggleClass('hidden');
});

icon.addEventListener('click', function() {
  icon1.classList.toggle('a');
  icon2.classList.toggle('c');
  icon3.classList.toggle('b');
  nav.classList.toggle('show');
  blue.classList.toggle('slide');
});

var questions = [
    {question:"What's your full name?"},
    {question:"What's your email?", pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/},
    {question:"What's your phone number?"},
    {question:"Which college do you study in?"},
    {question:"Registration number of college?"},
    {question:"Enter a password", type: "password"}
  ]
  
  var onComplete = function() {
      var h1 = document.createElement('h1')
      h1.style.color = "#5AA5F9"
      document.getElementById("loading-spinner").style.visibility = "visible";
      $.ajax({
          type: "POST",
          url: "https://hackitup.herokuapp.com/hackbox-register",
          data: {
              name: questions[0].answer,
              email: questions[1].answer, 
              phonenumber: questions[2].answer,
              college: questions[3].answer,
              registration: questions[4].answer,
              password: questions[5].answer
          },
          success: function (response) {
              document.getElementById("loading-spinner").style.visibility = "hidden";
              h1.appendChild(document.createTextNode('Welcome to Hackbox 2.0, ' + questions[0].answer + '!'))
          },
          error: function(xhr, textStatus, errorThrown) {
              document.getElementById("loading-spinner").style.visibility = "hidden";
              if (xhr.status == 409) {
                  h1.appendChild(document.createTextNode('You have already registered for Hackbox v2!'))
              }
              else if (xhr.status == 400) {
                  h1.appendChild(document.createTextNode('Incorrect details. Please check the form again!'))
              }
              else {
                  h1.appendChild(document.createTextNode('Our server is fighting 404. Be right back! ;)'))
              }
          } 
      });
     setTimeout(function() {
        register.parentElement.appendChild(h1)
        setTimeout(function() { h1.style.opacity = 1 }, 50)
     }, 1000)
  }
  
  ;(function(questions, onComplete) {
      var tTime = 100
      var wTime = 200
      var eTime = 1000
      if (questions.length == 0) return
      var position = 0
      putQuestion()
      forwardButton.addEventListener('click', validate)
      inputField.addEventListener('keyup', function(e) {
          transform(0, 0)
          if (e.keyCode == 13) validate()
      })
      previousButton.addEventListener('click', function(e) {
          if (position === 0) return
          position -= 1
          hideCurrent(putQuestion)
      })

      function putQuestion() {
          inputLabel.innerHTML = questions[position].question
          inputField.type = questions[position].type || 'text'
          inputField.value = questions[position].answer || ''
          inputField.focus()
          progress.style.width = position * 100 / questions.length + '%'
          previousButton.className = position ? 'ion-android-arrow-back' : 'ion-person'
          showCurrent()
      }
  
      function validate() {
          var validateCore = function() {      
            a = inputField.value.match(questions[position].pattern || /.+/)
            if (inputField.type == "password") {
              b = (inputField.value.length > 6);
              return a&&b;
            }
            else if (inputField.type == "number") {
              c = (inputField.value.length == 10);
              return a&&b&&c;
            }
            else {
              return a;
            } 
          }
          if (!questions[position].validate) questions[position].validate = validateCore
          if (!questions[position].validate()) wrong(inputField.focus.bind(inputField))
          else ok(function() {
              if (questions[position].done) questions[position].done()
              else questions[position].answer = inputField.value
              ++position
              if (questions[position]) hideCurrent(putQuestion)
              else hideCurrent(function() {
                  register.className = 'close'
                  progress.style.width = '100%'
                  onComplete()
              })
          })
      }
  
      function hideCurrent(callback) {
          inputContainer.style.opacity = 0
          inputLabel.style.marginLeft = 0
          inputProgress.style.width = 0
          inputProgress.style.transition = 'none'
          inputContainer.style.border = null
          setTimeout(callback, wTime)
      }
  
      function showCurrent(callback) {
          inputContainer.style.opacity = 1
          inputProgress.style.transition = ''
          inputProgress.style.width = '100%'
          setTimeout(callback, wTime)
      }
  
      function transform(x, y) {
          register.style.transform = 'translate(' + x + 'px ,  ' + y + 'px)'
      }
  
      function ok(callback) {
          register.className = ''
          setTimeout(transform, tTime * 0, 0, 10)
          setTimeout(transform, tTime * 1, 0, 0)
          setTimeout(callback, tTime * 2)
      }
  
      function wrong(callback) {
          register.className = 'wrong'
          for (var i = 0; i < 6; i++)
              setTimeout(transform, tTime * i, (i % 2 * 2 - 1) * 20, 0)
          setTimeout(transform, tTime * 6, 0, 0)
          setTimeout(callback, tTime * 7)
      }
  
  }(questions, onComplete))