<div id="battery-header" class="hide">	
    <h2 data-i18n="power.battery"></h2>
</div>

<div id="battery-msg" data-i18n="listing.loading" class="col-lg-12 text-center"></div>

<div id="battery-view" class="row hide">
    <div class="col-md-5">
        <div id="battery-battery" class="row hide">
            <div class="col-lg-12">
            <h2 data-i18n="power.battery"></h2>
                <table class="table table-striped">
                    <tr>
                        <th data-i18n="power.manufacture_date"></th>
                        <td id="battery-manufacture_date"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.design_capacity"></th>
                        <td id="battery-design_capacity"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.max_capacity"></th>
                        <td id="battery-max_capacity"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.max_percent"></th>
                        <td id="battery-max_percent"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.current_capacity"></th>
                        <td id="battery-current_capacity"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.current_percent"></th>
                        <td id="battery-current_percent"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.cycle_count"></th>
                        <td id="battery-cycle_count"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.designcyclecount"></th>
                        <td id="battery-designcyclecount"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.condition"></th>
                        <td id="battery-condition"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.temperature"></th>
                        <td id="battery-temperature"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.externalconnected"></th>
                        <td id="battery-externalconnected"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.ischarging"></th>
                        <td id="battery-ischarging"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.fullycharged"></th>
                        <td id="battery-fullycharged"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.avgtimetofull"></th>
                        <td id="battery-avgtimetofull"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.avgtimetoempty"></th>
                        <td id="battery-avgtimetoempty"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.timeremaining"></th>
                        <td id="battery-timeremaining"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.instanttimetoempty"></th>
                        <td id="battery-instanttimetoempty"></td>
                    </tr>
                    <tr>
                        <th id="battery-watt-label"></th>
                        <td id="battery-watts"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.amperage"></th>
                        <td id="battery-amperage"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.voltage"></th>
                        <td id="battery-voltage"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.cellvoltage"></th>
                        <td id="battery-cellvoltage"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.permanentfailurestatus"></th>
                        <td id="battery-permanentfailurestatus"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.manufacturer"></th>
                        <td id="battery-manufacturer"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.batteryserialnumber"></th>
                        <td id="battery-batteryserialnumber"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.packreserve"></th>
                        <td id="battery-packreserve"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="battery-adapter" class="row hide">
            <div class="col-lg-12">
                <h2 data-i18n="power.adapter"></h2>
                <table class="table table-striped">
                    <tr>
                        <th data-i18n="power.adapter_wattage"></th>
                        <td id="battery-wattage"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.adapter_id"></th>
                        <td id="battery-adapter_id"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.family_code"></th>
                        <td id="battery-family_code"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.adapter_serial_number"></th>
                        <td id="battery-adapter_serial_number"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="battery-ups" class="row hide">
            <div class="col-lg-12">
                <h2 data-i18n="power.ups_status"></h2>
                <table class="table table-striped">
                    <tr>
                        <th data-i18n="power.ups_name"></th>
                        <td id="battery-ups_name"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.ups_percent"></th>
                        <td id="battery-ups_percent"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.ups_charging_status"></th>
                        <td id="battery-ups_charging_status"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.haltlevel"></th>
                        <td id="battery-haltlevel"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.haltafter"></th>
                        <td id="battery-haltafter"></td>
                    </tr>
                    <tr>
                        <th data-i18n="power.haltremain"></th>
                        <td id="battery-haltremain"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
