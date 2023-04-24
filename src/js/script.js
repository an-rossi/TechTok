const loginButton = document.querySelector('#login-button');
const loginForm = document.querySelector('#login');

loginButton.addEventListener('click', () => {
  if (loginForm.style.display === 'none') {
    loginForm.style.display = 'block';
  } else {
    loginForm.style.display = 'none';
  }
});
