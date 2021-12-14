<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax & fetch Example</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="#">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .txt {
            text-align: center;
            width: 50%;
            color: #B95656;
            border: 3px solid #121032;
            padding: 10px;
            margin: auto;
            margin-bottom: 30px;
            border-radius: 10px 200px 10px 200px;
            font-weight: bold;
            box-shadow: 5px 3px 8px #B95656;
            text-shadow: 3px 3px 5px #121032;
        }

        body {
            background-color: #dee2e6;
        }

        table {
            text-align: center;
        }

        table thead tr th {
            background-color: #121032 !important;
            color: #B95656;
            border: 1px solid #121032 !important;
        }

        table tbody tr td {
            color: #B95656;
            border: 1px solid #121032 !important;
        }

        #message {
            border: 0;
        }

        input[type="text"] {
            border-color: #6c757d;
            background-color: #dee2e6;
            color: #121032;
            /* box-shadow: 5px 3px 8px #121032; */
        }

        ::placeholder {
            color: #B95656 !important;
        }

        button {
            font-weight: bold !important;
        }
        #get_data{
            background-color: #121032;
            color: #B95656;
            box-shadow: 5px 3px 8px #121032;
        }
        #add_new{
            background-color: #B95656;
            color: #121032;
            border-color: #121032;
            box-shadow: 5px 3px 8px #121032;
        }
        label{
            color: #121032;
            z-index: 1 !important;
            position: relative;
        }
        .hr {
            width: 60%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            border-top: 15px solid black !important;
            box-shadow: 3px 4px 5px black !important;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 id="title" class="txt">Ajax & fetch Example</h1>
        <p class="txt" style="border-radius: 200px 200px 200px 200px;
            text-shadow: none;">This is an example for fetch and ajax call.</p>

        <!-- first row --> 
        <hr class="hr">
        <div class="row mt-3">
            
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="First name">
            </div>
            <div class="col-sm-2">
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name">
            </div>
            <div class="col-sm-3">
               <br>
                <button type="button" class="btn btn-light" id="add_new">Add New</button>
                <button type="button" class="btn btn-dark" id="get_data">Get Data</button>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <!-- second row -->
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-4" id="message"></div>
            <div class="col-sm-5"></div>
        </div>
        <!-- third row -->
        <div class="row mt-3">
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
                <table class="table table-bordered border-secondary align-middle">
                    <thead>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_info_person">
                    </tbody>
                </table>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <hr class="hr">

        <script src="./fetch_&_ajax.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>