$(document).on('appReady', function(e, lang) {

    // Get power data
    $.getJSON( appUrl + '/module/power/get_data/' + serialNumber, function( data ) {
        if( data.condition == '' && data.ups_name == ''){
            $('#battery-msg').text(i18n.t('no_data'));
            $('#battery-header').removeClass('hide');

            // Update the tab battery percent
            $('#battery-cnt').text("");

        } else {

            // Hide
            $('#battery-msg').text('');
            $('#battery-view').removeClass('hide');

            // Unhide battery if present
            if (data.condition != "" && (data.condition)) {
                $('#battery-battery').removeClass('hide'); // Unhide battery table

                // Update the tab battery percent
                if (data.current_percent){
                    $('#battery-cnt').text(data.current_percent+"%");
                } else {
                    $('#battery-cnt').text("");
                }

                // Format timeremaining
                if(data.timeremaining == null || data.manufacture_date == '1980-00-00' || data.fullycharged == 'Yes') {
                    $('#battery-timeremaining').text('');
                } else {
                    $('#battery-timeremaining').html($('<span>').attr('title',data.timeremaining+' '+i18n.t('power.minutes')).text(moment.duration(+data.timeremaining, "minutes").humanize()));
                }

                // Format instanttimetoempty
                if(data.instanttimetoempty && data.instanttimetoempty != -1) {
                    $('#battery-instanttimetoempty').html($('<span>').attr('title',data.instanttimetoempty+' '+i18n.t('power.minutes')).text(moment.duration(+data.instanttimetoempty, "minutes").humanize()));
                } else {
                    $('#battery-instanttimetoempty').text('');
                }

                // Format avgtimetofull
                if(data.avgtimetofull && data.avgtimetofull != -1) {
                    $('#battery-avgtimetofull').html($('<span>').attr('title',data.avgtimetofull+' '+i18n.t('power.minutes')).text(moment.duration(+data.avgtimetofull, "minutes").humanize()));
                } else {
                    $('#battery-avgtimetofull').text('');
                }

                // Format avgtimetoempty
                if(data.avgtimetoempty && data.avgtimetoempty != -1) {
                    $('#battery-avgtimetoempty').html($('<span>').attr('title',data.avgtimetoempty+' '+i18n.t('power.minutes')).text(moment.duration(+data.avgtimetoempty, "minutes").humanize()));
                } else {
                    $('#battery-avgtimetoempty').text('');
                }

                // Format ischarging
                if(data.ischarging === "Yes" || data.ischarging === "TRUE") {
                    $('#battery-ischarging').text(i18n.t('yes'));
                } else if(data.ischarging === "No" || data.ischarging === "FALSE") {
                    $('#battery-ischarging').text(i18n.t('no'));
                } else {
                    $('#battery-ischarging').text("");
                }

                // Format fullycharged
                if(data.fullycharged === "Yes" || data.fullycharged === "TRUE") {
                    $('#battery-fullycharged').text(i18n.t('yes'));
                } else if(data.fullycharged === "No" || data.fullycharged === "FALSE") {
                    $('#battery-fullycharged').text(i18n.t('no'));
                } else {
                    $('#battery-fullycharged').text("");
                }

                // Format permanentfailurestatus
                if (data.permanentfailurestatus != null && (data.permanentfailurestatus)) {
                    $('#battery-permanentfailurestatus').text("");
                } else if(data.permanentfailurestatus == "1") {
                    $('#battery-permanentfailurestatus').addClass('danger').text(i18n.t('yes'));
                } else if(data.permanentfailurestatus == "0") {
                    $('#battery-permanentfailurestatus').text(i18n.t('no'));
                } else {
                    $('#battery-permanentfailurestatus').text('');
                }

                // Format externalconnected
                if(data.externalconnected === "Yes" || data.externalconnected === "TRUE") {
                    $('#battery-externalconnected').text(i18n.t('yes'));
                } else if(data.externalconnected === "No" || data.externalconnected === "FALSE") {
                    $('#battery-externalconnected').text(i18n.t('no'));
                } else {
                    $('#battery-externalconnected').text("");
                }

                // Format batteryserialnumber
                if (data.batteryserialnumber) {
                    $('#battery-batteryserialnumber').text(data.batteryserialnumber);
                } else {
                    $('#battery-batteryserialnumber').text('');
                }

                // Format packreserve
                if (data.packreserve) {
                    $('#battery-packreserve').text(data.packreserve+" mAh");
                } else {
                    $('#battery-packreserve').text('');
                }

                // Format manufacturer
                if (data.manufacturer) {
                    $('#battery-manufacturer').text(data.manufacturer);
                } else {
                    $('#battery-manufacturer').text('');
                }

                // Format cell voltage
                if (data.cellvoltage != "." && (data.cellvoltage)) {
                    $('#battery-cellvoltage').text(data.cellvoltage);
                } else {
                    $('#battery-cellvoltage').text('');
                }

                // Format voltage
                if (data.voltage) {
                    $('#battery-voltage').text(data.voltage+" "+i18n.t('power.volts'));
                } else {
                    $('#battery-voltage').text('');
                }

                // Format amperage
                if (data.amperage != null && (data.amperage)) {
                    $('#battery-amperage').text(data.amperage+" "+i18n.t('power.amps'));
                } else {
                    $('#battery-amperage').text('');
                }

                // Calculate charge/discharge watts
                if ((data.amperage) && (data.voltage)) {
                    $('#battery-watts').text((data.amperage*data.voltage).toFixed(2)+" "+i18n.t('power.watts'));
                    if (data.amperage >= 0) {
                        $('#battery-watt-label').text(i18n.t('power.charging_watt'));
                    } else {
                        $('#battery-watt-label').text(i18n.t('power.discharging_watt'));
                    }
                } else if (data.amperage == "0" || data.amperage == 0 ) {
                    $('#battery-watts').text('');
                    $('#battery-watt-label').text(i18n.t('power.watts'));
                } else {
                    $('#battery-watts').text('');
                    $('#battery-watts-label').text(i18n.t('power.watts'));
                }

                // Format cycle count
                if (data.cycle_count) {
                    $('#battery-cycle_count').text(data.cycle_count);
                } else {
                    $('#battery-cycle_count').text('');
                }

                // Format designcyclecount
                if (data.designcyclecount) {
                    $('#battery-designcyclecount').text(data.designcyclecount);
                } else {
                    $('#battery-designcyclecount').text('');
                }

                // Format designed capacity
                if (data.design_capacity) {
                    $('#battery-design_capacity').text(data.design_capacity+' mAh');
                } else {
                    $('#battery-design_capacity').text('');
                }

                // Format current capacity
                if (data.current_capacity) {
                    $('#battery-current_capacity').text(data.current_capacity+' mAh');
                } else {
                    $('#battery-current_capacity').text('');
                }

                // Format max capacity
                if (data.max_capacity) {
                    $('#battery-max_capacity').text(data.max_capacity+' mAh');
                } else {
                    $('#battery-max_capacity').text('');
                }

                // Format Manufacture date
                if(data.manufacture_date === '1980-00-00'){
                    $('#battery-manufacture_date').addClass('danger').text(i18n.t('power.widget.now'));
                } else {
                    if(data.manufacture_date){
                        a = moment(data.manufacture_date)
                        b = a.diff(moment(), 'years', true)
                        if(a.diff(moment(), 'years', true) < -4){
                            $('#battery-manufacture_date').addClass('danger')
                        }
                        $('#battery-manufacture_date').text(data.manufacture_date);
                    }
                }

                // Format battery condition
                data.condition = data.condition == 'Good' ? '<span class="label label-success">'+i18n.t('power.widget.normal')+'</span>' :
                data.condition = data.condition == 'Normal' ? '<span class="label label-success">'+i18n.t('power.widget.normal')+'</span>' :
                data.condition = data.condition == 'Replace Soon' ? '<span class="label label-warning">'+i18n.t('power.widget.soon')+'</span>' :
                data.condition = data.condition == 'ReplaceSoon' ? '<span class="label label-warning">'+i18n.t('power.widget.soon')+'</span>' :
                data.condition = data.condition == 'Fair' ? '<span class="label label-warning">'+i18n.t('power.widget.soon')+'</span>' :
                data.condition = data.condition == 'Service Battery' ? '<span class="label label-warning">'+i18n.t('power.widget.service')+'</span>' :
                data.condition = data.condition == 'ServiceBattery' ? '<span class="label label-warning">'+i18n.t('power.widget.service')+'</span>' :
                data.condition = data.condition == 'Check Battery' ? '<span class="label label-warning">'+i18n.t('power.widget.check')+'</span>' :
                data.condition = data.condition == 'CheckBattery' ? '<span class="label label-warning">'+i18n.t('power.widget.check')+'</span>' :
                data.condition = data.condition == 'Replace Now' ? '<span class="label label-danger">'+i18n.t('power.widget.now')+'</span>' :
                data.condition = data.condition == 'ReplaceNow' ? '<span class="label label-danger">'+i18n.t('power.widget.now')+'</span>' :
                data.condition = data.condition == 'Poor' ? '<span class="label label-danger">'+i18n.t('power.widget.now')+'</span>' :
                data.condition = data.condition == '' ? '<span class="label label-danger">'+i18n.t('power.widget.nobattery')+'</span>' :
                (data.condition === 'No Battery' ? '<span class="label label-danger">'+i18n.t('power.widget.nobattery')+'</span>' : '')
                $('#battery-condition').html(data.condition)

                // Format battery health
                if (data.max_percent) {
                    var cls = data.max_percent > 89 ? 'success' : (data.max_percent > 79 ? 'warning' : 'danger');
                    $('#battery-max_percent').html('<div class="progress"><div class="progress-bar progress-bar-'+cls+'" style="width: '+data.max_percent+'%;">'+data.max_percent+'%</div></div>');
                } else {
                    $('#battery-max_percent').text('');
                }

                // Format battery charge
                if (data.current_percent) {
                    var cls = data.current_percent > 89 ? 'success' : (data.current_percent > 79 ? 'warning' : 'danger');
                    $('#battery-current_percent').html('<div class="progress"><div class="progress-bar progress-bar-'+cls+'" style="width: '+data.current_percent+'%;">'+data.current_percent+'%</div></div>');
                } else {
                    $('#battery-current_percent').text('');
                }

                // Format temperature
                if ((data.temperature) && data.temperature !== 0) {
                    if (data.temp_format === "F"){
                        var outtemp_c = (data.temperature / 100)+"°C";
                        var outtemp_f = (((data.temperature * 9/5) + 3200) / 100).toFixed(2)+"°F";
                        $('#battery-temperature').html($('<span>').attr('title',outtemp_c).text(outtemp_f));
                    } else {
                        var outtemp_c = (data.temperature / 100)+"°C";
                        var outtemp_f = (((data.temperature * 9/5) + 3200) / 100).toFixed(2)+"°F";
                        $('#battery-temperature').html($('<span>').attr('title',outtemp_f).text(outtemp_c));

                    }
                } else {
                    $('#battery-temperature').text("");
                }
            }

            // Unhide power adapter if present
            if (data.wattage != "" && (data.wattage)) {
                $('#battery-adapter').removeClass('hide'); // Unhide power adapter table
                $('#battery-adapter_id').text(data.adapter_id);
                $('#battery-family_code').text(data.family_code);
                $('#battery-adapter_serial_number').text(data.adapter_serial_number);

                // Format wattage
                if (data.wattage) {
                    $('#battery-wattage').text(data.wattage+" "+i18n.t('power.watts'));
                } else {
                    $('#battery-wattage').text('');
                }
            }

            // Unhide and fill out UPS if UPS is present
            if (data.ups_percent != "" && (data.ups_percent)) {
                $('#battery-ups').removeClass('hide'); // Unhide UPS table
                $('#battery-ups_percent').text(data.ups_percent+'%');
                $('#battery-haltlevel').text(data.haltlevel+'%');
                $('#battery-ups_name').text(data.ups_name);

                // Update the tab battery percent
                $('#battery-cnt').text(data.ups_percent+"%");

                if(data.ups_charging_status === "true " || data.ups_charging_status === "true") {
                    $('#battery-ups_charging_status').text(i18n.t('power.charging'));
                } else if(data.ups_charging_status === "false") {
                    $('#battery-ups_charging_status').text(i18n.t('power.discharging'));
                } else{
                    $('#battery-ups_charging_status').text(data.ups_charging_status);
                } 

                if(data.haltafter == null) {
                    $('#battery-haltafter').text('');
                } else if(data.haltafter == "1") {
                    $('#battery-haltafter').text(data.haltafter+' '+i18n.t('power.minute'));
                } else{
                    $('#battery-haltafter').text(data.haltafter+' '+i18n.t('power.minutes'));
                }

                if(data.haltremain == null) {
                    $('#battery-haltremain').text('');
                } else if(data.haltremain == "1") {
                    $('#battery-haltremain').text(data.haltremain+' '+i18n.t('power.minute'));
                } else{
                    $('#battery-haltremain').text(data.haltremain+' '+i18n.t('power.minutes'));
                }

            } else {
                $('#battery-ups_percent').text('');  
                $('#battery-haltlevel').text('');
                $('#battery-haltafter').text('');
                $('#battery-haltremain').text('');
                $('#battery-ups_charging_status').text('');
                $('#battery-ups_name').text("");
            }
        }
    });
});

</script>
