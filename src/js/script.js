const body = document.querySelector("body");
const modal = document.querySelector(".modal");
const fade = document.querySelector(".fade");
const updateButtons = document.querySelectorAll(".button.change-city");
const deleteButtons = document.querySelectorAll(".button.delete-city");
const closeButton = document.querySelector(".button.close");
const deleteAllButton = document.querySelector(".button.delete-all");
const filter = document.querySelector(".filter");

const toggleModal = () => {
  [modal, fade].forEach((element) => element.classList.toggle("hidden"));
};

const insertIdIntoModal = (id) => {
  const input = document.querySelector("input[name='update-id']");
  input.value = id;
};

const handleUpdateButton = (event) => {
  const id = event.target.value;
  insertIdIntoModal(id);
  toggleModal();
};

const handleDeleteButton = (index) => {
  if (index < 0) {
    if (confirm("Deseja mesmo deletar tudo?"))
    return (location.href = "./src/actions/delete_all.php");
  }

  if (!confirm("Deseja mesmo deletar essa cidade?")) return;

  const form = document.querySelectorAll("form.card")[index];
  form.submit();
};

const showDeleteAllButtonAndFilter = () => {
  const container = document.querySelector(".container");
  const IsContainerEmpty = container.querySelector(".empty");
  if (IsContainerEmpty) {
    [deleteAllButton, filter].forEach((element) =>
      element.classList.add("hidden")
    );
  } else {
    [deleteAllButton, filter].forEach((element) =>
      element.classList.remove("hidden")
    );
  }
};

const filterCities = (event) => {
  const input = event.target.value.toLowerCase();
  const cities = document.querySelectorAll(".city");
  if (input) {
    for (let city of cities) {
      let name = city.querySelector(".name").textContent.toLowerCase();
      city.style.display = !name.includes(input) ? "none" : "flex";
    }
  } else {
    cities.forEach((citie) => (citie.style.display = "flex"));
  }
};

const setModalPosition = () => {
  console.log(body.offsetWidth);
  modal.style.top = innerHeight / 2;
  modal.style.left = innerWidth / 2;

};

updateButtons.forEach((button) =>
  button.addEventListener("click", handleUpdateButton)
);
deleteButtons.forEach((button, index) =>
  button.addEventListener("click", () => handleDeleteButton(index))
);
fade.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
deleteAllButton.addEventListener("click", () => handleDeleteButton(-1));

filter.addEventListener("input", filterCities);

showDeleteAllButtonAndFilter();

window.addEventListener("scroll", setModalPosition);