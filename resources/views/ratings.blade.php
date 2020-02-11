@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="alert alert-success text-center">
        <h3><strong>The work is done successfully by {{$freelancer->name}} !</strong></h3>
        <h4>All the files have been submitted</h4>
    </div>
    <div class="col-md-12 text-center" style="padding-left: 30%;">
        <div class="row">
            <div class="card col-md-6">
                <div class="card-header">
                    <div class="text-success">Please Rate This User</div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('userRating')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="freelancer" value="{{$freelancer->id}}">
                        <input type="hidden" name="project_id" value="{{$projects->id}}">
                        <table class="table table-hover col-4 col-md-4 col-sm-4">
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="rating" id="r1" value="1"></td>
                                <td><input type="radio" name="rating" id="r2" value="2"></td>
                                <td><input type="radio" name="rating" id="r3" value="3"></td>
                                <td><input type="radio" name="rating" id="r4" value="4"></td>
                                <td><input type="radio" name="rating" id="r5" value="5"></td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <textarea name="feedback" id="" cols="30" rows="10" class="form-control" placeholder="Please Write Something"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Rate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

{{--@section('js')--}}
{{--    <script>--}}
{{--        $(function () {--}}

{{--            $("#rateYo").rateYo()--}}
{{--                .on("rateyo.set", function (e, data) {--}}

{{--                    alert("The rating is set to " + data.rating + "!");--}}

{{--                    var value = { data : data.rating };--}}

{{--                    $.ajax({--}}
{{--                        type: "POST",--}}
{{--                        url : '{{route('userRating')}}',--}}
{{--                        data: {'value':value , _token: '{{csrf_token()}}' },--}}
{{--                        success:function(data){--}}
{{--                            console.log('success');--}}
{{--                            document.write();--}}
{{--                        },--}}
{{--                    });--}}
{{--                    /*hidden date input*/--}}


{{--                    /*$('#ratings_table').DataTable({--}}
{{--                        "processing": true,--}}
{{--                        "serverSide": true,--}}
{{--                        "ajax": "{{ route('userRating') }}",--}}
{{--                        "columns":[--}}
{{--                            { "data": "first_name" },--}}
{{--                            { "data": "last_name" },--}}
{{--                            { "data": "action", orderable:false, searchable: false}--}}
{{--                        ]--}}
{{--                    });*/--}}
{{--                    /*$.ajax({--}}
{{--                        type:'get',--}}
{{--                        url:"{{URL::route('userRating')}}",--}}
{{--                        data:{'u_rate':data.rating},--}}
{{--                        datatype:'html',--}}
{{--                        success:function(data){--}}
{{--                            console.log('success');--}}
{{--                            console.log(data.rating);--}}
{{--                        },--}}
{{--                        error:function(){--}}
{{--                        }--}}
{{--                    })*/--}}
{{--                });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}