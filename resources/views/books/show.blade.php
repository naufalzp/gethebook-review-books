
@extends('layouts.main')

@section('container')
<div id="preloder">
    <div class="loader"></div>
  </div>
<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/img/books/{{ $book->cover }}" alt="" width="100%">
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{ $book->title }}</h3>
                            <span>{{ $book->author }}</span>
                        </div>
                        <div class="anime__details__rating">
                            <div class="rating">
                                @php
                                    $averageRating = round($book->reviews->avg('rating'));
                                @endphp
                        
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $averageRating)
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    @endif
                                @endfor
                            </div>
                            <span>{{ $book->reviews->count() }} Review</span>
                        </div>
                        <p>
                            <span id="shortDescription">{{ \Illuminate\Support\Str::limit($book->description, 350, '...') }}</span>
                            <span id="fullDescription" style="display: none;">{{ $book->description }}</span>
                            <a href="" id="showMore"><b>Show More <i class="fa fa-caret-down"></i></b></a>
                            <a href="" id="showLess" style="display: none;"><b>Show Less <i class="fa fa-caret-up"></i></b></a>
                        </p>
                            <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <ul>
                                        <li><span>Genres:</span>
                                            @foreach ($book->genres->sortBy('name') as $genre)
                                                <a href="">{{ $genre->name }}</a>,
                                            @endforeach
                                            <a href="">...more</a>
                                        </li>
                                        <li><span>Pages:</span> 380 pages, Paperback</li>
                                        <li><span>First published:</span>  October 23, 2017</li>
                                       
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="anime__details__btn">
                            @auth
                                @if (auth()->user()->isAdmin())
                                    <a href="{{ route('books.edit', $book->id) }}" class="follow-btn"><i class="fa fa-pencil"></i> Edit</a>
                                @endif
                            @endauth
                            @auth()
                                @if (auth()->user()->wishlist->contains('id', $book->id))
                                <a href="#" class="follow-btn" onclick="event.preventDefault(); document.getElementById('unwishlist-form').submit();"><i class="fa-solid fa-heart"></i> Wishlist</a>
    
                                <form id="unwishlist-form" action="{{ route('wishlist.destroy',$book->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @else
                                <a href="#" class="follow-btn" onclick="event.preventDefault(); document.getElementById('wishlist-form').submit();"><i class="fa fa-heart-o"></i> Wishlist</a>
    
                                <form id="wishlist-form" action="{{ route('wishlist.store') }}" method="POST" style="display: none;">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                </form>
                                @endif
                            @endauth


                            <a href="https://www.gramedia.com/search?q={{ $book->title }}" target="_blank" class="watch-btn"><span>Buy Now</span> <i
                                class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        @foreach($book->reviews as $review)
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="/img/anime/review-<?= rand(1,6)?>.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6 style="margin-bottom: -1px">{{ $review->user->name }} - <span>{{ $review->created_at->format('F d, Y') }}</span></h6>
                                    @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->rating)
                                        <i class="fa-solid fa-star text-warning fa-xs "></i>
                                    @else
                                        <i class="fa fa-star-o text-warning fa-xs "></i>
                                    @endif
                                @endfor
                                    <p>{{ $review->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                        @auth
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="{{ route('reviews.store',['book_id' => $book->id]) }}" method="POST">
                                @csrf
                                <textarea name="comment" placeholder="Your Comment"></textarea>
                                <div class="rating text-warning">
                                    <div>
                                        <input type="radio" name="rating" value="5" id="rating-5">
                                        <label for="rating-5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="rating" value="4" id="rating-4">
                                        <label for="rating-4"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="rating" value="3" id="rating-3">
                                        <label for="rating-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="rating" value="2" id="rating-2">
                                        <label for="rating-2"><i class="fa fa-star"></i><i class="fa fa-star"></i></label>
                                    </div>
                                    <div>
                                        <input type="radio" name="rating" value="1" id="rating-1">
                                        <label for="rating-1"><i class="fa fa-star"></i></label>
                                    </div>
                                </div>
                                
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    @else
                        <p>Please <a href="{{ route('login') }}">login</a> to submit a review.</p>
                    @endauth
                    </div>
                   
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>recommendation</h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="img/buku/polaris.jpg">
                            
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Polaris Musim Dingin</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="img/buku/minor.jpg">
                            
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Matahari Minor</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="img/buku/jujan.jpg">
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Hujan</a></h5>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const shortDescription = document.getElementById('shortDescription');
        const fullDescription = document.getElementById('fullDescription');
        const showMore = document.getElementById('showMore');
        const showLess = document.getElementById('showLess');
    
        showMore.addEventListener('click', function(event) {
            event.preventDefault();
            shortDescription.style.display = 'none';
            fullDescription.style.display = 'inline';
            showMore.style.display = 'none';
            showLess.style.display = 'inline';
        });
    
        showLess.addEventListener('click', function(event) {
            event.preventDefault();
            shortDescription.style.display = 'inline';
            fullDescription.style.display = 'none';
            showMore.style.display = 'inline';
            showLess.style.display = 'none';
        });
    </script>
    <!-- Anime Section End -->
@endsection

