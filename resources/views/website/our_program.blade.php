@extends('front_site')

@section('content')

<section class="bg-[#f0efed]">
    <div class="px-12">
        <h1 class="inline-block relative text-[28px] lg:text-[35px] pl-[55px] 2xl:text-[50px] 2xl:pl-[85px] font-bold text-main my-[30px] mb-[50px] leading-tight before:absolute before:w-[40px] before:h-[40px]  before:2xl:w-[60px] before:2xl:h-[60px] before:bg-[length:40px] before:bg-[url('dist/img/heading-icon.png')] before:bg-no-repeat before:2xl:bg-[length:60px] before:bg-left-top before:left-0 before:top-0">
            OVAL is as Easy as 1-2-3
        </h1>
        <div class="flex flex-wrap -mx-[15px]">
            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 px-[15px]">
                <div class="group relative mb-9 px-[15px]">
                    <div class="transition-all duration-500 overflow-hidden pt-80 2xl:pt-[514px] group-hover:pt-[150px] group-hover:2xl:pt-[300px] bg-no-repeat bg-left-top bg-cover xl:bg-100%" style="background-image: url('{{asset('dist/img/our-program/identify-pic.jpg')}}')">
                        <div class="iw-program-info">
                            <div class="bg-white text-center py-10 2xl:py-[70px]" style="clip-path: polygon(50% 0,100% 50%,50% 100%,0 50%);">
                                <h4 class="font-bold text-tertiary text-[1.35rem] 2xl:text-[36px]">INDENTIFY</h4>
							</div>
                            <div class="pt-20 px-5 pb-[35px] -mt-[58px] 2xl:-mt-24 2xl:pt-[150px] bg-tertiary">
                                <div class="overflow-hidden h-0 transition-all duration-500 group-hover:h-auto">
                                    <ul class="text-center">
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">SMART Testing</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon1.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Personalized Programing</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon2.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Your unique biology</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="group-hover:block text-center hidden">
                        <a data-scroll="" class="inline-block font-bold py-[10px] px-[25px] my-[10px] text-white bg-tertiary text-[20px] 2xl:text-[30px] tracking-{1px} rounded-xl" href="#metabolic-testing">Learn More</a>
					</div>
				</div>
			</div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 px-[15px]">
                <div class="group relative mb-9 px-[15px]">
                    <div class="transition-all duration-500 overflow-hidden pt-80 2xl:pt-[514px] group-hover:pt-[150px] group-hover:2xl:pt-[300px] bg-no-repeat bg-left-top bg-cover xl:bg-100%" style="background-image: url('{{asset('dist/img/our-program/educate-pic.jpg')}}')">
                        <div class="iw-program-info">
                            <div class="bg-white text-center py-10 2xl:py-[70px]" style="clip-path: polygon(50% 0,100% 50%,50% 100%,0 50%);">
                                <h4 class="font-bold text-main text-[1.35rem] 2xl:text-[36px]">EDUCATE</h4>
							</div>
                            <div class="pt-20 px-5 pb-[35px] -mt-[58px] 2xl:-mt-24 2xl:pt-[150px] bg-main">
                                <div class="overflow-hidden h-0 transition-all duration-500 group-hover:h-auto">
                                    <ul class="text-center">
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">MetFlex Index</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon3.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Metabolic flexibility</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon4.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Mitochondria</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="group-hover:block text-center hidden">
                        <a data-scroll="" class="inline-block font-bold py-[10px] px-[25px] my-[10px] text-white bg-main text-[20px] 2xl:text-[30px] tracking-{1px} rounded-xl" href="#individualized-results">Learn More</a>
					</div>
				</div>
			</div>

            <div class="w-full sm:w-full md:w-1/2 lg:w-1/3 px-[15px]">
                <div class="group relative mb-9 px-[15px]">
                    <div class="transition-all duration-500 overflow-hidden pt-80 2xl:pt-[514px] group-hover:pt-[150px] group-hover:2xl:pt-[300px] bg-no-repeat bg-left-top bg-cover xl:bg-100%" style="background-image: url('{{asset('dist/img/our-program/elevate-pic.jpg')}}')">
                        <div class="iw-program-info">
                            <div class="bg-white text-center py-10 2xl:py-[70px]" style="clip-path: polygon(50% 0,100% 50%,50% 100%,0 50%);">
                                <h4 class="font-bold text-primary text-[1.35rem] 2xl:text-[36px]">ELEVATE</h4>
							</div>
                            <div class="pt-20 px-5 pb-[35px] -mt-[58px] 2xl:-mt-24 2xl:pt-[150px] bg-primary">
                                <div class="overflow-hidden h-0 transition-all duration-500 group-hover:h-auto">
                                    <ul class="text-center">
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Establish positive feedback cycles</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon1.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Recalibrate</li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]"><img class="mx-auto h-8" src="{{asset("dist/img/our-program/list-icon2.png")}}" alt="list-icon"></li>
                                        <li class="text-white my-[10px] text-[20px] 2xl:text-[30px]">Improvements in health and economic outcomes for the individual and the organization</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="group-hover:block text-center hidden">
                        <a data-scroll="" class="inline-block font-bold py-[10px] px-[25px] my-[10px] text-white bg-primary text-[20px] 2xl:text-[30px] tracking-{1px} rounded-xl" href="#benefits">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- metabolic testing section  --}}
