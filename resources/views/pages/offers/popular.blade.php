<section class="popular">
    <div class="container">
        <h3 class="subtitle subtitle--golden">POPULAR LIST</h3>
        <h4 class="title title--white title--medium">Popular Rooms</h4>
        <div class="swiper swiper--popular-rooms">
            <div class="swiper-wrapper">
                @foreach($popularRooms as $room)
                    <div class="swiper-slide">
                        <img class="swiper-slide__img" src="{{ asset($room->image) }}" alt="{{ $room->name }}">
                        <div class="swiper-slide__room-description">
                            <img class="swiper-slide__room-features" src="{{ asset('icon/hotel-room-features 1.svg') }}" alt="hotel room features">
                            <h5 class="title title--black title--small">{{ $room->name }}</h5>
                            <p class="text">   Relax in our cozy, well-appointed room featuring modern amenities, a plush bed, free Wi-Fi, and a flat-screen TV. Enjoy a serene space perfect for unwinding or getting work done, complete with a private bathroom and complimentary toiletries. Your comfort is our priority.
                            </p>
                            <div>
                                <span class="swiper-slide__room-description__price">${{ $room->price_per_night }}<span>/Night</span></span>
                                <span class="swiper-slide__room-description__booking">
                                    <a href="{{ route('roomdetails', ['id' => $room->id]) }}">RESERVE NOW</a>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
