<section class="w-full flex justify-center items-center relative">
    <div class="flex w-full flex-col px-5 sm:px-12 md:px-24 py-5 relative justify-center sm:justify-between md:pt-16">

        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <!--includes /  graph -->
            <div class="w-full md:pr-4">
                <?php include 'graph.php' ?>
            </div>


            <!--includes/ cityratetable -->
            <div class="w-full md:pr-4">
                <h1 class="text-xl text-black font-bold tracking-tight mb-6">
                    Rates for Forex Card and Currencies in Major Cities in India
                </h1>

                <?php
                // Assuming you have your data in an array or database result
                $forex_data = array(
                    'Mumbai' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'New Delhi' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Chennai' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Kolkata' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Pune' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Hyderabad' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Bangalore' => array('currency' => '84.36', 'forex_card' => '84.36'),
                    'Ahmedabad' => array('currency' => '84.36', 'forex_card' => '84.36')
                );
                ?>

                <div class="relative border w-full rounded-lg overflow-hidden">
                    <!-- Table for desktop view -->
                    <div class="hidden sm:block overflow-x-auto">
                        <table class="w-full text-sm text-left font-['Plus Jakarta Sans']">
                            <thead class="bg-[#2c5aa2]">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-white font-semibold">
                                        <div class="flex items-center gap-4">
                                            <span>City</span>
                                            <div class="flex items-center bg-white/10 rounded px-2 py-1">
                                                <span class="text-sm text-white"><?php echo $currency ?></span>
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-white font-semibold">Currency</th>
                                    <th scope="col" class="px-6 py-3 text-white font-semibold">Forex Card</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50 divide-y divide-gray-200">
                                <?php foreach ($forex_data as $city => $rates): ?>
                                    <tr>
                                        <th class="px-6 py-4 font-medium text-gray-900"><?php echo $city; ?></th>
                                        <td class="px-6 py-4 text-gray-900 font-semibold">₹<?php echo $rates['currency']; ?>
                                        </td>
                                        <td class="px-6 py-4 text-gray-900 font-semibold">
                                            ₹<?php echo $rates['forex_card']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile view -->
                    <div class="sm:hidden w-full max-w-2xl border-0  ">
                        <?php foreach ($forex_data as $city => $rates): ?>
                            <div class="py-4 border-b border-gray-200 last:border-b-0">
                                <h3 class="text-gray-900 font-bold mb-2"><?php echo $city; ?></h3>
                                <div class="flex gap-8">
                                    <div class="flex gap-2">
                                        <span class="text-[#666]">Currency</span>
                                        <span class="text-[#666] font-bold">₹<?php echo $rates['currency']; ?></span>
                                    </div>
                                    <div class="flex gap-2">
                                        <span class="text-[#666]">Forex Card</span>
                                        <span class="text-[#666] font-bold">₹<?php echo $rates['forex_card']; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>