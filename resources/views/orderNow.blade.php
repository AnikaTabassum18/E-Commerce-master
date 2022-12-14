@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-6">
        <table class="table table-hover">
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} Taka</td>
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
                <td>{{$total + 70 }} Taka</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
