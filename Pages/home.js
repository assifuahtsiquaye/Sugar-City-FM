const playBtn = document.getElementById('play');
const pauseBtn = document.getElementById('pause');

function setPlayState(isPlaying) {
  if (isPlaying) {
    playBtn.classList.remove('show');
    pauseBtn.classList.add('show');
  } else {
    playBtn.classList.add('show');
    pauseBtn.classList.remove('show');
  }
  localStorage.setItem('isPlaying', isPlaying);
}

playBtn.addEventListener('click', () => {
  setPlayState(true);
  // audio.play(); ← goes here once you have an audio element
});

pauseBtn.addEventListener('click', () => {
  setPlayState(false);
  // audio.pause(); ← goes here once you have an audio element
});

// restore state on reload
const savedState = localStorage.getItem('isPlaying') === 'true';
setPlayState(savedState);

// Volume control
const volumeSlider = document.getElementById('volume');
const volumeCounter = document.getElementById('volumn-counter');

volumeSlider.addEventListener('input', () => {
  const value = volumeSlider.value;
  volumeCounter.textContent = value;

  // if you have an <audio> element for the stream:
  // audio.volume = value / 100; // audio.volume expects 0–1, not 0–100

  localStorage.setItem('volume', value);
});

// restore saved volume on page load
const savedVolume = localStorage.getItem('volume');
if (savedVolume !== null) {
  volumeSlider.value = savedVolume;
  volumeCounter.textContent = savedVolume;
  // audio.volume = savedVolume / 100;
}

const weeklyShows = document.getElementById('shows');
weeklyShows.addEventListener('click', () => {
  window.location.href = 'weeklyshows.php';
});
