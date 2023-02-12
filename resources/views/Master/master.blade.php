<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mango's Enterprise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</head>

<body style="margin: 0; padding: 0">
    <div>
        @include('Header.header')

        @yield('master')
        <br><br>
        @include('Footer.footer')
    </div>

    <script>

        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.padding = "12px 10px";
                document.getElementById("logo").style.fontSize = "20px";
            } else {
                document.getElementById("navbar").style.padding = "34px 10px";
                document.getElementById("logo").style.fontSize = "25px";
            }
        }
        // Counter 
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 2000;
        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
            let duration = Math.floor(interval / endValue);
            let counter = setInterval(function() {
                startValue += 1;
                valueDisplay.textContent = startValue;
                if (startValue == endValue) {
                    clearInterval(counter);
                }
            }, duration);
        });

        $(document).ready(function(){
            var table = $('.mango_team').DataTable({
                'processing': true,
                'serverSide' : true,
                'ajax': "{{ route('FetchTeamData') }}",
                'columns' : [
                    {
                        data: 'team_photo',
                        name: 'team_photo',
                        "render": function (data, type, full, meta) {
                            return '<img src=/images/'+data+' id="team_photo"  class="img-responsive" width="60" height="40" alt="image">'
                        },
                        // render: function(data, type, full, meta){
                        //     return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
                        // },
                    },
                    {data: 'team_first_name', name: 'team_first_name'},
                    {data: 'team_last_name', name: 'team_last_name'},
                    {data: 'team_email', name: 'team_email'},
                    {data: 'team_gender', name: 'team_gender'},
                    {data: 'team_profile', name: 'team_profile'},
                    {data: 'team_phone', name: 'team_phone'},
                    {data: 'team_Address', name: 'team_Address'},
                    // {
                    //     data: 'action',
                    //     name: 'action',
                    //     orderable: true,            
                    // },
                ]
            });

            $(document).on('click', '.details', function(){
                var team_id = $(this).attr('data-id');
                $.ajax({
                    url: "/team-Details/"+team_id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(result){
                        console.log(result);
                        $('#firstname').html(result.data.team_first_name);
                        $('#lastname').html(result.data.team_last_name);
                        $('#email').html(result.data.team_email);
                        $('#gender').html(result.data.team_gender);
                        $('#profile').html(result.data.team_profile);
                        $('#phone').html(result.data.team_phone);
                        $('#address').html(result.data.team_Address);
                        // var teamimage = '<img src="images/'+result.data.team_photo+'">';
                        $('#team_photo').html(result.data.team_Address);
                        $('#teamModel').modal('show');
                    }
                });
                
                
            })
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>