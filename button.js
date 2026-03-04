const buttons = document.querySelectorAll('.selector')
const slideshowContainer = document.querySelector('.slideshow-container')
let currentSlide = 0
let autoplayInterval
const autoplayDelay = 5000 // How long it takes to autoscroll
const userClickDelay = 10000 // Increase autoscroll timer if the user clicks

buttons.forEach((button, index) => {
    button.addEventListener('click', function () {
        // Update active button
        buttons.forEach((btn) => btn.classList.remove('active'))
        this.classList.add('active')

        // Find the slide to scroll to based on current slide
        const slideId = this.dataset.slide
        const slide = document.getElementById(slideId)

        if (slide) {
            // Make sure slide actually exists so we don't get an exception in prod
            // Calculate scroll amount
            const slideIndex = Array.from(slideshowContainer.children).indexOf(slide)
            const scrollAmount = slide.offsetWidth * slideIndex

            // Actually scroll the slide. NOTE: If you use scrollIntoView instead of scrollTo it'll scroll you up every time
            slideshowContainer.scrollTo({
                left: scrollAmount,
                behavior: 'smooth',
            })

            currentSlide = index

            // Reset autoplay with longer delay for manual clicks
            clearInterval(autoplayInterval)
            startAutoplay(userClickDelay)
        }
    })
})

function startAutoplay(delay = autoplayDelay) {
    clearInterval(autoplayInterval)
    autoplayInterval = setInterval(() => {
        currentSlide = (currentSlide + 1) % buttons.length
        buttons[currentSlide].click()

        // Reset to normal speed after auto-advance
        clearInterval(autoplayInterval)
        startAutoplay(autoplayDelay)
    }, delay)
}

setTimeout(() => {
    slideshowContainer.scrollLeft = 0
    buttons[0].click()
    startAutoplay()
}, 50)
