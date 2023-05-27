document.addEventListener("DOMContentLoaded", function() {
    var modal = document.querySelector('.popup');
    var overlay = document.querySelector('.overlay');
    var close = document.querySelector('.close');
    document.body.style.overflow = 'hidden';
    modal.classList.add('open');
    overlay.classList.add('open');
  
    close.onclick = function() {
      modal.classList.remove('open');
      overlay.classList.remove('open');
      document.body.style.overflow = 'unset';
    }
    
    

  });