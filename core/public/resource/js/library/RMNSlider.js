class Slide {
  constructor() {
    this.slides = document.querySelectorAll('.rmn-slider .slide');
    this.slides.forEach(slide => {
      slide.style.backgroundImage = 'url(' +slide.dataset.imageSrc+ ')';
    });
  }

  next() {
    let ix;
    this.slides.forEach((slide, i) => {
      if(slide.classList.contains('active')) {
        slide.classList.remove('active');
        return ix = (i+1)%this.slides.length;
      }
    });
    this.slides[ix].classList.add('active');
  }
}

let slide = new Slide();
setInterval(()=>{slide.next()}, 5000);
