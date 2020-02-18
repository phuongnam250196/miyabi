@extends('frontend.layout')
@section('title', 'Home')
@section('url', url('/'))
@section('sitename', $_SERVER['REQUEST_URI'])
@section('content')
    <h1 style="display:none;">Miyabi bar</h1>
    <h2 style="display:none;">Miyabi bar</h2>
    <h3 style="display:none;">Miyabi bar</h3>
	<article>
        <!-- banner -->
        <section id="banner">
        	<div class="owl-carousel owl-theme owl-banner">
                @if(!empty($sliders))
                    @foreach($sliders as $slider)
                        <div class="item">
                            <img src="{{ url('/'.$slider->link) }}">
                        </div>
                    @endforeach
                @else
                    <div class="item">
                        <img src="{{asset('miyabi')}}/images/banner.png">
                    </div>
                    <div class="item">
                        <img src="{{asset('miyabi')}}/images/banner.png">
                    </div>
                    <div class="item">
                        <img src="{{asset('miyabi')}}/images/banner.png">
                    </div>
                @endif
            </div>
            <div class="bookmarks">
				<ul class="test">
					<li class="bookmark1 active" data="0"><i class="fas fa-circle"></i></li>
					<li class="bookmark2" data="1"><i class="fas fa-circle"></i></li>
					<li class="bookmark3" data="2"><i class="fas fa-circle"></i></li>
				</ul>
			</div>
        </section>
        <!-- about -->
        <section id="about">
            <div class="container">
                <div class="media">
                    <img src="{{asset('miyabi')}}/images/about.png" class="media-img">
                    <div class="media-body">
                        <h4>ABOUT US/ご紹介</h4>
                        <div class="media-text">
                        	<p>日本食レストランや日系ホテルが立ち並ぶハノイのリンラン通りにあります。きらびやかな新築物件の店内に入ると日本語が話せる若いベトナム人女性があなたをお出迎えしてくれます！</p>
                        	<p>また、フロアごとにガールズバー、キャバクラ、個室カラオケと分かれているためシチュエーションに合わせた利用が可能です。明朗会計で会計トラブルの心配もなく安全に楽しめるのも嬉しいところ。</p>
                        	<p>日本語が話せる若いベトナム人女性と楽しいひと時を過ごしませんか？</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bar & lounge -->
        <section id="bar">
            <div class="container">
                <div class="bar_title">
                    <h3>MIYABIのご紹介</h3>
                </div>
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">1F：ガールズバー</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">2F：キャバクラ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2">4F〜6F：カラオケ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu3">7F: ナイトクラブ</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="owl-carousel owl-theme owl-tab">
                            
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang1/2.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang1/3.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang1/5.png">
                            </div>
                        </div>
                        <div class="bar-tab-content">
                            <h4>1F：ガールズバー</h4>
                            <p>「MIYABI」の1Fはガールズバー。若いベトナム人女性スタッフとカウンター越しに会話が楽しめます。カウンター席なのでひとりで来店する方にもおすすめ！ウイスキー、焼酎、日本酒などが取り揃えられており、お酒の種類も豊富です。 <br>料金：60万ドン（約3000円）<br>※飲み放題Free time、女性代金込み</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu1">
                    	<div class="owl-carousel owl-theme owl-tab">
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/mb4.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang2/1.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang2/4.png">
                            </div>
                        </div>
                        <div class="bar-tab-content">
                            <h4>2F：キャバクラ</h4>
                            <p>2Fはキャバクラとなっています。日本のキャバクラとまったく同じシステムで楽しめるのは、リンラン通りでもここ「MIYABI」だけ!! 若いベトナム人女性が隣に座り日本語での会話やお酒を楽しむことができます。指名も出来るのでお気に入りの女の子を見つけてみるのもおすすめです！</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                    	<div class="owl-carousel owl-theme owl-tab">
                            

                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/mb5.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/mb3.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang46/6.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang46/7.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang46/8.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang46/9.png">
                            </div>
                        </div>
                        <div class="bar-tab-content">
                            <h4>4F〜6F：カラオケ</h4>
                            <p>「MIYABI」の4F〜6Fは個室のカラオケボックスとなっています。会社の送別会や宴会などの2次会で思いっきり歌って楽しみたい方も大歓迎です！若いベトナム女性と一緒にお酒を飲みながら夜まで盛り上がろう!! <br>カラオケでは日本語の曲が歌えます！<br>4F〜6Fのカラオケボックスでは日本の曲を歌うことができます。昭和の懐メロから最新のJ-POP曲まで入っています。もちろんカラオケは歌い放題です！日本の曲を知っている女の子も多く、リクエストすると歌ってくれることも。女の子と一緒にカラオケで盛り上がりましょう!!</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="menu3">
                    	<div class="owl-carousel owl-theme owl-tab">
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/mb1.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/tang7/tang7.png">
                            </div>
                            <div class="item">
                                <img src="{{asset('miyabi')}}/images/7f.jpg">
                            </div>
                        </div>
                        <div class="bar-tab-content">
                            <h4>7F: ナイトクラブ</h4>
                            <p>7Fはハノイ初日本人向けナイトクラブとなっています。日本ならではのポップスから海外の最新サウンドまで幅広く楽しめる。大音量で鳴り響く音楽を全身で感じながら、体を揺らして心地よいリズムに浸ったり、お酒を飲んで好きなだけ踊ってストレス解消もいいですね。クラブは1人で音楽を楽しむのはもちろん、何度か通ううちに好きな音楽で一緒に盛り上がれる仲間ができるのも魅力です。 <br>ワンランク上のVIPシークレットラウンジとなっており、ソファー席とラグジュアリーなプライベート個室を備えたこのフロアには大型プロジェクターがあり、歓送迎会、女子会、二次会、企業パーティー等の鑑賞会やカラオケがお楽しみ頂けます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- price system -->
        <section id="price-system">
            <div class="container">
                <div class="price_title">
                    <h3>PRICE SYSTEM/システム</h3>
                </div>
                <div class="price-free-time">
                    <h4 class="price-free-time-title">free time</h4>
                    <p class="price-free-time-hour">19:30~ 24h</p>
                    <div class="row price-free-time-row">
                        <div class="col-6 price-free-time-col text-center">
                            <h5>DRINK FREE (飲み放題)</h5>
                            <div class="price-free-time-col-content">
                                <p>Wisky/Shochu/Jin/Mineral water free</p>
                            </div>
                        </div>
                        <div class="col-6 price-free-time-col text-center">
                            <h5>BOTTLE KEEP</h5>
                            <div class="price-free-time-col-content">
                                <p>Mineral water, ice free</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                	<table class="table">
	                    <thead style="display: none;">
	                        <tr>
	                            <th>name</th>
	                            <th>discription</th>
	                            <th>price</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td class="text-uppercase"><strong>1F</strong> <br>COUNTER</td>
	                            <td class="text-uppercase">DRINK FREE (NOMIHODAI) <br>BOTTLE KEEP</td>
	                            <td>600.000vnd/1人 <br>300.000vnd/1人</td>
	                        </tr>
	                        <tr>
	                            <td><strong>2F</strong> <br>SOFA (キャバクラ)</td>
	                            <td>DRINK FREE (飲み放題) <br>BOTTLE KEEP</td>
	                            <td>800.000vnd/1人 <br>500.000vnd/1人</td>
	                        </tr>
	                        <tr>
	                            <td><strong>4F.5F.6F</strong> <br>カラオケ</td>
	                            <td>DRINK FREE (飲み放題) <br>BOTTLE KEEP</td>
	                            <td>1.000.000vnd/1人 <br>700.000vnd/1人</td>
	                        </tr>
	                        <tr>
	                            <td><strong>7F</strong> <br>NIGHT CLUB <br>（ナイトクラブ）</td>
	                            <td>DRINK FREE (NOMIHODAI) <br>BOTTLE KEEP</td>
	                            <td>1.200.000vnd/1人 <br>900.000vnd/1人</td>
	                        </tr>
	                        <tr>
	                            <td></td>
	                            <td>
	                            	同伴 
	                            	<br>指名
									<br>店内指名
									<br>時間内アフター
									<br>Lady change
									<br>普通ダンス
									<br>セクシーダンス
									<br>Credit Card Fee　(カード手数料）
									<br>Tax Fee　（税金）
								</td>
	                            <td>
	                            	300.000vnd
									<br>300.000vnd
									<br>200.000vnd
									<br>500.000vnd
									<br>200.000vnd
									<br>3.000.000vnd
									<br>6.000.000vnd
									<br>5%
									<br>10%
	                            </td>
	                        </tr>
	                        <tr>
	                        	<td><strong>OVERTIME FEE</strong></td>
	                        	<td>From 0:00 to 1:00 <br>From 1:00</td>
	                        	<td>100.000VND/Lady/30 min<br>200.000VND/Lady/30min</td>
	                        </tr>
	                    </tbody>
	                </table>
                </div>
            </div>
        </section>
        <!-- reservation -->
        <section id="reservation">
            <div class="container">
            	<div class="reservation_title">
                    <h3>RESERVATION/テーブル予約</h3>
                </div>
                @if(session('status')  == 'success')
	                <div class="alert alert-success">
					  	<strong>予約情報を送信しました！</strong> 少々お待ちください。スタッフがご連絡します。
					</div>
				@endif
                @if(session('status')  == 'fail')
                    <div class="alert alert-danger">
                        <strong>エラーが発生しました</strong> 少々お待ちください。スタッフがご連絡します。
                    </div>
                @endif
                <form action="{{ url('/booking') }}" method="post">
                	<div class="media">
	                    <label class="align-self-center">Customer Name/お名前</label>
	                    <div class="media-body">
	                        <div class="form-group">
	                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
	                            @if($errors->has('name'))
                                    <p id="booking_contact_err">{{ $errors->first('name') }}</p>
                                @endif 
	                        </div>
	                    </div>
	                </div>
	                <div class="media">
	                    <label class="align-self-center">Number of Customer/人数</label>
	                    <div class="media-body">
	                        <div class="form-group">
	                            <input type="text" class="form-control" name="number" value="{{ old('number') }}">
	                          	@if($errors->has('number'))
                                    <p id="booking_contact_err">{{ $errors->first('number') }}</p>
                                @endif 
	                        </div>
	                    </div>
	                </div>
	                <div class="media">
	                    <label class="align-self-center">Phone number/電話番号</label>
	                    <div class="media-body">
	                        <div class="form-group">
	                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
	                           	@if($errors->has('phone'))
                                    <p id="booking_contact_err">{{ $errors->first('phone') }}</p>
                                @endif 
	                        </div>
	                    </div>
	                </div>
	                <div class="media">
	                    <label class="align-self-center">Reservation time/予約日時</label>
	                    <div class="media-body">
	                        <div class="form-group">
	                            <input type="text" class="form-control" name="time" value="{{ old('time') }}">
	                           	@if($errors->has('time'))
                                    <p id="booking_contact_err">{{ $errors->first('time') }}</p>
                                @endif 
	                        </div>
	                    </div>
	                </div>
	                <div class="media">
	                    <label class="align-self-start">Special order (table, room, wine etc) <br>/特別オーダー（テーブル・個室・お酒など）</label>
	                    <div class="media-body">
	                        <div class="form-group">
	                            <textarea class="form-control" name="order"></textarea>
	                           <!--  <p id="name_err"></p> -->
	                        </div>
	                    </div>
	                </div>
	                <div class="text-right reservation_btn">
	                    <button type="submit" class="text-center">RESERVATION <br>テーブル予約</button>
	                </div>
	                {{ csrf_field() }}
                </form>
            </div>
        </section>
        <style type="text/css">
        	#booking_contact_err {
        		font-size: 14px;
        		color: red;
        		margin-bottom: 0;
        		position: absolute;
        		font-style: italic;
        	}
        </style>
        <!-- photo library -->
        <section id="photo-library">
            <div class="container">
                <div class="photo-title">
                    <a style="text-decoration: none;"><h3>photo library/写真</h3></a>
                </div>
                <div class="photo-list row" <?php $dem=2; ?>>
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
                    @if(!empty($galleries))
                        @foreach($galleries as $key=>$gallery)
                        @if($key < 7)
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
                        @endif
                        @endforeach
                    @else
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
                		<div class="col-md-30-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery4.png">
    								<img src="{{asset('miyabi')}}/images/gallery4.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery4.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                		<div class="col-md-40-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery5.png">
    								<img src="{{asset('miyabi')}}/images/gallery5.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery5.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                		<div class="col-md-30-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery6.png">
    								<img src="{{asset('miyabi')}}/images/gallery6.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery6.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                		<div class="col-md-30-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery7.png">
    								<img src="{{asset('miyabi')}}/images/gallery7.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery7.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                		<div class="col-md-40-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery8.png">
    								<img src="{{asset('miyabi')}}/images/gallery8.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery8.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                		<div class="col-md-30-100 photo-col">
                			<div class="photo-col-pos">
    	            			<a href="{{asset('miyabi')}}/images/gallery9.png">
    								<img src="{{asset('miyabi')}}/images/gallery9.png" alt=""  style="width: 100%;" />
    							</a>
    							<div class="overlay">
    							    <a href="{{asset('miyabi')}}/images/gallery9.png" data-fancybox="gallery" data-caption="Caption for single image" class="icon" title="写真を見る">
    							      <img src="{{asset('miyabi')}}/images/icon_search.png" />
    							    </a>
    						  	</div>
                			</div>
                		</div>
                    @endif
                </div>
            </div>
        </section>
        <!-- access map -->
        <section id="maps">
        	<div class="container">
        		<div class="maps-title">
                    <h3>access map/アクセス</h3>
                </div>
        	</div>
        </section>	
        <section>
            <div class="box-mapper-footer">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.980700914596!2d105.80782241440751!3d21.033458192994974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4ef7e92e7b%3A0xabb5c2c2d663a9a3!2sMIYABI!5e0!3m2!1sen!2s!4v1574657525458!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
    </article>
