<div class="body_wrapper"> <!-- MAIN BODY PART -->
    <div class="pg10_wrapper container-fluid">
        <div class="add_pso">
            <h2>ADD PSO</h2>
        </div>

        <div class="col-md-12" align="center">
            <?php if(isset($pso_add)){?>
                <h3><?php echo $pso_add;?></h3>
            <?php }?>
        </div>
        <div class="col-md-12" align="center">
            <?php if($this->session->userdata('confirm_add_pso')=='Pso Insert Successful'){?>
                <h3><?php echo 'Pso Insert Successful';?></h3>
            <?php $this->session->unset_userdata('confirm_add_pso'); }?>
        </div>

        <div class=" scroll add_pso_form_wrapper col-xs-11 ">
            <div class="row">
                <form action="<?php echo base_url()?>pso/insert_pso" method="post" enctype="multipart/form-data">
                    <div class="col-xs-6 ">
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Profile.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6 add_pso_1">
                            <div class="form-group name">
                                <input type="text" class="form-control" id="name1" name="pso_name" placeholder="Name" required="required">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Sex.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <select class="form-control" name="pso_gender" id="name2" required="required">
                                    <option value="-1">Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Age.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <input type="date" class="form-control" name="pso_dob" id="name3" placeholder="Age" required="required">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Mail.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <input type="email" class="form-control" name="pso_email" id="name4" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Mobile.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <input type="text" class="form-control" name="pso_phone" id="name5"
                                       placeholder="Phone Number" required="required">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Id.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <input type="text" class="form-control" name="pso_renata_id" id="name6" placeholder="PSO ID">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Briefcase.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <input type="text" class="form-control" name="pso_designation" id="name7"
                                       placeholder="Designation">
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Location.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <div class="form-group">
                                    <select class="form-control" name="division_id"
                                            onchange="district(this.value)">
                                        <option value="-1">Area</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Chitagong</option>
                                        <option value="3">Barisal</option>
                                        <option value="4">Khulna</option>
                                        <option value="5">Sylhet</option>
                                        <option value="6">Rajshahi</option>
                                        <option value="7">Rangpur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Location.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <div class="form-group ">
                                    <select class="form-control district" name="district_id"  onchange="region(this.value)">
                                        <option value="-1">--Select District--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 add_pso_p">
                            <img class="add_pso_p_img" src="<?php echo base_url() ?>asset/images/Location.png"
                                 alt="profile_pic">
                        </div>
                        <div class="col-xs-6  add_pso_1">
                            <div class="form-group name">
                                <div class="form-group ">
                                    <select class="form-control region"  name="pso_region_id">
                                        <option value="-1">--Select Region--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 upload_pic">
                        <div class="form-group name">
                            <label class="myLabel">
                                <input type="file" name="pso_image" />
                                <div class="upload_pic_background_pic">
                                    <img class="upload_pic" src="<?php echo base_url() ?>asset/images/cloud.png"
                                         alt="upload profile pic">
                                    <p class="text-center upload_pic_P">Upload image here:</p>
                                </div>
                            </label>

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="index(pg-12).html">
                            <button type="submit" name="buttonSubmit" class="btn btn-primary btn-lg done">Done</button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="copy-right col-xs-12"><h4>©2016 All Rights Reserved by Renata Limited</h4></div>
        </div>
    </div> <!-- body_wrapper -->
</div><!-- right-col -->
</div>
<?php
//if($this->session->userdata('password')!="")
//{
//?>
<!--    <script>-->
<!--        alert(--><?php //echo $this->session->userdata('password');?>//);
//    </script>
<?php
//    $this->session->unset_userdata('password');
//}?>

