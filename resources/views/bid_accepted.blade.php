@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div>
       <div class="alert alert-success text-center">
           <h3><strong>Bid Accepted!</strong></h3>
           <a class="btn btn-info" href="{{route('my-projects')}}">Return to Your Project List</a>
       </div>
   </div>
    <form action="{{route('order')}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="amount" value="{{$bid->amount}}">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_LhRd49Rrik6vfcK7VPeOB7up"
                data-amount="{{$bid->amount*100}}"
                data-name="{{$bid->project->name}}"
                data-description="Example charge"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto">
        </script>
    </form>
    
</div>

@endsection