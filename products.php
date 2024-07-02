<div class="mx-4 my-4 xl:pl-[240px] xl:py-8 xl:my-0 xl:mx-0">
    <?php if(!isset($_GET['catidx'])) { ?>
    <div class="w-full xl:pl-8">
        <div class="flex flex-col gap-1">
            <h1 class="text-[20px] font-[550] text-dark tracking-[-.0125rem]">Products</h1>
        </div>
    </div>
    <!-- -->
    <div class="xl:mx-8 my-4 xl:my-6 flex flex-col bg-[#FFF] rounded-2xl overflow-hidden border border-[#00000021]">
        <div class="flex items-center justify-between px-3 py-2 border-b">
            <a href="javascript:;" class="bg-[#00000014] hover:bg-[#0000000d] py-[.25rem] px-[.75rem] text-[.75rem] text-dark rounded-lg font-[550]">All</a>
            <div class="flex items-center gap-2">
                <div id="tooltip-search" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-normal text-dark transition-opacity duration-300 bg-white rounded-lg shadow-xl border opacity-0 tooltip dark:bg-gray-700">
                    Search and filter (F)
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="tooltip-sort" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-1 text-sm font-normal text-dark transition-opacity duration-300 bg-white rounded-lg shadow-xl border opacity-0 tooltip dark:bg-gray-700">
                    Sort
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div class="flex items-center px-2 py-1.5 custom-btn-light-reverse hover:bg-[#fafafa] rounded-xl cursor-pointer" data-tooltip-target="tooltip-search">
                    <a href="#" alt="" title=""><img src="assets/images/search.svg" alt="" title="" class="w-[20px] h-[20px]"></a>
                    <a href="#" alt="" title=""><img src="assets/images/filter.svg" alt="" title="" class="w-[20px] h-[20px]"></a>
                </div>
                <div class="flex items-center px-2 py-1.5 custom-btn-light-reverse hover:bg-[#fafafa] rounded-xl cursor-pointer" data-tooltip-target="tooltip-sort">
                    <a href="#" alt="" title=""><img src="assets/images/sort.svg" alt="" title="" class="w-[20px] h-[20px]"></a>
                </div>
            </div>
        </div>
        <div class="w-full xl:h-[260px] flex justify-between items-center xl:px-60 p-6">
            <div class="flex flex-col gap-1">
                <h2 class="text-[18px] font-[550] text-dark tracking-[-.0125rem]">Add your products</h2>
                <p class="text-[.75rem] text-dark">Start by stocking your store with products your customers will love</p>
                <div class="mt-4 flex items-center gap-2.5">
                    <a href="index.php?goto=products&catidx=add" alt="" title="" class="custom-btn px-[10px] py-[.375rem] bg-[#303030] font-[550] text-[.75rem] text-[#FFF] rounded-[.5rem] hover:bg-[#1a1a1a] flex items-center">
                        <img src="assets/images/plus.svg" alt="" title="" class="w-[20px] h-[20px]">
                        <span>Add product</span>
                    </a>
                    <a href="#" alt="" title="" class="font-[550] text-[.75rem] px-[10px] py-[.375rem] custom-btn-light-reverse text-dark rounded-[.5rem] hover:bg-[#00000005] flex items-center">
                        <img src="assets/images/import.svg" alt="" title="" class="w-[20px] h-[20px]">
                        Import
                    </a>
                </div>
            </div>
            <div class="hidden xl:block">
                <img src="assets/images/product-empty.svg" alt="" title="">
            </div>
        </div>
        <div class="w-full flex flex-col gap-1 bg-[#f7f7f7] xl:px-60 xl:py-10 p-6">
            <h3 class="text-sm font-[550] text-dark tracking-[-.0125rem]">Find products to sell</h3>
            <p class="text-[.75rem] text-dark">Have dropshipping or print on demand products shipped directly from the supplier to your customer, and only pay for what you sell.</p>
            <a href="#" alt="" title="" class="font-[550] text-[.75rem] px-[10px] py-[.375rem] w-max mt-3 custom-btn-light-reverse text-dark rounded-[.5rem] bg-white hover:bg-[#00000005] flex items-center">
                Browse product sourcing apps
            </a>
        </div>
    </div>
    <!-- -->
    <?php } ?>

    <?php if(isset($_GET['catidx']) && $_GET['catidx'] == "add") { ?>
    <div class="w-full lg:w-[980px] lg:mx-auto">
        <div class="flex items-center gap-1">
            <a href="index.php?goto=products" alt="" title="" class="p-1 hover:bg-[#CCC] rounded-lg"><img src="assets/images/arrow-left.svg" alt="" title="" class="w-[20px] h-[20px]"></a>
            <span class="text-[20px] font-[600] text-dark tracking-[-.0125rem]">Add product</span>
        </div>
        <!-- -->
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 mt-4">
            <div class="flex flex-col w-full order-2 lg:order-1">

                <div class="flex flex-col bg-[#FFF] gap-4 rounded-2xl overflow-hidden border border-[#00000021] w-full p-4">
                    <!-- -->
                    <div class="flex flex-col gap-1">
                        <label class="text-[.8125rem] text-dark">Title</label>
                        <input type="text" name="name" placeholder="Short sleeve t-shirt" class="flex items-center text-[.8125rem] text-dark w-full h-[32px] rounded-lg px-[.75rem] border-[#AAA] hover:border-[#888] focus:border-[#000]">
                    </div>
                    <!-- -->
                    <div class="flex flex-col gap-1">
                        <label class="text-[.8125rem] text-dark">Description</label>
                        <textarea class="textEditor"></textarea>
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="flex flex-col gap-1">
                        <label class="text-[.8125rem] text-dark">Media</label>
                        <input type="file" name="gallery" class="files">
                    </div>
                    <!-- -->
                    <!-- -->
                    <div class="flex flex-col gap-1">
                        <label class="text-[.8125rem] text-dark">Category</label>
                        <select data-placeholder="" multiple class="data-select flex items-center text-[.8125rem] h-[32px] text-dark w-full rounded-lg px-[.75rem] py-0 border-[#AAA] hover:border-[#888] focus:border-[#000]">
                            <option value="">Seçim</option>
                            <option value="1">Animals & Pet Supplies</option>
                            <option value="1">Apparel & Accessories</option>
                            <option value="1">Arts & Entertainment</option>
                            <option value="1">Arts & Entertainment</option>
                            <option value="1">Arts & Entertainment</option>
                            <option value="1">Arts & Entertainment</option>
                            <option value="1">Arts & Entertainment</option>
                            <option value="1">Arts & Entertainment</option>
                        </select>
                    </div>
                    <!-- -->
                </div>
                <!-- -->
                <div class="flex flex-col bg-[#FFF] gap-4 rounded-2xl overflow-hidden border border-[#00000021] w-full p-4 mt-4">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col gap-1.5">
                            <h4 class="text-[14px] text-dark font-[550]">Search engine listing</h4>
                            <p class="text-[13px] text-dark">Add a title and description to see how this product might appear in a search engine listing</p>
                        </div>
                        <a href="#" alt="" title="" class="text-[#005bd3] text-[13px] hover:underline">Edit</a>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-1">
                            <label class="text-[.8125rem] text-dark">Page Title</label>
                            <input type="text" name="title" class="flex items-center text-[.8125rem] text-dark w-full h-[32px] rounded-lg px-[.75rem] border-[#AAA] hover:border-[#888] focus:border-[#000]">
                            <span class="text-[.75rem] text-[#616161] mt-1">0 of 70 characters used</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-[.8125rem] text-dark">Meta description</label>
                            <textarea name="description" class="flex items-center text-[.8125rem] text-dark w-full h-[90px] rounded-lg px-[.75rem] border-[#AAA] hover:border-[#888] focus:border-[#000]"></textarea>
                        </div>
                        <div class="flex flex-col gap-1 relative">
                            <label class="text-[.8125rem] text-dark">URL handle</label>
                            <span class="absolute top-[30px] left-2 text-[.8125rem] text-[#616161]" readonly="readonly">https://472f87-8e.myshopify.com/products/</span>
                            <input type="text" name="slug" class="flex items-center text-[.8125rem] text-dark w-full h-[32px] rounded-lg px-[.75rem] pl-[278px] border-[#AAA] hover:border-[#888] focus:border-[#000]">
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
            <div class="flex flex-col gap-4 w-full lg:w-[450px] order-1 lg:order-2">
                <!-- -->
                <div class="bg-[#FFF] rounded-2xl overflow-hidden border border-[#00000021] p-4">
                    <div class="flex flex-col gap-1.5">
                        <label class="text-[14px] text-dark font-[550]">Status</label>
                        <select class="flex items-center text-[.8125rem] h-[32px] text-dark w-full rounded-lg px-[.75rem] py-0 border-[#AAA] hover:border-[#888] focus:border-[#000]">
                            <option value="1">Active</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="bg-[#FFF] rounded-2xl overflow-hidden border border-[#00000021] p-4">
                    <div class="flex flex-col gap-1.5">
                        <h3 class="text-[14px] text-dark font-[550]">Publishing</h3>
                        <h4 class="text-[13px] text-dark font-[550]">Sales channels</h4>
                        <ul class="list-disc px-4 flex flex-col gap-1">
                            <li  class="text-[13px] text-dark">Online Store</li>
                            <li class="text-[13px] text-dark">
                                <span>Point of Sale</span>
                                <p class="text-[#616161] text-[12px] mt-1">Point of Sale has not been set up. Finish the remaining steps to start selling in person.</p>
                                <a href="#" alt="" title="" class="text-[#005bd3] underline">Learn more</a>
                            </li>
                        </ul>
                        <h5 class="text-[12px] text-dark font-[550] mt-2">Markets</h5>
                        <ul class="list-disc px-4 flex flex-col gap-1">
                            <li class="text-[13px] text-dark">International and Türkiye</li>
                        </ul>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
        <!-- -->
        <button type="submit" name="saveBtn" class="mt-6 custom-btn px-[10px] py-[.375rem] bg-[#303030] font-[550] text-[.75rem] text-[#FFF] rounded-[.5rem] hover:bg-[#1a1a1a]">Save</button>
    </div>
    <?php } ?>
</div>