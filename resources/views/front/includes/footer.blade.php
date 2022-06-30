<footer class="footer relative">
    <div class="container mx-auto">
        <div class="footer-navs flex flex-wrap">
            <div class="footer-nav w-full md:w-1/2 xl:w-2/6">
                <span>{{ $configs->translations[0]->site_name }}</span>
                <p class="text-justify">{{ $configs->translations[0]->description }}</p>
            </div>
            <div class="footer-nav w-full md:w-1/2 xl:w-1/6">
                <span class="block">{{ __("General") }}</span>
                <div class="footer-nav-in flex">
                    <ul style="margin: 0 30px 0 0;">
                        <li><a class="block" href="{{ localized_route("front.corporate") }}">{{ __("Corporate") }}</a></li>
                        <li><a class="block" href="{{ localized_route("front.product.index") }}">{{ __("Products") }}</a></li>
                        <li><a class="block" href="{{ localized_route("front.certificates") }}">{{ __("Certificates") }}</a></li>
                    </ul>
                    <ul>
                        <li><a class="block" href="{{ localized_route("front.contact") }}">{{ __("Contact") }}</a></li>
                        <li><a class="block" href="{{ localized_route("front.index") }}#faq">{{ __("FAQ") }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-nav w-full md:w-1/2 xl:w-2/6">
                <span class="block">{{ __("Products") }}</span>
                <div class="footer-nav-in flex">
                    <ul>
                        @foreach($categories as $category)
                        <li><a class="block" href="">{{ $category->translations[0]->name }}</a></li>
                            @if($loop->index >= 2)
                                @break
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer-nav w-full md:w-1/2 xl:w-1/6">
                <span class="block">{{ __("Address") }}</span>
                <p class="text-justify">{{ $configs->address }}</p>
                <div class="social">
                    <ul class="flex items-center">
                        <li>
                            <a class="block" href="{{ $configs->facebook }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 167.657 167.657">
                                    <path d="M83.829.349C37.532.349 0 37.881 0 84.178c0 41.523 30.222 75.911 69.848 82.57v-65.081H49.626v-23.42h20.222V60.978c0-20.037 12.238-30.956 30.115-30.956 8.562 0 15.92.638 18.056.919v20.944l-12.399.006c-9.72 0-11.594 4.618-11.594 11.397v14.947h23.193l-3.025 23.42H94.026v65.653c41.476-5.048 73.631-40.312 73.631-83.154 0-46.273-37.532-83.805-83.828-83.805z"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="block" href="{{ $configs->instagram }}" target="_blank">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M305 256c0 27.063-21.938 49-49 49s-49-21.938-49-49 21.938-49 49-49 49 21.938 49 49zm0 0"></path>
                                    <path d="M370.594 169.305a45.546 45.546 0 0 0-10.996-16.903 45.514 45.514 0 0 0-16.903-10.996c-5.18-2.011-12.96-4.406-27.293-5.058-15.504-.707-20.152-.86-59.402-.86-39.254 0-43.902.149-59.402.856-14.332.656-22.118 3.05-27.293 5.062a45.483 45.483 0 0 0-16.903 10.996 45.572 45.572 0 0 0-11 16.903c-2.011 5.18-4.406 12.965-5.058 27.297-.707 15.5-.86 20.148-.86 59.402 0 39.25.153 43.898.86 59.402.652 14.332 3.047 22.114 5.058 27.293a45.563 45.563 0 0 0 10.996 16.903 45.514 45.514 0 0 0 16.903 10.996c5.18 2.015 12.965 4.41 27.297 5.062 15.5.707 20.144.856 59.398.856 39.258 0 43.906-.149 59.402-.856 14.332-.652 22.118-3.047 27.297-5.062a48.68 48.68 0 0 0 27.899-27.899c2.011-5.18 4.406-12.96 5.062-27.293.707-15.504.856-20.152.856-59.402 0-39.254-.149-43.902-.856-59.402-.652-14.332-3.047-22.118-5.062-27.297zM256 331.485c-41.691 0-75.488-33.794-75.488-75.485s33.797-75.484 75.488-75.484c41.688 0 75.484 33.793 75.484 75.484S297.688 331.484 256 331.484zm78.469-136.313c-9.742 0-17.64-7.899-17.64-17.64s7.898-17.641 17.64-17.641 17.64 7.898 17.64 17.64c-.004 9.742-7.898 17.64-17.64 17.64zm0 0"></path>
                                    <path d="M256 0C114.637 0 0 114.637 0 256s114.637 256 256 256 256-114.637 256-256S397.363 0 256 0zm146.113 316.605c-.71 15.649-3.199 26.333-6.832 35.684a75.164 75.164 0 0 1-42.992 42.992c-9.348 3.633-20.035 6.117-35.68 6.832-15.675.715-20.683.887-60.605.887-39.926 0-44.93-.172-60.61-.887-15.644-.715-26.331-3.199-35.68-6.832a72.018 72.018 0 0 1-26.038-16.957 72.044 72.044 0 0 1-16.953-26.035c-3.633-9.348-6.121-20.035-6.832-35.68-.723-15.68-.891-20.687-.891-60.609s.168-44.93.887-60.605c.71-15.649 3.195-26.332 6.828-35.684a72.013 72.013 0 0 1 16.96-26.035 72.003 72.003 0 0 1 26.036-16.957c9.352-3.633 20.035-6.117 35.684-6.832C211.07 109.172 216.078 109 256 109s44.93.172 60.605.89c15.649.712 26.332 3.196 35.684 6.825a72.061 72.061 0 0 1 26.04 16.96 72.027 72.027 0 0 1 16.952 26.036c3.637 9.352 6.121 20.035 6.836 35.684.715 15.675.883 20.683.883 60.605s-.168 44.93-.887 60.605zm0 0"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="block" href="{{ $configs->youtube }}" target="_blank">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M224.113 303.96L307.387 256l-83.274-47.96zm0 0"></path>
                                    <path d="M256 0C114.637 0 0 114.637 0 256s114.637 256 256 256 256-114.637 256-256S397.363 0 256 0zm159.96 256.262s0 51.918-6.585 76.953c-3.691 13.703-14.496 24.508-28.2 28.195C356.142 368 256 368 256 368s-99.879 0-125.176-6.852c-13.703-3.687-24.508-14.496-28.199-28.199-6.59-24.77-6.59-76.949-6.59-76.949s0-51.914 6.59-76.95c3.688-13.702 14.758-24.773 28.2-28.46C155.858 144 256 144 256 144s100.14 0 125.176 6.852c13.703 3.687 24.508 14.496 28.199 28.199 6.852 25.035 6.586 77.21 6.586 77.21zm0 0"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="block" href="{{ $configs->linkedin }}" target="_blank">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 0C114.637 0 0 114.637 0 256s114.637 256 256 256 256-114.637 256-256S397.363 0 256 0zm-74.39 387h-62.348V199.426h62.347zm-31.173-213.188h-.406c-20.922 0-34.453-14.402-34.453-32.402 0-18.406 13.945-32.41 35.274-32.41 21.328 0 34.453 14.004 34.859 32.41 0 18-13.531 32.403-35.274 32.403zM406.423 387h-62.34V286.652c0-25.218-9.027-42.418-31.586-42.418-17.223 0-27.48 11.602-31.988 22.801-1.649 4.008-2.051 9.61-2.051 15.215V387h-62.344s.817-169.977 0-187.574h62.344v26.558c8.285-12.78 23.11-30.96 56.188-30.96 41.02 0 71.777 26.808 71.777 84.421zm0 0"></path></svg>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom sm:flex sm:justify-between">
            <p>{{ __("VIP-TEC - 2020 © All Rights Reserved") }}</p>
            <a class="block" href="http://hammudelhammud.com/" title="Web Tasarım Firması" target="_blank">Min Lwin Kyaw</a>
        </div>
    </div>
</footer>