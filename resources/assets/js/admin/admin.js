import $ from 'jquery';
import 'fullcalendar' ;
import 'bootstrap-datepicker';

$('#calendar').fullCalendar({
    // put your options and callbacks here
});

//Date picker
$('#datepicker').datepicker({
    autoclose: true,
    daysOfWeekDisabled: [0,6],
    format: "dd/mm/yyyy",
    language:"pt-BR",
    todayHighlight:true,
});