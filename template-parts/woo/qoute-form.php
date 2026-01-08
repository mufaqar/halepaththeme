<div class="container mx-auto mt-10 rounded-[19px] bg-[#CCCCCCB5]/70">
    <form id="quote-form" class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 w-full gap-2.5">
            <!-- Name -->
            <div>
                <label for="name" class="text-sm font-medium leading-none hidden">Name</label>
                <input
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                    type="text" name="name" id="name" placeholder="Your Name" required />
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="text-sm font-medium leading-none hidden">Phone Number</label>
                <input
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                    type="tel" name="phone" id="phone" placeholder="Phone Number" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="text-sm font-medium leading-none hidden">Email Address</label>
                <input
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                    type="email" name="email" id="email" placeholder="Email Address" required />
            </div>

            <!-- Select Product (WooCommerce Categories) -->
            <div class="relative">
                <label for="Product" class="text-sm font-medium leading-none hidden">Select Product</label>
                <select
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-[16px] border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                    name="product" id="Product" required>
                    <option value="" disabled selected>Select Product</option>
                    <?php
                    $products = wc_get_products(array('limit' => -1)); // Get all WooCommerce products
                    foreach ($products as $product) {
                        echo '<option value="' . esc_attr($product->get_name()) . '">' . esc_html($product->get_name()) . '</option>';
                    }
                    ?>
                </select>
                <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
            </div>

            <!-- Colors -->
            <div class="relative">
                <label for="Colors" class="text-sm font-medium leading-none hidden">Colors</label>
                <select
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr cursor-pointer bg-white p-4 border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full w-full"
                    name="colors" id="Colors" required>
                    <option value="">Colors</option>
                    <option value="1">1 color</option>
                    <option value="2">2 colors</option>
                    <option value="3">3 colors</option>
                    <option value="4">4 colors</option>
                    <option value="5">5 colors</option>
                </select>
                <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
            </div>

            <!-- Dimensions -->
            <div>
                <label for="Length" class="text-sm font-medium leading-none hidden">Length</label>
                <input type="number" name="length" id="Length" placeholder="Length"
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr rounded-full bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none w-full"
                    required>
            </div>

            <div>
                <label for="Width" class="text-sm font-medium leading-none hidden">Width</label>
                <input type="number" name="width" id="Width" placeholder="Width"
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                    required>
            </div>

            <div>
                <label for="Depth" class="text-sm font-medium leading-none hidden">Depth</label>
                <input type="number" name="depth" id="Depth" placeholder="Depth"
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none rounded-full w-full"
                    required>
            </div>

            <!-- Unit -->
            <div class="relative">
                <label for="Unit" class="text-sm font-medium leading-none hidden">Select Unit</label>
                <select
                    class="text-sm font-medium text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary appearance-none outline-none rounded-full cursor-pointer w-full"
                    name="unit" id="Unit" required>
                    <option value="">Select Unit</option>
                    <option value="inches">Inches</option>
                    <option value="cm">CM</option>
                    <option value="mm">MM</option>
                </select>
                <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
            </div>

            <!-- Message -->
            <textarea name="message" id="detail" rows="1" placeholder="Write Your Message..."
                class="text-sm font-medium rounded-full text-txt_Clr placeholder:text-txt_Clr bg-white p-4 border border-[#CACACA] focus:border-secondary outline-none w-full"
                required></textarea>
        </div>

        <!-- Agree Checkbox -->
        <div class="grid gap-2">
            <div class="flex gap-2 my-3 col-span-5 items-center">
                <input type="checkbox" id="agree" name="agree" class="p-2 w-4 h-4" required>
                <label for="agree" class="cursor-pointer text-sm">
                    I Agree that my data is <strong>collected and Stored.</strong>
                </label>
            </div>
        </div>

        <!-- Submit + File Upload -->
        <section class="flex items-center gap-2 justify-between">
            <div class="w-full">
                <button type="submit"
                    class="text-base max-w-[600px] font-semibold text-white bg-[#1C2E42] hover:bg-secondary px-4 py-3 rounded-full w-full"
                    id="quote-submit">
                    SUBMIT
                </button>
            </div>
            <div>
                <input type="file" id="fileInput" name="file" style="display:none;">
                <button type="button" id="uploadBtn"
                    class="flex items-center text-nowrap whitespace-nowrap justify-center px-12 py-3 font-medium text-white bg-[#53B6C9] hover:bg-secondary-dark rounded-full">
                    Attached File
                </button>
            </div>
        </section>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('quote-form');
        const uploadBtn = document.getElementById('uploadBtn');
        const fileInput = document.getElementById('fileInput');

        // Trigger file input
        uploadBtn.addEventListener('click', function () {
            fileInput.click();
        });

        // Ajax form submission
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(form);

            fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                method: 'POST',
                body: formData
            }).then(res => res.json()).then(data => {
                if (data.success) {
                    alert('Quote submitted successfully!');
                    form.reset();
                } else {
                    alert('Something went wrong!');
                }
            });
        });
    });
</script>