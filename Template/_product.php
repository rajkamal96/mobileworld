<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>

<!--product-->
<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item["item_image"] ?? "./img/1.png"; ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                            <?php
                                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item["item_name"] ?? "Unknown"; ?></h5>
                        <small>by <?php echo $item["item_brand"] ?? "Brand"; ?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-raleway font-size-12">20,524 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">

                        <!--product price-->
                        <table class="my-3">
                            <tr class="font-raleway font-size-14">
                                <td>M.R.P</td>
                                <td><strike>INR 15,999</strike></td>
                            </tr>
                            <tr class="font-raleway font-size-14">
                                <td>Deal Price</td>
                                <td class="font-size-20 text-danger">INR <span><?php echo $item["item_price"] ?? "0"; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive fo all taxes</small></td>
                            </tr>
                            <tr class="font-raleway font-size-14">
                                <td>You Save</td>
                                <td><span class="font-size-16 text-danger">5,999</span></td>
                            </tr>
                        </table>
                        <!--policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">10 days <br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">Free <br>Delivery</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">1 Year <br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--order details-->
                        <div id="order-details" class="font-raleway d-flex flex-column text-dark">
                            <small>Delivery by : Jun 29  - Jul 1</small>
                            <small>Sold by <a href="#">Raj Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 110052</small>
                        </div>

                        <div class="row">
                            <!--color-->
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                      <h6 class="font-baloo">Color:</h6>
                                      <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                      <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                      <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                  </div>
                            </div>
                            <!--quantity-->
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ram size-->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size :</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
            endif;
            endforeach;
        ?>