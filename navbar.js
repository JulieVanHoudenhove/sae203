let hamBtn = document.querySelector('.mobile-menu')
let menuMobile = document.querySelector('.mobile-menu-container')

let one = document.querySelector('.lone')
let two = document.querySelector('.ltwo')
let three = document.querySelector('.lthree')

var opened = false;

hamBtn.addEventListener('click', () => {
    if(!opened) {
        opened = true
        one.style.transform = 'rotate(45deg)'
        one.style.transform += 'translateY(19px)'
        three.style.transform = 'rotate(-45deg)'
        three.style.transform += 'translateY(-19px)'
        two.style.display = 'none'
    } else {
        opened = false 
        one.style.transform = 'rotate(0)'
        one.style.transform += 'translateY(0)'
        three.style.transform = 'rotate(0)'
        three.style.transform += 'translateY(0)'
        two.style.display = 'block'
    }
    menuMobile.classList.toggle('mobile-active')
})