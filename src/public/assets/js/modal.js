document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("first-access-modal");
  const closeBtn = modal?.querySelector(".modal-close");
  const confirmBtn = modal?.querySelector(".modal-confirm");

  if (!modal) return;

  // Verifica primeiro acesso
  const alreadyVisited = localStorage.getItem("revvo_first_access");

  if (!alreadyVisited) {
    modal.classList.remove("hidden");
  }

  function closeModal() {
    modal.classList.add("hidden");
    localStorage.setItem("revvo_first_access", "true");
  }

  closeBtn?.addEventListener("click", closeModal);
  confirmBtn?.addEventListener("click", closeModal);
});
