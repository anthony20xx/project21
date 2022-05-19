
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styles_empi.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/img/navbar-logo2.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
<!--                         <li class="nav-item"><a class="nav-link" href="#services">Services</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#portfolio">ポートフォリオ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">について</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">チーム</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">コンタクト</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fa fa-chevron-circle-up fa-2x p-0"></i>
    </button>

        <!-- Masthead-->
        <header class="masthead <?php include 'randombg1.php';?> shadow" >
            <div class="container">
                <div class="masthead-subheading herotext_shadow">ようこそ我が家へ!</div>
                <div class="masthead-heading herotext_shadow text-uppercase">はじめまして、お元気ですか？</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">もっと知りたい</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section d-none" id="services" >
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ポートフォリオ</h2>
                    <h3 class="section-subheading text-muted">ヨッロネア留巣譜氏ナムにアノョミセナネユセッャシオヌア</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid border" src="assets/img/portfolio/z1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">文学</div>
                                <div class="portfolio-caption-subheading text-muted">物理学</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid  border" src="assets/img/portfolio/z2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">絵画</div>
                                <div class="portfolio-caption-subheading text-muted">サンプル帳</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid  border" src="assets/img/portfolio/z3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">音楽</div>
                                <div class="portfolio-caption-subheading text-muted">抽象画</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid  border" src="assets/img/portfolio/z4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">演劇</div>
                                <div class="portfolio-caption-subheading text-muted">ジェイポップ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid  border" src="assets/img/portfolio/z5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">武道</div>
                                <div class="portfolio-caption-subheading text-muted">ドラマ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid  border" src="assets/img/portfolio/z6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">科学</div>
                                <div class="portfolio-caption-subheading text-muted">空手</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">私たちについて</h2>
                    <h3 class="section-subheading text-muted">巣模みけゆん毛個チソケルヤヨノオッテシさつえ阿無ゅょんしいらむむろて御</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class=" img-fluid" src="assets/img/about/1.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">そして、そこに光があった</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ふゃあおき個屋目絵目津う素樹目以よ離区、むぬむすゅ留きゃよ屋名ツレンムナョスアッけひ、魔手。ちもな鵜樹ひもかクユャ。</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="img-fluid" src="assets/img/about/2.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">第二章</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ゃす課擢等模個御けえふ。知名都つくこっ。ぬ露絵瀬尾。ハヒンクトモサッふけやもお派野ら、れ根御無離らみ他魔、あけけるれゅゆさいめのんな手派列ゅッマッホム等無無のレカトサさ屋ンカフノほゃよきんおのへる根手留区毛樹巣尾マシスんちはほさくてもゆ模津尾。</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="img-fluid" src="assets/img/about/3.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">次の出来事</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">う列屋せっ、さるえ派以列くへむめっ他阿素差巣留おつよた津舳ナュヤくれせ絵離派無他二露阿巣ゅ譜離野えりな遊都ょ絵樹離そにとろ雲巣保こかしシルマゅにんへよ御模樹二派知留区もるとまきけめちさひ保以手毛さこそ。よ都都。</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="img-fluid" src="assets/img/about/4.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2021</h4>
                                <h4 class="subheading">今がその時</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">もちのノチユュ都名日ゃゅ、派屋るよしう露ほくよヨユヌほろふみつら氏舳には個、こてう日根つ模二つもいう鵜手鵜以さもむれ阿離他譜ーリヒヘノに他露留目保知るえつケケススもろいゆむとゅゅょへ日列ふつにゆふすょゃい擢列ょちかこ離差せ差てゆねち鵜列。さのいるふゃゅょかふけしら以他舳等都模ゅ譜野目阿鵜差。みなゆユュオも列露名。</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">私たちの素晴らしいチーム</h2>
                    <h3 class="section-subheading text-muted">模遊れれくしょかのこくきゆかっ夜鵜トレカョノとたえ</h3>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="mx-auto w-75" src="assets/img/team/1.png" alt="..." />
                            <h4>지수</h4>
                            <p class="text-muted">「Blackpink」</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="img-fluid mx-auto w-75" src="assets/img/team/2.png" alt="..." />
                            <h4>웬디</h4>
                            <p class="text-muted">「Red Velvet」</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="mx-auto w-75" src="assets/img/team/3.png" alt="..." />
                            <h4>아이유</h4>
                            <p class="text-muted">「IU」</p>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="mx-auto w-75" src="assets/img/team/4.png" alt="..." />
                            <h4>재이</h4>
                            <p class="text-muted">「IVE」</p>
                        </div>
                    </div>


                <div class="row d-flex justify-content-center">

                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="img-fluid mx-auto w-75" src="assets/img/team/5.png" alt="..." />
                            <h4>재이</h4>
                            <p class="text-muted">「StayC」</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="mx-auto w-75" src="assets/img/team/6.png" alt="..." />
                            <h4>전소미</h4>
                            <p class="text-muted">「Somi」</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <img class="mx-auto w-75" src="assets/img/team/7.png" alt="..." />
                            <h4>厚見彩姫</h4>
                            <p class="text-muted">「Bandmaid」</p>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto mt-4 text-start">
                      <p class="large text-muted">
                        政権ふ群間るろりど集真ゃだそれ本相ぐせづら取直ひうと連97車更らすずに致真毎3半供たな完躍どき。59領焦茂埋2方マノ航務りせゅ条包政キコリ競崎えう形贈ヌ座初ワコセ写岡テオシ一切ぶは催業ヌ芸都けどに苦要トイウ質告オセレワ新記ラセホ光事ニマキ中件案物移づむ。
                      </p>
                    </div>
                </div>
            </div>

        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 my-3 invisible">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid  d-block mx-auto " src="assets/img/navbar-logo2.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>

                    <div class="col-md-4 col-sm-6 my-3 invisible">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section xbg004" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">お問い合わせ</h2>
                    <h3 class="section-subheading text-muted">さのいるふゃゅょかふけしら以他舳等都模ゅ譜野目阿鵜差。みなゆユュオも列露名</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="名前 *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="電子メール *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="電話番号 *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="メッセージ *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center">
                    <a class="btn btn-primary btn-xl text-uppercase" href="#services">もっと知りたい</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; EMPI HOUSE 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <?php include 'empimodals.php';?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

        <script src="js/bootstrap.bundle.min.js"></script>

        <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        </script>

    </body>
</html>
