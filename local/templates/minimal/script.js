document.addEventListener('DOMContentLoaded', function() {
    // set year
    const yearSpan = document.getElementById('year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // simple cases scrolling
    window.scrollCases = function(dir){
      const track = document.getElementById('cases-track');
      if (track) {
        const width = 340; // approx card + gap
        track.scrollBy({left: dir * width, behavior:'smooth'});
      }
    }

    // basic form handler (no backend) — show quick local message
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e){
          e.preventDefault();
          alert('Спасибо! Мы получили ваше сообщение и свяжемся в ближайшее время.');
          e.target.reset();
        });
    }

    // Improve focus for keyboard users on cards
    document.querySelectorAll('.card').forEach(c => {
        c.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                e.currentTarget.click?.();
            }
        });
    });
});
