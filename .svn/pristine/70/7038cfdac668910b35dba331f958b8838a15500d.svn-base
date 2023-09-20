@extends('front_site')

@section('content')

<section class="iw-contact-sec" id="contact-page">
    <div class="flex flex-wrap">
        <div class="flex w-full lg:w-1/2">
            <div class="w-full flex">
                <img class="w-full object-cover" src="{{asset('dist/img/contact-us-bg.jpg')}}" alt="contact-us-bg">
            </div>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="px-[10%] py-[6%] bg-primary">
                <h3 class="text-white font-bold text-[35px] 2xl:text-[50px] mb-[35px]">
                    Contact Us
                </h3>
                <div class="iw-contact-form">
                    <form action="" url="/contact-us" method="post">
                        @csrf
                        <div class="mb-5">
                            <input type="text" name="first_name"  id="first_name"  value="{{ old('first_name') }}"  class="form-control w-full h-[50px] py-[5px] px-[20px] border-0 bg-[#347791] text-base leading-[1.6] text-white rounded 2xl:h-[70px] 2xl:text-[25px] placeholder:text-white placeholder:font-bold @error('first_name') is-invalid @enderror" placeholder="First Name*">
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control w-full h-[50px] py-[5px] px-[20px] border-0 bg-[#347791] text-base leading-[1.6] text-white rounded 2xl:h-[70px] 2xl:text-[25px] placeholder:text-white placeholder:font-bold  @error('last_name') is-invalid @enderror" placeholder="Last Name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-5">
                            <input type="email" name="email" id="email"  value="{{ old('email') }}"  class="form-control w-full h-[50px] py-[5px] px-[20px] border-0 bg-[#347791] text-base leading-[1.6] text-white rounded 2xl:h-[70px] 2xl:text-[25px] placeholder:text-white placeholder:font-bold  @error('email') is-invalid @enderror" placeholder="E-mail*">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-5">
                            <input type="text" name="phone" v-model="phone" id="phone" value="{{ old('phone') }}"  @keyup="keyEnterContact" class="form-control w-full h-[50px] py-[5px] px-[20px] border-0 bg-[#347791] text-base leading-[1.6] text-white rounded 2xl:h-[70px] 2xl:text-[25px] placeholder:text-white placeholder:font-bold  @error('phone') is-invalid @enderror" placeholder="Phone*">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-5">
                            <textarea name="message" id="message" rows="3" value="{{ old('message') }}" class="form-control w-full py-[5px] px-[20px] border-0 bg-[#347791] text-base leading-[1.6] text-white rounded resize-none 2xl:text-[25px] placeholder:text-white placeholder:font-bold  @error('message') is-invalid @enderror" placeholder="Message*"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-4 text-white">
                            <label class="iw-custom-checkbox block relative pl-[35px] mb-3 cursor-pointer text-base select-none leading-normal 2xl:text-[25px] 2xl:pl-[55px]">
                                <input class="absolute opacity-0 w-0 h-0 cursor-pointer" type="checkbox" name="terms" id="" value="Y" class=" @error('terms') is-invalid @enderror"> By submitting your information, you authorize an Oval representative to contact you in response to your inquiry.
                                <span class="checkmark absolute left-0 top-0 w-[25px] h-[25px] bg-[#eee] rounded-[3px] border-2 border-solid 2xl:w-[35px] 2xl:h-[35px] after:hidden after:absolute after:left-[7px] after:top-0 after:w-2 after:h-4 after:border-solid after:border-r-[3px] after:border-b-[3px] after:rotate-45 after:2xl:w-3 after:2xl:h-6 after:2xl:left-[10px]"></span>
                                @error('terms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                        <input type="submit" value="Submit" class="w-full p-[10px] rounded-[10px] font-semibold uppercase text-white bg-main hover:bg-[#111] text-[18px] 2xl:text-[25px]">
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@section('script')
<script>
    var vm = new Vue({
        el:'#contact-page',
        data:{
            phone:''
        },
        methods:{
            keyEnterContact:function(){
                if(this.phone.length == 3){
                this.phone = this.phone.replace(/(\d{3})\-?/,'$1-');
                }
                if(this.phone.length == 7 ){
                    this.phone = this.phone.replace(/(\d{3})\-?(\d{3})\-?/,'$1-$2-');
                }
            }
        }
    });
</script>
@endsection
