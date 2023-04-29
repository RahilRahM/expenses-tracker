<!DOCTYPE html>
<html>
    <head>
        <title>Expense Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/Expenses.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>
    
    <body onload="CurrentDate()">

        <!-- Navigation Bar (header) -->
        <nav class="navbar navbar-expand-lg py-3 bg-body-tertiary">
            <div class="container navbar-container">

                <!-- logo -->
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="test" id="logo-header"/>
                </a>
                <button class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>          
        <!-- Navigation Bar End -->

        <!--Expenses management container-->
        <div  class="container-fluid">
            <div class="container-fluid border m-2 p-0 pb-4" id="MainContainer">
            <fieldset class="text-white p-3" id="Exp-header">
                <h2>Expenses Management</h2>
            </fieldset>
            <br>

            <!-- current date / Add Expenses button -->
            <div style="display: flex; align-items: center;">
                <span id="current-day"></span>
                <h3 id="current-month-year" style="font-size: 50px; font-weight: bold; margin-right: auto;"></h3>
                <button type="button" class="btn  ml-auto mr-5 AddExpButton" data-bs-toggle="modal" data-bs-target="#addExpenseModal" >Add New Expense</button>
            </div>

            <!-- Modal page (add expenses)-->
            <div class="modal fade" id="addExpenseModal" tabindex="-1" aria-labelledby="addExpenseModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addExpenseModalLabel">Add Expense</h5>
                            </div>
                            <div class="modal-body">

                            <!-- Form to add expense -->
                                <form>
                                    <div class="form-group">
                                        <label for="expense-name">Expense Name</label>
                                        <input type="text" class="form-control" id="expense-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="expense-amount">Expense Amount</label>
                                        <input type="number" class="form-control" id="expense-amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="expense-category">Expense Category</label>
                                        <select class="form-control" id="expense-category">
                                            <option value="">Select category</option>
                                            <option value="Food">Food</option>
                                            <option value="Transportation">Transportation</option>
                                            <option value="Accommodation">Accommodation</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="expense-date">Expense Date</label>
                                        <input type="date" class="form-control" id="expense-date">
                                    </div>
                                    <div class="form-group">
                                        <label for="expense-receipt">Expense Receipt</label><br>
                                        <input type="file" class="form-control-file" id="expense-receipt">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn " id="save-expense-btn">Save Expense</button>
                            </div>
                        </div>
                    </div>
                </div>

            <br>
            <div class="container-center overflow-hidden mt-3 mx-5">
                <div style="font-weight: bold;font-size:20px;">How's the budget?</div>
                    <div class="row mt-2">
                        <div class="col">
                            <div class="p-4 ml-auto mr-auto border rounded-3">
                                <h2 class="mb-0">0.00 DA</h2>
                                <div class="mt-0" >Expenses</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-4 mr-auto ml-auto border rounded-3">
                                <h2 class="mb-0">0.00 DA</h2>
                                <div class="mt-0" >Budget</div>
                        </div>
                    </div>
                </div>
                <br>
            
                <div style="font-weight: bold;font-size:20px;">List of expenses</div>

                <div class="nav nav-tabs ViewAsButton " role="toolbar" style="max-width: fit-content; ">
                    <button type="button" class="btn  chosenButt" data-period="today">Today</button>
                    <button type="button" class="btn  chosenButt active" data-period="week">This Week</button>
                    <button type="button" class="btn  chosenButt" data-period="month">This Month</button>
                    <button type="button" class="btn  chosenButt" data-period="semester">This Semester</button>
                    <button type="button" class="btn  chosenButt" data-period="year">This Year</button>
                    <button type="button" class="btn  chosenButt" data-period="year">All</button>
                </div>            

                <!-- Expenses history table -->
                <table class="table mt-3" id="expense-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Item 1</td>
                            <td>Cat 1</td>
                            <td>0.00 DA</td>
                            <td>2023-03-17</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-secondary mx-1">
                                <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger mx-1">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Item 2</td>
                            <td>Cat 2</td>
                            <td>0.00 DA</td>
                            <td>2023-03-17</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-secondary mx-1">
                                <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger mx-1">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Item 3</td>
                            <td>Cat 3</td>
                            <td>0.00 DA</td>
                            <td>2023-03-17</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-secondary mx-1">
                                <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger mx-1">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                  
                <button type="button" class="btn btn-outline-secondary btn-sm" >Download Excel File </button>
            </div>
        </div>
        <!-- End Expenses management container-->

        <!--footer-->
        <?php
            require("./footer.php");
        ?>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="Expenses.js"></script>
</html>