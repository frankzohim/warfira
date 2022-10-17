<?php //Images Url
$template_images = asset('images');
if($flight_search_params['trip_type'] == 'multicity') {

    $flight_search_params['depature_loc'] = $flight_search_params['depature'];
    $flight_search_params['from_loc'] = $flight_search_params['from'];
    $flight_search_params['to_loc'] = $flight_search_params['to'];

    $flight_search_params['depature'] = $flight_search_params['depature'][0];
    $flight_search_params['from'] = $flight_search_params['from'][0];
    $flight_search_params['to'] = end($flight_search_params['to']);
}

?>
<style>
    .topssec::after{display:none;}
</style>
<div class="modfictions">
    <div class="modinew">
        <div class="container">
            <div class="contentsdw">
                <div class="smldescrptn">
                    <div class="col-sm-7 col-xs-10 nopad">
                        <div class="col-xs-6 boxpad none_boil_full">
                            <h4 class="contryname"><?=ucfirst($flight_search_params['trip_type'])?> <?="Trip"?></h4>
                            <h3 class="placenameflt"><?php echo $flight_search_params['from'] ?> @lang('b2c/header.to') <?php echo $flight_search_params['to'] ?></h3>
                        </div>
                        <?php
                        if($flight_search_params['trip_type']=='oneway') {
                            $disable_return_date_label = ' style="opacity:0.4" ';
                        } else {
                            $disable_return_date_label = '';
                        }
                        ?>
                        <div class="col-xs-3 boxpad none_boil">
                            <div class="boxlabl"><span class="faldate fa fa-calendar-o"></span><?="Departure"?></div>
                            <div class="datein">
                                <span class="calinn"><?=date('D, d M', strtotime($flight_search_params['depature']))?></span>
                            </div>
                        </div>

                        <div class="col-xs-3 boxpad none_boil" <?=$disable_return_date_label?>>
                            <?php if($flight_search_params['trip_type']=='circle') { ?>
                            <div class="boxlabl"><span class="faldate fa fa-calendar-o"></span><?="Return"?></div>
                            <?php } ?>
                            <div class="datein">
								<span class="calinn">
								<?php
                                    if($flight_search_params['trip_type']=='circle') {
                                        if(isset($flight_search_params['return']) == true) {
                                            $temp_return_date = $flight_search_params['return'];
                                        } else {
                                            $temp_return_date = $flight_search_params['depature'];
                                        }
                                        echo date('D, d M', strtotime($temp_return_date));
                                    }
                                    ?>
								</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-2 nopad">
                        <div class="col-xs-3 boxpad none_mody">
                            <div class="boxlabl textcentr"><?="Adult";?></div>
                            <div class="countlbl"><?php echo $flight_search_params['adult']; ?></div>
                        </div>
                        <div class="col-xs-3 boxpad none_mody">
                            <div class="boxlabl textcentr"><?="Child"?></div>
                            <div class="countlbl"><?php echo $flight_search_params['child']; ?></div>
                        </div>
                        <div class="col-xs-3 boxpad none_mody">
                            <div class="boxlabl textcentr"><?="Infant";?></div>
                            <div class="countlbl"><?php echo $flight_search_params['infant']; ?></div>
                        </div>
                        <div class="col-xs-3 boxpad pull-right">
                            <a class="modifysrch" data-toggle="collapse" data-target="#modify"><span class="mdyfydsktp"><?php echo "Modify Search";?></span>
                                <i class="fa fa-angle-down mobresdv" aria-hidden="true"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="splmodify">
        <div class="container">
            <div id="modify" class="collapse araeinner">
                <div class="insplarea">
                    @include('flight.flight_search', $flight_search_params)
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$close_txt = "Close";
$modify_search = "Modify Search";
?>
<script type="text/javascript">
    var closing = "<?php echo "$close_txt" ?>";
    var modify = "<?php echo "$modify_search" ?>";
    $(document).ready(function(){
        $('.modifysrch').click(function(){
            // $(this).stop( true, true ).toggleClass('up');
            // $('.search-result').stop( true, true ).toggleClass('flightresltpage');
            // $('.modfictions').stop( true, true ).toggleClass('fixd');

            if ($('.mdyfydsktp').text() == closing) {
                $('.mdyfydsktp').text(modify);
            } else {
                $('.mdyfydsktp').text(closing);
            }

        });

    });
</script>
