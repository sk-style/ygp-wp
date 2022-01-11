<?php get_header(); ?>  

    <!---- main ---->
    <main class="main">
        
        <!---- mv ---->
        <div class="mv">
            <div class="mv-head">
                <p class="mv-logo"><img src="<?php echo get_template_directory_uri() ?>/img/logo_white.svg" alt="YG PLANNING"></p>
            </div>
            <div class="inner">
                <h1 class="mv-tit">
                    <span>Stay as you are ...</span>
                    <small>共に歩み、未来を創る一足。</small>
                </h1>
            </div>

            <!---- scroll ---->
            <div class="scroll _pc">
                <p class="scroll-txt">SCROLL</p>
                <div class="scroll-bar"></div>
            </div><!---- /scroll ---->

            </div>
        </div><!---- /mv ---->

        <!---- info ---->
        <section class="info" id="info">
            <div class="info-inner">
                <h2 class="sec-tit">INFORMATION</h2>
                <ul class="info-list">
<?php
query_posts('showposts=3');
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>
                    <li class="info-item">
                        <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
                        <p><?php the_title(); ?></p>
                    </li>
<?php        
    endwhile;
endif;
?>
                </ul>
                <div class="info-btn"><a href="<?php echo esc_url( home_url('info') ) ?>">READ MORE</a></div>
            </div>
        </section><!---- /info ---->

        <!---- bisiness ---->
        <section class="bisiness" id="bisiness">
            <div class="sec-img"></div>
            <div class="inner">
            <h2 class="sec-tit">BUSINESS</h2>
                <div class="bisiness-wrap">
                    <div class="bisiness-txt">
                        ブランド事業において培ったノウハウを活かし、<br class="_pc"><span>靴にまつわるすべて</span>をご提供します。<br>
                        私達は、女性のファッションの足元を支える企業として、品質に拘った丁寧な仕事を貫きます。
                    </div>
                    <div class="bisiness-img"><img src="<?php echo get_template_directory_uri() ?>/img/business_img.png" alt="Brand Import OEM"></div>
                </div>
            </div>
            <ul class="bisiness-list">
                <li class="bisiness-item _brand" id="brand">
                    <div class="inner">
                        <div class="bisiness-pic"><img src="<?php echo get_template_directory_uri() ?>/img/bisiness_pic0.jpg" alt=""></div>
                        <div class="bisiness-content">
                            <h3 class="bisiness-tit">Brand</h3>
                            <img src="<?php echo get_template_directory_uri() ?>/img/brand_logo.png" alt="CHIAKI KATAGIRI">
                            <p>
                                やさしさ、気分、香り、そして自然。 <br>
                                「靴を着る」というこだわりの中に、<br class="_pc">女性の足へ優しさを感じさせる靴を提案します。<br>
                                1999年にスタートしてから、<br>
                                時代に合わせたデザインで多くのお客様にご愛顧頂いております。
                            </p>
                            <!---- link ---->
                            <div class="link">
                                <ul class="link-list">
                                    <li class="link-item _site"><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/brand_icon_site.svg" alt="">Official Site</a></li>
                                    <li class="link-item _store"><a href="https://chiakikatagiri.stores.jp/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/brand_icon_store.svg" alt="">Online Store</a></li>
                                    <li class="link-item _insta"><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/brand_icon_insta.svg" alt="">Instagram</a></li>
                                </ul>
                            </div><!---- /link ---->
                        </div>
                    </div>
                </li>
                <li class="bisiness-item _import" id="import">
                    <div class="inner">
                        <div class="bisiness-pic"><img src="<?php echo get_template_directory_uri() ?>/img/bisiness_pic1.jpg" alt=""></div>
                        <div class="bisiness-content">
                            <h3 class="bisiness-tit">Import</h3>
                            <p>
                                主にヨーロッパから買い付けをし、経験豊富なスタッフによる検品はもちろんのこと、補修までを責任持って行います。<br>
                                多くのお客様が悩まれている輸入靴の品質維持に対する不安を払拭し、常にクオリティの高い靴を安定してご提供いたします。
                            </p>
                            <!---- link ---->
                            <div class="link">
                                <ul class="link-list">
                                    <li class="link-item _contact">
                                        <div class="link-btn"><a href="<?php echo esc_url( home_url('contact') ) ?>">IMPORTに関するお問い合わせはこちら</a></div>
                                    </li>
                                </ul>
                            </div><!---- /link ----> 
                        </div>
                    </div>
                    <div class="bisiness-box">
                        <div class="inner">
                            <dl class="bisiness-def">
                                <div>
                                    <dt class="bisiness-dtit">ITALY</dt>
                                    <dd class="bisiness-data">
                                        <ul>
                                            <li>FABIO RUSCONI</li>
                                            <li>NAPOLEONI</li>
                                            <li>Carmens</li>
                                        </ul>
                                        <ul>
                                            <li>CORSO ROMA,9</li>
                                            <li>Luca Grossi</li>
                                            <li>MARITAN</li>
                                        </ul>
                                        <ul>
                                            <li>STATUS</li>
                                            <li>MYM</li>
                                        </ul>
                                    </dd>
                                </div>
                                <div>
                                    <dt class="bisiness-dtit">SPAIN</dt>
                                    <dd class="bisiness-data">
                                        <ul>
                                            <li>PONS QUINTANA</li>
                                            <li>kanna</li>
                                            <li>BRYAN STEPWISE</li>
                                        </ul>
                                        <ul>
                                            <li>Carmen Salas</li>
                                            <li>MARIAN</li>
                                            <li>gaimo</li>
                                        </ul>
                                        <ul>
                                            <li>maypol</li>
                                            <li>wonders</li>
                                        </ul>
                                    </dd>
                                </div>
                            </dl>
                            <div class="bisiness-btn"><a href="<?php echo esc_url( home_url('import') ) ?>"><span>Brand Information</span><span>ブランドの詳しい情報はこちら</span></a></div>            
                        </div>
                    </div>
                </li>
                <li class="bisiness-item _oem" id="oem">
                    <div class="inner">
                        <div class="bisiness-pic"><img src="<?php echo get_template_directory_uri() ?>/img/bisiness_pic2.jpg" alt=""></div>
                        <div class="bisiness-content">
                            <h3 class="bisiness-tit">OEM</h3>
                            <p>
                                ゼロベースから自由度の高い製作ができることが特徴です。靴のデザインには詳しくない、というお客様に対しても、熟練のデザイナーが寄り添いながらイメージを形にするためのご提案をいたします。
                            </p>
                            <!---- link ---->
                            <div class="link">
                                <ul class="link-list">
                                    <li class="link-item _modal">
                                        <div class="link-btn"><a href=""  id="js-modal-open" data-target="for-modal">Flow　|  製作の流れ</a></div>
                                    </li>
                                    <li class="link-item _contact">
                                        <div class="link-btn"><a href="<?php echo esc_url( home_url('contact') ) ?>">OEMに関するお問い合わせはこちら</a></div>
                                    </li>
                                </ul>
                            </div><!---- /link ---->
                        </div>
                    </div>
                </li>
            </ul>

            <!---- modal ---->
            <div class="modal">
                <div class="modal-box for-modal">
                    <div class="modal-icon modal-close" data-target="for-modal"><div><span></span><span></span></div></div>
                    <div class="modal-inner">
                        <div class="modal-img"></div>
                        <div class="modal-content">
                            <h4 class="modal-tit">OEM<span class="_ls0"> </span>Flow</h4>
                            <ul class="modal-list">
                                <li class="modal-item">
                                    <p class="modal-label">STEP<span class="_ls0"> </span>1</p>
                                    <h5>サンプル依頼</h5>
                                    <p class="modal-txt">取引先様からのご要望商品以外にもラストやデザインのご提案もいたします。</p>
                                </li>
                                <li class="modal-item">
                                    <p class="modal-label">STEP<span class="_ls0"> </span>2</p>
                                    <h5>サンプル作成</h5>
                                    <p class="modal-txt">ファーストサンプルを元に修正を1～2回行います。修正確認後に各色のサンプル作成しご要望の商品に仕上げます。</p>
                                </li>
                                <li class="modal-item">
                                    <p class="modal-label">STEP<span class="_ls0"> </span>3</p>
                                    <h5>生産</h5>
                                    <p class="modal-txt">納期確認後、ご発注を頂いた通りに生産を進めていきます。</p>
                                </li>
                                <li class="modal-item">
                                    <p class="modal-label">STEP<span class="_ls0"> </span>4</p>
                                    <h5>検品</h5>
                                    <p class="modal-txt">生産工場での検品と生産終了後に第三者検品所にて再度検品を行います。</p>
                                </li>
                                <li class="modal-item">
                                    <p class="modal-label">STEP<span class="_ls0"> </span>5</p>
                                    <h5>納品</h5>
                                    <p class="modal-txt">ご指定の場所に納品致します。</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!---- /modal ---->
            
        </section><!---- /bisiness ---->

        <!---- about ---->
        <section class="about" id="about">
            <div class="sec-img"></div>
            <div class="inner">
                <h2 class="sec-tit">ABOUT<span class="_ls0"> </span>US</h2>
                <ul class="about-list">
                    <li class="about-item">
                        <h3 class="about-tit">PHILOSOPHY</h3>
                        <div class="about-wrap">
                            <div class="about-img"><img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="YG PLANNING"></div>
                            <div class="about-content">
                                <h4>Yesterda<span class="_ls0">y’</span>s Gift</h4>
                                <p class="about-txt">
                                    昨日からの贈り物<br>
                                    私たちはこれまで多くのパートナー企業様に支えられてきました。<br>
                                    その中で築き上げてきた信頼は昨日からの贈り物だと思っています。<br>
                                    私たちはその信頼に応えるために日々プランニングし続けます。<br>
                                    時代の流れが急速な昨今、女性のファッションの足もとを支える企業として<br>
                                    これからも素敵な“GIFT” を届け続ける企業でありたいと思います。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="about-item">
                        <h3 class="about-tit">COMPANY</h3>
                        <div class="about-wrap">
                            <dl class="about-def">
                                <div>
                                    <div>
                                        <dd class="about-dtit">称号</dd>
                                        <dt class="about-data">株式会社ワイジープランニング</dt>
                                    </div>
                                    <div>
                                        <dd class="about-dtit">所在地</dd>
                                        <dt class="about-data">
                                            東京都台東区上野1-11-4　富張ビル1F<br>
                                            Tel: 03-5826-8367<span class="_pc">　｜　</span><br class="_sp">Fax: 03-5826-8368
                                        </dt>
                                    </div>
                                    <div>
                                        <dd class="about-dtit">設立</dd>
                                        <dt class="about-data">令和3年5月</dt>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <dd class="about-dtit">資本金</dd>
                                        <dt class="about-data">300万円</dt>
                                    </div>
                                    <div>
                                        <dd class="about-dtit">役員</dd>
                                        <dt class="about-data">代表取締役　山口祐一</dt>
                                    </div>
                                    <div>
                                        <dd class="about-dtit">事業内容</dd>
                                        <dt class="about-data">
                                            ・オリジナルブランド靴の企画・卸売<br>
                                            ・インポートブランドの輸入・卸売<br>
                                            ・アパレルブランドのOEM
                                        </dt>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </li>
                </ul>
            </div>
        </section><!---- /about ---->

    </main><!---- /main ---->

<?php get_footer(); ?>