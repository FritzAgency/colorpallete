<html>

<head>

<title> Carousel </title>

<style>
.search{color:#fff;font-weight:700}
.btn-block{background:transparent!important;padding:7px 0px 5px 0px!important;}
.btn-primary{background-color:#fff!important;color:#555!important;border-color:transparent!important;}
.btn-primary:hover{background-color:#ddd !important;border-color:transparent!important;}
.form-control{height:37px!important;border-radius:0px!important;background:transparent!important;color:#fff!important;}



 /*.search {
    margin-top: -10%;
}*/
.search .form-section{
	background:rgba(0, 0, 0, 0.71);
	border: 2px solid #414141;
	border-radius: 5px;
	padding: 10px 20px;
}
.serchtile{
    color:#fff;
    margin-bottom: 5px;
}
#myCarousel {
    height: 580px;
}

.carousel,
.item,
.active {
    height: 100%;
}

.carousel-inner {
    height: 100%;
}
/* The controlsy */
.carousel-control {
    top: 50% !important;
  left: -12px;
    height: 40px !important;
  width: 40px !important;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    /*margin-top: 90px;*/
    font-size: 22px !important;
}
.carousel-control.left {
  left: 30px !important;
}
.carousel-control.right {
  right: 30px !important;
}

.carousel-caption {
    padding-bottom: 130px !important;
     opacity: 0;
   }

.carousel .carousel-inner .item .carousel-caption {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.carousel .carousel-inner .item.active .carousel-caption {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}
.carousel-caption h2 {
    font-size: 3em;
    font-weight: 700;
}

/* Background images are set within the HTML using inline CSS, not here */

.fill {
    width: 100%;
    height: 100%;
    background-position: top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
.carousel-buttons {
  z-index: 1100;
  position: absolute;
  width: 100%;
  color:#fff;
  bottom:35px;
}
@media only screen and (min-width: 768px) and (max-width: 990px){
  .carousel-caption h2 {font-size: 2.6em;}
}

@media only screen and (min-width: 480px) and (max-width: 767px){
  .carousel-control.left {left: 10px !important;}
  .carousel-control.right {right: 10px !important;}
  .carousel-caption h2 {font-size: 2.2em;}
}

@media only screen and (min-width: 320px) and (max-width: 479px){
  #myCarousel {height: 361px;}
  .carousel-control.left {left: 5px !important;}
.carousel-control.right {right: 5px !important;}
.carousel-caption {padding-bottom: 50px !important;}
 .search { margin-top: 0%;}
 .carousel-caption h2 {font-size: 2em;}
}




</style>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>



<body>

<header id="myCarousel" class="carousel slide">
        <!-- Wrapper for Slides -->
        <div class="carousel-buttons">
  <div class="search">
        <div class="container">
          <div class="row">
                <div class="col-md-10 col-md-offset-1">
              <div class="form-section">
                <div class="row">
                    <form role="form">
                      <div class="col-md-2">
                        <div class="form-group">
                             <div class="serchtile">I'm Looking</div>
                          <label class="sr-only" for="looking">I'm looking</label>
                         <select id="selectbasic" name="selectbasic" class="form-control">
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-1">
                          <div class="row">
                        <div class="form-group">
                             <div class="serchtile">Age</div>
                          <label class="sr-only" for="age">Age</label>
                          <div class="input-group">
                            <select id="age" name="age" class="form-control">
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>
                              <option value="26">26</option>
                              <option value="27">27</option>
                              <option value="28">28</option>
                              <option value="29">29</option>
                              <option value="30">30</option>
                              <option value="31">31</option>
                              <option value="32">32</option>
                              <option value="33">33</option>
                              <option value="34">34</option>
                              <option value="35">35</option>
                              <option value="36">36</option>
                              <option value="37">37</option>
                              <option value="38">38</option>
                              <option value="39">39</option>
                              <option value="40">40</option>
                              <option value="41">41</option>
                              <option value="42">42</option>
                              <option value="43">43</option>
                              <option value="44">44</option>
                              <option value="45">45</option>
                              <option value="46">46</option>
                              <option value="47">47</option>
                              <option value="48">48</option>
                              <option value="49">49</option>
                              <option value="50">50</option>
                              <option value="51">51</option>
                              <option value="52">52</option>
                              <option value="53">53</option>
                              <option value="54">54</option>
                              <option value="55">55</option>
                              <option value="56">56</option>
                              <option value="57">57</option>
                              <option value="58">58</option>
                              <option value="59">59</option>
                              <option value="60">60</option>
                              <option value="61">61</option>
                              <option value="62">62</option>
                              <option value="63">63</option>
                              <option value="64">64</option>
                              <option value="65">65</option>
                              <option value="66">66</option>
                              <option value="67">67</option>
                              <option value="68">68</option>
                              <option value="69">69</option>
                              <option value="70">70</option>
                        </select>  </div>
                        </div>
                        </div>
                      </div>
                          
                      <div class="col-md-1">
                       <div class="row">
                        <div class="form-group">
                                <div class="serchtile">To</div>
                          <label class="sr-only" for="toage">To</label>
                          <div class="input-group">
                            <select id="age" name="toage" class="form-control">
                               <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                  <option value="32">32</option>
                                  <option value="33">33</option>
                                  <option value="34">34</option>
                                  <option value="35">35</option>
                                  <option value="36">36</option>
                                  <option value="37">37</option>
                                  <option value="38">38</option>
                                  <option value="39">39</option>
                                  <option value="40">40</option>
                                  <option value="41">41</option>
                                  <option value="42">42</option>
                                  <option value="43">43</option>
                                  <option value="44">44</option>
                                  <option value="45">45</option>
                                  <option value="46">46</option>
                                  <option value="47">47</option>
                                  <option value="48">48</option>
                                  <option value="49">49</option>
                                  <option value="50">50</option>
                                  <option value="51">51</option>
                                  <option value="52">52</option>
                                  <option value="53">53</option>
                                  <option value="54">54</option>
                                  <option value="55">55</option>
                                  <option value="56">56</option>
                                  <option value="57">57</option>
                                  <option value="58">58</option>
                                  <option value="59">59</option>
                                  <option value="60">60</option>
                                  <option value="61">61</option>
                                  <option value="62">62</option>
                                  <option value="63">63</option>
                                  <option value="64">64</option>
                                  <option value="65">65</option>
                                  <option value="66">66</option>
                                  <option value="67">67</option>
                                  <option value="68">68</option>
                                  <option value="69">69</option>
                                  <option value="70">70</option>
                            </select>  </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                          
                        <div class="form-group">
                            <div class="serchtile">Religion</div>
                          <label class="sr-only" for="religion">Religion</label>
                           <select id="religion" name="religion" class="form-control">
                              <option value="buddhist">hindu</option>
                            </select>
                        </div>
                      </div>
                       <div class="col-md-3">
                           <div class="row">
                        <div class="form-group">
                            <div class="serchtile">Caste</div>
                          <label class="sr-only" for="religion">Caste</label>
                           <select id="religion" name="religion" class="form-control">
                              <option value="buddhist">brahmin</option>
                            </select></div>
                        </div>
                      </div>
                      <div class="col-md-2">
                          <br>
                           <div class="serchtile"></div>
                        <button type="submit" class="btn btn-default btn-primary btn-block">Search</button>
                   
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       
        </div>

        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-7.jpg');"></div>
                <div class="carousel-caption">
                <h2>We bring people together.
Love unites them...</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-7.jpg');"></div>
                <div class="carousel-caption">
                    <h2>We bring people together.
Love unites them...</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-7.jpg');"></div>
                <div class="carousel-caption">
                    <h2>We bring people together.
Love unites them...</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>

    </header>  

</body>
</html>