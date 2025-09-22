// set year
document.getElementById('year').textContent = new Date().getFullYear();

// simple cases scrolling
function scrollCases(dir){
  const track = document.getElementById('cases-track');
  const width = 340; // approx card + gap
  track.scrollBy({left: dir * width, behavior:'smooth'});
}

// basic form handler (no backend) — show quick local message
document.getElementById('contact-form')?.addEventListener('submit', function(e){
  e.preventDefault();
  alert('Спасибо! Мы получили ваше сообщение и свяжемся в ближайшее время.');
  e.target.reset();
});

// Improve focus for keyboard users on cards
document.querySelectorAll('.card').forEach(c => c.addEventListener('keydown', e => {
  if (e.key === 'Enter' || e.key === ' ') { e.currentTarget.click?.(); }
}));
