@extends('layout.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-4">Cart</h2>
                <form action="#">
                    <table class="table table-bordered table-cart">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Course</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-hours">Total Hours</th>
                                <th class="">Remove</th>
                            </tr>
                        </thead>
                        <tbody id="cart">

                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-10">
                <button class="checkout-btn mt-90">
                    <a href="{{  url('/checkout') }}" class="checkout-link">Proceed To Checkout</a>
                </button>
            </div>
        </div>
    </div>
@endsection
