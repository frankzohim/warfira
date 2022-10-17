<?php
    $max_multicity_segments = 5;
    $multicity_segment_count = isset($multicity_segment_search_params) &&  isset($multicity_segment_search_params['from_loc']) ? count($multicity_segment_search_params['from_loc']) : 2;
    $multi_flight_datepicker = array();
?>

<script>
    $(document).ready(function () {
        for (var i = 1; i <= <?php echo $max_multicity_segments?>; i++ ){
            futureDatepickerMonthDisabled('m_flight_datepicker' + i);
        }
    });
</script>

<span class="hide">
	<input type="hidden" id="max_multicity_segments" value="<?=$max_multicity_segments?>">
	<input type="hidden" id="multicity_segment_count" value="<?=$multicity_segment_count?>">
</span>

<div id="multi_way_fieldset" class="col-md-8 nopad" style="display: none">

    <?php for($multi_k=1;$multi_k<=$max_multicity_segments; $multi_k++){
    if (intval($multi_k) > $multicity_segment_count) {
        $segment_visibility = 'display:none';
    } else {
        $segment_visibility = '';
    }
    ?>
    <div class="multi_city_container" id="multi_city_container_<?=$multi_k?>" style="<?=$segment_visibility?>">
        <div class="col-md-8 col-xs-9 nopad placerows mfulwdth">
            <div class="col-xs-6 padfive">
                <?php if($multi_k == 1) { ?>
                <div class="lablform">@lang('b2c/header.from')</div>
                <?php } ?>
                <div class="plcetogo deprtures sidebord">
                    <input type="text" autocomplete="off" name="from[]" class="m_depcity m_arr_c  normalinput auto-focus valid_class fromflight form-control b-r-0" id="m_from<?=$multi_k?>" placeholder="<?php echo "Type Departure City";?>" value="<?php echo @$multicity_segment_search_params['from_loc'][$multi_k-1]?>" required />
                    <input class="hide loc_id_holder" name="from_loc_id[]" type="hidden" value="<?=@$multicity_segment_search_params['from_loc_id'][$multi_k-1]?>" >
                </div>
            </div>
            <div class="col-xs-6 padfive">
                <?php if($multi_k == 1) { ?>
                <div class="lablform">@lang('b2c/header.to')</div>
                <?php } ?>
                <div class="plcetogo destinatios sidebord">
                    <input type="text" autocomplete="off" name="to[]"  class="m_arrcity m_arr_c normalinput auto-focus valid_class departflight form-control b-r-0" id="m_to<?=$multi_k?>" placeholder="<?php echo "Type Destination City";?>" value="<?php echo @$multicity_segment_search_params['to_loc'][$multi_k-1] ?>" required/>
                    <input class="hide loc_id_holder" name="to_loc_id[]" type="hidden" value="<?=@$multicity_segment_search_params['to_loc_id'][$multi_k-1]?>" >
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-3 nopad secndates mfulwdth">
            <div class="col-xs-12 padfive">
                <?php if($multi_k == 1) { ?>
                <div class="lablform">@lang('b2c/header.depart')</div>
                <?php } ?>
                <div class="plcetogo datemark sidebord">
                    <input type="text" name="depature[]" class="m_depature_date normalinput auto-focus hand-cursor form-control b-r-0 disable-date-auto-update" id="m_flight_datepicker<?=$multi_k?>" placeholder="<?php echo "Select Date";?>" value="<?php echo @$multicity_segment_search_params['depature_loc'][$multi_k-1] ?>" readonly required/>
                </div>
            </div>
            <?php if($multi_k > 2) { ?>
            <button class="city_close_btn remove_city"> <span class="fa fa-times"></span></button>
            <?php } ?>

        </div>

    </div>
    <?php }?>
</div>
