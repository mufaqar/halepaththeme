<?php
// Initialize wrapper class (you can also make it conditional if needed)
$quote_form_class = "container mx-auto mt-10 rounded-[19px] bg-[#CCCCCCB5]/70";

// Get all WooCommerce products
$products = wc_get_products(array('limit' => -1));
?>

<div class="<?php echo esc_attr($quote_form_class); ?>">
    <form id="quote-form" class="grid w-full gap-2 items-center px-3 sm:px-5 py-6 md:py-10" method="POST">
        <div class="w-full gap-2.5">
            <!-- Name + Phone -->
            <section class="grid grid-cols-2 gap-2.5">
                <div>
                    <label for="name" class="text-sm font-medium hidden">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name" class="hale_input" required>
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
                    <input type="email" name="email" id="email" placeholder="Email Address" class="hale_input" required>
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
                    <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                </div>
            </section>

            <!-- Dimensions + Colors + Unit + Stock -->
            <section class="grid grid-cols-3 gap-2 mt-2.5 items-start">
                <div>
                    <label for="length" class="text-sm font-medium hidden">Length</label>
                    <input type="number" name="length" id="length" placeholder="Length" class="hale_input" required>
                </div>
                <div>
                    <label for="width" class="text-sm font-medium hidden">Width</label>
                    <input type="number" name="width" id="width" placeholder="Width" class="hale_input" required>
                </div>
                <div>
                    <label for="depth" class="text-sm font-medium hidden">Depth</label>
                    <input type="number" name="depth" id="depth" placeholder="Depth" class="hale_input" required>
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
                    <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                </div>

                <div class="relative">
                    <label for="unit" class="text-sm font-medium hidden">Unit</label>
                    <select name="unit" id="unit" required class="hale_input h-full appearance-none">
                        <option value="">Select Unit</option>
                        <option value="inches">Inches</option>
                        <option value="cm">CM</option>
                        <option value="mm">MM</option>
                    </select>
                    <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
                </div>

                <div class="relative">
                    <label for="stock" class="text-sm font-medium hidden">Stock</label>
                    <select name="stock" id="stock" required class="hale_input h-full appearance-none">
                        <option value="">Select Stock</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <i class="absolute right-4 top-1/2 text-xl text-gray-500 -translate-y-1/2 fa fa-chevron-down"></i>
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
                <button type="submit"
                    class="btn_secondry w-full">
                    SUBMIT
                </button>
            </div>
        </section>
    </form>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('#quote-form').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php"); ?>',
                type: 'POST',
                data: formData + '&action=submit_quote_form',
                success: function (response) {
                    alert('Quote submitted successfully!');
                    $('#quote-form')[0].reset();
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });
    });
</script>