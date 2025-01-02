
document.getElementById('zip-code').addEventListener('input', (event) => {
    const zipInput = event.target;
    zipInput.value = zipInput.value.replace(/\D/g, '');

    if (/^\d{5}$/.test(zipInput.value)) {
        zipInput.classList.remove('error');
    } else {
        zipInput.classList.add('error');
    }
});



const powerInput = document.getElementById('power-input');
const suffix = document.querySelector('.col-sm-12 .suffix');

function adjustSuffixPosition() {
    powerInput.value = powerInput.value.replace(/[^0-9]/g, '');

    const baseLeft = 30;
    const charWidth = 8;
    const inputLength = powerInput.value.length;
    const moreSpace = inputLength > 9 ? inputLength * 1.1 : 0


    suffix.style.position = 'absolute';
    suffix.style.left = `${moreSpace + baseLeft + inputLength * charWidth }px`;
}


powerInput.addEventListener('input', adjustSuffixPosition);

adjustSuffixPosition();


powerInput.addEventListener('input', adjustSuffixPosition);

const checkboxContainers = document.querySelectorAll('.checkbox-container');

checkboxContainers.forEach(container => {
    const checkbox = container.querySelector('input[type="checkbox"]');
    const label = container.querySelector('label');

    container.addEventListener('click', (event) => {
        if (!checkbox.contains(event.target) && event.target !== label) {
            checkbox.checked = !checkbox.checked;
        }
        container.classList.toggle('checked', checkbox.checked);
    });

    checkbox.addEventListener('change', () => {
        container.classList.toggle('checked', checkbox.checked);
    });
});

function calculateKWh(peopleCount) {
    const baseKWh = 1350;
    const increments = [900, 700, 650, 700];
    const defaultIncrement = 700;

    if (peopleCount <= 0) return 0;

    let totalKWh = baseKWh;

    for (let i = 1; i < peopleCount; i++) {
        if (i <= increments.length) {
            totalKWh += increments[i - 1];
        } else {
            totalKWh += defaultIncrement;
        }
    }

    return totalKWh;
}

// Example usage
console.log(calculateKWh(1)); // 1350
console.log(calculateKWh(2)); // 2250
console.log(calculateKWh(3)); // 2950
console.log(calculateKWh(4)); // 3600
console.log(calculateKWh(5)); // 4300
console.log(calculateKWh(6)); //


const decreaseBtn = document.getElementById('decrease-btn');
const increaseBtn = document.getElementById('increase-btn');
const householdSizeDisplay = document.getElementById('household-size');
const householdSizeInput = document.getElementById('household-size-input');

let householdSize = parseInt(householdSizeDisplay.textContent);

decreaseBtn.addEventListener('click', (event) => {
    event.preventDefault();

    if (householdSize > 1) {
        householdSize--;
        updateDisplay();
    }
});

increaseBtn.addEventListener('click', (event) => {
    event.preventDefault();
    householdSize++;
    updateDisplay();
});

function updateDisplay() {
    householdSizeDisplay.textContent = householdSize;
    householdSizeInput.value = householdSize ?? 2;
    powerInput.value = calculateKWh(householdSize);
}

const electricCar = document.getElementById('electric-car');
const smartMeter = document.getElementById('smart-meter');
const submitButton = document.getElementById('submit-button');
const errorMessage = document.getElementById('error-message');

function validateForm() {
    if (electricCar.checked || smartMeter.checked) {
        errorMessage.style.display = 'none';
        submitButton.disabled = false;
    } else {
        errorMessage.style.display = 'block';
        submitButton.disabled = true;
    }
}

const submitButtons = document.getElementsByClassName('submit-btn')
// Attach change event listeners to both checkboxes
submitButtons.addEventListener('click', validateForm);

