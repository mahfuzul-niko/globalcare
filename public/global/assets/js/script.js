// ===============================
// Dynamic width of header search bar select
// ===============================
const select = document.querySelector("select");
const span = document.createElement("span");
span.style.visibility = "hidden";
span.style.position = "absolute";
span.style.whiteSpace = "pre";
span.style.font = window.getComputedStyle(select).font;
document.body.appendChild(span);

function resizeSelect() {
  span.textContent = select.options[select.selectedIndex].text;
  select.style.width = span.offsetWidth + 35 + "px";
}

select.addEventListener("change", resizeSelect);
window.addEventListener("DOMContentLoaded", resizeSelect);

// ===============================
// Top Nav Menu (Horizontal Scroll with Arrows)
// ===============================
document.addEventListener("DOMContentLoaded", function () {
  const menuWrapper = document.querySelector(".top-nav-menu-wrapper");
  const menu = menuWrapper.querySelector(".top-nav-menu ul");
  const leftArrow = menuWrapper.querySelector(".nav-arrow.left");
  const rightArrow = menuWrapper.querySelector(".nav-arrow.right");
  const menuContainer = menuWrapper.querySelector(".top-nav-menu");

  let scrollIndex = 0;
  const visibleCount = 6; // How many items to show at once (adjust as needed)
  const liWidth = () => menu.querySelector("li").offsetWidth + 20; // 20 = gap

  // Show/hide arrows based on scroll position
  function updateArrows() {
    const totalItems = menu.children.length;
    leftArrow.style.display = scrollIndex <= 0 ? "none" : "";
    rightArrow.style.display =
      scrollIndex >= totalItems - visibleCount ? "none" : "";
  }

  // Scroll menu left/right
  function scrollMenu(dir) {
    const totalItems = menu.children.length;
    scrollIndex += dir;
    if (scrollIndex < 0) scrollIndex = 0;
    if (scrollIndex > totalItems - visibleCount)
      scrollIndex = totalItems - visibleCount;
    menu.style.transform = `translateX(-${scrollIndex * liWidth()}px)`;
    updateArrows();
  }

  rightArrow.addEventListener("click", () => scrollMenu(3)); // scroll 3 items
  leftArrow.addEventListener("click", () => scrollMenu(-3));

  // Responsive: recalculate on resize
  window.addEventListener("resize", () => {
    menu.style.transform = `translateX(-${scrollIndex * liWidth()}px)`;
    updateArrows();
  });

  // Initial check after DOM is ready
  setTimeout(() => {
    updateArrows();
  }, 100);
});

// ===============================
// Top Mega Menu Hover (Show/Hide Mega Menus)
// ===============================
document.querySelectorAll(".has-mega-menu").forEach((item) => {
  item.addEventListener("mouseenter", function () {
    const menu = this.getAttribute("data-menu");
    // Hide all mega menus
    document
      .querySelectorAll('[id^="mega-menu-"]')
      .forEach((m) => m.classList.add("hidden"));
    // Show the relevant mega menu
    if (menu) {
      const megaMenu = document.getElementById("mega-menu-" + menu);
      if (megaMenu) {
        megaMenu.classList.remove("hidden");
        document.body.classList.add("mega-menu-open"); // Prevent body scroll
      }
    }
  });
  item.addEventListener("mouseleave", function () {
    setTimeout(() => {
      const menu = this.getAttribute("data-menu");
      const megaMenu = document.getElementById("mega-menu-" + menu);
      if (megaMenu && !megaMenu.matches(":hover")) {
        megaMenu.classList.add("hidden");
        // Check if any mega menu is still open
        const anyOpen = Array.from(
          document.querySelectorAll('[id^="mega-menu-"]')
        ).some((m) => !m.classList.contains("hidden"));
        if (!anyOpen) {
          document.body.classList.remove("mega-menu-open");
        }
      }
    }, 100);
  });
});

// Keep mega menu open if hovered
document.querySelectorAll('[id^="mega-menu-"]').forEach((menu) => {
  menu.addEventListener("mouseenter", function () {
    this.classList.remove("hidden");
    document.body.classList.add("mega-menu-open"); // Prevent body scroll
  });
  menu.addEventListener("mouseleave", function () {
    this.classList.add("hidden");
    // Check if any mega menu is still open
    const anyOpen = Array.from(
      document.querySelectorAll('[id^="mega-menu-"]')
    ).some((m) => !m.classList.contains("hidden"));
    if (!anyOpen) {
      document.body.classList.remove("mega-menu-open");
    }
  });
});

