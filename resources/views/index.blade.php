@extends('layouts.main')

@section('container')
    <!-- Product Section Begin -->
  <section class="product spad mt-n5">
    <div class="container ">
      <div class="row">
        <div class="col-lg-7 pt-4">
          <div class="trending__product">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                  <h4>Best Seller</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                  <a href="#" style="color: #9A8174;" class="primary-btn">View All <i class="fa fa-caret-right"></i></a>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach ($books as $book)
                    
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <a href="{{ route('books.show', $book->slug) }}">
                      <div class="product__item__pic set-bg" data-setbg="img/books/{{ $book->cover }}">
                        <div class="comment">
                          <i class="fa fa-comments"></i> {{ $book->reviews->count() }}
                        </div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                      </div>
                    </a>
                    <div class="product__item__text">
                        <ul>
                            @php
                            $genres = $book->genres->take(2); // Get the first two genres
                            @endphp
                            @foreach ($genres as $genre)
                            <li>{{ $genre->name }}</li>
                            @endforeach
                          </ul>
                      <h5>
                        <a href="{{ route('books.show', $book->slug) }}">{{ $book->title }}</a>
                      </h5>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
        <!-- style="background-color: #8DAA8C; -->
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-md-6 col-sm-8 pt-4" style="background-color: #9A8174; border-radius: 10px;">
          <div class="product__sidebar">
            <div class="product__sidebar__view">
              <div class="product__sidebar__comment">
                <div class="section-title">
                  <h5 style="color: #fff;">Recommendations 
                    @if (!$recommendations->isEmpty())
                   : {{ $mostCommonGenre }}
                    @endif
                  </h5>
                </div>
        
                @if ($recommendations->isEmpty())
                <div class="product__sidebar__comment__item__text">
                  <h5><p>Please read some books to get recommendations.</p></h5>
                </div>
                @else
                  @foreach ($recommendations as $recommendation)
                    <div class="product__sidebar__comment__item">
                      <div class="product__sidebar__comment__item__pic">
                        <img src="/img/books/{{ $recommendation->cover }}" alt="" />
                      </div>
                      <div class="product__sidebar__comment__item__text">
                        <ul>
                          @foreach ($recommendation->genres->take(2) as $genre)
                            <li>{{ $genre->name }}</li>
                          @endforeach
                        </ul>
                        <h5>
                          <a href="#">{{ $recommendation->title }}</a>
                        </h5>
                        <span><i class="fa fa-eye"></i> 19.141 Views</span>
                      </div>
                    </div>
                  @endforeach
                @endif
        
              </div>
            </div>
          </div>
        </div>
         
      </div>
      </div>
    </div>
  </section>
  <!-- Product Section End -->
@endsection