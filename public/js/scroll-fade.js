

const cards = document.querySelectorAll('.card-content')

cards.forEach(card => {
    card.querySelector(':first-child').classList.add('load-left');
    card.lastElementChild.classList.add('load-right');
})

const observer = new IntersectionObserver(entries => {
    
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.querySelector(':first-child').classList.add('loaded')
            entry.target.lastElementChild.classList.add('loaded')
            // console.log(entry)
        }
        //  else {
        //     entry.target.querySelector(':first-child').classList.remove('loaded')
        //     entry.target.lastElementChild.classList.remove('loaded')
        //   }
    })
},{
    threshold:.6,
})

cards.forEach(card => {
    observer.observe(card)
})

$('html, body').animate({
    scrollTop: $('#ict-title').offset().top
    }, 'slow');