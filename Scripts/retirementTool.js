// Initialize Variables

function calcCurrInv() {
    let bankAccount = Number(document.getElementById('bank').value);
    let pension = Number(document.getElementById('pension').value);
    let endowment = Number(document.getElementById('endowment').value);
    let shares = Number(document.getElementById('shares').value);
    let other = Number(document.getElementById('other').value);

    let total = document.getElementById('total').value = Number(bankAccount + pension + endowment + shares + other);

    document.getElementById('yearlyIncome').value = Number(total) * 0.04;
    let monthlyIncome = document.getElementById('monthlyIncome').value = Number(document.getElementById('yearlyIncome').value) / 12;
    monthlyIncome = monthlyIncome;

}

function calcCurrentExp() {
    document.getElementById('yearlyExpenses').value = Number(document.getElementById('monthlyExpenses').value) * 12;
}

function calculateEarlyAge() {
    document.getElementById('amountNeeded').value = Number(document.getElementById('yearlyExpenses').value) * Number(document.getElementById('currentAge').value);
}

function calculateAddInvestment() {
    document.getElementById('yearlyAddInvestment').value = (Number(document.getElementById('monthlyInvestment').value) * 12) + Number(document.getElementById('lumpSum').value);
    calculateTime();

}

function calculateTime() {
    let currentAmount = Number(document.getElementById('total').value);
    let monthlyAmount = Number(document.getElementById('lumpSum').value) + (Number(document.getElementById('monthlyInvestment').value) * 12);
    monthlyAmount = monthlyAmount;
    let intRate = Number(document.getElementById('returnRate').value);
    let goal = Number(document.getElementById('amountNeeded').value);
    let count = Number(document.getElementById('currentAge').value);
    while (currentAmount != goal) {
        count += 1;
        currentAmount = (currentAmount + monthlyAmount) * (intRate / 100) + (currentAmount + monthlyAmount);
        formattedAmount = currentAmount;
        console.log(count, " / ", formattedAmount);
        if (currentAmount > goal) {
            formattedAmount = currentAmount;
            console.log(count, " / ", formattedAmount);
            break;
        }
    }
    document.getElementById('earlyRetirementAge').value = count;
    alert(`You can retire at ${count} years old. `);
}