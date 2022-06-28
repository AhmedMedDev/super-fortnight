<div class="col-lg-3 text-right col-md-3">
    <ul class="nav-right">
        <li class="heart-icon">
            <a href="#">
                <i class="icon_heart_alt"></i>
                <span>1</span>
            </a>
        </li>
        <li class="cart-icon">
            <a href="#">
                <i class="icon_bag_alt"></i>
                <span id="cart_counter">{{ $cart_counter }}</span>
            </a>
            <div class="cart-hover">
                <div class="select-items">
                    <table>
                        <tbody>
                            @foreach ($cart_content as $item)
                                <tr>
                                    <td class="si-pic"><img src="img/select-product-1.jpg"
                                            alt=""></td>
                                    <td class="si-text">
                                        <div class="product-selected">
                                            <p>$ {{$item->price}}</p>
                                            <h6>Kabino Bedside Table</h6>
                                        </div>
                                    </td>
                                    <td class="si-close">
                                        <i class="ti-close"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="select-total">
                    <span>total:</span>
                    <h5>$ {{ $cart_total }}</h5>
                </div>
                <div class="select-button">
                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                </div>
            </div>
        </li>
        <li class="cart-price">$ {{ $cart_total }}</li>
    </ul>
</div>
