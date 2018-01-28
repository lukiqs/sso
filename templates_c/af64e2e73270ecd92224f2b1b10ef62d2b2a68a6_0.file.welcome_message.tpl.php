<?php
/* Smarty version 3.1.30, created on 2018-01-28 17:31:32
  from "C:\xampp\htdocs\SSO\sso\application\views\welcome_message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6dfae40ca2c6_58955742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af64e2e73270ecd92224f2b1b10ef62d2b2a68a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SSO\\sso\\application\\views\\welcome_message.tpl',
      1 => 1517157090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6dfae40ca2c6_58955742 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css' rel='stylesheet' />
<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.print.css' rel='stylesheet' media='print' />
<?php echo '<script'; ?>
 src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: new Date(),
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      //defaultView: 'basicWeek',
      events: [
        {
          title: 'All Day Event',
          start: '2017-12-01',
        },
        {
          title: 'Long Event',
          start: '2017-12-07',
          end: '2017-12-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-12-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2017-12-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2017-12-11',
          end: '2017-12-13'
        },
        {
          title: 'Meeting',
          start: '2017-12-12T10:30:00',
          end: '2017-12-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2017-12-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2017-12-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2017-12-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2017-12-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2017-12-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2017-12-28'
        }
      ]
    });

  });

<?php echo '</script'; ?>
>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 100%;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
<?php }
}
