<section id="contact-area" class="contact-area-section backgroud-style">
    <div class="container">
        <div class="contact-area-content">
            <div class="row">
                @if(config('contact_data') != "")
                    @php
                        $contact_data = contact_data(config('contact_data'));
                    @endphp
                    <div class="col-md-9">
                        <div class="contact-left-content ">
                            <div class="section-title mb45 headline text-left">
                                <h3 class = "text-uppercase"><span>@lang('labels.frontend.layouts.partials.contact_us')</span></h3>
                                <h4>

                                    <span class="text-weight-blod">@lang('labels.frontend.layouts.partials.get_in_touch')</span>
                                </h4>
                                <!-- <p>
                                    {{ $contact_data["short_text"]["value"] }}
                                </p> -->
                            </div>

                            <div class="contact-address">
                                @if(($contact_data["primary_address"]["status"] == 1) || ($contact_data["secondary_address"]["status"] == 1))
                                    <div class="contact-address-details">

                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                @if($contact_data["primary_address"]["status"] == 1)
                                                    <li>
                                                        <span>@lang('labels.frontend.layouts.partials.primary')</span>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                @endif


                                @if(($contact_data["primary_email"]["status"] == 1) || ($contact_data["secondary_email"]["status"] == 1))

                                    <div class="contact-address-details">
                                        <div class="address-icon relative-position text-center float-left">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="address-details ul-li-block">
                                            <ul>
                                                @if($contact_data["primary_email"]["status"] == 1)
                                                    <li>
                                                        <span>@lang('labels.frontend.layouts.partials.second')</span>
                                                        <br>{{$contact_data["primary_email"]["value"]}}
                                                    </li>
                                                @endif

                                               
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                            <a href="{{route('contact')}}">@lang('labels.frontend.layouts.partials.contact_us') <i class="fas fa-caret-right"></i></a>
                        </div> -->
                    </div>
                    <!-- @if($contact_data["location_on_map"]["status"] == 1) -->
                        <div class="col-md-3 link-website">
                            <!-- <div id="contact-map" class="contact-map-section">
                                {!! $contact_data["location_on_map"]["value"] !!}
                            </div> -->
                            <a href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="React on Facebook" class="hover:text-primary dark:text-primary-dark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="4em" height="4em" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"></path></svg></a>
                            <a href="https://www.linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="hover:text-primary dark:text-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="4em" height="4em" fill="currentColor">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M20 2H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM8.75 19.5h-2.5v-8h2.5v8zm-1.25-9.5a1.75 1.75 0 1 1 0-3.5 1.75 1.75 0 0 1 0 3.5zM19 19.5h-2.5v-4.72c0-1.06-.94-1.78-2-1.78s-2 .72-2 1.78v4.72H9.75v-8h2.25v1.21a3.49 3.49 0 0 1 3-1.57c2 0 3.5 1.59 3.5 4.5v4.86z"></path>
                                </svg>
                            </a>

                        </div>
                    <!-- @endif -->
                <!-- @else
                    <h4>@lang('labels.general.no_data_available')</h4>
                @endif -->
            </div>
        </div>
    </div>
</section>
