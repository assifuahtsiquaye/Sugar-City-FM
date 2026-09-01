const dayBtns = document.querySelectorAll('.days');
const dayContents = document.querySelectorAll('.upcoming-event');

function activateDay(day) {
  // reset all buttons and content blocks
  dayBtns.forEach(b => b.classList.remove('active'));
  dayContents.forEach(c => c.classList.remove('active'));

  // activate only the matching pair
  document.querySelector(`.days[data-day="${day}"]`).classList.add('active');
  document.querySelector(`.upcoming-event[data-day="${day}"]`).classList.add('active');

  localStorage.setItem('selectedDay', day);
}

dayBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    activateDay(btn.getAttribute('data-day'));
  });
});

// on page load, restore saved day (or fall back to a default)
const savedDay = localStorage.getItem('selectedDay') || 'mon';
activateDay(savedDay);