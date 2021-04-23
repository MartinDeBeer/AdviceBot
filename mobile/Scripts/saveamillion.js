function calculateTime() {
    let currentAmount = Number(document.getElementById('amountSaved').value);
    let monthlyAmount = Number(document.getElementById('monthlySavings').value);
    let intRate = Number(document.getElementById('interest').value);
    let goal = Number(document.getElementById('goal').value);
    let count = 0;
    let year = 0;
    while (currentAmount != goal) {
        count += 1;
        if (count % 12 == 0) {
            year += 1
            count = 0
        }
        currentAmount = (currentAmount + monthlyAmount) * ((intRate / 100) / 12) + (currentAmount + monthlyAmount)
        if (currentAmount > goal) {
            formattedAmount = currentAmount.toFixed(2);
            document.getElementById('years').innerText = year;
            document.getElementById('months').innerText = count;
            document.getElementById('result').style.visibility = "visible";
            document.getElementById('goalOutput').innerHTML = goal;
            console.log(`Years: ${year}` + `Months: ${count}` + `Amount: ${formattedAmount}`)
            break
        }

    }
}