if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('js/sw.js?v03')
      .then((reg) => {
       //alert('Registrado nosso primeiro service worker');
      }).catch((err) => {
       // alert('Algo de errado aconteceu');
      });
  });
}

let myPrompt;
const pwaAlert = document.querySelector('.pwa__alert');
const btnPWA = document.querySelector('.pwa__alert__btn');

window.addEventListener('beforeinstallprompt', (e) => {
  e.preventDefault();
  //alert('pronto para instalar');
  myPrompt = e;

  pwaAlert.style.display = 'block';
});

btnPWA.addEventListener('click', () => {
  pwaAlert.style.display = 'none';
  myPrompt.prompt();
  myPrompt.userChoice
    .then((choiceResult) => {
      if (choiceResult === 'accepted') {
        //alert('Usuário aceitou o prompt');
      } else {
       // alert('Usuário cancelou o prompt');
      }
    });
});