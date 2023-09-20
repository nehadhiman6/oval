
<footer class="bg-main dark:bg-gray-900">
    <div class="mx-auto w-full pt-[5%] px-[5%] pb-0 2xl:px-[5%]">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0 md:w-5/12">
            <div class="mb-5 w-[120px] 2xl:w-[200px]">
                <a href="{{url('/')}}" class="flex items-center">
                    <img src="{{ asset('dist/img/oval-logo.png') }}" class="w-full" alt="footer Logo" />
                </a>
            </div>
            <p class="text-white text-lg 2xl:text-2xl pr-5 leading-normal">
                Oval is a digital movement program, developed by scientists, to improve a user’s health and wellbeing and may help to reduce the risks related to the development of metabolic-related conditions and diseases.
            </p>
          </div>
          <div class="md:w-7/12 grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-2 px-4">
              <div>
                  <h2 class="mb-4 2xl:mb-6 text-lg 2xl:text-3xl text-white font-semibold  dark:text-white">Quick Links</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-2.5">
                        <a href="https://flowbite.com/" class="hover:underline text-lg 2xl:text-2xl text-white">Home</a>
                    </li>
                    <li class="mb-2.5">
                        <a href="{{url('about-us')}}" class="hover:underline text-lg 2xl:text-2xl text-white">About</a>
                    </li>
                    <li class="mb-2.5">
                        <a href="{{url('contact-us')}}" class="hover:underline text-lg 2xl:text-2xl text-white">Contact</a>
                    </li>
                    <li class="mb-2.5">
                        <a href="{{url('medicalclearance')}}" class="hover:underline text-lg 2xl:text-2xl text-white">Medical Clearance</a>
                    </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-4 2xl:mb-6 text-lg 2xl:text-3xl text-white font-semibold dark:text-white">Connect with us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-2.5">
                        <a class="hover:underline text-lg 2xl:text-2xl text-white" href="mailto:support@oval.care"><span class="mdi mdi-email mr-2.5"></span>support@oval.care</a>
                      </li>
                  </ul>
              </div>

          </div>
      </div>
      <hr class="my-3 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-3" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-lg 2xl:text-2xl text-white sm:text-center dark:text-gray-400">© 2023 by Oval. All Rights Reserved.
          </span>
          <div>
            <ul class="text-gray-500 dark:text-gray-400 font-medium flex gap-6">
                <li class="mb-4 2xl:text-2xl text-white">
                    <a href="{{url('legal')}}" class="hover:underline text-lg 2xl:text-2xl text-white">Privacy Policy</a>
                </li>
                <li class="mb-4 2xl:text-2xl text-white">
                    <a href="{{url('cookie-policy')}}" class="hover:underline text-lg 2xl:text-2xl text-white">Terms &amp; Conditions</a>
                </li>
                <li class="mb-4 2xl:text-2xl text-white">
                    <a href="{{url('terms-and-conditions')}}" class="hover:underline text-lg 2xl:text-2xl text-white">Cookie Policy</a>
                </li>
            </ul>
        </div>
      </div>
      <div class="py-2.5">
        <p class="2xl:text-2xl text-white pb-4">All trademarks, logos and brand names are the property of their respective owners. All company, product and service names used in this website are for indentification purpose only. Use of these names, trademarks and brands does not imply endorsement.</p>
      </div>
    </div>
</footer>
