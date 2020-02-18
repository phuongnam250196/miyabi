@extends('frontend.layout')
@section('title', 'Gallery')
@section('url', url('/gallery'))
@section('sitename', $_SERVER['REQUEST_URI'])
@section('content')
    <article>
        <!-- photo library -->
        <section id="photo-library" class="gallery">
            <div class="container">
                <div class="photo-list row gallery_row" <?php $dem=2; ?>>
                    @if(!empty($galleries))
                        <div class="col-md-30-100 photo-col">
                        <div class="photo-col-pos">
                            <a href="{{asset('miyabi')}}/images/gallery1.png">
                                <!-- <img  src="{{ getImageYoutube('https://www.youtube.com/watch?v=uD2ZGjhD7Zk&feature=youtu.be') }}" alt=""  style="width: 100%;" /> -->
                                <div class="photo_bg" style="background: transparent url('{{ getImageYoutube('https://www.youtube.com/watch?v=uD2ZGjhD7Zk&feature=youtu.be') }}') no-repeat;"></div>
                            </a>
                            <div class="overlay">
                                <a href="https://www.youtube.com/watch?v=uD2ZGjhD7Zk&feature=youtu.be&start_radio=1" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
                                  <img src="{{asset('miyabi')}}/images/icon_search.png" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-40-100 photo-col">
                        <div class="photo-col-pos">
                            <a href="{{asset('miyabi')}}/images/gallery1.png">
                                <!-- <img class="photo_bg" src="{{ getImageYoutube('https://www.youtube.com/watch?v=UoCRwEFw3T8&feature=youtu.be') }}" alt=""  style="width: 100%;" /> -->
                                <div class="photo_bg" style="background: transparent url('{{ getImageYoutube('https://www.youtube.com/watch?v=UoCRwEFw3T8&feature=youtu.be') }}') no-repeat;"></div>
                            </a>
                            <div class="overlay">
                                <a href="https://www.youtube.com/watch?v=UoCRwEFw3T8&feature=youtu.be&start_radio=1" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
                                  <img src="{{asset('miyabi')}}/images/icon_search.png" />
                                </a>
                            </div>
                        </div>
                    </div>
                        @foreach($galleries as $key=>$gallery)
                            @if($dem == $key)
                            <div class="col-md-40-100 photo-col">
                            <?php $dem+=3; ?>
                            @else
                            <div class="col-md-30-100 photo-col">
                            @endif
                                <div class="photo-col-pos">
                                    <a href="{{ url('/'.$gallery->link) }}">
                                        <div class="photo_bg" style="background: transparent url('{{ url('/'.$gallery->link) }}') no-repeat;"></div>
                                    </a>
                                    <a href="{{ url('/'.$gallery->link) }}" data-fancybox="gallery" data-caption="{{ $gallery->title }}"  title="写真を見る">
                                        <div class="overlay">
                                            <div class="icon">
                                                <img src="{{asset('miyabi')}}/images/icon_search.png" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
            		<div class="col-md-30-100 photo-col">
            			<div class="photo-col-pos">
	            			<a href="{{asset('miyabi')}}/images/gallery1.png">
								<img src="{{asset('miyabi')}}/images/gallery1.png" alt=""  style="width: 100%;" />
							</a>
							<div class="overlay">
							    <a href="{{asset('miyabi')}}/images/gallery1.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
							    </a>
						  	</div>
            			</div>
            		</div>
            		<div class="col-md-40-100 photo-col">
            			<div class="photo-col-pos">
	            			<a href="{{asset('miyabi')}}/images/gallery2.png">
								<img src="{{asset('miyabi')}}/images/gallery2.png" alt=""  style="width: 100%;" />
							</a>
							<div class="overlay">
							    <a href="{{asset('miyabi')}}/images/gallery2.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
							    </a>
						  	</div>
            			</div>
            		</div>
            		<div class="col-md-30-100 photo-col">
            			<div class="photo-col-pos">
	            			<a href="{{asset('miyabi')}}/images/gallery3.png">
								<img src="{{asset('miyabi')}}/images/gallery3.png" alt=""  style="width: 100%;" />
							</a>
							<div class="overlay">
							    <a href="{{asset('miyabi')}}/images/gallery3.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
							    </a>
						  	</div>
            			</div>
            		</div>
                    @endif
                </div>
                <div class="d-flex justify-content-end">{{ $galleries->links() }}</div>
            </div>
        </section>	
    </article>
@endsection

@section('page_css')
<style type="text/css">
    body {
        background: transparent url('{{asset("miyabi")}}/images/bg_gallery.png') no-repeat;
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
    }
    #photo-library {
         padding-top: 0; 
         padding-bottom: 0; 
    }
    .gallery .gallery_row {
        position: relative;
    }
    .gallery .gallery_row::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background: black;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        z-index: -9999;
    }
</style>
@endsection