// ===============================
// Side Nav Menu (Accordion with Animated Dropdowns)
// ===============================
document.addEventListener("DOMContentLoaded", function () {
  // 1. Collapse all submenus initially
  document.querySelectorAll("#sidenav-list .sidenav-submenu").forEach((ul) => {
    ul.classList.remove("open");
  });

  // 2. Handle click events for accordion behavior
  document
    .getElementById("sidenav-list")
    .addEventListener("click", function (e) {
      // Only handle clicks on <a> elements that have a submenu
      const btn = e.target.closest("a");
      if (!btn) return;

      // Find the next sibling UL (submenu)
      const submenu = btn.nextElementSibling;
      if (!submenu || !submenu.classList.contains("sidenav-submenu")) return;

      // Arrow icon for rotation
      const arrow = btn.querySelector(".arrow");

      // Is this a top-level menu?
      const isTopLevel = btn.parentElement.parentElement.id === "sidenav-list";

      // Toggle this submenu (open/close)
      const isOpen = submenu.classList.contains("open");
      submenu.classList.toggle("open");
      btn.classList.toggle("bg-[#e6f7f7]");
      if (arrow) arrow.classList.toggle("rotate-90");

      if (isOpen) {
        // If closing, also close all nested open submenus inside
        submenu.querySelectorAll(".sidenav-submenu.open").forEach((ul) => {
          ul.classList.remove("open");
          ul.previousElementSibling
            ?.querySelector(".arrow")
            ?.classList.remove("rotate-90");
          ul.previousElementSibling?.classList.remove("bg-[#e6f7f7]");
        });
      } else {
        // If opening a top-level menu, collapse all other submenus everywhere except this branch
        if (isTopLevel) {
          document
            .querySelectorAll("#sidenav-list > li > .sidenav-submenu.open")
            .forEach((ul) => {
              if (ul !== submenu) {
                ul.classList.remove("open");
                ul.previousElementSibling
                  ?.querySelector(".arrow")
                  ?.classList.remove("rotate-90");
                ul.previousElementSibling?.classList.remove("bg-[#e6f7f7]");
                // Also close all nested submenus inside
                ul.querySelectorAll(".sidenav-submenu.open").forEach(
                  (nestedUl) => {
                    nestedUl.classList.remove("open");
                    nestedUl.previousElementSibling
                      ?.querySelector(".arrow")
                      ?.classList.remove("rotate-90");
                    nestedUl.previousElementSibling?.classList.remove(
                      "bg-[#e6f7f7]"
                    );
                  }
                );
              }
            });
        }
        // Collapse all sibling submenus at this level
        const parentUl = btn.parentElement.parentElement;
        Array.from(parentUl.children).forEach((li) => {
          if (li !== btn.parentElement) {
            const sibUl = li.querySelector(":scope > .sidenav-submenu");
            if (sibUl) {
              sibUl.classList.remove("open");
              sibUl.previousElementSibling
                ?.querySelector(".arrow")
                ?.classList.remove("rotate-90");
              sibUl.previousElementSibling?.classList.remove("bg-[#e6f7f7]");
              // Also close all nested submenus inside
              sibUl
                .querySelectorAll(".sidenav-submenu.open")
                .forEach((nestedUl) => {
                  nestedUl.classList.remove("open");
                  nestedUl.previousElementSibling
                    ?.querySelector(".arrow")
                    ?.classList.remove("rotate-90");
                  nestedUl.previousElementSibling?.classList.remove(
                    "bg-[#e6f7f7]"
                  );
                });
            }
          }
        });
      }
    });
});

// ===============================
// Sidebar (Mobile Menu)
// ===============================
document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("sidebar-overlay");
  const openBtn = document.getElementById("mobile-menu-btn");
  const closeBtn = document.getElementById("sidebar-close-btn");

  // Open sidebar
  openBtn.addEventListener("click", function () {
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("opacity-0", "pointer-events-none");
    overlay.classList.add("opacity-100");
    document.body.classList.add("sidebar-open");
  });

  // Close sidebar
  function closeSidebar() {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("opacity-0", "pointer-events-none");
    overlay.classList.remove("opacity-100");
    document.body.classList.remove("sidebar-open");
  }

  closeBtn.addEventListener("click", closeSidebar);
  overlay.addEventListener("click", closeSidebar);

  // Optional: Close sidebar on resize to lg and up
  window.addEventListener("resize", function () {
    if (window.innerWidth >= 1024) {
      closeSidebar();
    }
  });
});

// ===============================
// Order Guide Video Modal
// ===============================

document
  .getElementById("orderGuideVideo")
  .addEventListener("click", function () {
    var modal = document.getElementById("videoModal");
    var iframe = document.getElementById("youtubeIframe");
    iframe.src =
      "https://www.youtube.com/embed/w-QH5djiqKs?si=wWJN1npPFBjero73";
    modal.classList.remove("hidden");
  });

document
  .getElementById("closeVideoModal")
  .addEventListener("click", function () {
    var modal = document.getElementById("videoModal");
    var iframe = document.getElementById("youtubeIframe");
    modal.classList.add("hidden");
    iframe.src = "";
  });

document.getElementById("videoModal").addEventListener("click", function (e) {
  if (e.target === this) {
    this.classList.add("hidden");
    document.getElementById("youtubeIframe").src = "";
  }
});

// =============================== To Top Button
let toTopBtn = document.querySelector(".to-top");
toTopBtn.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