<section id="metabolic-testing" class="bg-tertiary">
    <div class="w-full">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 relative bg-cover bg-left-top bg-no-repeat flex grow z-[1] before:absolute before:w-full before:h-full before:left-0 before:top-0 before:bg-white/90 before:z-[-1]" style="background-image: url('{{asset('dist/img/our-program/metabolic-testing-bg.jpg')}}')">
                <div class="w-full p-[5%] 2xl:py-[10%] self-center">
                    <h2 class="inline-block relative text-[28px] lg:text-[35px] pl-[55px] 2xl:text-[50px] 2xl:pl-[85px] font-bold text-main my-[30px] mb-[50px] 2xl:mb-[100px] leading-tight before:absolute before:w-[40px] before:h-[40px]  before:2xl:w-[60px] before:2xl:h-[60px] before:bg-[length:40px] before:bg-[url('dist/img/heading-icon.png')] before:bg-no-repeat before:2xl:bg-[length:60px] before:bg-left-top before:left-0 before:top-0">
                        1. IDENTIFY: Metabolic Testing
                    </h2>
                    <div class="relative text-center px-[5%] bg-[#00ae9d80] before:absolute before:w-[100px] before:h-[100px] before:2xl:w-[172px] before:2xl:h-[172px] before:z-[-1]  before:border-l-[5px] before:2xl:border-l-[10px] before:border-t-[5px] before:2xl:border-t-[10px] before:border-solid before:border-main before:left-[-5px] before:top-[-5px] before:2xl:left-[-10px] before:2xl:top-[-10px] before:shadow-insidePos after:absolute after:w-[100px] after:h-[100px] after:2xl:w-[172px] after:2xl:h-[172px] after:z-[-1]  after:border-r-[5px] after:2xl:border-r-[10px] after:border-b-[5px] after:2xl:border-b-[10px] after:border-solid after:border-main after:right-[-5px] after:bottom-[-5px] after:2xl:right-[-10px] after:2xl:bottom-[-10px] after:shadow-insideNeg ">
                        <figure>
                            <img class="max-w-[450px] 2xl:max-w-[500px] mx-auto w-full" src="{{asset("dist/img/our-program/lactate-meter.png")}}" alt="lactate-meter">
						</figure>
					</div>
				</div>
			</div>
            <div class="w-full md:w-1/2 flex grow bg-tertiary">
                <div class="py-[12%] px-[5%] 2xl:py-[14%] self-start">
                        <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"> <span class="font-bold text-main drop-shadow-sm">Oval's</span> foundational objectives is to provide early identiﬁcation of cardiometabolic ﬁtness risks that contribute to the breakdown of metabolic health. </p>
                        <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"> <span class="font-bold text-main drop-shadow-sm">Oval</span> uses blood lactate as a proxy for metabolic health. While blood lactate testing has been used to enhance the performance of top athletes as well as in treating critically ill patients, lactate has not historically been used in a general population. </p>
                        <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"> <span class="font-bold text-main drop-shadow-sm">Oval's</span> testing brings clinical science to everyday people. </p>
				</div>
			</div>

		</div>
	</div>
