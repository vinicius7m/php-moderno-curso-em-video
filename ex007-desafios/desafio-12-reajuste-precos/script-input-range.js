const inputPercent = document.querySelector('#percent');
const percentValue = document.querySelector('#value');

percentValue.textContent = inputPercent.value;

inputPercent.addEventListener("input", (event) => {
    percentValue.textContent = event.target.value;
});