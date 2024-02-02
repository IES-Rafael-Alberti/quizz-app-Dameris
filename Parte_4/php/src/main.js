function reload() {
    window.location.href = window.location.href.split('?')[0];
    window.location.href = baseUrl + '?retake=true';

    // Check if the element with id 'timer' exists before setting its innerHTML
    let timer__element = document.getElementById('timer');
    if (timer__element) {
        timer__element.innerHTML = 'Time remaining: 5:00';
    }
}

let timer;
let timeLeft = 300; // 5 minutes in seconds

function startTimer() {
    timer = setInterval(function() {
        timeLeft--;

        if (timeLeft <= 0) {
            clearInterval(timer);
            let timer__element = document.getElementById('timer');
            if (timer__element) {
                timer__element.innerHTML = 'Time is up!';
            }
            submitForm();
        } else {
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            let timer__element = document.getElementById('timer');
            if (timer__element) {
                timer__element.innerHTML =
                    'Time remaining: ' + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
            }
        }
    }, 1000);
}

function submitForm() {
    document.getElementById('quizForm').submit();
}

window.onload = function() {
    startTimer();
};