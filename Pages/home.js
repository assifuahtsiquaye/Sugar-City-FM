async function loadPartial(url, targetId) {
  const res = await fetch(url);
  const html = await res.text();
  document.getElementById(targetId).innerHTML = html;
}

function setupThemeSwitcher() {
  const themeBtn = document.getElementById('switch-theme');

  if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
    document.body.classList.remove('light');
  }

  themeBtn.addEventListener('click', () => {
    const isDark = document.body.classList.contains('dark');

    if (!isDark) {
      document.body.classList.add('dark');
      document.body.classList.remove('light');
      localStorage.setItem('theme', 'dark');
    } else {
      document.body.classList.add('light');
      document.body.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  });
}

async function init() {
  await loadPartial('../Header/header.html', 'header-placeholder');
  await loadPartial('../Footer/footer.html', 'footer-placeholder');

  setupThemeSwitcher(); // only runs once header actually exists
}

init();