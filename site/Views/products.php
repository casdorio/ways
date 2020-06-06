        <!-- =============================== Area=================== -->
        <div class="products-area">
            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12">
                        <div class="products">
                            <!-- Left Sidebar -->
                            <div class="products-left">
                                <div class="products-left-inner">
                                    <!-- Mobile cross -->
                                    <div class="mobile-cat-cross">
                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/times-solid.svg" alt="times-solid">
                                    </div>
                                    

                                    <!-- Categories  -->
                                    <h3>Categories</h3>
                                    <table>
                                        <tr>
                                            <td><a href="<?php echo base_url()?>products"><strong>All</strong></a></td>
                                            <td><strong><?php echo $productsAll?></strong></td>
                                        </tr>
                                        <?php 
                                        foreach ($products  as $product) {
                                            echo '<tr><td><a href="'. base_url() .'products/p/'.$product['category']['id'].'">'.$product['category']['name'].'</a></td><td>'.count($product['product']).'</td></tr>';
                                        }
                                        ?>
                                        
                                    </table>
                                </div>
                                <!-- Adv -->
                                <div class="products-adv">
                                    <h4>Advertisement</h4>
                                    <p>That’s some text here</p>
                                </div>
                            </div>
                            <!-- Right Content -->
                            <div class="products-right">
                                <!-- Form -->
                                <div class="products-right-form">
                                    <form action="#">
                                        <div class="products-right-input">
                                            <input type="text" placeholder="Delivery address example here" id='seachMaps'>
                                        </div>
                                        <div class="products-right-select">
                                            <div class="filter-by">
                                                <p>Filter by</p>
                                            </div>
                                            <select name="products-filter" id="productss">
                                                <option value="0">Highest Price</option>
                                                <option value="1">Filter</option>
                                                <option value="2">Filter</option>
                                                <option value="3">Filter</option>
                                                <option value="4">Filter</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <!-- Products -->
                                <div class="products-lists">
                                    <h3>Estimated delivery price: $90/truck</h3>
                                    <!-- Mobile product menu -->
                                    <div class="products-menu">
                                        <button class="btn-hamburger products-menu-bar">
                                            <img src="<?php echo base_url().FRONT_THEME;?>assets/img/bars.svg" alt="menu"> <span> &nbsp; Categories</span>
                                        </button>
                                    </div>
                                    <!-- Products -->
                                    <div class="products-lists-iiner">
                                        <div class="grid-x grid-margin-x">
                                            
                                            
                                            
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-1.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-1">
                                                            <p>20% OFF</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>River sand</h3>
                                                        <p>$80/YD</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-2.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-2">
                                                            <p>HOT DEAL</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>Masonry sand</h3>
                                                        <p>$75/TON</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="3" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-1.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-1">
                                                            <p>20% OFF</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>River sand</h3>
                                                        <p>$80/YD</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-2.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-2">
                                                            <p>HOT DEAL</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>Masonry sand</h3>
                                                        <p>$75/TON</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="3" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-3.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-3">
                                                            <p>HOT DEAL</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>Washed Gravel</h3>
                                                        <p>$50/TON</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="0" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell large-4 medium-6">
                                                <!-- Single Product  -->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <img src="<?php echo base_url().FRONT_THEME;?>assets/img/pp-1.png" alt="product">
                                                        <!-- Badge -->
                                                        <div class="product-badge bg-4">
                                                            <p>20% OFF</p>
                                                        </div>
                                                    </div>
                                                    <!-- Desc -->
                                                    <div class="product-desc">
                                                        <h3>River sand</h3>
                                                        <p>$80/YD</p>
                                                    </div>
                                                    <!-- Cart -->
                                                    <div class="product-cart">
                                                        <!-- Count -->
                                                        <div class="cart-count">
                                                            <form>
                                                                <input class="minus" type="button" onclick="if(this.form.name.value>0){this.form.name.value--};">
                                                                <input class="input-box" type="text" name="name" value="7" onchange="if(this.value<0){this.value=0}" />
                                                                <input class="plus" type="button" onclick="if(this.form.name.value>=0){this.form.name.value++;}">
                                                            </form>
                                                        </div>
                                                        <!-- Add to Cart -->
                                                        <div class="cart-add">
                                                            <p>Add to Cart</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>