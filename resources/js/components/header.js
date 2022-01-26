const menuBtn = document.querySelector("#menuBtn");
const line1 = document.querySelector(".line1");
const line2 = document.querySelector(".line2");
const line3 = document.querySelector(".line3");
const mobileNav = document.querySelector("#mobileNav");
const mobileNavItems = document.querySelectorAll(".mobilenav__list__item");

const toggleMobileNav = () => {
  menuBtn.style.transform = menuBtn.style.transform === "translateX(0)" ? "" : "translateX(0)";
  menuBtn.style.zIndex = menuBtn.style.zIndex === "9999" ? "initial" : "9999";
  line1.style.transform = line1.style.transform === "rotate(45deg)" ? "rotate(0)" : "rotate(45deg)";
  line2.style.transform = line2.style.transform === "scaleY(0)" ? "scaleY(1)" : "scaleY(0)";
  line3.style.transform = line3.style.transform === "rotate(-45deg)" ? "rotate(0)" : "rotate(-45deg)";

  if (mobileNav.style.display === "none") {
    mobileNav.style.display = "block";
    mobileNav.style.opacity = "0.85";
    for (let i = 0; i < mobileNavItems.length; i++) {
      setTimeout(() => {
        mobileNavItems[i].style.transform = "translateX(0)";
      }, 150);
    }
  } else {
    mobileNav.style.opacity = "0";
    for (let i = 0; i < mobileNavItems.length; i++) {
      setTimeout(() => {
        mobileNavItems[i].style.transform = "translateX(150px)";
      }, 150);  
    }
    setTimeout(() => {
      mobileNav.style.display = "none";
      for (let i = 0; i < mobileNavItems.length; i++) {
          mobileNavItems[i].style.transform = "translateX(-150%)";
      }
    }, 600);
  }
}

menuBtn.onclick = () => toggleMobileNav();
mobileNavItems.forEach(navItem => {
  navItem.onclick = () => toggleMobileNav();
});
