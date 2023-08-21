var formSp = document.querySelector('#form1')
var formAc = document.querySelector('#form2')
var formVt = document.querySelector('#form3')
var btnColor = document.querySelector('.btnColor')

document.querySelector('#class1').
    addEventListener('click', () => {
        formSp.style.left = "45px"
        formAc.style.left = "500px"
        formVt.style.left = "1000px"
        btnColor.style.left = "0px"
    })
document.querySelector('#class2').
    addEventListener('click', () => {
        formSp.style.left = "-500px"
        formAc.style.left = "45px"
        formVt.style.left = "500px"
        btnColor.style.left = "145px"
    })
document.querySelector('#class3').
    addEventListener('click', () => {
        formSp.style.left = "-500px"
        formAc.style.left = "-1000px"
        formVt.style.left = "45px"
        btnColor.style.left = "277px"
    })