<div class="body_wrapper"> <!-- -MAIN BODY PART- -->
    <div class="col-md-12">
        <div class="top_with_icon">
            <h3 class="header_wrapper center-block text-center">Result</h3>
            <button type="button" class="btn btn-info btn-lg modal1_btn" data-toggle="modal" data-target="#myModal1"><img src="<?php echo base_url()?>asset/images/view-more.png" alt="filter-icon"></button>
            <!-- Modal -->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title underline pull-left">Filtering</h3>



                        </div>
                        <div class="modal-body">

                            <form action="">

                                <div class="input11 center-block">
                                    <div class="checkbox checkbox_filter">
                                        <label><input type="checkbox" value="">
                                            <div class="radio-inline" style="padding-left: 45px">
                                                <label><input type="radio" name="optradio">Pass</label>
                                            </div>
                                            <div class="radio-inline" style="padding-left: 45px">
                                                <label><input type="radio" name="optradio">Fail</label>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="input11 center-block" style=" padding-left: 17px;">
                                    <input type="checkbox" value="">
                                    <label>
                                        <select class="form-control" id="area">
                                            <option>Area</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </label>
                                </div>


                                <div class="input11 center-block">

                                    <div class="checkbox checkbox_filter">
                                        <label>
                                            <input type="checkbox" value="">
                                            <input type="text" class="form-control" placeholder="Pso Id">
                                        </label>
                                    </div>

                                </div>

                            </form>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default go">GO</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="chart_wrapper clearfix">
            <div class="pie_chart_wapper col-md-6 center-block">
                <div class="pie_chart clearfix">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <!-- <div style="width: 20%"></div> -->
            <div class="pie_chart_wapper2 col-md-6 center-block">
                <div class="pie_chart clearfix">
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>

        <div class="request">
            <!-- <h3 class="header_wrapper center-block text-center">Result</h3> -->
            <!-- <div class="search clearfix">
                 <a href="#"><img src="<?php echo base_url()?>asset/images/up-down.png" alt="reneta filter icon"></a>
                 <a href="#"><img src="<?php echo base_url()?>asset/images/search-rounded.png" alt="reneta search icon"></a>
            </div> -->
            <table id="example" class="table result">

                <thead class="big_spacer">
                <tr>
                    <th >PSO's Name</th>
                    <th >Total Test</th>
                    <th >Points</th>
                    <th >Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="color_wrapper small_spacer"> <!-- ////////////////////////////////////////modal section//////////////////////////////////////// -->
                    <td>PSO's Name</td>
                    <td>5</td>

                    <td>70</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>7</td>
                    <td>130</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>9</td>
                    <td>160</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>2</td>
                    <td>30</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>4</td>
                    <td>55</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>6</td>
                    <td>85</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>3</td>
                    <td>55</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>5</td>
                    <td>70</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>2</td>
                    <td>15</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>7</td>
                    <td>130</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>3</td>
                    <td>25</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper_two small_spacer">
                    <td>PSO's Name</td>
                    <td>1</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                <tr class="color_wrapper small_spacer">
                    <td>PSO's Name</td>
                    <td>2</td>
                    <td>20</td>
                    <td>
                        <button type="button" class="btn btn-info btn-lg modal_btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-chevron-circle-right fa-lg" aria-hidden="true"></i></button>
                        <span class="table_insider"> | </span>
                        <a href="#"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a></td>

                </tr>
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">10011</h3>

                            <h3 class="modal-title">Mr X</h3>

                            <h3 class="modal-title underline pull-left">Total Test</h3>

                            <h3 class="modal-title pull-right">Points:70</h3>

                        </div>
                        <div class="modal-body">
                            <div class="med_scroll_table">

                                <table class="full_width home-table1 ">
                                    <tr>
                                        <td>Rolac Test</td>
                                        <td>20 min</td>
                                        <td>20pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Maxpro Test</td>
                                        <td>20 min</td>
                                        <td>20 pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Algin Test</td>
                                        <td>20 min</td>
                                        <td>20 pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Amcox Test</td>
                                        <td>20 min</td>
                                        <td>20 pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Becosules Test</td>
                                        <td>20 min</td>
                                        <td>20 pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                    <tr>
                                        <td>Bisoren Test</td>
                                        <td>20 min</td>
                                        <td>20 pts</td>
                                        <td><button type="button" class="btn btn-info"><a href="result-info.html">View Result</a></button></td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default go" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="copy_right col-md-12">
        <p class="text-center">&copy; 2016 ALL Rights Reserved by <br> Renata Ltd.</p>
    </div>

    <!-- ////////////// -->
</div> <!-- body_wrapper -->
</div><!-- right-col -->
</div>
</div> <!-- main container #full-width -->