@extends("master")

@section("product")
<div class="">


    <div class="col-sm-10">
        <table class="table table-hover">

            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}}</td>

                </tr>
                <tr>
                    <td>tax</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Delivery Charges</td>
                    <td>$10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="address" placeholder="your address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <h2>Payment Method:</h2>

                <input type="radio" value="cash" name="payment"><span>Online payment</span><br>
                <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br>
                <input type="radio" value="cash" name="payment"><span>on Delivery payment</span><br>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection("product")