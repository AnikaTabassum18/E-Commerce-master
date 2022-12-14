@extends('master')
@section('content')
<div class="custom-product ">
    <div class="col-sm-6">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Price</td>
                    <td>{{number_format($total,2)}} Taka</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0%</td>
                </tr>
                <tr>
                    <td>Delivery Charge</td>
                    <td>70 Taka</td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td>{{number_format(($total+70),2)}} Taka</td>
                </tr>
            </tbody>
        </table>
        <form class="form-horizontal">
            <div class="form-group">
                <textarea class="form-control" placeholder="Write Address"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Payment Method</label>
                <p>
                    <input type="radio" type="radio" name="payment">
                    <span>Online payment</span>
                </p>
                <p>
                    <input type="radio" type="radio" name="payment">
                    <span>EMI payment</span>
                </p>
                <p>
                    <input type="radio" type="radio" name="payment">
                    <span>Cash on delivery</span>
                </p>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection
