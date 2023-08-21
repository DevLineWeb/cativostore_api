$('.slider-1').slick({
  dots: true,
  infinite: true,
  speed: 700,
  slidesToShow: 5,
  slidesToScroll: 5,
  adaptiveHeight: false,
  autoplay: false,
  responsive: [
    {
      breakpoint: 1620,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});


//PORTIFÓLIO DROPDOWN
$('.prodClass01').click(function () {
  $('nav ul .class01show').toggleClass("show")
  $('nav ul .arrow01').toggleClass("rotate")
}
)
$('.prodClass02').click(function () {
  $('nav ul .class02show').toggleClass("show")
  $('nav ul .arrow02').toggleClass("rotate")
}
)
$('.prodClass03').click(function () {
  $('nav ul .class03show').toggleClass("show")
  $('nav ul .arrow03').toggleClass("rotate")
}
)

$('.navbar-2 ul ul li').click(function () {
  $(this).addClass("active").siblings().removeClass("active");
}
)

//FILTER SHOW

$('.filter-show').click(function () {
  $('.nav-filter').toggleClass("show")
  $('.sidebar i').toggleClass("rotate")
});

//ACOUNT SHOW

document.addEventListener('click', (e) => {
  const isDropdownBtn = e.target.classList.contains('userNav')
  if (!isDropdownBtn && e.target.closest('.user_submenu') != null) return;

  if (isDropdownBtn) {

    $('.user-background').toggleClass("show")

  }
  else {

    $('.user-background').removeClass("show")
  }
})


//CART SHOW
document.addEventListener('click', (e) => {
  const isDropdownBtn4 = e.target.classList.contains('cartWindown')
  if (!isDropdownBtn4 && e.target.closest('.cart-submenu') != null) return;
  if (isDropdownBtn4) {

    $('.cart-background').toggleClass("show")

  }
  else {

    $('.cart-background').removeClass("show")
  }
})
//MORE SHOW

document.addEventListener('click', (e) => {
  const isDropdownBtn2 = e.target.classList.contains('configNav')
  if (!isDropdownBtn2 && e.target.closest('.configSubmenu') != null) return;

  if (isDropdownBtn2) {

    $('.configMenu').toggleClass("move")
    $('.configSubmenu').toggleClass("show")

  }
  else {

    $('.configSubmenu').removeClass("show")
    $('.configMenu').removeClass("move")
  }
})

//NOTIFY SHOW 
document.addEventListener('click', (e) => {
  const isDropdownBtn3 = e.target.classList.contains('notifyWindown')
  if (!isDropdownBtn3 && e.target.closest('.notify-submenu') != null) return;

  if (isDropdownBtn3) {

    $('.notify-submenu').toggleClass("show")

  }
  else {

    $('.notify-submenu').removeClass("show")
  }
});

//ALTERA VALOR TOTAL DO ITEM CONFORME PREENCHIMENTO DO INPUT NO CARRINHO
var soma = 0;
var itemSell = document.getElementsByClassName('itemSell');
var itemUn = document.getElementsByClassName('itemUn');
var totalUn = document.getElementsByClassName('totalUn');
var totalCart = document.getElementById('totalCart')

const currency = function (number) {
  return new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'BRL', minimumFractionDigits: 2 }).format(number);
};

function CalSubtotal() {
  soma = 0;
  for (i = 0; i < itemSell.length; i++) {
    totalUn[i].innerText = (itemSell[i].value) * (itemUn[i].value);
    totalUn[i].innerText = currency(totalUn[i].innerText);
    soma = soma + (itemSell[i].value) * (itemUn[i].value);
  }
  totalCart.innerText = currency(soma);
}
CalSubtotal();



