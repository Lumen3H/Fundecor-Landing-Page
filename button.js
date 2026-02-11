const buttons = document.querySelectorAll('.selector');
const carousel = document.querySelector('.slideshow-container');

buttons.forEach(button => {
  button.addEventListener('click', function() {
    // Update active button
    buttons.forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
    
    // Scroll to slide
    const slideIndex = this.dataset.slide;
    console.log('looking for slide with index ', slideIndex)
    
    const slide = document.getElementById(slideIndex);
    console.log('found slide ', slide);
    
    slide.scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'center'
    });
  });
});