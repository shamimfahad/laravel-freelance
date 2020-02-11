<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    @yield('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    {{--<script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('aabaa7e2182bf957f614', {
            cluster: 'ap2',
            forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>--}}

    <style>
        .pagination{
            justify-content: center;
        }

    </style>

</head>
<body style="padding-top: auto;">
    @include('inc.nav')
<div class="container-fluid">

    @yield('content')

</div>

    @include('inc.footer')
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    --}}
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @yield('js')
    <script>
        $('#rateYo').rateYo({

            url: '{{--{{ route("userRating") }}--}}',
            rating: 3.5,
            starwidth:'40px',
            numStars: 5,
            minValue:0,
            maxValue:5,
            normalFill: 'gray',
            ratedFill: 'orange'
        })
        /*$(function () {

            $("#rateYo").rateYo()
                .on("rateyo.set", function (e, data) {

                    alert("The rating is set to " + data.rating + "!");

                    var value = { data : data.rating };

                    $.ajax({
                        type: "POST",
                        url : '
    {{route('userRating')}}',
                        data: {'value':value , _token: '{{csrf_token()}}' },
                        success:function(data){
                            console.log('success');
                            console.log(value);
                        },
                    });
                    /!*hidden date input*!/


                    /!*$('#ratings_table').DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "{{ route('userRating') }}",
                        "columns":[
                            { "data": "first_name" },
                            { "data": "last_name" },
                            { "data": "action", orderable:false, searchable: false}
                        ]
                    });*!/
                    /!*$.ajax({
                        type:'get',
                        url:"{{URL::route('userRating')}}",
                        data:{'u_rate':data.rating},
                        datatype:'html',
                        success:function(data){
                            console.log('success');
                            console.log(data.rating);
                        },
                        error:function(){
                        }
                    })*!/
                });
        });*/
        function showDateForm() {
            var x = document.getElementById("hiddenDateInput");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        $('.single-item').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            infinite: true,
            autoplaySpeed: 2000,
            adaptiveHeight: false
        });
    </script>
</body>
</html>