@endsection

@section('page_css')
	<style type="text/css">
		body {
			background: transparent url("{{asset('miyabi')}}/images/bg_full.png") no-repeat;
			height: 100%;
		    width: 100%;
		    background-position: center;
		    background-size: cover;
		}
	</style>
@endsection

@section('page_js')
	<script type="text/javascript">
        $(document).ready(function() {
            
            $('.owl-tab').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                items: 1,
                lazyload: true,
                nav: true,
      			navText: ["<img src='{{asset("miyabi")}}/images/prev.png'>","<img src='{{asset("miyabi")}}/images/next.png'>"],
                // autoplay: true,
            });
        });
    </script>
    <script type="text/javascript">
		var action = false, clicked = false;
		var Owl = {

		    init: function() {
		      Owl.carousel();
		    },

			carousel: function() {
				var owl;
				$(document).ready(function() {
					
					owl = $('.owl-banner').owlCarousel({
			            loop: true,
			            margin: 10,
			            nav: true,
			            items: 1,
			            lazyload: true,
			            autoplay: true,
			            dotsContainer: '.test',
			        });

					 $('.bookmarks').on('click', 'li', function(e) {
					    owl.trigger('to.owl.carousel', [$(this).index(), 300]);
					  });
				});
			}
		};

		$(document).ready(function() {
		  Owl.init();
		});
	</script>
@endsection