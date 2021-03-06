<div>
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart_content as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="img/cart-page/product-1.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Pure Pineapple</h5>
                                    </td>
                                    <td class="p-price first-row">$ {{$item->price}} </td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div wire:ignore class="pro-qty"  onclick="updateQty('{{$item->rowId}}')">
                                                <input type="text" class="{{$item->rowId}}qty_input" value="{{$item->qty}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$ {{$item->qty * $item->price}}</td>
                                    <td class="close-td first-row" onclick="remove_cart('{{$item->rowId}}')"><i class="ti-close"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$ {{$cart_total}}</span></li>
                                    <li class="cart-total">Total <span>$ {{$cart_total}}</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@push('js')
    <script>
        let inc;

        $('.qtybtn').on('click', function () {
            
            inc = $(this).hasClass('inc') 
        })

        const updateQty = (item_id) => {
            let quantity = +$(`.${item_id}qty_input`).val();

            quantity = (inc)
            ? quantity + 1
            : quantity - 1
            
            @this.call('updateQty', item_id, quantity)
        }
    </script>
@endpush