<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
  <form action="https://sandbox.payfast.co.za/eng/process" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="merchant_id" value="10032130">
                            <input type="text" name="merchant_key" value="6bbwbmnims8uz">
                            <input type="hidden" name="return_url" value="{{ route('payment.response') }}">
                            <input type="text" name="name_first" value="{{$user->name}}">
                            <input type="text" name="item_name" value="{{$carts->book_name}}">
                            <input type="text" name="email_address" value="{{$user->email}}">
                            <input type="text" name="m_payment_id" value="{{$carts->book_id}}">
                            <input type="text" name="amount" value="{{$totalPrice}}">
                            <div class="form-group mb-4">
                                <label>Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="{{$user->name}}" value="{{$user->name}}">
                            </div>
                            <div class="form-group mb-4">
                                <label>Your Email</label>
                                <input type="text" name="name" class="form-control" placeholder="{{$user->email}}" value="{{$user->email}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Amount</label>
                                        <input type="number" name="total_price" class="form-control" placeholder="Amount" value="{{$totalPrice}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Country</label>
                                        <select id="country" name="country" class="form-control">
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Write Full Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Street Name, House Number, Address, City, ETC" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Short Message</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" placeholder="Write Here..." required></textarea>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary theme-btn btn-style-one" type="submit"><span>Submit</span></button>
                            </div>
                        </form>