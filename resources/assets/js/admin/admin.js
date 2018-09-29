// import $ from 'jquery';

window.jQuery = window.$ = require('jquery') 

import 'fullcalendar' ;

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