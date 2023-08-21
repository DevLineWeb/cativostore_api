document.addEventListener('click', (e) => {
    const isDropdownBtn = e.target.classList.contains('dellBtn')
    if (!isDropdownBtn && e.target.closest('.modalDell') != null) return;
  
    if (isDropdownBtn) {
  
      $('.modalBack').toggleClass("show")
  
    }
    else {
  
      $('.modalBack').removeClass("show")
    }
  })