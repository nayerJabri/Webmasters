
  
const searchForm = document.querySelector("#search_voice");
const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
//const info = document.querySelector(".info");

// The speech recognition interface lives on the browser’s window object
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined

if(SpeechRecognition) {
  console.log("Your Browser supports speech Recognition");
  
  const recognition = new SpeechRecognition();
  recognition.continuous = true;
  recognition.lang = "fr-fr";

  //searchForm.insertAdjacentHTML("beforeend", '<button type="button"><i class="fas fa-microphone"></i></button>');
  //searchFormInput.style.paddingRight = "50px";

  const micBtn = document.getElementById('micro');
  const micIcon = document.getElementById('span');

  micBtn.addEventListener("click", micBtnClick);
  function micBtnClick() {
    if(micIcon.classList.contains("on")) {
       
      recognition.stop(); 
      console.log('stop');// First time you have to allow access to mic!
    }
    else {
       
      recognition.start();
      console.log('start');
    }
  }

  recognition.addEventListener("start", startSpeechRecognition); // <=> recognition.onstart = function() {...}
  function startSpeechRecognition() {
     
    micIcon.classList.add("on");
    searchFormInput.focus();
    console.log("Voice activated, SPEAK");
  }

  recognition.addEventListener("end", endSpeechRecognition); // <=> recognition.onend = function() {...}
  function endSpeechRecognition() {
    micIcon.classList.remove("on");
    searchFormInput.focus();
    console.log("Speech recognition service disconnected");
  }

  //recognition.addEventListener("result", resultOfSpeechRecognition); // <=> recognition.onresult = function(event) {...} - Fires when you stop talking
    recognition.onresult=function(event) {
  	console.log(event);
    const current = event.resultIndex;
    const transcript = event.results[current][0].transcript;
    
    if(transcript.toLowerCase().trim()==="stop") {
      recognition.stop();
    }
    else if(transcript.toLowerCase().trim()==="retour") {
      	console.log('bjt');
		jQuery("body").toggleClass("search-active");	
		recognition.stop();
		return false;
		}
    else if(!searchFormInput.value) {
      if (transcript.toLowerCase().trim()==='accessoires') {
        searchFormInput.value='accessoire';
      }
      else
      searchFormInput.value = transcript;
    }
    else {
      if(transcript.toLowerCase().trim()==="ok") {
        searchForm.submit();
      }
      else if(transcript.toLowerCase().trim()==="supprimer") {
        searchFormInput.value = "";
      }      	
      
      else {
        searchFormInput.value = transcript;
      }
    }
    // searchFormInput.value = transcript;
    // searchFormInput.focus();
    // setTimeout(() => {
    //   searchForm.submit();
    // }, 500);
  }
  
 // info.textContent = 'Voice Commands: "stop recording", "reset input", "go"';
  
}
else {
  console.log("Your Browser does not support speech Recognition");
 // info.textContent = "Your Browser does not support Speech Recognition";
}
