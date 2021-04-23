// Budget Code

function calculateIncome() {
    let salary = Number(document.getElementById('salary').value);
    let otherIncome = Number(document.getElementById('otherIncome').value);
    if (otherIncome == null) {
        otherIncome = 0;
    }
    document.getElementById('totalIncome').value = salary + otherIncome;
}

function calculateExpenses() {
    let house = Number(document.getElementById('house').value);
    let householdMaintenance = Number(document.getElementById('householdMaintenance').value);
    let electricity = Number(document.getElementById('electricity').value);
    let water = Number(document.getElementById('water').value);
    let food = Number(document.getElementById('food').value);
    let phone = Number(document.getElementById('phone').value);
    let entertainment = Number(document.getElementById('entertainment').value);
    let fuel = Number(document.getElementById('fuel').value);
    let car = Number(document.getElementById('car').value);
    let childCare = Number(document.getElementById('childCare').value);
    let credit = Number(document.getElementById('childCare').value);
    let loans = Number(document.getElementById('loans').value);
    let clothing = Number(document.getElementById('clothing').value);
    let otherExpenses = Number(document.getElementById("otherExpenses").value);

    document.getElementById('totalExpenses').value = house + householdMaintenance + electricity + water + food + phone + entertainment + fuel + car + childCare + credit + loans + clothing + otherExpenses

    document.getElementById('total').value = Number(document.getElementById('totalIncome').value) - Number(document.getElementById('totalExpenses').value);

    document.getElementById("budget").value = document.getElementById('total').value;
}