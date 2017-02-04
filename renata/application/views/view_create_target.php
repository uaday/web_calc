<div class="body_wrapper"> <!-- MAIN BODY PART -->
    <div class="container_wrapper reneta_shop">
        <div class="form_content">
            <div align="center">
                <?php if ($this->session->userdata('create_shop') == 'Create Incentive Successful!') { ?>
                    <h3><?php echo 'Create Incentive Successful!'; ?></h3>
                    <?php $this->session->unset_userdata('create_shop');
                } ?>
            </div>
            <h3 class="header_wrapper center-block text-center">Reneta Shop</h3>

            <form action="<?php echo base_url() ?>tar_shop/create_incentive" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <input style="" name="title" id="offer_title" type="text" class="form-control"
                           placeholder="Offer title" required="required">
                </div>
                <div class="form-group">

                                <textarea class="form-control" name="description" rows="5" id="description"
                                          placeholder="Description"></textarea>

                </div>
                <div class="form-group">
                    <input type="date" name="validation" class="form-control" id="offer_validity"
                           placeholder="Offer Validity">
                </div>
                <div class="form-group">
                    <input type="number" name="point" class="form-control" id="point_needed"
                           placeholder="Point needed" required="required">
                </div>

                <div class="form-group">
                    <input type="number" name="quantity" class="form-control" id="quantity"
                           placeholder="Quantity">
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 reneta_shop_left">
                        <label class="myLabel">
                            <input type="file" name="image" required="required"/>
                            <img class="img-responsive center-block"
                                 src="<?php echo base_url() ?>asset/images/cloud.png" alt="reneta drag and drop icon">
                            <p class="text-center" style="padding-top: 10px;">Drag &amp; drop<br> or<br> Upload Image
                            </p>

                        </label>
                    </div>

                    <div class="col-sm-6 reneta_shop_right">
                        <div class="form-group col-md-12">
                            <div class="checkbox universal" id="universal1">
                                <label>
                                    <img class="universal_img" id="universal1_img"
                                         src="<?php echo base_url() ?>asset/images/Snowfall.png" alt="logo"> <span
                                        class="universal_p1">Universal</span>
                                </label>
                                <input type="checkbox" name="global" value="global" id="checkbox1" onchange="hidee()">
                            </div>
                        </div>
                        <div class="form-group pso_group col-md-12" id="hh1">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                    onclick="showCheckboxes()">
                                <span class="pso_group"><img class="pso_group_img"
                                                             src="<?php echo base_url() ?>asset/images/PSO.png"
                                                             alt="PSO Group">PSO Group</span>
                                <span class="caret"></span>
                            </button>
                            <div id="checkboxes" class="blue_ones" style="overflow: scroll; height: 150px;width: auto">
                                <?php foreach ($regions as $region){ ?>
                                <label>
                                    <input type="checkbox" name="region[]" id="one"
                                           value="<?php echo $region['region_id'] ?>"/><?php echo $region['region_name'] ?>
                                </label>
                                <label>
                                    <?php } ?>
                            </div>
                        </div>

                        <div class="form-group pso col-md-12" id="hh2">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                    onclick="showCheckboxes2()">
                                <span class="pso_group"><img class="pso_group_img " id="pso_dropdown"
                                                             src="<?php echo base_url() ?>asset/images/PSO.png"
                                                             alt="PSO Group">PSO </span>
                                <span class="caret" id="pso_dropdown_p"></span>
                            </button>
                            <div id="checkboxes2" class="blue_ones" style="overflow: scroll; height: 150px;width: auto">
                                <?php foreach ($psos as $pso){?>
                                <label>
                                    <input type="checkbox" name="pso[]" id="one"
                                           value="<?php echo $pso['pso_id']?>"/><?php echo $pso['renata_id'].' -- '.$pso['pso_name']?>
                                </label>
                                <label>
                                    <?php } ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary submit_btn1 col-xs-5 col-xs-offset-6 ">Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="copy_right col-md-12">
        <br>
        <p class="text-center">&copy; 2016 ALL Rights Reserved by <br> Renata Ltd.</p>
    </div>
</div> <!-- body_wrapper -->
</div><!-- right-col -->
</div> <!-- main container #full-width -->