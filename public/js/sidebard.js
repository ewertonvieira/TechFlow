function setActive(element) {
    const links = document.querySelectorAll('.sidebar a');
    links.forEach(link => link.classList.remove('active'));
    element.classList.add('active');
}

function toggleAccordion(id, element) {
    const accordionContent = document.getElementById(id);

    if (accordionContent.style.display === "block") {
        accordionContent.style.display = "none";
    } else {
        accordionContent.style.display = "block";
    }

    setActive(element);
}
