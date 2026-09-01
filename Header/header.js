// Theme switcher
const themeBtn = document.getElementById('switch-theme');

if (localStorage.getItem('theme') === 'dark'){
  document.body.classList.add('dark')
  document.body.classList.remove('light')
//   themeBtn.innerText = 'Light Mode';
}

themeBtn.addEventListener('click', () => {
  const isDark = document.body.classList.contains('dark');

  if (!isDark) {
    document.body.classList.add('dark');
    document.body.classList.remove('light');
    // themeBtn.innerText = 'Light Mode';
    themeBtn.style.backgroundColor = 'White';
    localStorage.setItem('theme', 'dark');
  }
  else {
    document.body.classList.add('light');
    document.body.classList.remove('dark');
    // themeBtn.innerText = 'Dark Mode';
    themeBtn.style.backgroundColor = 'rgb(223, 222, 222)';
    localStorage.setItem('theme', 'light');
  }
});

const icon = document.getElementById('menu-icon');
const pop = document.getElementById('popup');

icon.addEventListener('click', function(){
    popup.classList.toggle('show')
});

document.addEventListener('click', function(e){
    if(!icon.contains(e.target) && !pop.contains(e.target)){
    popup.classList.remove('show')
}
});




