import $ from 'jquery';
import 'fullcalendar' ;
import 'bootstrap-datepicker';

$('#calendar').fullCalendar({
    defaultView: 'listWeek',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,listMonth,listWeek,listDay'
    },
    
    buttonText: {
      month: 'Mês',
      listMonth: 'Mês (lista)',
      listWeek: 'Semana',
      listDay: 'Dia'
    },

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

$('#calendar-medico').fullCalendar({
    defaultView: 'listDay',
    locale: 'pt-br',
    timeFormat: 'HH:mm',

    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,listMonth,listWeek,listDay'
    },
    
    buttonText: {
      month: 'Mês',
      listMonth: 'Mês (lista)',
      listWeek: 'Semana',
      listDay: 'Dia'
    },

    eventSources: [
      {
        url: '/ajax/medico/agendamentos',
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