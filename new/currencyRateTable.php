<!-- currency rates table -->
<section class="w-full flex justify-center items-center relative">
    <div class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-16">

        <h2 class="text-[#040815] text-xl md:text-3xl customMd:text-[40px] font-bold customMd:leading-[60px]">
        <?php echo $currency ?> Rates Today
        </h2>

        <p
            class=" w-full text-sm font-normal lg:w-[980px] text-gray-400 text-sm font-normal mt-3 mb-3 font-['Plus Jakarta Sans'] pr-1 leading-[21px]">
            Fresh <?php echo $currencyfull ?> Cost and Conversion to Indian Cities in India
        </p>
        <div class="grid md:grid-cols-2 gap-8 py-16">
            <!-- Left Column -->
            <div>
                <h2 class="text-lg font-bold mb-4">Convert <?php echo $currencyfull ?> to Indian Rupee</h2>
                <div class="rounded-lg overflow-hidden ">
                    <table class="w-full border border-gray-200">
                        <thead class="bg-black/5">
                            <tr>
                                <th class="text-[#002C60] text-left py-3 px-4 font-bold text-lg"><?php echo $currencyfull ?></th>
                                <th class="text-[#002C60] text-right py-3 px-4 font-bold text-lg">Indian Rupee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold py-3 px-4">1 <?php echo $currency ?></td>
                                <td class="p-3 px-4 font-semibold text-right">88 INR</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">5 <?php echo $currency ?></td>
                                <td class="p-3 px-4 font-semibold text-right">440 INR</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">10 <?php echo $currency ?></td>
                                <td class="p-3 px-4 font-semibold text-right">84.34 INR</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">25 <?php echo $currency ?></td>
                                <td class="p-3 px-4 font-semibold text-right">2,203 INR</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">50 <?php echo $currency ?></td>
                                <td class="p-3 px-4 font-semibold text-right">4,400 INR</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <h2 class="text-lg font-bold mb-4">Convert Indian Rupee to <?php echo $currencyfull ?></h2>
                <div class="rounded-lg overflow-hidden"> <!-- Added wrapper div -->
                    <table class="w-full border border-gray-200">
                        <thead class="bg-black/5">
                            <tr>
                                <th class="text-[#002C60] text-left py-3 px-4 font-bold text-lg">Indian Rupee</th>
                                <th class="text-[#002C60] text-right py-3 px-4 font-bold text-lg"><?php echo $currencyfull ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">1 INR</td>
                                <td class="p-3 px-4 font-semibold text-right">0.011988 <?php echo $currency ?></td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">5 INR</td>
                                <td class="p-3 px-4 font-semibold text-right">0.011988 <?php echo $currency ?></td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">10 INR</td>
                                <td class="p-3 px-4 font-semibold text-right">0.011988 <?php echo $currency ?></td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">25 INR</td>
                                <td class="p-3 px-4 font-semibold text-right">0.011988 <?php echo $currency ?></td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="text-[#0e51a0] font-semibold p-3 px-4">50 INR</td>
                                <td class="p-3 px-4 font-semibold text-right">0.011988 <?php echo $currency ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
