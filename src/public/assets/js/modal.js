document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("welcomeModal");
  const closeBtn = document.getElementById("closeModal");

  if (!modal) return;

  const alreadyVisited = localStorage.getItem("revvo_modal_seen");

  if (!alreadyVisited) {
    modal.classList.add("active");
    localStorage.setItem("revvo_modal_seen", "true");
  }

  closeBtn.addEventListener("click", function () {
    modal.classList.remove("active");
  });
});
