<?php
$steps = [
    [
        'id' => 1,
        'title' => 'Book Online',
        'description' => 'Lpsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.',
    ],
    [
        'id' => 2,
        'title' => 'Choose Design',
        'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
    ],
    [
        'id' => 3,
        'title' => 'Confirmation',
        'description' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.',
    ],
    [
        'id' => 4,
        'title' => 'Delivery',
        'description' => 'Lpsum is simply dummy text of the printing and typesetting is industry. Lorem Ipsum has been.',
    ],
];
?>

<section
    class='md:py-14 py-10 relative bg-center bg-no-repeat bg-cover before:content-[""] before:absolute before:w-full before:bg-[#081d29bd]  before:h-full before:top-0'
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/qoute-bg.png'">
    <div class="container mx-auto px-4 relative z-10 flex md:flex-row flex-col gap-7">
        <div class="md:w-1/2 w-full">

            <div
                class="bg-title_Clr h-full max-w-[546px] mx-auto rounded-2xl md:px-14 md:py-8 p-8 md:gap-12 gap-12 flex flex-col">
                <?php foreach ($steps as $index => $step): ?>
                    <div class="relative flex md:flex-row flex-col md:gap-[30px] gap-7">
                        <span
                            class="text-xl font-medium text-white PoppinsMedium bg-secondary p-[18px] border-[18px] border-primary rounded-full flex items-center justify-center w-[89px] h-[89px] before_line <?php echo ($index === count($steps) - 1) ? 'before:content-none' : 'before:content-[""] '; ?>">
                            <?php echo '0' . esc_html($step['id']); ?>
                        </span>

                        <div>
                            <h4 class="text-xl font-medium text-primary mb-2 PoppinsMedium">
                                <?php echo esc_html($step['title']); ?>
                            </h4>
                            <p class="text-sm font-light text-white">
                                <?php echo esc_html($step['description']); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <h4 class="text-xl font-semibold text-white mb-4 flex items-center gap-3">
                <span>Contact Us </span>
                <span class="block border-b-2 border-white max-w-[61px] w-full"></span>
            </h4>
            <h2 class="md:text-4xl text-3xl font-bold text-white mb-8">
                Request Your Any Query Now!
            </h2>
            <form onSubmit={onSubmit} class="grid w-full gap-4 items-center mt-5 bg-primary md:p-8 p-6 rounded-[19px]">
                <div class="w-full flex md:flex-row flex-col gap-4">
                    <div class="w-full flex flex-col">
                        <label htmlfor="fullname" class="text-sm font-medium leading-none hidden">
                            Full Name
                        </label>
                        <input
                            class="text-lg md:leading-[56px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full"
                            type="text" name="fullname" id="fullname" placeholder="Full Name" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label htmlfor="phone" class="text-sm font-medium leading-none hidden">
                            Your Contact
                        </label>
                        <input
                            class="text-lg md:leading-[56px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full"
                            type="tel" name="phone" id="phone" placeholder="Your Contact" />
                    </div>
                </div>
                <div class="w-full flex md:flex-row flex-col gap-4">
                    <div class="w-full flex flex-col">
                        <label htmlfor="email" class="text-sm font-medium leading-none hidden">
                            Email Address
                        </label>
                        <input
                            class="text-lg md:leading-[56px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full"
                            type="email" name="email" id="email" placeholder="Email  Address" />
                    </div>
                    <div class="w-full flex flex-col">
                        <label htmlfor="product" class="text-sm font-medium leading-none hidden">
                            Cosmetics Packaging
                        </label>
                        <select
                            class="text-lg md:leading-[56px] font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full md:min-h-[58px] h-[36px]"
                            name="product" id="product">
                            <option value="select the Product">select the Product</option>
                            <option value="Product1">Product1</option>
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <label htmlfor="message" class="text-sm font-medium leading-none hidden">
                        Your Message
                    </label>
                    <textarea
                        class="text-lg pt-2 font-normal text-[#7C7C7C] placeholder:text-[#7C7C7C] bg-white px-7  border border-transparent focus:border-secondary outline-none rounded-[19px] w-full"
                        id="message" name="message" rows="3" placeholder="Write Your Message..."></textarea>
                </div>
                <div class="w-full">
                    <input type="checkbox"
                        class="bg-transparent px-7  border-2 border-white focus:border-secondary outline-white mr-2"
                        name="acceptance" id="acceptance" />
                    <label htmlfor="acceptance"
                        class="md:text-lg md:md:leading-[56px] text-sm font-normal text-white inline-block">
                        I Agree that my data is collected and Stored.
                    </label>
                </div>
                <div class="w-full">
                    <button type="submit"
                        class="text-lg md:leading-[56px] font-normal text-white bg-secondary px-7  border border-transparent focus:border-secondary outline-none rounded-full w-full">
                        SUBMIT
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>