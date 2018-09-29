import $ from 'jquery';
import 'fullcalendar' ;
import 'bootstrap-datepicker';

$('#calendar').fullCalendar({
    defaultView: 'listWeek',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    eventSources: [
        {
          url: '/ajax/atendente/agendamentos',
          type: 'GET',

          error: function() {
            alert('Erro ao obter agendamentos!');
          },

        }
      ]
});

//Date picker
$('#datepicker').datepicker({
    autoclose: true,
    daysOfWeekDisabled: [0,6],
    format: "dd/mm/yyyy",
    language:"pt-BR",
    todayHighlight:true,
});