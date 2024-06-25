const submitBtn = document.getElementById('submit-btn');
const selectedFlowersElement = document.getElementById('selected-flowers');

submitBtn.addEventListener('click', () => {
    const checkedInputs = document.querySelectorAll('input[name="flowers"]:checked');
    const selectedFlowers = [];
    checkedInputs.forEach(input => {
        selectedFlowers.push(input.value);
    });

    if (selectedFlowers.length > 0) {
        selectedFlowersElement.textContent = `Собранный букет содержит: ${selectedFlowers.join(', ')}`;
    } else {
        selectedFlowersElement.textContent = '';
    }
});
