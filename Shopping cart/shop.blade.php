<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Keranjang Sayur</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./shop.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basket</title>
    </head>

    <body>
        <main>
            <div class="basket">
                <div class="basket-module">
                    <label for="promo-code">Masukkan Kode Promo</label>
                    <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                    <button class="promo-code-cta">Pakai</button>
                </div>
                <div class="basket-labels">
                    <ul>
                        <li class="item item-heading">Barang</li>
                        <li class="price">Harga</li>
                        <li class="quantity">Jumlah</li>
                        <li class="subtotal">Total</li>
                    </ul>
                </div>
                <div class="basket-product">
                    <div class="item">
                        <div class="product-image">
                            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                        </div>
                        <div class="product-details">
                            <h1><strong><span class="item-quantity">4</span> kg Tomat</strong> Hijau Peunayong</h1>
                            <p><strong>Navy, Size 18</strong></p>
                            <p>Kode Produk - Rpl1</p>
                        </div>
                    </div>
                    <div class="price">12.000</div>
                    <div class="quantity">
                        <input type="number" value="4" min="1" class="quantity-field">
                    </div>
                    <div class="subtotal">48.000</div>
                    <div class="remove">
                        <button>Buang</button>
                    </div>
                </div>
                <div class="basket-product">
                    <div class="item">
                        <div class="product-image">
                            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                        </div>
                        <div class="product-details">
                            <h1><strong><span class="item-quantity">1</span> Kg Sayur Asem</strong> Asem asem Sigli</h1>
                            <p><strong>Navy, Size 10</strong></p>
                            <p>Kode Produk - RPL2</p>
                        </div>
                    </div>
                    <div class="price">10.000</div>
                    <div class="quantity">
                        <input type="number" value="1" min="1" class="quantity-field">
                    </div>
                    <div class="subtotal">10.000</div>
                    <div class="remove">
                        <button>Buang</button>
                    </div>
                </div>
            </div>
            <aside>
                <div class="summary">
                    <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                    <div class="summary-subtotal">
                        <div class="subtotal-title">Total</div>
                        <div class="subtotal-value final-value" id="basket-subtotal">130.000</div>
                        <div class="summary-promo hide">
                            <div class="promo-title">Promotion</div>
                            <div class="promo-value final-value" id="basket-promo"></div>
                        </div>
                    </div>
                    <div class="summary-delivery">
                        <select name="delivery-collection" class="summary-delivery-selection">
                            <option value="0" selected="selected">Metode Antar</option>
                            <option value="collection">JNE</option>
                            <option value="first-class">Tiki</option>
                            <option value="second-class">Super Fast JNE</option>
                            <option value="signed-for">Super Fast Tiki</option>
                        </select>
                    </div>
                    <div class="summary-total">
                        <div class="total-title">Total</div>
                        <div class="total-value final-value" id="basket-total">58.000</div>
                    </div>
                    <div class="summary-checkout">
                        <button class="checkout-cta">Bayar</button>
                    </div>
                </div>
            </aside>
        </main>
    </body>

    </html>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="./shop.js"></script>

</body>

</html>
