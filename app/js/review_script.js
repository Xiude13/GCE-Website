//Testimonial Data
let path = reviewData.template_directory_path;

const testimonials = [
  {
    name: "Johan Smith",
    job: "Reviewer",
    image: "images/rating5.png",
    testimonial:
      "Fantastic company. That was quick, easy, and straightforward. Since June 2022, they have maintained contact and have been watching my system. Very pleased with the way my solar system was set up.",
  },
  {
    name: "Katey Topaz",
    job: "Reviewer",
    image: "images/rating4.png",
    testimonial:
      "Excellent pricing, outstanding service, and lightning-fast installation. After having a brand-new roof put up, we were very anxious about choosing a solar firm to complete the installation. As a stress test, they finished everything in one day without even a single leak or any significant issues. We were deeply moved. Strongly suggested.",
  },
  {
    name: "Trevor Baloyi",
    job: "Reviewer",
    image: "images/rating3.png",
    testimonial:
      "They made purchasing solar panels quite simple. Except that I have a lot lighter conscience regarding our carbon footprint, I don't worry about it anymore. Everyone with a sunny roof ought to at the very least give them a call to find out how much it would cost for their particular circumstance.",
  },
  {
    name: "Suzelle and Mario",
    job: "Reviewer",
    image: "images/rating5.png",
    testimonial:
      "My two Sunsynk batteries were installed on schedule, within the price, and with extreme neatness. They handled the paperwork, so I could take pleasure in my investment. Good work!",
  },
  {
    name: "Richard Mouton",
    job: "Reviewer",
    image: "images/rating3.png",
    testimonial:
      "The level of client service pleased me. In particular, the team leader, Biggie, is very accommodating, kind, and easy to talk to. Every time I phone him, he is humble and answers all of my questions.",
  },
];

//Current Slide
let i = 0;
//Total Slides
let j = testimonials.length;

let testimonialContainer = document.getElementById("testimonial-revcontainer");
let nextBtn = document.getElementById("next");
let prevBtn = document.getElementById("prev");

nextBtn.addEventListener("click", () => {
  i = (j + i + 1) % j;
  displayTestimonial();
});
prevBtn.addEventListener("click", () => {
  i = (j + i - 1) % j;
  displayTestimonial();
});

let displayTestimonial = () => {
  testimonialContainer.innerHTML = `
    <p>${testimonials[i].testimonial}</p>
    <img src=${path}/${testimonials[i].image}>
    <h3>${testimonials[i].name}</h3>
    <h6>${testimonials[i].job}</h6>
  `;
};

window.onload = displayTestimonial;


