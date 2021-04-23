<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Automated financial help" />
    <meta name="tags" content="financial help, finance, bot, robot, advice bot, advicebot, money, budget" />
    <meta name="author" content="Webtech Cyber Solutions" />
    <script src="../Scripts/budget.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="../../Images/favicon.ico" type="image/x-icon" /> 
    <link href="../Stylesheets/budget.css" type="text/css" rel="stylesheet" />
    <title>Document</title>

</head>
<body>
    <!-- income -->
    <h2 style="text-align: center;">Budget</h2>
    <div id="budgetContent">
        <table id='income'>
            <th></th>
            <th>Income</th>
            <tr>
                <td><label>Salary:</label></td>
                <td>R<input type="text" class="budgetInput" id="salary"></td>            
            </tr>
            <tr>
                <td><label>Other Income if Applicable:</label></td>
                <td>R<input type="text" class="budgetInput"  id="otherIncome"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="button" class="calcBtn" id="calculate"   value="Calculate" onclick="calculateIncome()"></td>
            </tr>
        </table>

        <!-- Expenses -->
        <table id='expenses'>
            <th></th>    
            <th>Expenses</th>
            <!-- House -->
            <tr><td><label>Mortgage / Rent Amount</label></td>
            <td>R<input type="text" class="budgetInput"  id = "house"></td></tr>
            <!-- Household Maintenance -->
            <tr><td><label>Household Maintenance</label></td>
            <td>R<input type="text" class="budgetInput"  id = "householdMaintenance"></td></tr>
            <!-- Electricity -->
            <tr><td><label>Electricity</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "electricity"></td></tr>
            <!-- Water -->
            <tr><td><label>Water</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "water"></td></tr>
            <!-- Sewage -->
            <tr><td><label>Food</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "food"></td></tr>
            <!-- Phone -->
            <tr><td><label>Phone(s)</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "phone"></td></tr>
            <!-- Entertainment -->
            <tr><td><label>Entertainment</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "entertainment"></td></tr>
            <!-- Fuel -->
            <tr><td><label>Fuel</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "fuel"></td></tr>
            <!-- Car Payments -->
            <tr><td><label>Car Payments</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "car"></td></tr>
            <!-- Child Care -->
            <tr><td><label>Child Care</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "childCare"></td></tr>
            <!-- Credit Cards / Debt -->
            <tr><td><label>Credit Cards / Debt</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "credit"></td></tr>
            <!-- Loans -->
            <tr><td><label>Loans</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "loans"></td></tr>
            <!-- Clothing -->
            <tr><td><label>Clothing</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "clothing"></td></tr>
            <!-- Other -->
            <tr><td><label>Other Expenses</label> </td>
            <td>R<input type="text" class="budgetInput"  id = "otherExpenses"></td></tr>
            <!-- Total Expenses -->
            
            <tr>
                <td></td>
                <td><input type="button" class="calcBtn" value="Calculate" onclick="calculateExpenses()"></td>
            </tr>
        </table>

        <table id = "totals">
            <th></th>
            <th>Totals</th>
            <tr>
                <td><label>Total Income</label></td>
                <td>R<input type="text" class="budgetInput"  id="totalIncome" disabled = 'disabled'></td>
            </tr>
            <tr>
                <td><label>Total Expenses</label> </td>
                <td>R<input type="text" class="budgetInput"  id = "totalExpenses" disabled = 'disabled'></td>
            </tr>
            <tr>
                <td><label>Grand Total</label> </td>
                <td>R<input type="text" class="budgetInput"  id = "total" disabled = 'disabled'></td>
            </tr>

        </table>
    </div>

</body>
</html>