<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>CarWash</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="iran indigo darken-4">

  <!-- Navagation Bar -->
  <div class="navbar-fixed">
    <nav class="nav-extended indigo" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo white-text right">پنل متصدی</a>
        <ul class="left">
          <li><p class="white-text">امروز : 1395/09/18</p></li>
        </ul>
        <div class="right right-align" style="margin-top:60px;">
          <ul class="tabs tabs-transparent center">
            <li class="tab"><a href="#operator_info">اطلاعات متصدی</a></li>
            <li class="tab"><a href="#today_list">لیست امروز</a></li>
            <li class="tab"><a href="#new_customer" class="active">ثبت مشتری جدید</a></li>
            <li class="tab"><a href="#search_customer" >جستجو مشتری</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div id="index-banner" class="parallax-container" style="margin-top:105px;">
    <div class="no-pad-bot">
      <div class="container">

        <!-- Operator Tab -->
        <div id="operator_info" class="col s12">

        </div>

        <!-- Today Tab -->
        <div id="today_list" class="col s12">

        </div>

        <!-- Customer Tab -->
        <div id="new_customer" class="col s12">
          <!-- new Customer Info -->
          <div class="row card" style="padding:3%;">
              <form method="get" action="./insertnew.php" class="col s12">
                <h4 class="header black-text center ">اطلاعات مشتری</h4>
                <div class="row">

                  <!-- left Side -->
                  <div class="col s12 m6" style="margin-right:8%;">

                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">خودرو داخلی</h5>
                        </div>

                        <div class="col s12 m6">
                          <input name="group1" class="with-gap right-align" type="radio" id="test11" checked/>
                          <label for="test11">روشویی</label>
                        </div>
                    
                        <div class="col s12 m6">
                          <input name="group1" class="with-gap" type="radio" id="test12" />
                          <label for="test12">نظافت داخلی</label>
                        </div>

                    </div>
                    <!--
                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">خودرو لاکچری</h5>
                        </div>
                        <div class="col s12">
                          <div style="direction:ltr;" class="right">
                            <input name="group2" class="with-gap" type="radio" id="test21" checked/>
                            <label for="test21">روشویی</label>
                          </div>
                          <br>
                          <div style="direction:ltr;" class="left">
                            <input name="group2" class="with-gap" type="radio" id="test22" />
                            <label for="test22">نظافت داخلی</label>
                          </div>
                        </div>
                    </div>

                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">خودرو شاسی</h5>
                        </div>
                        <div class="col s12">
                          <div style="direction:ltr;" class="right">
                            <input name="group3" class="with-gap" type="radio" id="test31" checked/>
                            <label for="test31">روشویی</label>
                          </div>
                          <br>
                          <div style="direction:ltr;" class="left">
                            <input name="group3" class="with-gap" type="radio" id="test32" />
                            <label for="test32">نظافت داخلی</label>
                          </div>
                        </div>
                    </div>

                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">اتوخسروانی</h5>
                        </div>
                        <div class="col s12">
                          <div style="direction:ltr;" class="right">
                            <input name="group4" class="with-gap" type="radio" id="test41" checked/>
                            <label for="test41">روشویی</label>
                          </div>
                          <br>
                          <div style="direction:ltr;" class="left">
                            <input name="group4" class="with-gap" type="radio" id="test42" />
                            <label for="test42">نظافت داخلی</label>
                          </div>
                        </div>
                    </div>

                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">کلوب ورزشی</h5>
                        </div>
                        <div class="col s12">
                          <div style="direction:ltr;" class="right">
                            <input name="group5" class="with-gap" type="radio" id="test51" checked/>
                            <label for="test51">روشویی</label>
                          </div>
                          <br>
                          <div style="direction:ltr;" class="left">
                            <input name="group5" class="with-gap" type="radio" id="test52" />
                            <label for="test52">نظافت داخلی</label>
                          </div>
                        </div>
                    </div>

                    <div class="row card">
                        <div class="col s12">
                          <h5 class="black-text right">باشگاه مشتریان</h5>
                        </div>
                        <div class="col s12">

                          <p class="center">
                            <input name="group6" class="with-gap" type="radio" id="test61" checked/>
                            <label for="test61">روشویی 10 امتیاز</label>
                          </p>

                          <p class="center">
                            <input name="group6" class="with-gap" type="radio" id="test62" />
                            <label for="test62">روشویی 15 امتیاز</label>
                          </p>

                          <p class="center">
                            <input name="group6" class="with-gap" type="radio" id="test63" />
                            <label for="test63">نظافت داخلی + روشویی 30 امتیاز</label>
                          </p>

                          <p class="center">
                            <input name="group6" class="with-gap" type="radio" id="test64" />
                            <label for="test64">نظافت داخلی + روشویی 40 امتیاز</label>
                          </p>
                        </div>
                    </div>
                    -->
                  </div>

                  <!-- Right Side -->
                  <div class="col s12 m5">

                    <div class="row">
                      <div class="input-field col s12">
                        <div class="black-text right">شماره قبض</div>
                        <input name="cardnumber"
                          id="cardnumber"
                          disabled
                          type="text"
                          value="100"
                          class="validate black-text center-align">
                      </div>
                    </div>

                    <div class="row center-align">
                      <div class="input-field col s12">
                        <input required name="namefamily"
                          id="namefamily"
                          type="text"
                          class="validate black-text"
                          tabindex="0">
                        <label for="namefamily">نام و نام خانوادگی</label>
                      </div>
                    </div>

                    <div class="row center-align">
                      <div class="input-field col s12">
                        <input required name="tel"
                          id="tel"
                          type="tel"
                          class="validate black-text"
                          tabindex="1">
                        <label for="tel">شماره تلفن</label>
                      </div>
                    </div>

                    <div class="row">
                      <ul class="collapsible black-text right-align" data-collapsible="accordion">
                        <li>
                          <div class="collapsible-header"><h5>پلاک رسمی</h5></div>
                          <div class="collapsible-body">
                            <!-- Search By Pelak Rasmi -->
                            <div class="">
                              <div class="center col s12">
                                <img src="./pic/p1.png" height="80"/>
                              </div>

                              <div class="input-field col s12 m3">
                                <input required name="little_pelak"
                                  maxlength="2"
                                  length="2"
                                  type="text"
                                  class="validate black-text"
                                  tabindex="2">
                              </div>

                              <div class="input-field col s12 m3">
                                <select required name="alpha_pelak"
                                  class="slt white-text blue darken-3"
                                  tabindex="3">
                                  <option class="black-text">الف</option>
                                  <option class="black-text">ب</option>
                                  <option class="black-text">پ</option>
                                  <option class="black-text">ت</option>
                                  <option class="black-text">ث</option>
                                  <option class="black-text">ج</option>
                                  <option class="black-text">چ</option>
                                  <option class="black-text">ح</option>
                                  <option class="black-text">خ</option>
                                  <option class="black-text">د</option>
                                  <option class="black-text">ذ</option>
                                  <option class="black-text">ر</option>
                                  <option class="black-text">ز</option>
                                  <option class="black-text">ژ</option>
                                  <option class="black-text">س</option>
                                  <option class="black-text">ش</option>
                                  <option class="black-text">ص</option>
                                  <option class="black-text">ض</option>
                                  <option class="black-text">ط</option>
                                  <option class="black-text">ظ</option>
                                  <option class="black-text">ع</option>
                                  <option class="black-text">غ</option>
                                  <option class="black-text">ف</option>
                                  <option class="black-text">ق</option>
                                  <option class="black-text">ک</option>
                                  <option class="black-text">گ</option>
                                  <option class="black-text">ل</option>
                                  <option class="black-text">م</option>
                                  <option class="black-text">ن</option>
                                  <option class="black-text">و</option>
                                  <option class="black-text">ه</option>
                                  <option class="black-text">ی</option>
                                </select>
                              </div>

                              <div class="input-field col s12 m6">
                                <input required name="biger_pelak"
                                  maxlength="3"
                                  length="3"
                                  type="text"
                                  class="validate black-text"
                                  tabindex="4">
                              </div>
                            </div>
                            <!-- End -->
                          </div>
                        </li>
                        <li>
                          <div class="collapsible-header"><h5>پلاک گذرموقت</h5></div>
                          <div class="collapsible-body">
                            <!-- Search By Pelak Movaghat -->
                            <div class="">
                              <form method="get" action="./search.php">
                                <div class="col s10 offset-s1 center">
                                  <input type="submit" value="" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                                  <div class="col s12">
                                    <div class="row">
                                      <div class="row">
                                        <div class="center col s12">
                                          <img src="./pic/p2.png" height="80"/>
                                        </div>
                                        <div class="input-field col s12">
                                          <input required name="pelak_movaghat"
                                            id="pelak_movaghat"
                                            maxlength="4"
                                            length="4"
                                            type="text"
                                            class="validate black-text"
                                            tabindex="5">
                                        <label for="pelak_movaghat">پلاک را وارد کنید </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- End -->
                          </div>
                        </li>
                        <li>
                          <div class="collapsible-header"><h5>پلاک سیاسی</h5></div>
                          <div class="collapsible-body">
                            <!-- Search By Pelak Siasi -->
                            <div class="">
                              <form method="get" action="./search.php">
                                <div class="col s10 offset-s1 center">
                                  <input type="submit" value="" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                                  <div class="col s12">
                                    <div class="row">
                                      <div class="row">
                                        <div class="center col s12">
                                          <img src="./pic/p3.png" height="80"/>
                                        </div>

                                        <div class="input-field col s12">
                                          <input required name="pelak_siasi"
                                            id="pelak_siasi"
                                            maxlength="3"
                                            length="3"
                                            type="text"
                                            class="validate black-text"
                                            tabindex="6"
                                            >
                                          <label for="pelak_siasi">پلاک را وارد کنید </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <!-- End -->
                          </div>
                        </li>
                      </ul>
                    </div>

                    <!--div class="row">
                      <div class="input-field col s12">
                        <input id="" type="text" class="validate black-text" tabindex="5">
                        <label for=""></label>
                      </div>
                    </div-->

                  </div>

                </div>
                <div class="row">
                  <input type="reset" value="پاک کردن" class="col s5  red lighten-1 waves-effect waves-light btn"/>
                  <input type="submit" value="ثبت قبض" class="col s5 offset-s2 green lighten-1 waves-effect waves-light btn" />
                </div>
              </form>
          </div>

        </div>

        <!-- Search Tab -->
        <div id="search_customer" class="col s12">
          <!-- Search By Phone -->
          <div class="row card hoverable">
            <form method="get" action="./search.php">
              <div class="col s10 offset-s1 center">
                <input type="submit" value="ورود" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                <div class="col s12">
                  <div class="row">
                    <h4 class="header black-text">جستجوی مشتری با شماره تلفن</h4>
                    <div class="input-field col s12">
                      <input required name="phone_number_search"
                        id="phone_number_search"
                        type="number"
                        class="validate black-text"
                        tabindex="0">
                      <label for="phone_number_search">شماره تلفن را وارد کنید + کلید اینتر</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <!-- Search By Pelak Rasmi -->
          <div class="row card hoverable">
            <form method="get" action="./search.php">
              <div class="col s10 offset-s1 center">
                <input type="submit" value="" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                <div class="col s12">
                  <div class="row">
                    <h4 class="header black-text">جستجوی مشتری با پلاک رسمی</h4>
                    <div class="row">
                      <div class="center col s12">
                        <img src="./pic/p1.png" height="80"/>
                      </div>

                      <div class="input-field col s12 m3">
                        <input required name="little_pelak_search"
                          maxlength="2"
                          length="2"
                          type="text"
                          class="validate black-text"
                          tabindex="2">
                      </div>

                      <div class="input-field col s12 m3">
                        <select required name="alpha_pelak_search"
                          class="slt white-text blue darken-3"
                          tabindex="3">
                          <option class="black-text">الف</option>
                          <option class="black-text">ب</option>
                          <option class="black-text">پ</option>
                          <option class="black-text">ت</option>
                          <option class="black-text">ث</option>
                          <option class="black-text">ج</option>
                          <option class="black-text">چ</option>
                          <option class="black-text">ح</option>
                          <option class="black-text">خ</option>
                          <option class="black-text">د</option>
                          <option class="black-text">ذ</option>
                          <option class="black-text">ر</option>
                          <option class="black-text">ز</option>
                          <option class="black-text">ژ</option>
                          <option class="black-text">س</option>
                          <option class="black-text">ش</option>
                          <option class="black-text">ص</option>
                          <option class="black-text">ض</option>
                          <option class="black-text">ط</option>
                          <option class="black-text">ظ</option>
                          <option class="black-text">ع</option>
                          <option class="black-text">غ</option>
                          <option class="black-text">ف</option>
                          <option class="black-text">ق</option>
                          <option class="black-text">ک</option>
                          <option class="black-text">گ</option>
                          <option class="black-text">ل</option>
                          <option class="black-text">م</option>
                          <option class="black-text">ن</option>
                          <option class="black-text">و</option>
                          <option class="black-text">ه</option>
                          <option class="black-text">ی</option>
                        </select>
                      </div>

                      <div class="input-field col s12 m6">
                        <input required name="biger_pelak_search"
                          maxlength="3"
                          length="3"
                          type="text"
                          class="validate black-text"
                          tabindex="4">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="row">
            <!-- Search By Pelak Movaghat -->
            <div class="col s12 m5 card hoverable" style="margin-right:8.33%;">
              <form method="get" action="./search.php">
                <div class="col s10 offset-s1 center">
                  <input type="submit" value="" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                  <div class="col s12">
                    <div class="row">
                      <h5 class="header black-text">جستجوی مشتری با پلاک موقت</h5>
                      <div class="row">
                        <div class="center col s12">
                          <img src="./pic/p2.png" height="80"/>
                        </div>
                        <div class="input-field col s12">
                          <input required name="pelak_movaghat"
                            id="pelak_movaghat"
                            maxlength="4"
                            length="4"
                            type="text"
                            class="validate black-text"
                            tabindex="5">
                        <label for="pelak_movaghat">پلاک را وارد کنید و کلید اینتر را بزنید</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!-- Search By Pelak Siasi -->
            <div class="col s12 m5 card hoverable" style="margin-left:8.33%;">
              <form method="get" action="./search.php">
                <div class="col s10 offset-s1 center">
                  <input type="submit" value="" class="col s12 green lighten-1 waves-effect waves-light btn hide" />
                  <div class="col s12">
                    <div class="row">
                      <h5 class="header black-text">جستجوی مشتری با پلاک سیاسی</h5>
                      <div class="row">
                        <div class="center col s12">
                          <img src="./pic/p3.png" height="80"/>
                        </div>

                        <div class="input-field col s12">
                          <input required name="pelak_siasi"
                            id="pelak_siasi"
                            maxlength="3"
                            length="3"
                            type="text"
                            class="validate black-text"
                            tabindex="6"
                            >
                          <label for="pelak_siasi">پلاک را وارد کنید و کلید اینتر را بزنید</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="parallax"></div>
  </div>

  <!-- footer class="page-footer indigo">
     <div class="footer-copyright">
       <div class="container">
         <div class="row center">
           <div class="col s7">
             <a class="grey-text text-lighten-4 right" href="http://adrapanadevs.ir/">
               More Links © 2016 HANF
             </a>
           </div>
         </div>
       </div>
     </div>
  </footer>
-->
  <!--  Scripts-->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <!-- MY JS -->
  <script>
    $(document).ready(function() {
     $('select').material_select();
     $('input#input_text, textarea#textarea1').characterCounter();
     $('.collapsible').collapsible();
    });
  </script>

  <script src="js/init.js"></script>

  </body>
</html>
