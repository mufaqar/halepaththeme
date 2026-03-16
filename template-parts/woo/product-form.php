<?php
// Initialize wrapper class (you can also make it conditional if needed)
$quote_form_class = "container mx-auto mt-5 rounded-[19px] bg-[#CCCCCCB5]/70";

// Get all WooCommerce products
$products = wc_get_products(array('limit' => -1));
?>


<section id="form-tabs" class="mt-10">

    <!-- Tabs Buttons -->
    <div class="hale_container !px-0 flex border-b border-gray-300 bg-white z-40">
        <button class="form_tab-btn form_tab_active" data-tab="tab1">Standard Sizes</button>
        <button class="form_tab-btn" data-tab="tab2">Request a Quote</button>
    </div>

    <!-- Tabs Content -->
    <div class="tab-content mt-6">
        <div class="form_tab-panel" id="tab1">
            <h2 class="md:text-[28px] md:leading-normal text-2xl font-bold text-title_Clr">
                Get Custom Quote
            </h2>
            <div class="<?php echo esc_attr($quote_form_class); ?>">
                <form id="sizes-form" class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10" method="POST">
                    <div class="w-full gap-2.5">
                        <!-- Name + Phone -->
                        <section class="grid grid-cols-2 gap-2.5">
                            <div>
                                <label for="name" class="text-sm font-medium hidden">Name</label>
                                <input type="text" name="name" id="name" placeholder="Your Name" class="hale_input"
                                    required>
                            </div>
                            <div>
                                <label for="phone" class="text-sm font-medium hidden">Phone</label>
                                <input type="tel" name="phone" id="phone" placeholder="Phone Number" class="hale_input">
                            </div>
                        </section>

                        <!-- Email + Product -->
                        <section class="grid grid-cols-2 gap-2.5 mt-2.5">
                            <div>
                                <label for="email" class="text-sm font-medium hidden">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email Address"
                                    class="hale_input" required>
                            </div>
                            <div class="relative">
                                <label for="product" class="text-sm font-medium hidden">Select Product</label>
                                <select name="product" id="product" required class="hale_input h-full appearance-none">
                                    <option value="" disabled selected>Select Product</option>
                                    <?php foreach ($products as $product): ?>
                                        <option value="<?php echo esc_attr($product->get_name()); ?>">
                                            <?php echo esc_html($product->get_name()); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                        </section>

                        <!-- Dimensions + Colors + Unit + Stock -->
                        <section class="grid grid-cols-3 gap-2 mt-2.5 items-start">
                            <div>
                                <label for="length" class="text-sm font-medium hidden">Length</label>
                                <input type="number" name="length" id="length" placeholder="Length" class="hale_input"
                                    required>
                            </div>
                            <div>
                                <label for="width" class="text-sm font-medium hidden">Width</label>
                                <input type="number" name="width" id="width" placeholder="Width" class="hale_input"
                                    required>
                            </div>
                            <div>
                                <label for="depth" class="text-sm font-medium hidden">Depth</label>
                                <input type="number" name="depth" id="depth" placeholder="Depth" class="hale_input"
                                    required>
                            </div>
                        </section>

                        <section class="grid grid-cols-3 gap-2 mt-2.5">
                            <div class="relative">
                                <label for="colors" class="text-sm font-medium hidden">Colors</label>
                                <select name="colors" id="colors" class="hale_input h-full appearance-none" required>
                                    <option value="">Colors</option>
                                    <option value="1">1 color</option>
                                    <option value="2">2 colors</option>
                                    <option value="3">3 colors</option>
                                    <option value="4">4 colors</option>
                                    <option value="5">5 colors</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>

                            <div class="relative">
                                <label for="unit" class="text-sm font-medium hidden">Unit</label>
                                <select name="unit" id="unit" required class="hale_input h-full appearance-none">
                                    <option value="">Select Unit</option>
                                    <option value="inches">Inches</option>
                                    <option value="cm">CM</option>
                                    <option value="mm">MM</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>

                            <div class="relative">
                                <label for="stock" class="text-sm font-medium hidden">Stock</label>
                                <select name="stock" id="stock" required class="hale_input h-full appearance-none">
                                    <option value="">Select Stock</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                        </section>

                        <!-- Message -->
                        <section class="col-span-2 md:col-span-1 mt-2.5">
                            <textarea name="message" id="message" rows="3" placeholder="Write Your Message..."
                                class="hale_input rounded-[20px]! h-[141px]" required></textarea>
                        </section>

                        <!-- Agree Checkbox -->
                        <div class="flex gap-2 mt-3 items-center">
                            <input type="checkbox" name="agree" id="agree" class="p-2 w-4 h-4" required>
                            <label for="agree" class="cursor-pointer text-sm">
                                I Agree that my data is <strong>collected and Stored.</strong>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <section class="flex items-center gap-2 justify-between mt-2.5">
                        <div class="w-full">
                            <button type="submit" class="btn_secondry w-full">
                                SUBMIT
                            </button>
                        </div>
                    </section>
                </form>
            </div>
        </div>

        <div class="form_tab-panel hidden" id="tab2">

            <div class="<?php echo esc_attr($quote_form_class); ?>">
                <form id="quote-form" class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10" method="POST">
                    <h2 class="md:text-[28px] md:leading-normal text-2xl font-bold text-title_Clr">
                        Available Sizes for Rigid Foldable Boxes
                    </h2>
                    <p>
                        Choose from our popular Standard Sizes for a quick, off-the-shelf solution, or request a Custom
                        Quote
                        for a perfect, tailored fit. Whether you need something immediately or designed specifically for
                        your
                        brand, we provide flexible options to meet every need and budget.
                    </p>
                    <div class="w-full gap-2.5">
                        <section class="grid md:grid-cols-4 grid-cols-2 gap-2 mt-2.5">
                            <div class="relative">
                                <label for="dimension" class="text-sm font-medium hidden">dimension</label>
                                <select name="dimension" id="dimension" class="hale_input h-full appearance-none"
                                    required>
                                    <option value="5 x 4 x 1">5 x 4 x 1</option>
                                    <option value="6 x 5 x 2">6 x 5 x 2</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                            <div class="relative">
                                <label for="box_stock" class="text-sm font-medium hidden">Box Stock</label>

                                <select name="box_stock" id="box_stock" class="hale_input h-full appearance-none"
                                    required>
                                    <option value="Rigid">Rigid</option>
                                    <option value="Foldable">Foldable</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                            <div class="relative">
                                <label for="quantity" class="text-sm font-medium hidden">Quantity</label>
                                <select name="quantity" id="quantity" class="hale_input h-full appearance-none"
                                    required>
                                    <option value="1">100</option>
                                    <option value="2">200</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                            <div class="relative">
                                <label for="printing" class="text-sm font-medium hidden">Printing</label>
                                <select name="printing" id="printing" class="hale_input h-full appearance-none"
                                    required>
                                    <option value="Outside only">Outside only</option>
                                    <option value="Inside &amp; outside">Inside &amp; outside</option>
                                </select>
                                <i
                                    class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                            </div>
                        </section>
                        <p style="margin-top:20px; font-size:16px;">
                            <strong>Price:</strong> $650 for 100 items
                        </p>
                    </div>
                    <!-- Submit Button -->
                    <section class="flex items-center gap-2 justify-between mt-2.5">
                        <div class="w-full">
                            <button type="submit" class="btn_secondry w-1/2">
                                Proceed to Checkout
                            </button>
                        </div>
                    </section>
                    <div class="grid md:grid-cols-3 grid-cols-2 gap-5 mt-8">
                        <div class="text-center text-title_Clr space-y-2.5">
                            <i class="fa fa-clock" style="font-size:32px;"></i>
                            <p><strong>Quick</strong><br>Turnaround</p>
                        </div>
                        <div class="text-center text-title_Clr space-y-2.5">
                            <i class="fa fa-pencil-square" style="font-size:32px;"></i>
                            <p><strong>Free</strong><br>Designing</p>
                        </div>
                        <div class="text-center text-title_Clr space-y-2.5">
                            <i class="fa fa-truck" style="font-size:32px;"></i>
                            <p><strong>Free</strong><br>Shipping</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ========= TAB SWITCHING ========= */

    const tabButtons = document.querySelectorAll('.form_tab-btn');
    const tabPanels = document.querySelectorAll('.form_tab-panel');

    function openTab(tabId) {

        tabPanels.forEach(panel => panel.classList.add('hidden'));
        tabButtons.forEach(btn => btn.classList.remove('form_tab_active'));

        const activePanel = document.getElementById(tabId);
        const activeBtn = document.querySelector(`.form_tab-btn[data-tab="${tabId}"]`);

        if (activePanel) activePanel.classList.remove('hidden');
        if (activeBtn) activeBtn.classList.add('form_tab_active');
    }

    if (tabButtons.length > 0) {
        openTab(tabButtons[0].dataset.tab);
    }

    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            openTab(this.dataset.tab);
        });
    });


    /* ========= FORM DATA CONSOLE TEST ========= */

    const forms = document.querySelectorAll('#sizes-form, #quote-form');

    forms.forEach(form => {

        form.addEventListener('submit', function(e) {

            e.preventDefault();

            const formData = new FormData(this);

            const data = {};

            formData.forEach((value, key) => {
                data[key] = value;
            });

            console.log('Form Submitted:', this.id);
            console.log(data);

        });

    });

});
</script>