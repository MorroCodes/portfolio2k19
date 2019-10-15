var items = document.querySelectorAll(".work__item");
items.forEach(item => {
    item.addEventListener("mouseover", () => {
        item.lastElementChild.classList.remove("hover-out");
        item.lastElementChild.classList.add("hover-in");
    });
    item.addEventListener("mouseout", () => {
        item.lastElementChild.classList.remove("hover-in");
        item.lastElementChild.classList.add("hover-out");
    });
});