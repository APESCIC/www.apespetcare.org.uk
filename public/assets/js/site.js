(function () {
  const mobileQuery = window.matchMedia("(max-width: 860px)");
  const menuToggle = document.querySelector("[data-menu-toggle]");
  const mainNav = document.querySelector("[data-main-nav]");
  const menuDrops = Array.from(document.querySelectorAll(".drop"));

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

  const syncBodyState = () => {
    document.body.classList.toggle(
      "nav-open",
      Boolean(mainNav && mainNav.classList.contains("open") && mobileQuery.matches)
    );
  };

  const closeDrop = (drop) => {
    if (!drop) return;
    drop.classList.remove("open");
    const trigger = drop.querySelector(".drop-trigger");
    const panel = drop.querySelector(".drop-panel");
    if (trigger) {
      trigger.setAttribute("aria-expanded", "false");
    }
    if (panel) {
      panel.style.left = "";
      panel.style.right = "";
      panel.style.transform = "";
    }
  };

  const closeAllDrops = (except) => {
    menuDrops.forEach((drop) => {
      if (drop !== except) closeDrop(drop);
    });
  };

  const positionDesktopPanel = (drop) => {
    if (!drop || mobileQuery.matches) return;
    const panel = drop.querySelector(".drop-panel");
    if (!panel) return;

    if (panel.classList.contains("mega-panel")) {
      panel.style.left = "50%";
      panel.style.right = "auto";
      panel.style.transform = "translateX(-50%)";

      const rect = panel.getBoundingClientRect();
      let shift = 0;
      if (rect.left < 16) {
        shift = 16 - rect.left;
      } else if (rect.right > window.innerWidth - 16) {
        shift = window.innerWidth - 16 - rect.right;
      }

      if (shift !== 0) {
        panel.style.transform = `translateX(calc(-50% + ${shift}px))`;
      }
      return;
    }

    panel.style.left = "0";
    panel.style.right = "auto";
    panel.style.transform = "";
    const rect = panel.getBoundingClientRect();
    if (rect.right > window.innerWidth - 16) {
      panel.style.left = "auto";
      panel.style.right = "0";
    }
  };

  const closeMainNav = ({ restoreFocus = false } = {}) => {
    if (!mainNav || !menuToggle) return;
    mainNav.classList.remove("open");
    menuToggle.setAttribute("aria-expanded", "false");
    closeAllDrops();
    syncBodyState();
    if (restoreFocus) {
      menuToggle.focus();
    }
  };

  const syncNavMode = () => {
    if (!mainNav) return;
    if (!mobileQuery.matches) {
      mainNav.classList.remove("open");
      if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
      }
    }
    closeAllDrops();
    syncBodyState();
  };

  if (menuToggle && mainNav) {
    menuToggle.addEventListener("click", () => {
      const open = mainNav.classList.toggle("open");
      menuToggle.setAttribute("aria-expanded", String(open));
      if (!open) {
        closeAllDrops();
      }
      syncBodyState();
    });
  }

  document.querySelectorAll(".drop > .drop-trigger").forEach((trigger) => {
    trigger.addEventListener("click", (event) => {
      const parent = trigger.closest(".drop");
      if (!parent) return;

      event.preventDefault();
      const opening = !parent.classList.contains("open");
      closeAllDrops(parent);

      if (!opening) {
        closeDrop(parent);
        return;
      }

      parent.classList.add("open");
      trigger.setAttribute("aria-expanded", "true");
      positionDesktopPanel(parent);
    });
  });

  document.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof Node)) return;
    if (
      (mainNav && mainNav.contains(target)) ||
      (menuToggle && menuToggle.contains(target))
    ) {
      return;
    }

    if (mobileQuery.matches) {
      closeMainNav();
      return;
    }

    closeAllDrops();
  });

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") return;
    closeAllDrops();
    if (mainNav && mainNav.classList.contains("open")) {
      closeMainNav({ restoreFocus: true });
    }
  });

  if (mainNav) {
    mainNav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        if (!mobileQuery.matches) {
          closeAllDrops();
          return;
        }

        closeMainNav();
      });
    });
  }

  if (typeof mobileQuery.addEventListener === "function") {
    mobileQuery.addEventListener("change", syncNavMode);
  } else if (typeof mobileQuery.addListener === "function") {
    mobileQuery.addListener(syncNavMode);
  }

  window.addEventListener("resize", () => {
    const openDrop = menuDrops.find((drop) => drop.classList.contains("open"));
    if (openDrop && !mobileQuery.matches) {
      positionDesktopPanel(openDrop);
    }
  });

  window.addEventListener("scroll", () => {
    const openDrop = menuDrops.find((drop) => drop.classList.contains("open"));
    if (openDrop && !mobileQuery.matches) {
      positionDesktopPanel(openDrop);
    }
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
