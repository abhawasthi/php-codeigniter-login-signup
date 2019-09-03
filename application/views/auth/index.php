    <div id="page-wrapper">
    <div class="main-page">
      <div class="col_3">
          <div class="col-md-3 widget widget">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-users icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $active_users; ?></strong></h5>
                      <span> Active</span>
                    </div>
                </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $deleted_users; ?></strong></h5>
                      <span> Deleted</span>
                    </div>
                </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-users user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $noatctive_users; ?></strong></h5>
                      <span> Not Active </span>
                    </div>
                </div>
          </div>
          <div class="col-md-3 widget widget1">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-user-circle-o dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $groups; ?></strong></h5>
                      <span>Groups</span>
                    </div>
                </div>
           </div>
          <div class="col-md-3 widget">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-users dollar2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong><?php echo $users; ?></strong></h5>
                      <span>Total Users</span>
                    </div>
                </div>
           </div>
          <div class="clearfix"> </div>
    </div>
    
    <div class="row-one widgettable">
      <div class="col-md-7 content-top-2 card">
        <div class="agileinfo-cdr">
          
        <div id="Linegraph2" style="width: 98%; height: 350px">

        <div class="col-md-12 span_8">
        <div class="activity_box">
          <h2>Last 10 Sign Up</h2>
          <div class="scrollbar" id="style-1">
            <?php //print_r($last_10_users);  ?>



            <?php foreach ($last_10_users as   $user) { ?>
                  
              <div class="activity-row">
              <div class="col-xs-2 activity-img">
                <img style="width: 50px;height: 50px;" src="<?php echo base_url(); ?><?php echo USERS_PROFILES_IMG; ?><?php echo (!empty($user->profile_pic)) ?  $user->profile_pic : 'default.jpg' ?>"
                class="img-responsive" alt=""></div>
              <div class="col-xs-6 activity-desc">
                <h5><a href="#"><?php echo $user->name; ?></a></h5>
                <p><?php echo $user->email; ?></p>
              </div>
              <div class="col-xs-4 activity-desc1"><h6><?php echo $user->sign_on; ?></h6></div>
              <div class="clearfix"> </div>
            </div>

            <?php } ?>



          </div>
 
        </div>
      </div>

            </div>
            
        </div>
      </div>
      <div class="col-md-3 stat">
        <div class="content-top-1">
        <div class="col-md-6 top-content">
          <h5>Sales</h5>
          <label>1283+</label>
        </div>
        <div class="col-md-6 top-content1">    
          <div id="demo-pie-1" class="pie-title-center" data-percent="45"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
        <div class="col-md-6 top-content">
          <h5>Reviews</h5>
          <label>2262+</label>
        </div>
        <div class="col-md-6 top-content1">    
          <div id="demo-pie-2" class="pie-title-center" data-percent="75"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
        <div class="content-top-1">
        <div class="col-md-6 top-content">
          <h5>Visitors</h5>
          <label>12589+</label>
        </div>
        <div class="col-md-6 top-content1">    
          <div id="demo-pie-3" class="pie-title-center" data-percent="90"> <span class="pie-value"></span> </div>
        </div>
         <div class="clearfix"> </div>
        </div>
      </div>
      <div class="col-md-2 stat">
        <div class="content-top">
          <div class="top-content facebook">
            <a href="#"><i class="fa fa-facebook"></i></a>
          </div>
          <ul class="info">
            <li class="col-md-6"><b>1,296</b><p>Friends</p></li>
            <li class="col-md-6"><b>647</b><p>Likes</p></li>
            <div class="clearfix"></div>
          </ul>
        </div>
        <div class="content-top">
          <div class="top-content twitter">
            <a href="#"><i class="fa fa-twitter"></i></a>
          </div>
          <ul class="info">
            <li class="col-md-6"><b>1,997</b><p>Followers</p></li>
            <li class="col-md-6"><b>389</b><p>Tweets</p></li>
            <div class="clearfix"></div>
          </ul>
        </div>
        <div class="content-top">
          <div class="top-content google-plus">
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <ul class="info">
            <li class="col-md-6"><b>1,216</b><p>Followers</p></li>
            <li class="col-md-6"><b>321</b><p>shares</p></li>
            <div class="clearfix"></div>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
        
        <div class="charts">
          <div class="col-md-4 charts-grids widget">
            <div class="card-header">
              <h3>Bar chart</h3>
            </div>
            
            <div id="container" style="width: 100%; height:270px;">
              <canvas id="canvas"></canvas>
            </div>
            <button id="randomizeData">Randomize Data</button>
            <button id="addDataset">Add Dataset</button>
            <button id="removeDataset">Remove Dataset</button>
            <button id="addData">Add Data</button>
            <button id="removeData">Remove Data</button>
            
          </div>
          
          <div class="col-md-4 charts-grids widget states-mdl">
            <div class="card-header">
              <h3>Column & Line Graph</h3>
            </div>
            <div id="chartdiv"></div>
          </div>
      
          <div class="clearfix"> </div>
        </div>
        
  
  <!-- for amcharts js -->
      <script src="<?php echo base_url(); ?>assets/js/amcharts.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/serial.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/export.min.js"></script>
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/export.css" type="text/css" media="all" />
      <script src="<?php echo base_url(); ?>assets/js/light.js"></script>
  <!-- for amcharts js -->

    <script  src="<?php echo base_url(); ?>assets/js/index1.js"></script>
  
    <div class="charts">    
      <div class="mid-content-top charts-grids">
        <div class="middle-content">
            <h4 class="title">Carousel Slider</h4>
          <!-- start content_slider -->
          <div id="owl-demo" class="owl-carousel text-center">
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider1.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider2.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider3.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider4.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider5.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider6.jpg" alt="name">
            </div>
            <div class="item">
              <img class="lazyOwl img-responsive" data-src="<?php echo base_url(); ?>assets/images/slider7.jpg" alt="name">
            </div>
            
          </div>
        </div>
          <!--//sreen-gallery-cursual---->
      </div>
    </div>
    
    <div class="col_1">
      <div class="col-md-4 span_8">
        <div class="activity_box">
          <h2>Inbox</h2>
          <div class="scrollbar" id="style-1">
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/1.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">Michael Chris</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>12:05 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/4.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">Alexander</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>12:06 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/3.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">Daniel Lucas</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>01:30 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/2.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">Jackson Jacob</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>01:50 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/1.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">David Samuel</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>12:20 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
            
            <div class="activity-row">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/4.jpg' class="img-responsive" alt=""/></div>
              <div class="col-xs-7 activity-desc">
                <h5><a href="#">laura Smith</a></h5>
                <p>Hey ! There I'm available.</p>
              </div>
              <div class="col-xs-2 activity-desc1"><h6>12:50 PM</h6></div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <form action="#" method="post">
            <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
            <input type="submit" value="Submit"/>   
          </form>
        </div>
      </div>
      <div class="col-md-4 span_8">
        <div class="activity_box activity_box1">
          <h3>chat</h3>
          <div class="scrollbar" id="style-3">
            <div class="activity-row activity-row1">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
              <div class="col-xs-5 activity-img1">
                <div class="activity-desc-sub">
                  <h5>Michael Chris</h5>
                  <p>Hello ! this is Michael chris</p>
                </div>
              </div>
              <div class="col-xs-4 activity-desc1"></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row activity-row1">
              <div class="col-xs-2 activity-desc1"></div>
              <div class="col-xs-7 activity-img2">
                <div class="activity-desc-sub1">
                  <h5>Alexander</h5>
                  <p>Hi,How are you ? What about our next meeting?</p>
                </div>
              </div>
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row activity-row1">
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
              <div class="col-xs-5 activity-img1">
                <div class="activity-desc-sub">
                  <h5>Michael Chris</h5>
                  <p>Yeah fine, Hope you the same</p>
                </div>
              </div>
              <div class="col-xs-4 activity-desc1"></div>
              <div class="clearfix"> </div>
            </div>
            <div class="activity-row activity-row1">
              <div class="col-xs-2 activity-desc1"></div>
              <div class="col-xs-7 activity-img2">
                <div class="activity-desc-sub1">
                  <h5>Alexander</h5>
                  <p>Wow that's great</p>
                </div>
              </div>
              <div class="col-xs-3 activity-img"><img src='<?php echo base_url(); ?>assets/images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
              <div class="clearfix"> </div>
            </div>
          </div>
          <form action="#" method="post">
            <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
            <input type="submit" value="Send"/>   
          </form>
        </div>
      </div>
      <div class="col-md-4 span_8" style="width: 30.3% !important;" >
        <div class="activity_box activity_box2">
          <h3>todo</h3>
          <div class="scrollbar" id="style-2">
            <div class="activity-row activity-row1">
              <div class="single-bottom">
                <ul>
                  <li>
                    <input type="checkbox"  id="brand" value="">
                    <label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand1" value="">
                    <label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand2" value="">
                    <label for="brand2"><span></span>  Donec aliquam dolor eu augue condimentum.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand9" value="">
                    <label for="brand9"><span></span>  at tristique Pain that produces no resultant.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand8" value="">
                    <label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand7" value="">
                    <label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand3" value="">
                    <label for="brand3"><span></span>  libero vel elementum euismod, mauris tellus</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand4" value="">
                    <label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand5" value="">
                    <label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
                  </li>
                  <li>
                    <input type="checkbox"  id="brand6" value="">
                    <label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
          <form action="#" method="post">
            <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
            <input type="submit" value="Submit"/>   
          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      
    </div>
        
      </div>


        <script src="<?php echo base_url() ?>assets/js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/utils.js"></script>
  
  <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var color = Chart.helpers.color;
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Bar Chart'
                    }
                }
            });

        };

        document.getElementById('randomizeData').addEventListener('click', function() {
            var zero = Math.random() < 0.2 ? true : false;
            barChartData.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return zero ? 0.0 : randomScalingFactor();
                });

            });
            window.myBar.update();
        });

        var colorNames = Object.keys(window.chartColors);
        document.getElementById('addDataset').addEventListener('click', function() {
            var colorName = colorNames[barChartData.datasets.length % colorNames.length];;
            var dsColor = window.chartColors[colorName];
            var newDataset = {
                label: 'Dataset ' + barChartData.datasets.length,
                backgroundColor: color(dsColor).alpha(0.5).rgbString(),
                borderColor: dsColor,
                borderWidth: 1,
                data: []
            };

            for (var index = 0; index < barChartData.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            barChartData.datasets.push(newDataset);
            window.myBar.update();
        });

        document.getElementById('addData').addEventListener('click', function() {
            if (barChartData.datasets.length > 0) {
                var month = MONTHS[barChartData.labels.length % MONTHS.length];
                barChartData.labels.push(month);

                for (var index = 0; index < barChartData.datasets.length; ++index) {
                    //window.myBar.addData(randomScalingFactor(), index);
                    barChartData.datasets[index].data.push(randomScalingFactor());
                }

                window.myBar.update();
            }
        });

        document.getElementById('removeDataset').addEventListener('click', function() {
            barChartData.datasets.splice(0, 1);
            window.myBar.update();
        });

        document.getElementById('removeData').addEventListener('click', function() {
            barChartData.labels.splice(-1, 1); // remove the label first

            barChartData.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myBar.update();
        });
    </script>
  
  <!-- for index page weekly sales java script -->
  <script src="<?php echo base_url(); ?>assets/js/SimpleChart.js"></script>
 
        <script>
        var graphdata1 = {
            linecolor: "#CCA300",
            title: "Monday",
            values: [
            { X: "6:00", Y: 10.00 },
            { X: "7:00", Y: 20.00 },
            { X: "8:00", Y: 40.00 },
            { X: "9:00", Y: 34.00 },
            { X: "10:00", Y: 40.25 },
            { X: "11:00", Y: 28.56 },
            { X: "12:00", Y: 18.57 },
            { X: "13:00", Y: 34.00 },
            { X: "14:00", Y: 40.89 },
            { X: "15:00", Y: 12.57 },
            { X: "16:00", Y: 28.24 },
            { X: "17:00", Y: 18.00 },
            { X: "18:00", Y: 34.24 },
            { X: "19:00", Y: 40.58 },
            { X: "20:00", Y: 12.54 },
            { X: "21:00", Y: 28.00 },
            { X: "22:00", Y: 18.00 },
            { X: "23:00", Y: 34.89 },
            { X: "0:00", Y: 40.26 },
            { X: "1:00", Y: 28.89 },
            { X: "2:00", Y: 18.87 },
            { X: "3:00", Y: 34.00 },
            { X: "4:00", Y: 40.00 }
            ]
        };
        var graphdata2 = {
            linecolor: "#00CC66",
            title: "Tuesday",
            values: [
              { X: "6:00", Y: 100.00 },
            { X: "7:00", Y: 120.00 },
            { X: "8:00", Y: 140.00 },
            { X: "9:00", Y: 134.00 },
            { X: "10:00", Y: 140.25 },
            { X: "11:00", Y: 128.56 },
            { X: "12:00", Y: 118.57 },
            { X: "13:00", Y: 134.00 },
            { X: "14:00", Y: 140.89 },
            { X: "15:00", Y: 112.57 },
            { X: "16:00", Y: 128.24 },
            { X: "17:00", Y: 118.00 },
            { X: "18:00", Y: 134.24 },
            { X: "19:00", Y: 140.58 },
            { X: "20:00", Y: 112.54 },
            { X: "21:00", Y: 128.00 },
            { X: "22:00", Y: 118.00 },
            { X: "23:00", Y: 134.89 },
            { X: "0:00", Y: 140.26 },
            { X: "1:00", Y: 128.89 },
            { X: "2:00", Y: 118.87 },
            { X: "3:00", Y: 134.00 },
            { X: "4:00", Y: 180.00 }
            ]
        };
        var graphdata3 = {
            linecolor: "#FF99CC",
            title: "Wednesday",
            values: [
              { X: "6:00", Y: 230.00 },
            { X: "7:00", Y: 210.00 },
            { X: "8:00", Y: 214.00 },
            { X: "9:00", Y: 234.00 },
            { X: "10:00", Y: 247.25 },
            { X: "11:00", Y: 218.56 },
            { X: "12:00", Y: 268.57 },
            { X: "13:00", Y: 274.00 },
            { X: "14:00", Y: 280.89 },
            { X: "15:00", Y: 242.57 },
            { X: "16:00", Y: 298.24 },
            { X: "17:00", Y: 208.00 },
            { X: "18:00", Y: 214.24 },
            { X: "19:00", Y: 214.58 },
            { X: "20:00", Y: 211.54 },
            { X: "21:00", Y: 248.00 },
            { X: "22:00", Y: 258.00 },
            { X: "23:00", Y: 234.89 },
            { X: "0:00", Y: 210.26 },
            { X: "1:00", Y: 248.89 },
            { X: "2:00", Y: 238.87 },
            { X: "3:00", Y: 264.00 },
            { X: "4:00", Y: 270.00 }
            ]
        };
        var graphdata4 = {
            linecolor: "Random",
            title: "Thursday",
            values: [
              { X: "6:00", Y: 300.00 },
            { X: "7:00", Y: 410.98 },
            { X: "8:00", Y: 310.00 },
            { X: "9:00", Y: 314.00 },
            { X: "10:00", Y: 310.25 },
            { X: "11:00", Y: 318.56 },
            { X: "12:00", Y: 318.57 },
            { X: "13:00", Y: 314.00 },
            { X: "14:00", Y: 310.89 },
            { X: "15:00", Y: 512.57 },
            { X: "16:00", Y: 318.24 },
            { X: "17:00", Y: 318.00 },
            { X: "18:00", Y: 314.24 },
            { X: "19:00", Y: 310.58 },
            { X: "20:00", Y: 312.54 },
            { X: "21:00", Y: 318.00 },
            { X: "22:00", Y: 318.00 },
            { X: "23:00", Y: 314.89 },
            { X: "0:00", Y: 310.26 },
            { X: "1:00", Y: 318.89 },
            { X: "2:00", Y: 518.87 },
            { X: "3:00", Y: 314.00 },
            { X: "4:00", Y: 310.00 }
            ]
        };
        var Piedata = {
            linecolor: "Random",
            title: "Profit",
            values: [
              { X: "Monday", Y: 50.00 },
            { X: "Tuesday", Y: 110.98 },
            { X: "Wednesday", Y: 70.00 },
            { X: "Thursday", Y: 204.00 },
            { X: "Friday", Y: 80.25 },
            { X: "Saturday", Y: 38.56 },
            { X: "Sunday", Y: 98.57 }
            ]
        };
        $(function () {
            $("#Bargraph").SimpleChart({
                ChartType: "Bar",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#sltchartype").on('change', function () {
                $("#Bargraph").SimpleChart('ChartType', $(this).val());
                $("#Bargraph").SimpleChart('reload', 'true');
            });
            $("#Hybridgraph").SimpleChart({
                ChartType: "Hybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Linegraph").SimpleChart({
                ChartType: "Line",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: false,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Areagraph").SimpleChart({
                ChartType: "Area",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Scatterredgraph").SimpleChart({
                ChartType: "Scattered",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata4, graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
            $("#Piegraph").SimpleChart({
                ChartType: "Pie",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                showpielables: true,
                data: [Piedata],
                legendsize: "250",
                legendposition: 'right',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#Stackedbargraph").SimpleChart({
                ChartType: "Stacked",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });

            $("#StackedHybridbargraph").SimpleChart({
                ChartType: "StackedHybrid",
                toolwidth: "50",
                toolheight: "25",
                axiscolor: "#E6E6E6",
                textcolor: "#6E6E6E",
                showlegends: true,
                data: [graphdata3, graphdata2, graphdata1],
                legendsize: "140",
                legendposition: 'bottom',
                xaxislabel: 'Hours',
                title: 'Weekly Profit',
                yaxislabel: 'Profit in $'
            });
        });

    </script>