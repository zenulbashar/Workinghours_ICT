
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Multi Range Calendar a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets3/css/style.css" />
    <!-- calendar css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets4/css/pignose.calendar.min.css" />
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body>
    <header>
        <h2 class="text-center;font-size=30px;" style="color:red;">Welcome!! <?php echo $this->session->userdata('employee_fname');?> Your Calendar</h2>
		<img style="float: right;margin-top: -105px;border-radius: 20%;width: 8%;margin-right: 13;" width="100px"src="<?php echo base_url('uploads/');?><?php echo $this->session->userdata('employee_image'); ?>">
    </header>
    <div id="wrapper">
        <div id="multiple">
            <div class="multi-select-calendar"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- copy right -->
 
    <!--//copyright-->
    <!-- js -->
    <script src="<?php echo base_url();?>assets4/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for calendar -->
    <script src="<?php echo base_url();?>assets4/js/pignose.calendar.full.min.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('#wrapper .version strong').text('v' + $.fn.pignoseCalendar.version);

            function onSelectHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You selected date ';

                if (date[0] !== null) {
                    text += date[0].format('DD-MM-YYYY');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                } else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('DD-MM-YYYY');
                }

                $box.text(text);
            }

            function onApplyHandler(date, context) {
                /**
                 * @date is an array which be included dates(clicked date at first index)
                 * @context is an object which stored calendar interal data.
                 * @context.calendar is a root element reference.
                 * @context.calendar is a calendar element reference.
                 * @context.storage.activeDates is all toggled data, If you use toggle type calendar.
                 * @context.storage.events is all events associated to this date
                 */

                var $element = context.element;
                var $calendar = context.calendar;
                var $box = $element.siblings('.box').show();
                var text = 'You applied date ';

                if (date[0] !== null) {
                    text += date[0].format('DD-MM-YYYY');
                }

                if (date[0] !== null && date[1] !== null) {
                    text += ' ~ ';
                } else if (date[0] === null && date[1] == null) {
                    text += 'nothing';
                }

                if (date[1] !== null) {
                    text += date[1].format('DD-MM-YYYY');
                }
                $box.text(text);
            }
            // Multiple picker type Calendar
            $('.multi-select-calendar').pignoseCalendar({
                multiple: true,
                select: onSelectHandler
            });

        });
        //]]>
    </script>
    <!-- //script for calendar -->
</body>

</html>