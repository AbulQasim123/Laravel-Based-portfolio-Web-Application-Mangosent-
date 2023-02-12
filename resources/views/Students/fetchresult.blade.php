<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script type="text/javascript" src="{{ asset('assets\js\Jquery.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            background-color: #eee;
            height: 100px;
            display: flex;
            align-items: center;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
        }
        @media screen and (max-width: 400px) {
            .container{
                width: 100%;
                background-color: #04AA6D;
            }
        }

        .search {
            padding: 5px;
            height: 30px;
        }

        .search_label {
            font-weight: bold;
            font-size: large;
        }

        .search_btn {
            width: 100px;
            font-size: large;
            height: 30px;
            background-color: burlywood;

        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 10px;
        }

        th,td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-group">
            <label for="search" class="search_label">Search</label>
            <input type="text" class="search" id="search" name="search" placeholder="Enter Roll no">
            <button type="button" class="search_btn" id="search_btn">Search</button>
            <div id="error" class="error" style="color: red;"></div>
        </div>
    </div>
    <div class="table-responsive" id="result_table">
        <!-- <table>
            <tr>
                <th>Roll no</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Result</th>
            </tr>
            <tr id="nodata">
                <td id="std_roll_no"></td>
                <td id="std_name"></td>
                <td id="std_gender"></td>
                <td id="std_address"></td>
                <td id="std_result"></td>
            </tr>
        </table> -->
    </div>
    <script>
        
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#search_btn').on('click', function() {
                var search = $.trim($('#search').val());
                if (search == "") {
                    $('#error').html('Please enter roll no?');
                } else if (search.length > 5) {
                    $('#error').html('Please enter exact five digit!');
                } else {
                    $.ajax({
                        url: "{{ route('fetch.students') }}",
                        type: "POST",
                        data: {
                            search: search
                        },
                        // dataType: "json",
                        success: function(result) {
                            $('#result_table').html(result);
                            // console.log(result);
                            // if (result.length > 0) {
                            //     for (let index = 0; index < result.length; index++) {
                            //         $('#error').html('');
                            //         $('#error').html('');
                            //         $('#std_roll_no').html(result[index].std_roll_no);
                            //         $('#std_name').html(result[index].std_name);
                            //         $('#std_gender').html(result[index].std_gender);
                            //         $('#std_address').html(result[index].std_address);
                            //         $('#std_result').html(result[index].std_result);
                            //         $('#nodata').html('');
                            //     }
                            // } else {
                            //     $('#std_roll_no').html('');
                            //     $('#std_name').html('');
                            //     $('#std_gender').html('');
                            //     $('#std_address').html('');
                            //     $('#std_result').html('');
                            //     $('#nodata').html('<td colspan="5">No Record Found<td>');
                            // }
                        }
                    })
                }
            })
        })
    </script>
</body>

</html>