</section>
{{-- metabolic testing section end --}}

{{-- individualized results --}}

<section id="individualized-results">
    <div class="w-full">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 flex grow bg-[#db5f5d]">
                <div class="py-[12%] px-[5%] 2xl:py-[14%] self-start">
                    <h2 class="inline-block relative text-[28px] lg:text-[35px] pl-[55px] 2xl:text-[50px] 2xl:pl-[85px] font-bold text-primary my-[30px] mb-[50px] 2xl:mb-[50px] leading-tight before:absolute before:w-[40px] before:h-[40px]  before:2xl:w-[60px] before:2xl:h-[60px] before:bg-[length:40px] before:bg-[url('dist/img/heading-icon1.png')] before:bg-no-repeat before:2xl:bg-[length:60px] before:bg-left-top before:left-0 before:top-0">2. EDUCATE: Individualized Results </h2>
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"><span class="font-bold">Oval</span> objectively measures the health status of the user, identifying potential health risks at the foundation before they manifest. </p>
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"><span class="font-bold">Oval</span>  provides users with an individualized, actionable blueprint at the time of testing. </p>
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"><span class="font-bold">Oval</span> report may include results such as body composition, skeletal muscle mass, BMI, and <span class="font-bold">Oval's</span> proprietary MetFlex Index. </p>
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4">An <span class="font-bold">Oval</span> user can create positive impact on key health metrics by following <span class="font-bold">Oval</span> movement program consistently. </p>
                </div>
			</div>
            <div class="w-full md:w-1/2 relative bg-cover bg-left-top bg-no-repeat flex grow items-center z-[1] before:absolute before:w-full before:h-full before:left-0 before:top-0 before:bg-white/90 before:z-[-1]" style="background-image: url('{{asset('dist/img/our-program/educate-bg.jpg')}}')">
                <div id="iw-individualized-results-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="w-full p-[5%] 2xl:py-[10%] self-center">
                            <div class="relative text-center px-[5%] bg-[#015a7a80] before:absolute before:w-[100px] before:h-[100px] before:2xl:w-[172px] before:2xl:h-[172px] before:z-[-1]  before:border-l-[5px] before:2xl:border-l-[10px] before:border-t-[5px] before:2xl:border-t-[10px] before:border-solid before:border-primary before:left-[-5px] before:top-[-5px] before:2xl:left-[-10px] before:2xl:top-[-10px] before:shadow-insidePos after:absolute after:w-[100px] after:h-[100px] after:2xl:w-[172px] after:2xl:h-[172px] after:z-[-1]  after:border-r-[5px] after:2xl:border-r-[10px] after:border-b-[5px] after:2xl:border-b-[10px] after:border-solid after:border-primary after:right-[-5px] after:bottom-[-5px] after:2xl:right-[-10px] after:2xl:bottom-[-10px] after:shadow-insideNeg ">
                                <h4 class="text-center font-bold text-[28px] 2xl:text-[54px] py-[30px] text-primary">
                                    MetFlex Index
								</h4>
                                <figure>
                                    <img src="{{asset('dist/img/our-program/metflex-index.png')}}" alt="metflex-index" style="padding-bottom:40px">
								</figure>
							</div>
                            <h5 class="text-center font-bold text-[22px] 2xl:text-[38px] my-5 text-[#606060]">Biomarker of one's metabolic ﬂexibility</h5>
						</div>
					</div>
                    <div class="item">
                        <div class="w-full p-[5%] 2xl:py-[10%] self-center">
                            <div class="relative text-center px-[5%] bg-[#015a7a80] before:absolute before:w-[100px] before:h-[100px] before:2xl:w-[172px] before:2xl:h-[172px] before:z-[-1]  before:border-l-[5px] before:2xl:border-l-[10px] before:border-t-[5px] before:2xl:border-t-[10px] before:border-solid before:border-primary before:left-[-5px] before:top-[-5px] before:2xl:left-[-10px] before:2xl:top-[-10px] before:shadow-insidePos after:absolute after:w-[100px] after:h-[100px] after:2xl:w-[172px] after:2xl:h-[172px] after:z-[-1]  after:border-r-[5px] after:2xl:border-r-[10px] after:border-b-[5px] after:2xl:border-b-[10px] after:border-solid after:border-primary after:right-[-5px] after:bottom-[-5px] after:2xl:right-[-10px] after:2xl:bottom-[-10px] after:shadow-insideNeg ">
                                <h4 class="text-center font-bold text-[28px] 2xl:text-[54px] py-[30px] text-primary">
                                    Body Composition
								</h4>
                                <figure>
                                    <img src="{{asset('dist/img/our-program/body-composition.png')}}" alt="body-composition">
								</figure>
							</div>
                            <h5 class="text-center font-bold text-[22px] 2xl:text-[38px] my-5 text-[#606060]">Body Fat Mass, Lean Muscle Mass, Visceral Fat, BMI, and more</h5>
						</div>
					</div>
                    <div class="item">
                        <div class="w-full p-[5%] 2xl:py-[10%] self-center">
                            <div class="relative text-center px-[5%] bg-[#015a7a80] before:absolute before:w-[100px] before:h-[100px] before:2xl:w-[172px] before:2xl:h-[172px] before:z-[-1]  before:border-l-[5px] before:2xl:border-l-[10px] before:border-t-[5px] before:2xl:border-t-[10px] before:border-solid before:border-primary before:left-[-5px] before:top-[-5px] before:2xl:left-[-10px] before:2xl:top-[-10px] before:shadow-insidePos after:absolute after:w-[100px] after:h-[100px] after:2xl:w-[172px] after:2xl:h-[172px] after:z-[-1]  after:border-r-[5px] after:2xl:border-r-[10px] after:border-b-[5px] after:2xl:border-b-[10px] after:border-solid after:border-primary after:right-[-5px] after:bottom-[-5px] after:2xl:right-[-10px] after:2xl:bottom-[-10px] after:shadow-insideNeg ">
                                <h4 class="text-center font-bold text-[28px] 2xl:text-[54px] py-[30px] text-primary">
                                    Blood Chemistry
								</h4>
                                <figure>
                                    <img src="{{asset('dist/img/our-program/blood-chemistry.png')}}" alt="blood-chemistry" style="padding-bottom:40px">
								</figure>
							</div>
                            <h5 class="text-center font-bold text-[22px] 2xl:text-[38px] my-5 text-[#606060]">HbA1c, Fasting Glucose, Lipid Panel</h5>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
{{-- individualized results end --}}

{{-- benefits --}}
<section id="individualized-results">
    <div class="w-full">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 relative bg-cover bg-left-top bg-no-repeat flex grow items-center z-[1] before:absolute before:w-full before:h-full before:left-0 before:top-0 before:bg-white/90 before:z-[-1]" style="background-image: url('{{asset('dist/img/our-program/elevate-bg.jpg')}}')">
                <div class="w-full p-[5%] 2xl:py-[10%] self-center">
					<h4 class="inline-block relative text-[28px] lg:text-[35px] pl-[55px] 2xl:text-[50px] 2xl:pl-[85px] font-bold text-main my-[30px] mb-[50px] 2xl:mb-[100px] leading-tight before:absolute before:w-[40px] before:h-[40px]  before:2xl:w-[60px] before:2xl:h-[60px] before:bg-[length:40px] before:bg-[url('dist/img/heading-icon.png')] before:bg-no-repeat before:2xl:bg-[length:60px] before:bg-left-top before:left-0 before:top-0">3. ELEVATE: Beneﬁts</h4>
                    <div class="relative text-center px-[5%] bg-[#f0b4b4] before:absolute before:w-[100px] before:h-[100px] before:2xl:w-[172px] before:2xl:h-[172px] before:z-[-1]  before:border-l-[5px] before:2xl:border-l-[10px] before:border-t-[5px] before:2xl:border-t-[10px] before:border-solid before:border-main before:left-[-5px] before:top-[-5px] before:2xl:left-[-10px] before:2xl:top-[-10px] before:shadow-insidePos after:absolute after:w-[100px] after:h-[100px] after:2xl:w-[172px] after:2xl:h-[172px] after:z-[-1]  after:border-r-[5px] after:2xl:border-r-[10px] after:border-b-[5px] after:2xl:border-b-[10px] after:border-solid after:border-main after:right-[-5px] after:bottom-[-5px] after:2xl:right-[-10px] after:2xl:bottom-[-10px] after:shadow-insideNeg ">
                        <h4 class="text-left font-bold text-[28px] 2xl:text-[40px] text-primary py-[30px]">
                            Relationship between lactate, watts/power output, and fat burning.
                        </h4>
                        <div id="iw-benefits-slider" class="owl-carousel owl-theme">
                            <div class="item" style="margin:10px">
                                <div data-modal-target="graph1" data-modal-toggle="graph1">
                                    <figure>
                                        <img src="{{asset('dist/img/our-program/graph1.jpg')}}" alt="graph1" style="max-width:100%" data-toggle="tooltip" data-placement="top" title="Click on the image to view description">
                                    </figure>
                                </div>
                            </div>
                            <div class="item" style="margin:10px">
                                <div data-modal-target="graph1" data-modal-toggle="graph1">
                                    <figure>
                                        <img src="{{asset('dist/img/our-program/graph2.jpg')}}" alt="graph2" style="max-width:100%" data-toggle="tooltip" data-placement="top" title="Click on the image to view description">
                                    </figure>
                                </div>
                            </div>
                            <div class="item" style="margin:10px">
                                <div data-modal-target="graph1" data-modal-toggle="graph1">
                                    <figure>
                                        <img src="{{asset('dist/img/our-program/graph3.jpg')}}" alt="graph3" style="max-width:100%" data-toggle="tooltip" data-placement="top" title="Click on the image to view description">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
            <div class="w-full md:w-1/2 flex grow bg-primary">
                <div class="py-[12%] px-[5%] 2xl:py-[14%] self-start">
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"> <span class="font-bold text-main drop-shadow-sm">Oval's</span>  testing observes the unique behavior of lactate, which is a blood biomarker during sub-maximal exercise. The biomarker is useful to help identify the relationship between the risk factors associated with metabolic syndrome and systemic cardiometabolic health and ﬁtness. </p>
                    <p class=" text-white text-[20px] 2xl:text-[36px] mb-4"> <span class="font-bold text-main drop-shadow-sm">Oval's</span>  testing program combined with the individualized results and exercise training program makes <span style="font-weight:700; color:#d64441;text-shadow: 1px 1px #000000ba;">Oval</span>  an optimal solution for people seeking real, measurable, sustainable health and ﬁtness results. </p>
                </div>
			</div>
		</div>
	</div>
</section>
{{-- benefits end --}}


<!-- Main modal -->
<div id="graph1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-[1000px] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-main rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between px-4 rounded-t">
                <button type="button" class="text-white bg-transparent hover:text-gray-200 rounded-lg text-sm w-12 h-12 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="graph1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-8 pt-0">
                <h3 class="text-2xl font-semibold text-white leading-tight dark:text-white 2xl:text-[46px] mb-[35px]">
                    Relationship between lactate, watts/power output, and fat burning.
                </h3>
                <p class="text-[20px] 2xl:text-[30px] leading-relaxed text-white dark:text-white mb-4">
                    <strong>Exercise/activity</strong>  is required to increase the horizontal aspect of the fat burn curve because it is associated with the lactate curve. If the lactate curve improves or ﬂattens, the fat burn follows rightward. If lactate curve regresses to the left, so does fat burning.
                </p>
                <p class="text-[20px] 2xl:text-[30px] leading-relaxed text-white dark:text-white mb-4">
                    Different components of training, such as specific intensity, longer durations, and greater frequencies can increase the vertical and horizontal components of the fat burn curve.
                </p>
            </div>

        </div>
    </div>
</div>


@endsection
