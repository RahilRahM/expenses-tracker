function CurrentDate() {
    var currentDate = new Date();
    var month = currentDate.toLocaleString('default', { month: 'long' });
    var year = currentDate.getFullYear();
    var day = currentDate.getDate();
    var dayElement = document.getElementById("current-day");
    dayElement.innerHTML = "<div class='circle'>" + day + "</div>";
    var monthYearElement = document.getElementById("current-month-year");
    monthYearElement.innerHTML = month + " " + year;
}

//Set Diffult Table to View As "This Week"
$(document).ready(function() {
    $('.chosenButt').click(function() {
        $('.chosenButt').removeClass('active');
        $(this).addClass('active');
        var period = $(this).text().trim();
        var today = new Date();
        var startDate;
        switch (period) {
            case 'Today':
                startDate = today;
                break;
            case 'This Week':
                startDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() - today.getDay());
                break;
            case 'This Month':
                startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                break;
            case 'This Semester':
                startDate = new Date(today.getFullYear(), today.getMonth() - (today.getMonth() % 6), 1);
                break;
            case 'This Year':
                startDate = new Date(today.getFullYear(), 0, 1);
                break;
        }
        var rows = $('#expense-table tbody tr');
        rows.hide();
        rows.each(function(index) {
            var rowDate = new Date($(this).data('date'));
            if (rowDate >= startDate && rowDate <= today) {
                $(this).show();
            }
        });
    });
});


  
$(document).ready(function() {
    // Save expense when Save Expense button is clicked
    $("#save-expense-btn").click(function() {
        // Get expense details from form
        var expenseName = $("#expense-name").val();
        var expenseAmount = $("#expense-amount").val();
        var expenseDate = $("#expense-date").val();

        // Add new row to table
        var newRow = "<tr data-date='" + expenseDate + "'><td>" + expenseName + "</td><td>" + expenseAmount + "</td><td>" + expenseDate + "</td></tr>";
        $("#expense-table tbody").append(newRow);

        // Hide modal
        $("#addExpenseModal").modal("hide");
    });
});

 // Add event listener for the save expense button in the modal
document.getElementById("save-expense-btn").addEventListener("click", function() {
        
    // Get the expense details from the form
    var expenseName = document.getElementById("expense-name").value;
    var expenseAmount = document.getElementById("expense-amount").value;
    var expenseDate = document.getElementById("expense-date").value;

    // Create a new row for the expense table
    var table = document.getElementById("expense-table");
    var newRow = table.insertRow(table.rows.length);
    
    // Insert the expense details into the new row
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    cell1.innerHTML = table.rows.length - 1;
    cell2.innerHTML = expenseName;
    cell3.innerHTML = "Category";
    cell4.innerHTML = expenseAmount + " DA";
    cell5.innerHTML = expenseDate;

    // Clear the form fields
    document.getElementById("expense-name").value = "";
    document.getElementById("expense-amount").value = "";
    document.getElementById("expense-date").value = "";
    
    // Hide the modal
    $("#addExpenseModal").modal("hide");
});