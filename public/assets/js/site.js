(function () {
  const openPopupWindow = (url, popupName, width, height) => {
    const left = Math.max(0, Math.floor((window.screen.width - width) / 2));
    const top = Math.max(0, Math.floor((window.screen.height - height) / 2));
    const features = `popup=yes,width=${width},height=${height},left=${left},top=${top},noopener,noreferrer`;
    const popup = window.open(url, popupName, features);
    if (!popup) {
      window.open(url, "_blank", "noopener,noreferrer");
      return;
    }

    popup.focus();
  };

  const bindPopupLinks = (selector, defaults) => {
    document.querySelectorAll(selector).forEach((link) => {
      link.addEventListener("click", (event) => {
        event.preventDefault();
        const href = link.getAttribute("href");
        if (!href) return;

        const popupName = link.dataset.popupName || defaults.name;
        const popupWidth = Number(link.dataset.popupWidth || defaults.width);
        const popupHeight = Number(link.dataset.popupHeight || defaults.height);

        openPopupWindow(href, popupName, popupWidth, popupHeight);
      });
    });
  };

  const menuToggle = document.querySelector("[data-menu-toggle]");
  const mainNav = document.querySelector("[data-main-nav]");

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", () => {
      const open = mainNav.classList.toggle("open");
      menuToggle.setAttribute("aria-expanded", String(open));
    });
  }

  document.querySelectorAll(".drop > .drop-trigger").forEach((trigger) => {
    trigger.addEventListener("click", (event) => {
      const isMobile = window.matchMedia("(max-width: 860px)").matches;
      const parent = trigger.closest(".drop");
      if (!parent) return;

      if (!isMobile) {
        if (trigger.tagName === "BUTTON") {
          const open = parent.classList.toggle("open");
          trigger.setAttribute("aria-expanded", String(open));
        }
        return;
      }

      event.preventDefault();
      const open = parent.classList.toggle("open");
      trigger.setAttribute("aria-expanded", String(open));
    });
  });

  bindPopupLinks(".js-popup-window", {
    name: "apes_popup_window",
    width: 720,
    height: 820,
  });

  bindPopupLinks(".js-contact-ticket", {
    name: "apes_contact_ticket",
    width: 560,
    height: 760,
  });

  const changeLogRoot = document.querySelector("[data-change-log-root]");
  if (changeLogRoot) {
    const search = changeLogRoot.querySelector("#changeLogSearch");
    const entries = Array.from(changeLogRoot.querySelectorAll(".release-card"));
    const filterButtons = Array.from(changeLogRoot.querySelectorAll("[data-filter]"));
    const expandAll = changeLogRoot.querySelector('[data-action="expand-all"]');
    const collapseAll = changeLogRoot.querySelector('[data-action="collapse-all"]');
    const empty = changeLogRoot.querySelector("[data-change-log-empty]");
    let activeFilter = "all";

    const matchesSearch = (entry) => {
      if (!search) return true;
      const term = search.value.trim().toLowerCase();
      if (!term) return true;
      return entry.textContent.toLowerCase().includes(term);
    };

    const matchesFilter = (entry) => {
      if (activeFilter === "all") return true;
      if (activeFilter === "current") return entry.dataset.current === "true";
      const haystack = [
        entry.dataset.status,
        entry.dataset.types,
        entry.dataset.impact,
      ]
        .filter(Boolean)
        .join(" ")
        .toLowerCase();
      return haystack.includes(activeFilter);
    };

    const updateEntries = () => {
      let visibleCount = 0;
      entries.forEach((entry) => {
        const visible = matchesSearch(entry) && matchesFilter(entry);
        entry.hidden = !visible;
        if (visible) visibleCount += 1;
      });

      if (empty) {
        empty.hidden = visibleCount !== 0;
      }
    };

    if (search) {
      search.addEventListener("input", updateEntries);
    }

    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        activeFilter = button.dataset.filter || "all";
        filterButtons.forEach((item) => {
          item.setAttribute("aria-pressed", String(item === button));
        });
        updateEntries();
      });
    });

    if (expandAll) {
      expandAll.addEventListener("click", () => {
        entries.forEach((entry) => {
          if (!entry.hidden) entry.open = true;
        });
      });
    }

    if (collapseAll) {
      collapseAll.addEventListener("click", () => {
        entries.forEach((entry) => {
          if (!entry.hidden) entry.open = false;
        });
      });
    }

    updateEntries();
  }

  const cards = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      { threshold: 0.12 }
    );
    cards.forEach((card, index) => {
      card.style.transitionDelay = `${Math.min(index * 40, 300)}ms`;
      observer.observe(card);
    });
  } else {
    cards.forEach((card) => card.classList.add("is-visible"));
  }
})();
